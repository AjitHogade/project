var timer;

function up()
{
var clients = $("#clients").val();

//alert("Searching "+clients);
  if(clients.length>2){
  	$.ajax({
  type: "GET",
  url: "searchClients",
  data: { keywords: clients },
  success: function(response){
var data = $.parseJSON(response);
var names = [];
var appendValues = "<ul class='options'>"
   $.each(data, function(i, item){
	appendValues += "<li class='optionValue'>"+item.name+"</li>"
	//names.push(item.name);
   });
appendValues += "</ul>";
$("#livesearch").append(appendValues);
  }
});
        } else {

 } 
}
