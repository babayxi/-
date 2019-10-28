



<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<style type="text/css">
body,h1,ul{
    margin: 0;
    padding:0;
}
body{
    background-color: #fff;
}
ul{
    list-style: outside none none;
}
a{
    text-decoration: none;
}.container{
    max-width: 1080px;
    margin:0 auto;
    display: block;
}
.fl{
    float: left;
}
.fr{
    float: right;
}
.top-nav{
    background:#eee;
}
.top-nav .item{
    display: inline-block;
    padding: 6px 10px;
    color: #666;
}
.top-nav .item:hover{
    color: #333;
}
#nav{
    width: 100%;
    height: 70px;
    background:#333;
}
#nav .center{
    width: 1263px;
    margin: 0 auto
}
#nav .logo{
    width: 240px;
    height: 70px;
    background-image: -9999px;
    float: left;
}
#nav .link{
    width: 650px;
    height: 70px;
    line-height: 70px;
    font-size: 18px;
    float: right;
}
#nav .link li{
    width: 120px;
    height: 70px;
    text-align:center;
    float: left;
}
#nav .link a {
    display: block;
    color: #eee;
}
#nav .active a,
#nav .link a:hover{
    background-color:#000;
}
</style>
<header>
    <div class="top-nav clarfix">
        <div class="container">
            <div class="fl">
                <a class="item" href="#">首页</a href='#'>
        </div>
        <div class="fr">
            <a href="item" href="#">我的订单</a href="#">
                 <a href="item" href="#">收藏夹</a href="#">
                     <a href="item" href="#">登录</a href="#">
                         <a href="item" href="#">注册</a href="#">
        </div>
</div>
</div>
<header class="header clearfix">
    <div class=”container ">
        <div class= "logo col-1"> 
            Logo
            </div> 
            <div class="co1-2 search-bar">
                <input type="text" name="" value=">"
                <button type=" button" name=" button" >搜索</button>
            </div>
            <div class="col-3 cart">
                <a href="">我的购物车</a>
            </div>
        </div>
</header>
