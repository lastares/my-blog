<?php

namespace App\Http\Controllers\Admin;

use App\Models\file;
use Illuminate\Http\Request;

class FileController extends BaseController
{

    public function showList(Request $request, File $file)
    {
        $title = trim($request->input('file_title', ''));
        $files = $file->fileList($title);
        $pageString = $files->links();
        $prefix_route = config('blog.file_upload_path');
        return view('admin/file/index', compact('files', 'pageString', 'prefix_route'));
    }

    public function insert()
    {
        return view('admin/file/insert');
    }


    public function create(Request $request, file $file)
    {
        $data = $request->except(['_token']);
        if (!$file->insertFile($data)) {
            return $this->error('操作失败');
        }
        return $this->success();
    }

    public function edit($id, file $fileModel)
    {
        if ($id == 0) {
            return $this->error('缺少id参数');
        }
        $route_prefix = config('blog.file_upload_path');
        $file = $fileModel->getfileById($id);
        return view('admin/file/update', compact('file', 'route_prefix'));
    }

    public function update(Request $request, file $fileModel)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return $this->error('缺少id参数');
        }

        $data = $request->except(['_token']);
        $_file_path = $request->input('file_path', '');
        $result = $fileModel->updatefile($id, $data, $_file_path);
        if ($result !== false) {
            return $this->success();
        }

        return $this->error('操作失败');
    }

    public function delete(Request $request, file $fileModel)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return $this->error('参数ID参数错误');
        }

        $result = $fileModel->deletefile($id);
        if ($result !== false) {
            return $this->success();
        }
        return $this->success('删除失败');
    }

    public function forceDelete($id, file $file)
    {
        if ($file->deletefile($id) !== false) {
            return $this->success();
        } else {
            return $this->error();
        }
    }

    public function download(Request $request, file $file)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return $this->error('参数错误');
        }
        $filePath = $file->getFilePathById($id);
        $fileName = base_path('public/uploads/file/') . $filePath;
        return response()->download($fileName);

    }

    public function uploadFile()
    {
        return $this->uploadFiles();
    }
}