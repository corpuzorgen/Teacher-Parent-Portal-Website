$(function(){

	// Get all info from admin
	$.ajax({
		type: "GET",
		url: "../function/admin_function.php",
		success: function(data){
			if(data.admincheckname == true){
				$(".admin_accountname").html(data.admin_accountname);
			}
			
		}
	});





	$("#admin_form_login").submit(function(e){
		e.preventDefault();

		var adminid = $.trim($("#admin_username").val());
		var adminpass = $.trim($("#admin_password").val());

		if( adminid == ""){
			$("#admin_username").addClass("invalid");
			$("#admin_username").next("label").attr("data-error","This field is required").addClass("active");
		}else{
			$("#admin_username").addClass("valid");
			$("#admin_username").next("label").attr("data-error", "");
		}
		if( adminpass == ""){
			$("#admin_password").addClass("invalid");
			$("#admin_password").next("label").attr("data-error","This field is required").addClass("active");
		}else{
			$("#admin_password").addClass("valid");
			$("#admin_password").next("label").attr("data-error", "");
		}

		if(!$(".admin_input_login").hasClass("invalid")){
			var admin_login_serialize = $("#admin_form_login").serialize();
			$.ajax({
				type: "POST",
				url: "../function/admin_function.php",
				data: admin_login_serialize,
				beforeSend: function(){
					$(".admin-btn-login").html("Authorizing...");
				},
				success: function(data){
					$(".admin-btn-login").html("Log me in <i class='material-icons right'>forward</i>");
					if(data.adminlogin != true){
						$(".admin_input_login").removeClass("valid").addClass("invalid");
						$(".msgadminlogin").removeClass("hidden").addClass("visible");
						$(".admin-msg-login").html(data.adminlogin);
					}else{
						$(".admin_input_login").removeClass("invalid").addClass("valid");
						$(".msgadminlogin").removeClass("visible").addClass("hidden");
						window.location="../admin/dashboard.php";
					}
				}
			});
		}
	});


	

});