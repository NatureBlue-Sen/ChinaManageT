	<div class="mBottom"><table width="299" border="0" align="center" cellpadding="0" cellspacing="0" class="rightBox">
      <tr>
        <td height="30" class="rightMenuTop"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="11%" align="center"><img src="{dede:global.cfg_templeturl/}/skin/images/ico2.gif" width="9" height="10" /></td>
            <td width="89%" class="rightTitle">热点导读</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" background="{dede:global.cfg_templeturl/}/skin/images/rightBox_bg.gif">
		<div class="hotnews"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="line-i">
		 {dede:arclist row=10 orderby=click titlelen='40' typeid='all'}
<tr><td align="left"  class="line-i">&nbsp;<a href="[field:arcurl/]"
  title="标题：[field:fulltitle function='html2text(@me)'/]
作者：[field:writer /]
更新：[field:pubdate function='GetDateTimeMK(@me)'/]
点击：[field:click/]" target="_blank">[field:title/]</a></td></tr>
      {/dede:arclist}
</table></div></td>
      </tr>
      <tr>
        <td><img src="{dede:global.cfg_templeturl/}/skin/images/rightBox_bottom.gif" width="299" height="9" /></td>
      </tr>
    </table></div>