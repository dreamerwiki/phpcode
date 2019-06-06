$(document).ready(function(){
	$("#register").on('submit', function(e) {
		e.preventDefault();		
		//var data = $(this).serialize();						
		var name = $.trim($("#name").val()),
			age  = $.trim($("#age").val()),
			email = $.trim($("#email").val()),
			gender = $("input[name='gender']:checked").val(),	
			password = $("#password").val();
			skills = [];		
		    $.each($("input[name='skills[]']:checked"),function(){		    	
		    	skills.push($(this).val());
		    });
		    console.log('name', name);
		    console.log('age', age);
		    console.log('email', email);
		    console.log('gender', gender);
		    console.log('password', password);
		    console.log('skills', skills);

		$.ajax({
			type:'post',
			 url: 'controller/handler.php',
			 data:{
			 	name:name,
			 	age: age,
			 	email:email,
			 	gender:gender,
			 	password:password,
			 	skills:skills 
			 },
			 success:function(data){
			 	console.log('data: ',data);
			 },		
		});		    
	})
});