$(document).ready(function(){
	$("button").on("click",function(){
		
$.getJSON("test1.json",function(table){
	$.each(table,function(key, value)
	{
	
	  $("ul").append("<li>"+key[0]+"</li>");
	
	
	
});
	
	
});
	});

});