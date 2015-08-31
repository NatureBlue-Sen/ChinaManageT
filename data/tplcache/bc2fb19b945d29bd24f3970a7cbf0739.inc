<tr>
        <td class="leftTitle1"><a href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a></td>
      </tr>
      <tr>
        <td height="230" align="left" valign="top" class="leftBottomBg">
		<div class="downnews">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="line-i">
			 {dede:arclist titlelen='26' row='8'}
				<tr><td align="left"  class="line-i">&nbsp;<img src="[field:global.cfg_templeturl/]/skin/images/ico.gif"/>&nbsp;<a href="[field:arcurl /]" title="标题：[field:fulltitle function='html2text(@me)'/]
作者：[field:writer /]
更新：[field:pubdate function='GetDateTimeMK(@me)'/]
点击：[field:click/]" target="_blank">[field:title /]</a></td></tr>
			    {/dede:arclist}
			</table>
		</div></td>
      </tr>