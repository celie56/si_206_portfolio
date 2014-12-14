
// happens at start
$(function(){
	$(".shide").toggle();
	$(".shide:first").toggle();

	$(".choice").click(function(){
		$loc = "." + $(this).attr("id");
		$($loc).toggle();
	});

	$(".yoxview").yoxview();

	$("#submit_button").click(function(){
		var request = $.ajax({
			type: "POST",
			url : "#",
			data : $("#Message").val(),
		});
		request.done(function(msg){
			alert("email sent");
		});
		request.fail(function(msg){
			alert("failure");
		});
	});
});

