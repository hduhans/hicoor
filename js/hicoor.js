
/*菜单*/
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



/*搜索框*/
function searchFocus(obj) 
{
	if(obj.value == '请输入搜索内容') 
	{
		obj.value = '';
	}
}
function searchBlur(obj) 
{
	if(obj.value == '' ) 
	{
		obj.value = '请输入搜索内容';
	}
} 


/*选择菜单脚本*/
function setTab(name,cursel,n){    //建站运营选项卡脚本
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"hover":"";
		con.style.display=i==cursel?"block":"none";
	}
}
