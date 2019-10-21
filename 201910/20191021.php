{hkcms:get sql="SELECT * FROM hkcms_article WHERE status=99 ORDER BY inputtime DESC" page="$page" num="5"}
表前缀可以使用lvyecms代替，系统会自动替换为你安装时所设置的表前缀！
循环列表，默认返回数据是$data
    <ul>
             {volist name="data" id="vo"}
            <li>标题：{$vo.title}，地址：{$vo.url}</li>
        {/volist}
    </ul>
    分页：{$pages}
{/hkcms:get}

{hkcms:get table="hkcms_article" status="99" order="inputtime DESC" page="$page" num="5"}
循环列表，默认返回数据是$data
    <ul>
        {volist name="data" id="vo"}
            <li>标题：{$vo.title}，地址：{$vo.url}</li>
        {/volist}
    </ul>
    分页：{$pages}
{/hkcms:get}

参数	说明
@sql	SQL语句，强烈建议只用于select类型语句，其他SQL有严重安全威胁，同时不建议直接在SQL语句中使用外部变量，如:$_GET,$_POST等。出现“>”，“，{lt}代替，{elt}代替=
@page	当前分页号，默认$page，当传入该参数表示启用分页，一个页面只允许有一个page，多个标签使用多个page会造成不可预知的问题
@num	每次返回数据量
@cache	数据缓存时间，单位秒
@return	返回值变量名称，默认data
@pagefun	分页函数，默认page()
@pagetp	分页模板
@table	表名，不用填写表前缀，当存在@table参数时，忽略@sql参数
@order	排序参数，只有配合@table参数有效
@where	SQL的where部分条件，只有配合@table参数有效
