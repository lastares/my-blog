<?php

use function foo\func;
use HyperDown\Parser;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Redis;

if (!function_exists('unlinkImage')) {
    function unlinkImage($imagePath): void
    {
        unlink(config('blog._picture_upload_path') . $imagePath);
    }
}
if (!function_exists('p')) {
    // 传递数据以易于阅读的样式格式化后输出
    function p($data, $toArray = true)
    {
        // 定义样式
        $str = '<pre style="display: block;padding: 9.5px;margin: 44px 0 0 0;font-size: 13px;line-height: 1.42857;color: #333;word-break: break-all;word-wrap: break-word;background-color: #F5F5F5;border: 1px solid #CCC;border-radius: 4px;">';
        // 如果是 boolean 或者 null 直接显示文字；否则 print
        if (is_bool($data)) {
            $show_data = $data ? 'true' : 'false';
        } elseif (is_null($data)) {
            // 如果是null 直接显示null
            $show_data = 'null';
        } elseif (is_object($data) && in_array(get_parent_class($data), ['Illuminate\Support\Collection', 'App\Models\Base']) && $toArray) {
            // 把一些集合转成数组形式来查看
            $data_array = $data->toArray();
            $show_data = '这是被转成数组的Collection:<br>' . print_r($data_array, true);
        } elseif (is_object($data) && in_array(get_class($data), ['Maatwebsite\Excel\Readers\LaravelExcelReader']) && $toArray) {
            // 把一些集合转成数组形式来查看
            $data_array = $data->toArray();
            $show_data = '这是被转成数组的Collection:<br>' . print_r($data_array, true);
        } elseif (is_object($data) && in_array(get_class($data), ['Illuminate\Database\Eloquent\Builder'])) {
            // 直接调用dd 查看
            dd($data);
        } else {
            $show_data = print_r($data, true);
        }
        $str .= $show_data;
        $str .= '</pre>';
        echo $str;
    }
}

if (!function_exists('pd')) {
    // 传递数据以易于阅读的样式格式化后输出并die掉
    function pd($data, $toArray = true)
    {
        p($data, $toArray);
        die;
    }

}

if (!function_exists('ajax_return')) {
    /**
     * ajax返回数据
     *
     * @param string $data 需要返回的数据
     * @param int $status_code
     * @return \Illuminate\Http\JsonResponse
     */
    function ajax_return($status_code = 200, $data = '')
    {
        //如果如果是错误 返回错误信息
        if ($status_code != 200) {
            //增加status_code
            $data = ['status_code' => $status_code, 'message' => $data,];
            return response()->json($data, $status_code);
        }
        //如果是对象 先转成数组
        if (is_object($data)) {
            $data = $data->toArray();
        }
        /**
         * 将数组递归转字符串
         * @param  array $arr 需要转的数组
         * @return array       转换后的数组
         */
        function to_string($arr)
        {
            // app 禁止使用和为了统一字段做的判断
            $reserved_words = [];
            foreach ($arr as $k => $v) {
                //如果是对象先转数组
                if (is_object($v)) {
                    $v = $v->toArray();
                }
                //如果是数组；则递归转字符串
                if (is_array($v)) {
                    $arr[$k] = to_string($v);
                } else {
                    //判断是否有移动端禁止使用的字段
                    in_array($k, $reserved_words, true) && die('不允许使用【' . $k . '】这个键名 —— 此提示是helper.php 中的ajaxReturn函数返回的');
                    //转成字符串类型
                    $arr[$k] = strval($v);
                }
            }
            return $arr;
        }

        //判断是否有返回的数据
        if (is_array($data)) {
            //先把所有字段都转成字符串类型
            $data = to_string($data);
        }
        return response()->json($data, $status_code);
    }
}

if (!function_exists('send_email')) {
    /**
     * 发送邮件函数
     *
     * @param $email            收件人邮箱  如果群发 则传入数组
     * @param $name             收件人名称
     * @param $subject          标题
     * @param array $data 邮件模板中用的变量 示例：['name'=>'帅白','phone'=>'110']
     * @param string $template 邮件模板
     * @return array            发送状态
     */
    function send_email($email, $name, $subject, $data = [], $template = 'emails.test')
    {
        Mail::send($template, $data, function ($message) use ($email, $name, $subject) {
            //如果是数组；则群发邮件
            if (is_array($email)) {
                foreach ($email as $k => $v) {
                    $message->to($v, $name)->subject($subject);
                }
            } else {
                $message->to($email, $name)->subject($subject);
            }
        });
        if (count(Mail::failures()) > 0) {
            $data = ['status_code' => 500, 'message' => '邮件发送失败'];
        } else {
            $data = ['status_code' => 200, 'message' => '邮件发送成功'];
        }
        return $data;
    }
}

