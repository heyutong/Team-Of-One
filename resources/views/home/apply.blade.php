<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线申请——武汉拾艺信息科技有限公司</title>
<base href="{{URL::asset('')}}" />
<!--公共脚本-->
<!--jquery-->
<script type="text/javascript" src="js/plugin/jquery/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/plugin/jquery/jquery.easing.1.3.js"></script>


<!--表单验证-->
<script type="text/javascript" src="js/plugin/Validform_v5.3.2/Validform_v5.3.2.js"></script>

<!--尚软前端脚本-->
<script type="text/javascript" src="js/common.js"></script>

<!--公共样式-->
<link rel="stylesheet" type="text/css" href="css/common.css"/>


<!--本页脚本-->
<script type="text/javascript" src="js/applay.js"></script>
</head>

<body>

<div class="container container_nav cf">
    <a href="{{url('/')}}" class="logo focus">
        <img src="images/logo/logo.png" width="258" height="91" />
        <div class="choose"></div>
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


<!--合作联系标题-->
<div class="container  container_full title_coloumn">
	<span class="cn">合作联系</span>
    <span class="en"><img src="images/eq/title_case.png" /></span>
    <div class="title_coloumn_line"><img src="images/title_tip.gif" width="20" height="31" class="title_img" /></div>
</div>

<!--合作联系-->
<div class="container container_1000 m_center cf b_70 container_applay">
    
    
    <!--案例列表-->
    <div class="cf f_left applay_left">
    	<p class="title_applay b_30">告诉我们您的需求！</p>
        <form id="js_demoform">
            <table class="table_applay" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td>
                            <label>
                                <div class="icon_applay">
                                    <span class="icon_user"></span>
                                    <span class="bg"></span>
                                    <span class="bg bg2"></span>
                                </div>
                                <input type="tel" class="input_applay js_input_applay" placeholder="*输入您的姓名" nullmsg="请输入姓名" errormsg="请输入姓名" sucmsg=" " name="name" datatype="*" />
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="js_label">
                                <div class="icon_applay">
                                    <span class="icon_phone"></span>
                                    <span class="bg"></span>
                                    <span class="bg bg2"></span>
                                </div>
                                <input type="text" class="input_applay js_input_applay" placeholder="*输入您的电话" nullmsg="请输入电话" errormsg="请输入电话" sucmsg=" "  datatype="m"/>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="js_label">
                                <div class="icon_applay">
                                    <span class="icon_xuqiu"></span>
                                    <span class="bg"></span>
                                    <span class="bg bg2"></span>
                                </div>
                                <textarea  class="input_applay input_applay_area js_input_applay" placeholder="简单描述您的需求..."></textarea>
                            </label>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
							<p id="js_tip" class="form_tip"></p>
                            <input type="submit" value="提交" class="btn_submit" />
                        </td>
                    </tr>
                </tfoot>
            </table>
    	</form>
        
    </div>
    
    <!--联系信息-->
    <div class="container  m_center b_70 f_right applay_right">
        <div class="call_info m_center">
            <div class="phone b_30">
                <p>合作：027-84761733</p>
                <p>客服：400-0879-875</p>
            </div>
            <div class="wrap_qq  b_30">
                <a href="#this" class="qqzaixian">在线客服</a>
                <a href="#this" class="qqzaixian">在线客服</a>
            </div>
            <div class="erweima cf">
                <div class="f_left">
                    <span class="erweima_img">
                        <img src="images/eq/erweima.png" width="130" height="130" />
                    </span>
                    <span class="weixin">官方微信（扫一扫）</span>
                </div>
                <div class="f_right">
                    <a href="#this" class="erweima_img">
                        <img src="images/eq/wberweima.png" width="130" height="130" />
                    </a>
                    <a href="#this" class="weibo">官方微博（点一点）</a>
                </div>
            </div>
        </div>
    </div>
    
    
</div>

<div class="footer">
	京ICP备11017824号-4 / 京ICP证130164号 北京市公安局朝阳分局备案编号:110105000501 Copyright © 2006-2013 
</div>

</body>
</html>
