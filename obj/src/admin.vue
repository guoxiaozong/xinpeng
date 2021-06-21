<template>
  <div>
      <div id="mws-themer">
    	<div id="mws-themer-hide"></div>
        <div id="mws-themer-content">
        	<div class="mws-themer-section">
	        	<label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
            	<ul>
                    <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
        	<div class="mws-form">
            	<div class="mws-form-row" style="padding:0;">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div id="mws-header" class="clearfix">
    	<div id="mws-logo-container">
        	<div id="mws-logo-wrap">
            	<img :src="imgUrl1" alt="mws admin" />
			</div>
        </div>
        
        <div id="mws-user-tools" class="clearfix">
            <div class="mws-dropdown-menu">
        </div>
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" class="mws-i-24 i-alert-2 mws-dropdown-trigger">Notifications</a>
                <span class="mws-dropdown-notif">35</span>
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" class="mws-i-24 i-message mws-dropdown-trigger">Messages</a>
                <span class="mws-dropdown-notif">35</span>
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mws-user-info" class="mws-inset">
            	<div id="mws-user-photo">
                	<img :src=" imgUrl2" alt="User Photo" />
                </div>
                <div id="mws-user-functions">
                    <div id="mws-username">
                        欢迎:<span style="color: red; font-size: 15px;"></span>登录
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/loginout/aaa">注销</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div id="mws-wrapper">
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        <div id="mws-sidebar">
        	<div id="mws-searchbox" class="mws-inset">
            	<form name="mohu" action="/admin/show" method="get">
                	<input type="text" class="mws-search-input" />
                    <input type="submit" class="mws-search-submit" />
                </form>
            </div>
            <div id="mws-navigation">
            	<ul>
                    <li><a href="/admin/index" class="mws-i-24 i-home">首页</a></li>
             
                    <li>
                        <a href="#" class="mws-i-24 i-list" @click="shou()">管理官管理</a>
                        <ul v-show = shouxian>
                            <li><a href="/admin/show">查看管理员</a></li>
                            <li><a href="/admin/add">添加管理员</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" class="mws-i-24 i-list">用户管理</a>
                        <ul>
                            <li><a href="/user/index"> 查看用户</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="mws-i-24 i-list">类别管理</a>
                        <ul>
                            <li><a href="/type/index">查看类别</a></li>
                            <li><a href="/type/add">添加类别</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="mws-i-24 i-list">商品管理</a>
                        <ul>
                            <li><a href="/goods/index">查看商品</a></li>
                            <li><a href="/goods/Add">添加商品</a></li>
                            <li><a href="/goods/cycling">商品回收站</a></li>
                        </ul>
                    </li> 
                   
                 
                      <!-- 用户管理员的权限 -->
                    


                  
                    <li>
                        <a href="#" class="mws-i-24 i-list">订单管理</a>
                        <ul>
                            <li><a href="/order/index">查看订单</a></li>
                            <li><a href="/order/info">订单详情</a></li>
                         
                        </ul>
                    </li> 
                     <li>
                        <a href="#" class="mws-i-24 i-list">新闻管理</a>
                        <ul>
                            <li><a href="/order/index">查看新闻</a></li>
                            <li><a href="/order/info">新闻管理</a></li>
                         
                        </ul>
                    </li> 
                    
                </ul>
            </div>
        </div>
        
        <div id="mws-container" class="clearfix">
          
            <div class="container">
            
                
            	<h1>欢迎来到樱桃商城信息管理中心</h1>
            	
            </div>
         
            
           
            
        </div>
    </div>
   
  </div>
</template>

<script>
export default {
     data(){
        return { 
            imgUrl1:require("./assets/images/mws-logo.png"),
            imgUrl2:require("./assets/example/profile.jpg"),
            shouxian:false
        }
    },
    methods:{
        shou(){
            this.shouxian = !this.shouxian
        }
    }

}
</script>

<style>
@import "assets/css/demo.css";
@import "assets/css/fluid.css";
@import "assets/css/mws.theme.css";
@import "assets/css/reset.css";
@import "assets/css/text.css"; 
@import "assets/css/core/button.css";
@import "assets/css/core/core.css";
@import "assets/css/core/error.css";
@import "assets/css/core/gallery.css";
@import "assets/css/core/login.css";
@import "assets/css/core/misc.css";
@import "assets/css/core/panels.css";
@import "assets/css/core/report.css";
@import "assets/css/core/table.css";
@import "assets/css/core/themer.css";
@import "assets/css/fonts/ptsans/stylesheet.css";
@import "assets/css/icons/ic.css";
@import "assets/css/icons/ic-16.css";
@import "assets/css/icons/icons.css";
@import "assets/css/jui/jquery.ui.css";
</style>