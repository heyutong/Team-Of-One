<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>武汉拾艺信息科技有限公司</title>

<!--公共脚本-->
<!--jquery-->
<script type="text/javascript" src="js/plugin/jquery/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/plugin/jquery/jquery.easing.1.3.js"></script>

<!--尚软前端脚本-->
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
		//首页轮播
        xlc.tabList ("#js_diannao" , "mouseover" , "focus" , true , 3000);
    });

</script>

<!--公共样式-->
<link rel="stylesheet" type="text/css" href="css/common.css"/>

</head>

<body>
<h2><a id="asd" href="{{url('home/login')}}">您还没有登陆 请先登录</a></h2>
<div class="container container_nav cf">
	<a href="{{url('/')}}" class="logo focus">
    	<img src="images/logo/logo.png" width="258" height="91" />
        <div class="choose">
        </div>
    </a>
    <ul class="nav">
    	<li class="navItem_1">
        	<a href="{{url('home/service')}}" class="icon_nav icon_nav_1">
            	<span class="gaoguang"></span>
            	<img src="images/icon_1.png" width="95" height="145" />
            </a>
            <a href="{{url('home/service')}}" class="nav_txt">产品服务</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_2">
        	<span class="gaoguang"></span>
            <a href="{{url('home/cases')}}" class="icon_nav icon_nav_2">
            	<img src="images/icon_2.png" width="70" height="126" />
            </a>
            <a href="{{url('home/cases')}}" class="nav_txt">案例展示</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_3">
        	<span class="gaoguang"></span>
            <a href="{{url('home/about')}}" class="icon_nav icon_nav_3">
            	<img src="images/icon_3.png" width="81" height="100" />
            </a>
            <a href="{{url('home/about')}}" class="nav_txt">关于我们</a>
            <div class="choose"></div>
        </li>
        <li class="navItem_4">
        	<span class="gaoguang"></span>
        	<a href="{{url('home/apply')}}" class="icon_nav icon_nav_4">
            	<img src="images/icon_4.png" width="89" height="89" />
            </a>
            <a href="{{url('home/apply')}}" class="nav_txt">在线申请</a>
            <div class="choose"></div>
        </li>
    </ul>
</div>

<!--蔓藤-->
<div class="container m_center container_manteng">
	<img class="ye ye1" src="images/yezi/ye_1.png" width="24" height="22" />
    <img class="ye ye2" src="images/yezi/ye_2.png" width="34" height="24" />
    <img class="ye ye3" src="images/yezi/ye_3.png" width="24" height="22" />
    <img class="ye ye4" src="images/yezi/ye_4.png" width="19" height="28" />
    <img class="ye ye5" src="images/yezi/ye_5.png" width="12" height="20" />
    <img class="ye ye6" src="images/yezi/ye_6.png" width="18" height="30" />
    <img class="ye ye7" src="images/yezi/chong.png" width="21" height="25" />
	<img src="images/manteng.png" width="410" height="152" />
</div>


<div class="container container_geban">
	<div class="container container_indexmain">
    	<div class="diannao" id="js_diannao">
        	<ul class="lunbo js_slideWrap">
            	<li style="background-image:url(images/index/l_1.png)">
                	<p class="p1"><img src="images/index/img_1.png" /></p>
                    <p class="p2"><img src="images/index/img_2.png" /></p>
                </li>
                <li style="background-image:url(images/index/l_2.png)">
                	<p class="p1"><img src="images/index/img_3.png" /></p>
                    <p class="p2"><img src="images/index/img_4.png" /></p>
                </li>
                <li style="background-image:url(images/index/l_3.png)">
                	<p class="p1"><img src="images/index/img_5.png" /></p>
                    <p class="p2"><img src="images/index/img_6.png" /></p>
                </li>
            </ul>
            <ul class="lunbo_tip js_slideTip">
            	<li class="focus"></li>
                <li></li>
                <li></li>
            </ul>
        	<img src="images/index/gaoguang.png" width="379" height="225" class="gaoguang_diannao" />
            <img src="images/index/diannao.png" width="417" height="305" />
        </div>
        <div class="ps">
            <img src="images/index/ps.png" width="124" height="197" />
        </div>
    </div>
</div>


<div class="footer">
	京ICP备11017824号-4 / 京ICP证130164号 北京市公安局朝阳分局备案编号:110105000501 Copyright © 2006-2013 
</div>

</body>
</html>
