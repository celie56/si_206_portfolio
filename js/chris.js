
// happens at start
$(function(){
	$(".shide").toggle();
	$(".shide:first").toggle();

	$(".choice").click(function(){
		$loc = "." + $(this).attr("id");
		$(".shide").hide();
		$($loc).toggle();
	});

	$(".yoxview").yoxview();
});

