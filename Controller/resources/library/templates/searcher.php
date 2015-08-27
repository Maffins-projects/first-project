<script type="text/javascript">

function showResult(str)
{
	
	
	
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  document.getElementById("livesearch").style.visibility="hidden";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
	document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
 	document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    document.getElementById("livesearch").style.visibility	="visible";
    
	}
  }
  var randomnumber=new Date().getTime();
  
xmlhttp.open("GET","livesearch.php?q="+str+"&val="+ randomnumber,true);
xmlhttp.send();
}

</script><form action="_search.php" method="post" enctype="multipart/form-data" name="form1" id="form1" style="padding: 0px; margin:0px;" autocomplete="off" >
    <table width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr >
        <td >
          <input name="sq" type="text" id="sq" class="searchBG" onkeyup="showResult(this.value)"  />
        <div id="livesearch" class="resultBar"></div></td>
      </tr>
     </table>
</form>
<script type="text/javascript">

showResult('');

</script>