if (!function_exists('upload')) {
    /**
     * 上传文件函数
     *
     * @param $file             表单的name名
     * @param string $path 上传的路径
     * @param bool $childPath 是否根据日期生成子目录
     * @return array            上传的状态
     */
    function upload($file, $path = 'upload', $childPath = true)
    {
        //判断请求中是否包含name=file的上传文件
        if (!request()->hasFile($file)) {
            $data = ['status_code' => 500, 'message' => '上传文件为空'];
            return $data;
        }
        $file = request()->file($file);
        //判断文件上传过程中是否出错
        if (!$file->isValid()) {
            $data = ['status_code' => 500, 'message' => '文件上传出错'];
            return $data;
        }
        //兼容性的处理路径的问题
        if ($childPath == true) {
            $path = './' . trim($path, './') . '/' . date('Ymd') . '/';
        } else {
            $path = './' . trim($path, './') . '/';
        }
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }
        //获取上传的文件名
        $oldName = $file->getClientOriginalName();
        //组合新的文件名
        $newName = uniqid() . '.' . $file->getClientOriginalExtension();
        //上传失败
        if (!$file->move($path, $newName)) {
            $data = ['status_code' => 500, 'message' => '保存文件失败'];
            return $data;
        }
        //上传成功
        $data = ['status_code' => 200, 'message' => '上传成功', 'data' => ['old_name' => $oldName, 'new_name' => $newName, 'path' => trim($path, '.')]];
        return $data;
    }
}

if (!function_exists('get_uid')) {
    /**
     * 返回登录的用户id
     *
     * @return mixed 用户id
     */
    function get_uid()
    {
        return Auth::id();
    }
}

if (!function_exists('save_to_file')) {
    /**
     * 将数组已json格式写入文件
     * @param  string $fileName 文件名
     * @param  array $data 数组
     */
    function save_to_file($fileName = 'test', $data = array())
    {
        $path = storage_path('tmp' . DIRECTORY_SEPARATOR);
        is_dir($path) || mkdir($path);
        $fileName = str_replace('.php', '', $fileName);
        $fileName = $path . $fileName . '_' . date('Y-m-d_H-i-s', time()) . '.php';
        file_put_contents($fileName, json_encode($data));
    }
}

if (!function_exists('re_substr')) {
    /**
     * 字符串截取，支持中文和其他编码
     *
     * @param string $str 需要转换的字符串
     * @param integer $start 开始位置
     * @param string $length 截取长度
     * @param boolean $suffix 截断显示字符
     * @param string $charset 编码格式
     * @return string
     */
    function re_substr($str, $start = 0, $length, $suffix = true, $charset = "utf-8")
    {
        $slice = mb_substr($str, $start, $length, $charset);
        $omit = mb_strlen($str) >= $length ? '...' : '';
        return $suffix ? $slice . $omit : $slice;
    }
}

if (!function_exists('Add_text_water')) {
    /**
     * 给图片添加文字水印
     *
     * @param $file
     * @param $text
     * @param string $color
     * @return mixed
     */
    function Add_text_water($file, $text, $color = '#0B94C1')
    {
        $image = Image::make($file);
        $image->text($text, $image->width() - 20, $image->height() - 30, function ($font) use ($color) {
            $font->file(public_path('fonts/msyh.ttf'));
            $font->size(15);
            $font->color($color);
            $font->align('right');
            $font->valign('bottom');
        });
        $image->save($file);
        return $image;
    }
}

if (!function_exists('word_time')) {
    /**
     * 把日期或者时间戳转为距离现在的时间
     *
     * @param $time
     * @return bool|string
     */
    function word_time($time)
    {
        // 如果是日期格式的时间;则先转为时间戳
        if (!is_integer($time)) {
            $time = strtotime($time);
        }
        $int = time() - $time;
        if ($int <= 2) {
            $str = sprintf('刚刚', $int);
        } elseif ($int < 60) {
            $str = sprintf('%d秒前', $int);
        } elseif ($int < 3600) {
            $str = sprintf('%d分钟前', floor($int / 60));
        } elseif ($int < 86400) {
            $str = sprintf('%d小时前', floor($int / 3600));
        } elseif ($int < 1728000) {
            $str = sprintf('%d天前', floor($int / 86400));
        } else {
            $str = date('Y-m-d H:i:s', $time);
        }
        return $str;
    }
}

