$(document).ready(function () {
	$.ajax({ type : "GET",
			url : "history.php",
			data : {email:window.user},
			success : function (data)
			{	
				console.log(data);
			}
		});
});