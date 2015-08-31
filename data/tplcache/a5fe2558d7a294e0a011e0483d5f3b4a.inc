{dede:noteinfo notename="新闻" channelid="1" macthtype="string"
    refurl="http://" sourcelang="gb2312" cosort="asc"
  isref="no" exptime="10" usemore="0" /}
{dede:listrule sourcetype="hand" rssurl="http://" regxurl="http://"
startid="1" endid="" addv="1" urlrule="area" musthas=".html"
 nothas="" listpic="1" usemore="0"}
    {dede:addurls}http://dangjian.zf11.com/Article/ShowClass.asp?ClassID=6{/dede:addurls}
    {dede:batchrule}{/dede:batchrule}
    {dede:regxrule}{/dede:regxrule}
    {dede:areastart}<table width="95%"  border="0" cellpadding="0" cellspacing="0">{/dede:areastart}
    {dede:areaend}<table width="639" border="0" cellpadding="0" cellspacing="0">{/dede:areaend}
{/dede:listrule}
{dede:sppage sptype='full' srul='1' erul='5'}{/dede:sppage}
{dede:previewurl}http://dangjian.zf11.com/zf/Article/270.html{/dede:previewurl}
{dede:keywordtrim}{/dede:keywordtrim}
{dede:descriptiontrim}{/dede:descriptiontrim}
{dede:item field='title' value='' isunit='' isdown=''}
   {dede:match}<td align="center" valign="middle"><h1>[内容]</h1></td>{/dede:match}
   
   {dede:function}{/dede:function}
{/dede:item}{dede:item field='writer' value='' isunit='' isdown=''}
   {dede:match}{/dede:match}
   
   {dede:function}{/dede:function}
{/dede:item}{dede:item field='source' value='' isunit='' isdown=''}
   {dede:match}{/dede:match}
   
   {dede:function}{/dede:function}
{/dede:item}{dede:item field='pubdate' value='' isunit='' isdown=''}
   {dede:match}{/dede:match}
   
   {dede:function}{/dede:function}
{/dede:item}{dede:item field='body' value='' isunit='1' isdown='1'}
   {dede:match}<DIV class=Content id=fontzoom style="FONT-SIZE: 14px; LINE-HEIGHT: 32px">[内容]</td>
              </tr>
            </table></td></tr>{/dede:match}
   
   {dede:function}{/dede:function}
{/dede:item}