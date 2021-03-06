<?php
return array (
  'city' => 
  array (
    'fieldid' => '504',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'city',
    'name' => '所属城市',
    'tips' => '',
    'css' => 'style="display:none"',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
  \'minnumber\' => \'1\',
  \'maxnumber\' => \'\',
  \'decimaldigits\' => \'0\',
  \'size\' => \'\',
  \'defaultvalue\' => \'\',
  \'rangetype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '0',
    'disabled' => '0',
    'isomnipotent' => '1',
    'minnumber' => '1',
    'maxnumber' => '',
    'decimaldigits' => '0',
    'size' => '',
    'defaultvalue' => '',
    'rangetype' => '0',
  ),
  'info_area' => 
  array (
    'fieldid' => '505',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'info_area',
    'name' => '区域选择',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'omnipotent',
    'setting' => 'array (
  \'formtext\' => \'{zone}{city}\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '0',
    'disabled' => '0',
    'isomnipotent' => '0',
    'formtext' => '{zone}{city}',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
  ),
  'catid' => 
  array (
    'fieldid' => '478',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'catid',
    'name' => '栏目',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '6',
    'pattern' => '/^[0-9]{1,6}$/',
    'errortips' => '请选择栏目',
    'formtype' => 'catid',
    'setting' => 'array (
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '-99',
    'unsetroleids' => '-99',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '64',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '1',
    'disabled' => '0',
    'isomnipotent' => '0',
    'defaultvalue' => '',
  ),
  'typeid' => 
  array (
    'fieldid' => '479',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'typeid',
    'name' => '类别',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'typeid',
    'setting' => 'array (
  \'minnumber\' => \'\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '64',
    'issearch' => '1',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '2',
    'disabled' => '0',
    'isomnipotent' => '0',
    'minnumber' => '',
    'defaultvalue' => '',
  ),
  'title' => 
  array (
    'fieldid' => '480',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'title',
    'name' => '标题',
    'tips' => '',
    'css' => 'inputtitle',
    'minlength' => '1',
    'maxlength' => '80',
    'pattern' => '',
    'errortips' => '请输入标题',
    'formtype' => 'title',
    'setting' => 'array (
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '64',
    'issearch' => '1',
    'isadd' => '64',
    'isfulltext' => '1',
    'isposition' => '1',
    'listorder' => '4',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'rent_mode' => 
  array (
    'fieldid' => '500',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'rent_mode',
    'name' => '供需类型',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
  \'options\' => \'需求|1
供应|2\',
  \'boxtype\' => \'radio\',
  \'fieldtype\' => \'varchar\',
  \'minnumber\' => \'1\',
  \'width\' => \'50\',
  \'size\' => \'1\',
  \'defaultvalue\' => \'1\',
  \'outputtype\' => \'0\',
  \'filtertype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '7',
    'disabled' => '0',
    'isomnipotent' => '0',
    'options' => '需求|1
供应|2',
    'boxtype' => 'radio',
    'fieldtype' => 'varchar',
    'minnumber' => '1',
    'width' => '50',
    'size' => '1',
    'defaultvalue' => '1',
    'outputtype' => '0',
    'filtertype' => '1',
  ),
  'zone' => 
  array (
    'fieldid' => '503',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'zone',
    'name' => '区域',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'linkage',
    'setting' => 'array (
  \'linkageid\' => \'3360\',
  \'showtype\' => \'3\',
  \'space\' => \' \',
  \'filtertype\' => \'1\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '10',
    'disabled' => '0',
    'isomnipotent' => '1',
    'linkageid' => '3360',
    'showtype' => '3',
    'space' => ' ',
    'filtertype' => '1',
  ),
  'updatetime' => 
  array (
    'fieldid' => '483',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'updatetime',
    'name' => '更新时间',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 'array (
  \'dateformat\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'1\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '12',
    'disabled' => '0',
    'isomnipotent' => '0',
    'dateformat' => 'int',
    'format' => 'Y-m-d H:i:s',
    'defaulttype' => '1',
    'defaultvalue' => '',
  ),
  'content' => 
  array (
    'fieldid' => '526',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'content',
    'name' => '补充内容',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'editor',
    'setting' => 'array (
  \'toolbar\' => \'full\',
  \'defaultvalue\' => \'\',
  \'enablekeylink\' => \'0\',
  \'replacenum\' => \'1\',
  \'link_mode\' => \'0\',
  \'enablesaveimage\' => \'0\',
  \'height\' => \'200\',
  \'disabled_page\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '12',
    'disabled' => '0',
    'isomnipotent' => '0',
    'toolbar' => 'full',
    'defaultvalue' => '',
    'enablekeylink' => '0',
    'replacenum' => '1',
    'link_mode' => '0',
    'enablesaveimage' => '0',
    'height' => '200',
    'disabled_page' => '0',
  ),
  'contact' => 
  array (
    'fieldid' => '502',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'contact',
    'name' => '联系人',
    'tips' => '',
    'css' => '',
    'minlength' => '1',
    'maxlength' => '20',
    'pattern' => '',
    'errortips' => '请输入联系人',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'10\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '14',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '10',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'thumb' => 
  array (
    'fieldid' => '485',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'thumb',
    'name' => '缩略图',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'image',
    'setting' => 'array (
  \'size\' => \'50\',
  \'defaultvalue\' => \'\',
  \'show_type\' => \'1\',
  \'upload_maxsize\' => \'1024\',
  \'upload_allowext\' => \'jpg|jpeg|gif|png|bmp\',
  \'watermark\' => \'0\',
  \'isselectimage\' => \'1\',
  \'images_width\' => \'\',
  \'images_height\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '15',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '50',
    'defaultvalue' => '',
    'show_type' => '1',
    'upload_maxsize' => '1024',
    'upload_allowext' => 'jpg|jpeg|gif|png|bmp',
    'watermark' => '0',
    'isselectimage' => '1',
    'images_width' => '',
    'images_height' => '',
  ),
  'phone' => 
  array (
    'fieldid' => '499',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'phone',
    'name' => '联系电话',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '/^[0-9-]{6,13}$/',
    'errortips' => '请输入联系电话',
    'formtype' => 'text',
    'setting' => 'array (
  \'size\' => \'30\',
  \'defaultvalue\' => \'\',
  \'ispassword\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '1',
    'isfulltext' => '1',
    'isposition' => '0',
    'listorder' => '16',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '30',
    'defaultvalue' => '',
    'ispassword' => '0',
  ),
  'inputtime' => 
  array (
    'fieldid' => '488',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'inputtime',
    'name' => '发布时间',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '0',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'datetime',
    'setting' => 'array (
  \'fieldtype\' => \'int\',
  \'format\' => \'Y-m-d H:i:s\',
  \'defaulttype\' => \'0\',
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '0',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '1',
    'listorder' => '17',
    'disabled' => '0',
    'isomnipotent' => '0',
    'fieldtype' => 'int',
    'format' => 'Y-m-d H:i:s',
    'defaulttype' => '0',
  ),
  'url' => 
  array (
    'fieldid' => '491',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'url',
    'name' => 'URL',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '100',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => 'array (
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '50',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'listorder' => 
  array (
    'fieldid' => '492',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'listorder',
    'name' => '排序',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '6',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'number',
    'setting' => 'array (
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '51',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'template' => 
  array (
    'fieldid' => '493',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'template',
    'name' => '内容页模板',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '30',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'template',
    'setting' => 'array (
  \'size\' => \'\',
  \'defaultvalue\' => \'\',
)',
    'formattribute' => '',
    'unsetgroupids' => '-99',
    'unsetroleids' => '-99',
    'iscore' => '0',
    'issystem' => '0',
    'isunique' => '0',
    'isbase' => '0',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '53',
    'disabled' => '0',
    'isomnipotent' => '0',
    'size' => '',
    'defaultvalue' => '',
  ),
  'status' => 
  array (
    'fieldid' => '495',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'status',
    'name' => '状态',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '2',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'box',
    'setting' => 'array (
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '55',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
  'username' => 
  array (
    'fieldid' => '497',
    'modelid' => '21',
    'siteid' => '1',
    'field' => 'username',
    'name' => '用户名',
    'tips' => '',
    'css' => '',
    'minlength' => '0',
    'maxlength' => '20',
    'pattern' => '',
    'errortips' => '',
    'formtype' => 'text',
    'setting' => 'array (
)',
    'formattribute' => '',
    'unsetgroupids' => '',
    'unsetroleids' => '',
    'iscore' => '64',
    'issystem' => '1',
    'isunique' => '0',
    'isbase' => '1',
    'issearch' => '0',
    'isadd' => '0',
    'isfulltext' => '0',
    'isposition' => '0',
    'listorder' => '98',
    'disabled' => '0',
    'isomnipotent' => '0',
  ),
);
?>