CREATE TABLE `syf_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  notice_title VARCHAR (150) NOT NULL DEFAULT '' comment '公告标题',
  notice_content text NOT NULL DEFAULT '' comment '公告内容',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0',
  `deleted_at` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站公告';
