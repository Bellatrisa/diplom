jQuery(document).ready(function($){

	$("form#data").submit(function(){
		alert("sdf");
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: "./uploadFile.php",
			type: 'POST',
			data: formData,
			async: false,
			success: function (data) {
				alert(data)
			},
			cache: false,
			contentType: false,
			processData: false
		});

		return false;
	});
});