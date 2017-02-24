$(document).ready(function() {
	$("#languageSwitcher").change(function(){
		var locale=$("#languageSwitcher").val();

		var _token=document.getElementsByName("_token")[0].value;


		$.ajax({
			url:"language",
			type:"POST",
			data:{locale:locale, _token:_token},
			datatype:'json',
			success:function(data){
				alert('sukses');
			},

			error:function(data){
				alert('error');
			},

			beforeSend:function(data){

			},

			complete:function(data){
				window.location.reload(true);
			}
		});
	});
});