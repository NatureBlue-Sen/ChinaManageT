<tr>
        <td height="30" class="newsTitle2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="33" align="left"><img src="{dede:global.cfg_templeturl/}/skin/images/title_ico1.gif" width="26" height="30" /></td>
            <td width="426" align="left" class="yjnews"><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a></td>
            <td width="87" align="left"><a href="{dede:field name='typeurl'/}"><img src="{dede:global.cfg_templeturl/}/skin/images/more2.gif" width="56" height="11" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
<td align="left" valign="top"><div class="newst">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    	<tr> 
		<td><table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr> 
		<td height="150" valign="top">		
			<table width="100%" border="0" cellpadding="0" cellspacing="0"  class="line-i">
		{dede:arclist row=7 titlelen=52 }	
<tr><td align="left" class="line-i">&nbsp;<img src="[field:global.cfg_templeturl/]/skin/images/ico.gif"/>&nbsp;<a href="[field:arcurl/]" title="标题：[field:fulltitle function='html2text(@me)'/]
更新：[field:pubdate function='GetDateTimeMK(@me)'/]" target="_blank" onClick="return newpage(this.href);">[field:title /]</a></td>
<td align="right"><font color="#999999">[</font><font color="#999999">[field:pubdate function="MyDate('Y-m-d',@me)"/]</font><font color="#999999">]</font></td></tr>
{/dede:arclist}
</table>
		</td>
		</tr>
	</table></td>
	</tr>
</table></td>
<!--栏目循环（4）-->
</tr><tr><td colspan="3" align="center" height="5"></td></tr><tr>
    </tr>
</table></div></td>
      </tr>