if (!function_exists('markdown_to_html')) {
    /**
     * 把markdown转为html
     *
     * @param $markdown
     * @return mixed|string
     */
    function markdown_to_html($markdown)
    {
        // 正则匹配到全部的iframe
        preg_match_all('/&lt;iframe.*iframe&gt;/', $markdown, $iframe);
        // 如果有iframe 则先替换为临时字符串
        if (!empty($iframe[0])) {
            $tmp = [];
            // 组合临时字符串
            foreach ($iframe[0] as $k => $v) {
                $tmp[] = '【iframe' . $k . '】';
            }
            // 替换临时字符串
            $markdown = str_replace($iframe[0], $tmp, $markdown);
            // 讲iframe转义
            $replace = array_map(function ($v) {
                return htmlspecialchars_decode($v);
            }, $iframe[0]);
        }
        // markdown转html
        $parser = new Parser();
        $html = $parser->makeHtml($markdown);
        $html = str_replace('<code class="', '<code class="lang-', $html);
        // 将临时字符串替换为iframe
        if (!empty($iframe[0])) {
            $html = str_replace($tmp, $replace, $html);
        }
        return $html;
    }
}

if (!function_exists('strip_html_tags')) {
    /**
     * 删除指定标签
     *
     * @param array $tags 删除的标签  数组形式
     * @param string $str html字符串
     * @param bool $content true保留标签的内容text
     * @return mixed
     */
    function strip_html_tags($tags, $str, $content = true)
    {
        $html = [];
        // 是否保留标签内的text字符
        if ($content) {
            foreach ($tags as $tag) {
                $html[] = '/(<' . $tag . '.*?>(.|\n)*?<\/' . $tag . '>)/is';
            }
        } else {
            foreach ($tags as $tag) {
                $html[] = "/(<(?:\/" . $tag . "|" . $tag . ")[^>]*>)/is";
            }
        }
        $data = preg_replace($html, '', $str);
        return $data;
    }
}

if (!function_exists('flash_message')) {
    /**
     * 添加成功或者失败的提示
     *
     * @param string $message
     * @param bool $success
     */
    function flash_message($message = '成功', $success = true)
    {
        $className = $success ? 'alert-success' : 'alert-danger';
        session()->flash('alert-message', $message);
        session()->flash('alert-class', $className);
    }
}

if (!function_exists('curl_get_contents')) {
    /**
     * 使用curl获取远程数据
     * @param  string $url url连接
     * @return string      获取到的数据
     */
    function curl_get_contents($url)
    {
        set_time_limit(0);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);                //设置访问的url地址
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);               //设置超时
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);   //用户访问代理 User-Agent
        curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);        //设置 referer
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);          //跟踪301
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //返回结果
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }
}

if (!function_exists('redis')) {
    /**
     * redis的便捷操作方法
     *
     * @param $key
     * @param null $value
     * @param null $expire
     * @return bool|string
     */
    function redis($key = null, $value = null, $expire = null)
    {
        if (is_null($key)) {
            return app('redis');
        }

        if (is_null($value)) {
            $content = Redis::get($key);
            if (is_null($content)) {
                return null;
            }
            return is_null($content) ? null : unserialize($content);
        }
        Redis::set($key, serialize($value));
        if (!is_null($expire)) {
            Redis::expire($key, $expire);
        }
    }
}

if (!function_exists('returnJson')) {
    function returnJson($code = 0, $msg = '操作成功', $data = [])
    {
        if (!empty($data)) {
            return response()->json(['code' => $code, 'msg' => $msg, 'data' => $data]);
        }
        return response()->json(['code' => $code, 'msg' => $msg]);
    }
}


/**
 *
 *
 * 文件管理测试
 *
 *
 *
 */


/**
 * 返回可读性更好的文件尺寸
 */
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

/**
 * 判断文件的MIME类型是否为图片
 */
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

if (!function_exists('randomCode')) {
    function randomCode()
    {
        $number = '1234567890';
        $len = strlen($number);
        $randomCode = '';
        for ($i = 0; $i < 4; $i++) {
            $randomCode .= $number{mt_rand(0, $len-1)};
        }

        return $randomCode;
    }
}


function getCityByIp($ip = ''){
    if(empty($ip)){
        $ip = GetIp();
    }
    $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
    if(empty($res)){ return false; }
    $jsonMatches = array();
    preg_match('#\{.+?\}#', $res, $jsonMatches);
    if(!isset($jsonMatches[0])){ return false; }
    $json = json_decode($jsonMatches[0], true);
    if(isset($json['ret']) && $json['ret'] == 1){
        $json['ip'] = $ip;
        unset($json['ret']);
    }else{
        return false;
    }
    return $json;
}


function getAreaByIp(string $ip = '' ) {
    $location = getCityByIp($ip);
    return $location['country'] . $location['province'] . $location['city'];
}



function ismobile() {
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        return true;

    //此条摘自TPM智能切换模板引擎，适合TPM开发
    if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
        return true;
    //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
        //找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
    //判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array(
            'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
        );
        //从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    //协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT'])) {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    return false;
}


if(!function_exists('latestNews')) {
    function latestNews() {
        $data['links'] = Redis::command('keys',['*']);
        $data['titles'] = [];
        foreach($data['links'] as $k => $v) {
            $data['titles'][] = Redis::get($v);
        }
        return $data;
    }
}


