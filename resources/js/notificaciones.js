addEventListener("load",cargar,false);

function cargar(){
	var notif=document.getElementsByClassName("close");
	for(var i=0; i<notif.length; i++)
	{
		notif[i].addEventListener("click",ocultar,false);
	}
}

function ocultar(e)
{
	e.target.parentNode.style.display="none";
}