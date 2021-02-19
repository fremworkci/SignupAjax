$(document).ready(function(){

	//for signup
	$("#signup_form").on("submit",function(e){
		e.preventDefault();
		var url=BASE_URL+'Home/signup';
		$.ajax({
			url : url,
			type: 'POST',
			data: new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data)
			{
				var jdata=$.parseJSON(data);
				if(jdata.status=='true')
				{
					alert(jdata.message);
				}
			}
		});
	});

	//for login
	$("#login_form").on("submit",function(e){
		e.preventDefault();
		var url=BASE_URL+'Home/login';
		$.ajax({
			url : url,
			type: 'POST',
			data: new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data)
			{
				var jdata=$.parseJSON(data);
				if(jdata.status=='true')
				{
					window.location.href=BASE_URL+'Admin';
				}
				else
				{
					alert(jdata.message);
				}
				//alert(data);
			} 
		});
	});

	//for edit
	$("#editbtn").click(function(){
		var id=$(this).attr("data-eid");
		$("#modal").show();
		
	});

	$("#edit_form").on("submit",function(e){
		e.preventDefault();
		var url=BASE_URL+'Admin/update';
		$.ajax({
			url : url,
			type: 'POST',
			data: new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data)
			{
				//alert(data);
				$("#modal").hide();
				window.location.href=BASE_URL+'Admin';
			}
		});
	});
	

});