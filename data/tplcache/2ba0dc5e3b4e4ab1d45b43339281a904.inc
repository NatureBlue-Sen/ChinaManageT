<td valign="top" width="50%" align="right">
<table width="388" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="9%" align="left" class="titleBg"><img src="{dede:global.cfg_templeturl/}/skin/images/titleLeft.gif" width="28" height="33" /></td>
            <td width="76%" align="left" class="titleBg"><a href="{dede:field name='typeurl'/}" title="{dede:field name='typename'/}">{dede:field name='typename'/}</a></td>
            <td width="12%" class="titleBg"><a href="{dede:field name='typeurl'/}"><img src="{dede:global.cfg_templeturl/}/skin/images/more.gif" width="42" height="17" align="absbottom" border="0"/></a></td>
            <td width="3%" align="right" class="titleBg"><img src="{dede:global.cfg_templeturl/}/skin/images/titleRight.gif" width="8" height="33" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
<td height="175" class="titleCont"><div class="titlep"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="line-i">
{dede:arclist titlelen='44' row='7'}
<tr><td align="left"  class="line-i">&nbsp;<img src="[field:global.cfg_templeturl/]/skin/images/ico.gif"/>&nbsp;<a href="[field:arcurl /]" title="标题：[field:fulltitle function='html2text(@me)'/]
作者：[field:writer /]
更新：[field:pubdate function='GetDateTimeMK(@me)'/]
点击：[field:click/]" target="_blank">[field:title /]</a></td>
<td align="right"  class="line-i"><font color="#999999">[</font><font color="#999999">[field:pubdate function="MyDate('Y-m-d',@me)"/]</font><font color="#999999">]</font></td></tr>
      {/dede:arclist}
</table></div></td>
      </tr>
    </table>
</td>
{dede:global name='itemindex' runphp='yes'}if(@me%2==0)@me='</tr><tr><td colspan="3" align="center" height="8"></td></tr><tr>';else @me='<td width="5"></td>';{/dede:global}