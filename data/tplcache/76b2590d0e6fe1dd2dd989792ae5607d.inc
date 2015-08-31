<tr>
        <td class="annbg">{dede:field name='typename'/}</td>
      </tr>
      <tr>
        <td height="200" align="left" valign="middle">
		<MARQUEE id=scrollarea onmouseover=this.stop(); onmouseout=this.start(); scrollAmount=1 scrollDelay=0 direction=up  height=170>
	<div class="annou">
	  {dede:arclist titlelen='60' row='8'}
	¡¤<a href="[field:arcurl /]" title="[field:fulltitle function='html2text(@me)'/]" target="_blank">[field:title /]<br />
	 <div align="right">[field:pubdate function="MyDate('m-d',@me)"/]&nbsp;&nbsp;</a></div>
      {/dede:arclist}
   </div>
   </MARQUEE></td>
      </tr>