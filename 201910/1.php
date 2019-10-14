<style type="text/css">
#footer {
height: 360px;
background-color:#222;
}
    #footer .top {
width: 1263px;
height: 280px;
margin: 0 auto;
text-align: center;
}
#footer .block {
width:410px;
height: 320px;
display: inline-block;
color: #CCC;
text-align: left;
vertical-align: top;
}
#footer h2 {
font-weight: normal;
padding: 20px 0 0 20px;
font-size: 24px;
}
#footer hr {
width:90%;
border: 1px dashed #333;
}
#footer ul {
color: #666;
font-size: 18px;
text-indent: 20px;
line-height: 2;
}

</style>

<footer id= "footer">
<div class="top">
<div class="block left">
<h2>友情链接</h2>
<hr>
<ul>
<li><a target="_blank" href="http://www.hkcms.cn/">HkCms官网</a></li>
<li><a target="_blank" href="http://bbs.hkcms.cn/">HkCms社区</a></li>
<li><a target="_blank" href="http://doc.hkcms.cn/">HkCms手册</a></li>
</ul>
</div>
<div class="block center">
<h2>使用说明</h2>
<hr>
<ul>
{hkcms:content action="category" catid="0" order="listorder ASC"}
            {volist name="data" id="vo"}
            <li><a href="{$vo['url']}">{$vo['catname']}</a>{if
            condition="$key<(count($data)-1)"}&nbsp{/if}</li>
            {/volist}
            {/hkcms:content}
</ul>
</div>
<div class="block right">
<h2>联系方式</h2>
<hr>
<ul>
<li>网站:wwW.hkcms.cn</li>
<li>邮件:admin@hkcms. cn</li>
<li>地址:广州市白云区永平街泰兴路4号恒企大厦A栋5楼</li>
</ul>
</div>
</div>
</footer>

<footer>

    <div class="copyright">
        <p>
            {hkcms:content action="category" catid="0"  order="listorder ASC"}
            {volist name="data" id="vo"}
            <a href="{$vo['url']}">{$vo['catname']}</a>{if condition="$key<(count($data)-1)"}&nbsp;&nbsp;|&nbsp;&nbsp{/if}
            {/volist}
            {/hkcms:content}
        </p>
        <p class="copyright_p">© 2000-2017 <a href="http://www.hkcms.cn" target="_blank">HkCms.cn</a> All Rights Reserved. 信息产业部备案号：粤ICP备17099102号-6</p>
    </div>

</footer>

<script type="text/javascript" src="{$config_siteurl}statics/default/js/common.js"></script>

<!--客服面板-->
<!--电脑版-->
<div id="cmsFloatPanel">

    <div class="ctrolPanel">
        <a class="service" href="#"></a>
        <a class="message" href="#"></a>
        <a class="qrcode" href="#"></a>
        <a class="arrow" title="返回顶部" href="#"></a>
    </div>

    <div class="servicePanel">
        <div class="servicePanel-inner">
            <div class="serviceMsgPanel">
                <div class="serviceMsgPanel-hd"><a href="#"><span>关闭</span></a></div>
                <div class="serviceMsgPanel-bd">
                    <!--在线QQ-->
                    <div class="msggroup">
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=376622798&site=qq&menu=yes"><img class="qqimg" src="http://wpa.qq.com/pa?p=2:376622798:52" alt="QQ在线客服" />技术支持</a>
                    </div>
                    <!--在线MSN-->
                    <div class="msggroup">
						<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=7a8f0301782f8cf2436718627cf8c9ceca5e2b9ebb74bbb90446530c928a016f"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="HkCms交流②群" title="HkCms交流②群"></a>
                    </div>
                    <!--在线SKYPE-->
                    <div class="msggroup">
                        <a href=""><img class="qqimg" src="{$config_siteurl}statics/default/images/skype.gif" alt="SKYPE在线客服" /> 官方</a>
                    </div>
                    <!--淘宝旺旺-->
                    <div class="msggroup">

                    </div>
                </div>
                <div class="serviceMsgPanel-ft"></div>
            </div>
            <div class="arrowPanel">
                <div class="arrow02"></div>
            </div>
        </div>
    </div>

    <div class="messagePanel">
        <div class="messagePanel-inner">
            <div class="formPanel">

                <div class="formPanel-bd">
                    <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style_32x32">
                        <a class="jiathis_button_qzone"></a>
                        <a class="jiathis_button_tsina"></a>
                        <a class="jiathis_button_tqq"></a>
                        <a class="jiathis_button_weixin"></a>
                        <a class="jiathis_button_renren"></a>
                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                    </div>
                    <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
                    <!-- JiaThis Button END -->
                    <a type="button" class="btn btn-default btn-xs" href="#" style="margin: 6px 0px 0px 10px;">关闭</a>
                </div>

            </div>
            <div class="arrowPanel">
                <div class="arrow01"></div>
                <div class="arrow02"></div>
            </div>
        </div>
    </div>

    <div class="qrcodePanel">
        <div class="qrcodePanel-inner">
            <div class="codePanel">
                <div class="codePanel-hd"><span style="float:left">用手机扫描二维码</span><a href="#"><span>关闭</span></a></div>
                <div class="codePanel-bd">
                    <img src="{$config_siteurl}statics/default/images/qrcode.jpg" alt="二维码" />
                </div>
            </div>
            <div class="arrowPanel">
                <div class="arrow01"></div>
                <div class="arrow02"></div>
            </div>
        </div>
    </div>

</div>

<div id="serviceBox" style="display:none">
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=376622798&site=qq&menu=yes">
        <img class="qqimg" src="http://wpa.qq.com/pa?p=2:376622798:52" alt="QQ在线客服" />技术支持
    </a>
</div>

<script type="text/javascript" src="{$config_siteurl}statics/default/js/online.js"></script>

<!--电脑版 end-->

<!--手机版-->
<nav class="navbar-default navbar-fixed-bottom footer_nav" style="background:#fafafa;">
    <div class="foot_nav"><a href="javascript:mShare()"><span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>分享</a></div>
    <div class="foot_nav"><a href=""><span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>电话</a></div>
    <div class="foot_nav" id="serviceBtn"><a onClick="showService()"><span class="glyphicon glyphicon glyphicon-headphones btn-lg" aria-hidden="true"></span>客服</a></div>
    <div class="foot_nav"><a id="gototop" href="#"><span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>顶部</a></div>
    <div id="mShareBox" style="position: fixed; display: none; z-index: 999; bottom: 47px; width: 100%; height: 45px; background: #fff; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 5px;">
        <!-- JiaThis Button BEGIN -->
        <div class="jiathis_style_m"></div>
        <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_m.js" charset="utf-8"></script>
        <!-- JiaThis Button END -->
    </div>
</nav>
<!--手机版 end-->

<script type="text/javascript">
    function mShare() {
        $("#mShareBox").toggle();
        $("#serviceBox").hide();
    }

    if ($(".banner .slider__wrapper li").length == 0) {
        $(".banner").addClass("emptyBanner");
    }

    function showService() {
        $("#mShareBox").hide();
        $("#serviceBox").toggle();
    }
</script>
