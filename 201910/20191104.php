<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type= "text/css">
   .main-promote .col-6{
    background: #dedede;
}
    .main-promote .cat{
        background: #6e6568;
        color: #fff
    }
    .main-promote .cat .item {
        padding: 16px 20px;
    }
    .main-promote .cat .item:hover{
        background: rgba(0, 0, 0, 0.2);
    }
        .main-promote .info{
            padding: 10px;
            background: #fff;
            color: #888;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    .main-promote .info .avatar{
        background: #aaa;
        width: 50px;
        height: 50px;
        float: left;
        border-radius: 50%;
        margin-right: 10px;
    }
    .col-6,
    .col-5{
        float: left;
        display: block;
        position: relative;
        min-height: 1px;
    }
    .col-6{
        width: 60%;
    }
    .col-5{
        width: 50%;
    }
.cat-promote .title::brfore{
    content: '';
    display: inline-block;
    width: 5px;
    height: 22px;
    background:#dd182b;
    vertical-align: middle;
    margin-right: 10px;
}
.cat-promote .title{
    font-size: 22px;
}
.cat-promote .item{
    padding: 5px;
}
.cat-promote .card{
    height: 300px;
    background:#ccc;
    border-radius:3px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
}
    .container{
        max-width: 1080px;
        margin: 0 auto;
        display: block;
       }
       .col-1,
       .col-2,
       .col-3,
       .col-4,
       .col-5,
       .col-6,
       .col-7,
       .col-8,
       .col-9{
        float: left;
        display: block;
        position: relative;
        min-height: 1px;
       }
       .col-1{
        width: 10%;
       }
       .col-2{
        width: 20%;
       }
       .col-3{
        width: 30%;
       }
       .col-4{
        width: 40%;
       }
       .col-5{
        width: 50%;
       }
       .col-6{
        width: 60%;
       }
       .col-7{
        width: 70%;
       }

            </style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="applicable-device" content="pc,mobile" />
    <title>
        {if condition="!empty($SEO['title'])"}{$SEO['title']}{/if}{$SEO['site_title']} Powered by HkCms.cn
    </title>
    <meta name="description" content="{$SEO['description']}" />
    <meta name="keywords" content="{$SEO['keyword']}" />
    <link href="{$config_siteurl}statics/default/css/bootstrap.css" rel="stylesheet" />
    <link href="{$config_siteurl}statics/default/css/glide.css" rel="stylesheet" />
    <link href="{$config_siteurl}statics/default/css/style.css" rel="stylesheet" />
    <link href="{$config_siteurl}statics/default/css/online.css"rel="stylesheet" />
    <script src="{$config_siteurl}statics/default/js/jquery.min.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/default/js/bootstrap.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/default/js/jquery.glide.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="{$config_siteurl}statics/default/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="{$config_siteurl}statics/default/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body>
{hkcms:template file="content/header.php"/}

<!-- Banner -->

<!--首页展示-->
<div class="main-promote clearfix">
    <div class="container">
        <div class="col-2 cat">
            <div class="item">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
            <div class="item">4</div>
            <div class="item">5</div>
            <div class="item">6</div>
            <div class="item">7</div>
            <div class="item">8</div>
            <div class="item">9</div>

        </div>
        <div class="col-6">
             {hkcms:position action="position" posid="1"}
                    {volist name="data" id="vo"}
            <div class="silder">
                 <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" style="width: 150px;height: 150px;float: left;" >
                 </div>
        {/volist}
                    {/hkcms:position}
</div>
    <div class="col-2 info">
        <div class="auth clearfix">
            <div class="avavtar"></div>
            你好！欢迎握手~

        </div>
        <div class="anno">
            <div class="title">公告</div>
            <div class="content">
                我是侧边栏
            </div>
        </div>
    </div>
</div>
</div>



<!-- 关注微信模态框（Modal）start -->
<div class="modal fade" id="wechatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border: 0px;">
            <div class="modal-header">请扫描二维码关注我们</div>
            <div class="modal-body" style="text-align: center">
                <img src="{$config_siteurl}statics/default/images/qrcode.jpg" alt="" />
            </div>
            <div class="modal-footer" style="text-align: center;">
                <button type="button" class="btn btn-primary" data-dismiss="modal">关闭<tton>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showWechatQR() {
        $("#wechatModal").modal("show")
    }
