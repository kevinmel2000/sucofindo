var stRowList = [20,30,40,50,60,80,100,150,200,300,500,700,1000];

function generateGridView(idlist,idpager,url,title,column_list,model_list,row_num)
{
	var stHeight = 200;
	var stWidth = 800;
	var stSearch = true;
	var rNum = 50;
	
	if (!(typeof row_num === 'undefined'))
		rNum = row_num;	
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: rNum,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: true,
		multiboxonly: true
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewFroz(idlist,idpager,url,title,column_list,model_list,row_num)
{
	var stHeight = 200;
	var stWidth = 800;
	var stSearch = true;
	var rNum = 50;
	
	if (!(typeof row_num === 'undefined'))
		rNum = row_num;	
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: rNum,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		scroll		: false,
		altRows		: false,
		pager		: idpager,		
		shrinkToFit	: false,
		rownumbers	: true,
		footerrow	: false,
		userDataOnFooter: true
		/*,
		gridComplete: initGrid */
		
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}



function generateGridViewExport(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,shrink,postdata)
{
	if (typeof shrink === 'undefined')
		shrink = true;

	if (typeof postdata === 'undefined')
		postdata = {};	
	
	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = false;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 5000,
		rowList		: stRowList,
		loadonce	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		postData	: postdata,
		multiselect	: false,
		multiboxonly: true,
		shrinkToFit : false,
		sortable	: true,
		rownumbers: true,
		sortname	: sort_name,
		sortorder	: sort_order
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	return($(idlist));
}

function generateGridViewNo(idlist,idpager,url,title,column_list,model_list)
{
	var stHeight = 200;
	var stWidth = 800;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: false,
		multiboxonly: true,
		rownumbers: true
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewSingleSelectSortBy(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,row_num)
{
	var stHeight = 200;
	var stWidth = 800;
	var stSearch = true;

	if (typeof row_num === 'undefined')
	row_num = 50;

	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: false,
		multiboxonly: true,
		sortname	: sort_name,
		sortorder	: sort_order
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewSortBy(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,shrink,postdata)
{
	if (typeof shrink === 'undefined')
		shrink = true;

	if (typeof postdata === 'undefined')
		postdata = {};	
	
	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		/*loadonce	: true,*/
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		postData	: postdata,
		multiselect	: true,
		multiboxonly: true,
		shrinkToFit : shrink,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewSortByLocal(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,shrink,postdata)
{
	if (typeof shrink === 'undefined')
		shrink = true;

	if (typeof postdata === 'undefined')
		postdata = {};	
	
	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'local',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		postData	: postdata,
		multiselect	: true,
		multiboxonly: true,
		shrinkToFit : shrink,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewSortByRowNo(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,shrink)
{
	if (typeof shrink === 'undefined')
		shrink = true;
	
	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: false,
		multiboxonly: true,
		rownumbers	: true,
		rownumWidth : 35, 
		shrinkToFit : shrink,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewSortBy_RowNo_Parm(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,shrink)
{
	if (typeof shrink === 'undefined')
		shrink = true;
	
	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: false,
		multiboxonly: true,
		rownumbers	: true,
		rownumWidth : 35, 
		shrinkToFit : shrink,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	
	var post_data = {
						'ClientNamex' : $('#selClientName').val(),
						'VesselNamex' : $('#selVesselName').val(),
						'Cargox' : $('#selCargo').val(),
						'LoadingPortx' : $('#selLoadingPort').val(),
						'UnloadingPortx' : $('#selUnloadingPort').val()
					};
	return($(idlist));
}

function generateGridViewGroupBy(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,group)
{
	if (typeof shrink === 'undefined')
		shrink = true;

	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: true,
		multiboxonly: true,
		shrinkToFit : shrink,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order,
		grouping    : true,
		groupingView : {
				       groupField : [group],
   		               groupColumnShow : [false],
					   groupSummary : [true],
					   groupText : ['<b>{0}</b>'],
   		               groupCollapse : false,
   	               },
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewGroupBySumOnHide(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,group)
{
	if (typeof shrink === 'undefined')
		shrink = true;

	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: true,
		multiboxonly: true,
		shrinkToFit : shrink,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order,
		grouping    : true,
		groupingView : {
				       groupField : [group],
					   groupSummary : [true],
					   groupText : ['<b>{0}</b>'],
   		               groupCollapse : false,
   		groupColumnShow : [true],
		showSummaryOnHide: true,
		groupDataSorted : true
   	               },
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}

function generateGridViewSortByShrinkFLoader(idlist,idpager,url,title,column_list,model_list,sort_name,sort_order,shrink,floadcomplete,footerrow)
{
	if (typeof shrink === 'undefined')
		shrink = true;
	if (typeof footerrow === 'undefined')
		footerrow = true;

	var stHeight = 200;
	var stWidth = 1000;
	var stSearch = true;
	
	$(idlist).jqGrid({
		url			: url,
		caption		: title,
		datatype	: 'json',
		mtype		: 'POST',
		colNames	: column_list,
		colModel 	: model_list,
		rowNum		: 50,
		rowList		: stRowList,
		viewrecords	: true,
		altRows		: true,
		height		: stHeight,
		width		: stWidth,
		hidegrid	: false,
		viewrecords : true,  
		scroll		: false,
		altRows		: false,
		pager		: idpager,
		multiselect	: false,
		multiboxonly: true,
		shrinkToFit : shrink,
		'footerrow'	: footerrow,
		sortable	: true,
		sortname	: sort_name,
		sortorder	: sort_order,
		loadComplete: floadcomplete
	})
	.navGrid(idpager,{edit:false,add:false,del:false,search:stSearch},{},{},{},{multipleSearch:true})
	.navSeparatorAdd(idpager,{position: "first"});
	
	$(idlist).filterToolbar();
	$(idlist)[0].toggleToolbar();
	$(idlist).navButtonAdd(idpager,{position: "first",caption:"Cari&nbsp;&nbsp;",title:"Tampilkan Toolbar Pencarian Cepat", buttonicon :'ui-icon-pin-s', onClickButton:function(){ $(idlist)[0].toggleToolbar(); } });
	return($(idlist));
}


function gotoPage(apps, module, page, task, id, id2, id3)
{
	
	var str = "/";
	if (!(typeof apps === 'undefined'))
		str = str + apps + "/";
	if (!(typeof module === 'undefined'))
		str = str + module + "/";
	if (!(typeof page === 'undefined'))
		str = str + page + "/";
	if (!(typeof task === 'undefined'))
	{
		if (task === parseInt(task))
		{
				str = str + task + "/";
		}
		else
		{
			if (task.substring(0, 1) == '#')
				str = str + task;
			else
				str = str + task + "/";
		}
	}
	if (!(typeof id === 'undefined'))
		str = str + id + "/";
		
	if (!(typeof id2 === 'undefined'))
		str = str + id2 + "/";
	
	if (!(typeof id3 === 'undefined'))
		str = str + id3 + "/";
	
	window.location = str;
}

function fillSelect(url,selectID,default_value,post_data)
{
	if ((typeof default_value === 'undefined'))
		default_value = null;
	if ((typeof post_data === 'undefined'))
		post_data = {};
	
	$.post(url,post_data,function(result){
		var res = $.parseJSON(result);
		var sel = $('#'+selectID);
		$('#'+selectID+' option[value!="none"]').remove();
		$.each(res, function( key, row ) {
			var opt;
			if (row.value == default_value)
				opt = $('<option></option>')
					  .attr('value',row.value)
					  .attr('selected','selected')
					  .text(row.label);
			else
				opt = $('<option></option>')
					  .attr('value',row.value)
					  .text(row.label);
			sel.append(opt);
		});
	});
}

function ucfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function ucwords(str) {
  return (str + '')
    .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
      return $1.toUpperCase();
    });
}
String.prototype.ucfirst = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
};
String.prototype.ucwords = function() {
  return (this + '')
    .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1) {
      return $1.toUpperCase();
    });
};
String.prototype.initCap = function() {
   return this.toLowerCase().replace(/(?:^|\s)[a-z]/g, function (m) {
      return m.toUpperCase();
   });
};
function radionButtonSelectedValueSet(name, SelectdValue) {
    $('input[name="' + name+ '"][value="' + SelectdValue + '"]').prop('checked', true);
}

function friendlyDate(input){
    var d = new Date(Date.parse(input.replace(/-/g, "/")));
    var month = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nop', 'Des'];
    var date = d.getDay() + " " + month[d.getMonth()] + ", " + d.getFullYear();
    return (date);  
};

function friendlyDateTime(input){
    var d = new Date(Date.parse(input.replace(/-/g, "/")));
    var month = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nop', 'Des'];
    var date = d.getDay() + " " + month[d.getMonth()] + ", " + d.getFullYear();
    var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
    return (date + " " + time);  
};

function reformatDate(input) // turn "YYYY-MM-DD HH:MM:SS" to "DD-MM-YYYY"
{
	var date = input.substr(0,10);
	var year = date.substr(0,4);
	var month = date.substr(5,2);
	var day = date.substr(8,2);
	return(day+'-'+month+'-'+year);
}

function fmtFriendlyDate(val, opt, obj) // "DD-MM-YYYY"
{
	if (val == null || val == '') return('');
	var date = val.substr(0,10);
	var year = date.substr(0,4);
	var month = date.substr(5,2);
	var day = date.substr(8,2);
	return(day+'-'+month+'-'+year);
}

function fmtFriendlyDateTime(val, opt, obj) // "DD-MM-YYYY HH:MM:SS"
{
	if (val == null || val == '') return('');
	var date = val.substr(0,10);
	var year = date.substr(0,4);
	var month = date.substr(5,2);
	var day = date.substr(8,2);
	return(day+'-'+month+'-'+year+' '+val.substr(11,8));
}

function fmtAreaUnit(cellvalue, options, rowObject)
{
	if (cellvalue == '')
		return('');
	else
		return(cellvalue + ' m²');
}

function round(value, decimals) {
  return parseFloat(Number(Math.round(value+'e'+decimals)+'e-'+decimals).toString()).toFixed(decimals);
}

function bytesToSize(bytes, precision)
{  
	var kilobyte = 1024;
	var megabyte = kilobyte * 1024;
	var gigabyte = megabyte * 1024;
	var terabyte = gigabyte * 1024;
   
	if ((bytes >= 0) && (bytes < kilobyte)) {
		return bytes + ' B';
 
	} else if ((bytes >= kilobyte) && (bytes < megabyte)) {
		return (bytes / kilobyte).toFixed(precision) + ' KB';
 
	} else if ((bytes >= megabyte) && (bytes < gigabyte)) {
		return (bytes / megabyte).toFixed(precision) + ' MB';
 
	} else if ((bytes >= gigabyte) && (bytes < terabyte)) {
		return (bytes / gigabyte).toFixed(precision) + ' GB';
 
	} else if (bytes >= terabyte) {
		return (bytes / terabyte).toFixed(precision) + ' TB';
 
	} else {
		return bytes + ' B';
	}
}

function fmtFileSize(val, opt, obj)
{
	return(bytesToSize(val,2));
}				

function fmtDate(val, opt, obj) // "YYYY-MM-DD"
{
	if (val == null || val == '') return('');
	return(val.substr(0, val.length-12));
}

function fmtDateTime(val, opt, obj) // "YYYY-MM-DD HH:MM:SS"
{
	if (val == null || val == '') return('');
	return(val.substr(0, val.length-7));
}

function frmDuration(val, opt, obj) // "strip all character after . (dot) character"
{
	var str = val.substring(0, val.indexOf("."));
	str = str.replace("days","hari");
	str = str.replace("day","hari");
	return(str);
}

function fmtUCWords(val, opt, obj) // "Ipsum Lorem Dolor Sit Amet" 
{
	if (val == null || val == '') return('');
	return(val.initCap());
}

function fmtUCFirst(val, opt, obj) // "Ipsum lorem dolor sit amet"
{
	if (val == null || val == '') return('');
	return(ucfirst(val));
}

function number_format(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}
var currency_options = {decimalSeparator:".", thousandsSeparator: ",", decimalPlaces: 0, prefix: "Rp.", suffix:"", defaultValue: 'Rp.0'};

function fmtFileSize(val, opt, obj)
{
	return(bytesToSize(val,2));
}

function bytesToSize(bytes, precision)
{  
	var kilobyte = 1024;
	var megabyte = kilobyte * 1024;
	var gigabyte = megabyte * 1024;
	var terabyte = gigabyte * 1024;
   
	if ((bytes >= 0) && (bytes < kilobyte)) {
		return bytes + ' B';
 
	} else if ((bytes >= kilobyte) && (bytes < megabyte)) {
		return (bytes / kilobyte).toFixed(precision) + ' KB';
 
	} else if ((bytes >= megabyte) && (bytes < gigabyte)) {
		return (bytes / megabyte).toFixed(precision) + ' MB';
 
	} else if ((bytes >= gigabyte) && (bytes < terabyte)) {
		return (bytes / gigabyte).toFixed(precision) + ' GB';
 
	} else if (bytes >= terabyte) {
		return (bytes / terabyte).toFixed(precision) + ' TB';
 
	} else {
		return bytes + ' B';
	}
}

function getDateDDMMYYYY(date)
{
    var matches = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/.exec(date);
    if (matches == null) return false;
    var d = matches[1];
    var m = matches[2] - 1;
    var y = matches[3];
    var composedDate = new Date(y, m, d);
	return(composedDate)
}

function getDateYYYYMMDD(date)
{
    var matches = /^(\d{4})[-\/](\d{1,2})[-\/](\d{1,2})$/.exec(date);
    if (matches == null) return false;
    var d = matches[3];
    var m = matches[2] - 1;
    var y = matches[1];
    var composedDate = new Date(y, m, d);
	return(composedDate)
}

function isValidDateDDMMYYYY(date)
{
    var matches = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/.exec(date);
    if (matches == null) return false;
    var d = matches[1];
    var m = matches[2] - 1;
    var y = matches[3];
    var composedDate = new Date(y, m, d);
    return composedDate.getDate() == d &&
            composedDate.getMonth() == m &&
            composedDate.getFullYear() == y;
}

function isValidDateYYYYMMDD(date)
{
    var matches = /^(\d{4})[-\/](\d{1,2})[-\/](\d{1,2})$/.exec(date);
    if (matches == null) return false;
    var d = matches[3];
    var m = matches[2] - 1;
    var y = matches[1];
    var composedDate = new Date(y, m, d);
    return composedDate.getDate() == d &&
            composedDate.getMonth() == m &&
            composedDate.getFullYear() == y;
}

if (jQuery.datepicker)
{
	jQuery.datepicker.setDefaults(jQuery.datepicker.regional["id"]);
	jQuery.datepicker.setDefaults({
		beforeShow: function(i, e){
			var z = jQuery(i).closest(".ui-jqdialog").css("z-index") + 4;
			e.dpDiv.css('z-index', 1200);
		},	
		showOn: 'both',
		buttonImageOnly: true,
		buttonImage: '/images/icons/date_picker.png',
		dateFormat: 'dd-mm-yy',
		buttonText: 'Calendar'
	});
}

$(document).ready(function() {
	if (jQuery.datepicker)
	{
		$('.dtp').datepicker();
		$('.dtp2').datepicker({
			changeMonth: true,
			changeYear: true
		});
	}
	
	if ($.fn.datetimepicker)
	{
		$('.dthp').datetimepicker({
		   step: 5,
           lang: 'id',
           format: 'd-m-Y H:i',
		   timepicker: true}
		);
	}
	
	if (jQuery.number)
	{
		$('.num').number(true, 0);
		$('.num2').number(true, 2);
		$('.num3').number(true, 3);
	}
});
/*
$.widget('ui.dialog', $.ui.dialog, {
	_allowInteraction: function(event) {
		return !!$(event.target).closest('[class*="cke"]').length || this._super(event);
	}
});

$.widget('ui.dialog', $.ui.dialog, {
    _allowInteraction: function( event ) {
        //This overrides the jQuery Dialog UI _allowInteraction to handle the sencha
        //extjs filter's not working.
        //this._super(event) passes onto the base jQuery UI
        return !!$( event.target ).closest( ".x-panel :input" ).length || this._super( event );
    }
});
*/