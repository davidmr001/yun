<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('.menu_suiefei').children().attr('id','cur');
});
</script>

<style>
  *{padding: 0;margin: 0;list-style: none;}
  body{font-size: 18px;font-family: "黑体";}
  .header{width: 100%;height: 30px;background: #ccc;}
  .banner-bg{width: 100%;height: 550px;background: url(./statics/images/bg.png) left bottom no-repeat;}
  .banner{width: 960px;height: 550px;margin: 0 auto;}
  .banner .banner_h3{width: 460px;height: 270px;margin-top: 100px;margin-left: 30px;float: left;}
  .banner .banner_right{width: 460px;height: 497px;float: left;overflow: hidden;position: relative;}
  .banner .banner_right div{width: 100%;height: 90px;margin-top: 90px;color: #fff;}
  .banner .banner_right div h3{margin-left: 88px;font-size: 36px;font-weight: 400;}
  .banner .banner_right div b{width:100%;margin-left: 166px;font-size: 24px;margin-top: 17px;font-weight: 400;}
  .banner .banner_right h4{width: 116px;height: 116px;margin-left: 88px;margin-top: 16px;float: left;}
  .banner .banner_right p{float: left;margin-left: 72px;color: #fff;width: 152px;height: 44px;font-weight: 400;margin-top: 90px;}
  .banner .banner_right a{width: 150px;height: 44px;border: 1px solid #006dbf;text-decoration: none;color: #006dbf;line-height: 44px;text-align: center;overflow: hidden;position: absolute;left: 68px;top: 200px;top: 340px;}
  .banner .banner_right a span{width: 22px;height: 29px;background: url(./statics/images/1.png) no-repeat;display: block;float: left;margin-top: 7px;margin-left: 18px;}
  .index_login {
    width: 220px;
    float: right;
    color: #006dbf;
    font-weight: bold;
    text-align: right;
}
user agent stylesheetdiv {
    display: block;
}
Inherited from div.top
.top {
    width: 1090px;
    margin: 0px auto;
    font-size: 14px;
    line-height: 40px;
    height: 40px;
}
Inherited from body
html, body {
    display: block;
    margin: 0;
    padding: 0;
    font-family: "微软雅黑", "Microsoft YaHei UI";
    list-style: none;
    font-size: 12px;
    width: 100%;
    min-width: 1200px;
    height: auto;
}
Inherited from html
html, body {
    display: block;
    margin: 0;
    padding: 0;
    font-family: "微软雅黑", "Microsoft YaHei UI";
    list-style: none;
    font-size: 12px;
    width: 100%;
    min-width: 1200px;
    height: auto;
}
  </style>

            <?php if($catid==30) { ?>
            	<?php $i=46?>
            	<?php $city="3385"?>
            <?php } ?>
            <?php if($catid==31) { ?>
            	<?php $i=47?>
            	<?php $city="3392,3389,3390,3391,3393"?>
            <?php } ?>
            <?php if($catid==32) { ?>
            	<?php $i=48?>
            	<?php $city="3379,3380,3381,3382,3383"?>
            <?php } ?>
            <?php if($catid==33) { ?>
            	<?php $i=49?>
            	<?php $city="3384,3386,3388,3387"?>
            <?php } ?>
            <?php if($catid==34) { ?>
            	<?php $i=50?>
            	<?php $city="3394,3395,3396"?>
            <?php } ?>
            <?php if($catid==35) { ?>
            	<?php $i=51?>
            	<?php $city="3372,3374,3375,3376,3377,3398,3399"?>
            <?php } ?>
            <?php if($catid==36) { ?>
            	<?php $i=52?>
            	<?php $city="3366,3368,3369,3370,3371,3378,397"?>
            <?php } ?>
    
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=da1534638dd83897fa30d99da73c60bb&action=lists&catid=%24i&num=20&order=id+ASC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$i,'order'=>'id ASC','limit'=>'20',));}?>
<?php if($info) { ?>    



	<div id="header">
      <div class="slides">
            <div class="slideInner">
<?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
                 <a href="#" style="background:url(<?php echo $r['thumb'];?>) center center no-repeat rgb(16, 82, 179);">

                </a>
<?php $n++;}unset($n); ?>  
            </div>
            <div class="nav">
                <a class="prev" href="javascript:;"></a>
                <a class="next" href="javascript:;"></a>
            </div>
        </div>
    </div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
<?php } ?>



  <div class="banner-bg">
    <div class="banner">
      <h3 class="banner_h3"><img src="./statics/images/fei_01.png" alt="图片" width="460" height="270"></h3>
      <div class="banner_right">
        <div>
          <h3>随e飞</h3>
          <b>———网罗天下飞行</b>
        </div>
        <h4><img src="./statics/images/logo.png" alt="tupian" width="116" height="116"></h4>
        <p>安卓端即将推出，敬请期待......</p>
        <a href="https://itunes.apple.com/gb/app/yi-dong-cai-bian/id1033811006?mt=8" target="_blank"><span></span><h6>客户端下载</h6></a>
      </div>
    </div>
  </div>
  <?php include template('content', 'footer'); ?>
