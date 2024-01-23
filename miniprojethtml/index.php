<script language="javascript">
fontSize=26;
function zoomintext(idText){
newfontSize=fontSize*(1.1);
document.getElementById(idText).style.fontSize =newfontSize+'px';
fontSize=newfontSize;
}
function zoomouttext(idText){
newfontSize=fontSize/(1.1);
document.getElementById(idText).style.fontSize =newfontSize+'px';
fontSize=newfontSize;
}
</script>
<div id="zoomtextdiv"> <a href="http://www.sanwebcorner.com/">SAN WEB CORNER</a></div><br />
<a href="#" onclick="javascript:zoomintext('zoomtextdiv')">Zoom In</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="#" onclick="javascript:zoomouttext('zoomtextdiv')">Zoom Out</a>