function goPage(pno,psize){
	var itable = document.getElementById("idData");
	var num = itable.rows.length;//表格行数
	var totalPage = 100;//总页数
	var pageSize = psize;//每页显示行数
	if((num)/pageSize > parseInt((num)/pageSize)){   
   		 totalPage=parseInt((num)/pageSize)+1;   
   	}else{   
   		totalPage=parseInt((num)/pageSize);   
   	}   
	var currentPage = pno;//当前页数
	var startRow = (currentPage - 1) * pageSize;//开始显示的行
   	var endRow = currentPage * pageSize;//结束显示的行
   	endRow = (endRow > num)? num : endRow;
	//前N行始终显示
	for(i=0;i<0;i++){
		var irow = itable.rows[i];
		irow.style.display = "block";
	}
	
	for(var i=0;i<num;i++){
		var irow = itable.rows[i];
		if(i>=startRow&&i<endRow){
			irow.style.display = "block";	
		}else{
			irow.style.display = "none";
		}
	}
	var pageEnd = document.getElementById("pageEnd");
	var tempStr = "搜索到 "+(num)+" 条记录 共 "+totalPage+" 页 当前第 "+currentPage+" 页";
	if(currentPage>1){
		tempStr += "<a href=\"#\" onClick=\"goPage("+(currentPage-1)+","+psize+")\" class=\'badge badge-info\'> 上一页 </a>"
	}else{
		tempStr += "<span class=\'badge badge-info\'> 上一页 </span>";	
	}
	if(currentPage<totalPage){
		tempStr += "<a href=\"#\" onClick=\"goPage("+(currentPage+1)+","+psize+")\" class=\'badge badge-info\'> 下一页 </a>";
	}else{
		tempStr += "<span class=\'badge badge-info\'> 下一页 </span>";	
	}
	if(currentPage>1){
		tempStr += "<a href=\"#\" onClick=\"goPage("+(1)+","+psize+")\" class=\'badge badge-info\'> 首页 </a>";
	}else{
		tempStr += "<span class=\'badge badge-info\'> 首页 </span>";
	}
	if(currentPage<totalPage){
		tempStr += "<a href=\"#\" onClick=\"goPage("+(totalPage)+","+psize+")\" class=\'badge badge-info\'> 尾页 </a>";
	}else{
		tempStr += "<span class=\'badge badge-info\'> 尾页 </span>";
	}
	document.getElementById("barcon").innerHTML = tempStr;
	
}