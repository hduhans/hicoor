
/*�˵�*/
function showMenu(i)
{
	var k;
	for(k=1;k<=6;k++)
	{
		document.getElementById("subMenu"+k).style.display="none";
	}
	document.getElementById("subMenu"+i).style.display="block";
}
function hideMenu()
{
	for(k=1;k<=6;k++)
	{
		document.getElementById("subMenu"+k).style.display="none";
	}
}



/*������*/
function searchFocus(obj) 
{
	if(obj.value == '��������������') 
	{
		obj.value = '';
	}
}
function searchBlur(obj) 
{
	if(obj.value == '' ) 
	{
		obj.value = '��������������';
	}
} 


/*ѡ��˵��ű�*/
function setTab(name,cursel,n){    //��վ��Ӫѡ��ű�
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"hover":"";
		con.style.display=i==cursel?"block":"none";
	}
}
