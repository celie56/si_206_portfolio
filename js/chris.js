
// happens at start
$(function(){
	$(".shide").toggle();
	$(".shide:first").toggle();

	$(".choice").click(function(){
		$loc = "." + $(this).attr("id");
		$(".shide").hide();
		$($loc).toggle();
		return false;
	});

	$(".yoxview").yoxview();

	// this will handle the form without redirecting
//	$("#submit_button").click(function(){
//		var request = $.ajax({
//			type: "POST",
//			url : "submit.php",
//			data : $("#Message").val(),
//		});
//		request.done(function(msg){
//			alert("email sent");
//			console.log(msg);
//		});
//		request.fail(function(msg){
//			alert("failure");
//		});
//	});
});