</script>
<!-- 关注微信模态框（Modal）end -->



<div style="background:#f9f9f9; padding-top:30px; margin-top:30px; padding-bottom:10px">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="productBox">
                    <div class="titleBar">
                        <h1>最新产品</h1>
                        <span></span>
                        {hkcms:content action="category" catid="7"  order="listorder asc"}
                            {volist name="data" id="vo"}
                                <a href="{$vo.url}">{$vo.catname}</a>
                            {/volist}
                        {/hkcms:content}
                        <a class="rightMore" href="{:url('content/Index/lists',['catid'=>7])}">></a>
                    </div>
                    <div class="list">
                        {hkcms:position action="position" posid="2" order="listorder asc"}
                        {volist name="data" id="vo"}
                        <div class="col-xs-6 col-sm-3 col-md-2 col-mm-6 productImg">
                            <a title="PRO-001" href='{$vo.data.url}'>
                                <span class="imgLink-hover"><span class="hover-link"></span></span>
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" />
                            </a>
                            <a class="productTitle" href="{$vo.data.url}" title="{$vo.data.title}">
                                {$vo.data.title}
                            </a>
                        </div>
                        {/volist}
                        {/hkcms:position}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="indexNavigationGroup" id="classification">
                <div class="navigationBox">
                    <div class="titleBar">
                        <h1>导航栏目</h1>
                        <span></span>
                    </div>
                    <div class="list">
                        <ul id="firstpane">
                            {hkcms:content action="category" catid="$catid"  order="listorder ASC"}
                            {volist name="data" id="vo"}
                            {if (!empty($vo['child']))}
                            <li>
                                <a class='' href='{$vo['url']}'>{$vo['catname']}</a><span>+</span>
                                <ul>
                                    {hkcms:content action="category" catid="$vo['catid']"  order="listorder ASC"}
                                    {volist name="data" id="rr"}
                                    <li><a class='' href='{$rr['url']}'>{$rr['catname']}</a><ul></ul></li>
                                    {/volist}
                                    {/hkcms:content}
                                </ul>
                            </li>
                            {else /}
                            <li><a class='' href='{$vo['url']}'>{$vo['catname']}</a></li>
                            {/if}
                            {/volist}
                            {/hkcms:content}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--模板-->
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-9 col-md-9">
            <div class="newsBox">
                <div class="titleBar">
                    <h1>新闻中心</h1>
                    <span></span> <a class="rightMore" href="{:url('content/Index/lists',['catid'=>4])}">>></a>
                </div>
                <ul class="indexNewsList">
                    {hkcms:position action="position" posid="1"}
                    {volist name="data" id="vo"}
                    <li class="col-xs-12 col-sm-6 col-md-6">
                        <a href="{$vo.data.url}">
                            <div class="img">
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" style="max-width: 120px">
                            </div>
                            <div class="txt">
                                    <span class="title">
                                        {$vo.data.title}
                                    </span>
                                <span class="time">{:date('Y-m-d',$vo['data']['inputtime'])}</span>
                                <p>
                                    {$vo.data.description}
                                </p>
                            </div>
                        </a>
                    </li>
                    {/volist}
                    {/hkcms:position}
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="contactBox" style="padding:10px;">
                <p>联系人：张经理</p>
                <p>手机：13800138000</p>
                <p>电话：020-88668888</p>
                <p>邮箱：admin@hkcms.cn</p>
                <p>地址： 广东省广州市白云区</p>
            </div>
        </div>
    </div>
</div>
<div style="background:#f9f9f9; padding-top:20px; margin-top:20px; padding-bottom:20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="linkBox">
                    <div class="titleBar">
                        <h1>友情链接</h1>
                        <span></span>
                        <ul class="linkList">
                            <li><a target="_blank" href="http://www.hkcms.cn/">HkCms官网</a></li>
                            <li><a target="_blank" href="http://bbs.hkcms.cn/">HkCms社区</a></li>
                            <li><a target="_blank" href="http://doc.hkcms.cn/">HkCms手册</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{hkcms:template file="content/footer.php"/}
</body>
</html>
