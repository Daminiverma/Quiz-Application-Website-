$(document).ready(function () {

// Global Variables.
	window.user = null,window.name = null;

// Local Variables.
// Functions:
	// Checking validity of input Types.
	function checkValid (inputId) {
		if(inputId[0].checkValidity() == false)
		{
			inputId.parent().next().removeClass("hide");
			flag = 0;
		}
		else
		{
			inputId.parent().next().addClass("hide");
			flag = 1;
		}
		return flag;
	}

// Events:
	$("#menu").click(function(){
		$("#identity").removeClass("hide");
		$("#gk-it").addClass("hide");
		$("#quiz-types").addClass("hide");
		$("#difficulty-level").addClass("hide");
		$("#quiz-levels").addClass("hide");
		$("#user-settings").addClass("hide");
		$("#div-history").addClass("hide");
		$("#what").removeClass("hide");
		$("#btn-start-quiz").addClass("hide");
		$("#result").addClass("hide");
	});

	$("#accounts").click( function () {
		$(this).addClass("act");
		$("#history").removeClass("act");
		$("#about").removeClass("act");
	});

	$("#history").click( function () {
		$(this).addClass("act");
		$("#accounts").removeClass("act");
		$("#about").removeClass("act");
	});

	$("#about").click( function () {
		$(this).addClass("act");
		$("#accounts").removeClass("act");
		$("#history").removeClass("act");
	});

	$("#div-login").click( function () {
		$("#login").removeClass("hide");
		$("#register").addClass("hide");
		$("#div-login").removeClass("black");
		$("#div-login").addClass("white");
		$("#div-register").removeClass("white");
		$("#div-register").addClass("black");
	});

	$("#div-register").click( function () {
		$("#register").removeClass("hide");
		$("#login").addClass("hide");
		$("#div-register").removeClass("black");
		$("#div-register").addClass("white");
		$("#div-login").removeClass("white");
		$("#div-login").addClass("black");
	});

// Button Click Events:
	// Login.
	$("#go-play").click(function () {
		$("#what").addClass("hide");
		$("#gk-it").removeClass("hide");
	});

	$("#go-setting").click(function () {
		$("#identity").addClass("hide");
		$("#what").addClass("hide");
		$("#user-settings").removeClass("hide");

		$.ajax({ type : "GET",
			url : "select.php",
			data :{temp:"select", user : window.user.val()},
			success : function (dataUpdate) {
				$("#newFirst").val(dataUpdate[0]);
				window.name = $("#newFirst").val();
				$("#newLast").val(dataUpdate[1]);
				$("#oldPass").val(dataUpdate[2]);
				$("#newPass").val(dataUpdate[2]);
				$("#newPhone").val(dataUpdate[3]);
				$("#newAddress").val(dataUpdate[4]);
			}
		});
	});
	
	$("#go-history").click(function(){
		$("#what").addClass("hide");
		$("#div-history").removeClass("hide");
		$.ajax({type:"GET",
			url : "history.php",
			data : {email:window.user.val()},
			success : function(data)
			{
				var type,level;
				var row;
				for(var i=0;i<data.length;i++)
				{
					if(data[i][1]==1){type = "G.K.";}
					else {type = "I.T.";}
					if(data[i][2]==1){level = "Easy";}
					else{level = "Hard"};
					if(data[i][3] == ""){data[i][3] = "Not Attempted"}
					row = "<tr><td>"+data[i][0]+"</td><td>"+type+"</td><td>"+level+"</td><td>"+data[i][3]+"</td></tr>";
					$("#table-history tbody").append(row);
				}

			}
		});
	});

	$("#btn-update").click(function () {
		var flag = 1;

		flag = checkValid($("#newFirst"));
		flag = checkValid($("#newLast"));
		if(($("#newPass").val() == "") || ($("#newPass").val().length < 5))
		{
			$("#newPass").parent().next().removeClass("hide");
			flag = 0;
		}
		if(flag == 1)
		{
			$.ajax({ type : "GET",
				url : "select.php",
				data : {temp:"update", user : window.user.val(), fname:$("#newFirst").val(),lname:$("#newLast").val(),pass:$("#newPass").val(), contact:$("#newPhone").val(), home:$("#newAddress").val()},
				success : function (data) 
				{
					$("#identity").text("");
					window.name = data;
					$("#identity").append("Welcome "+data+"<span id='icon-logout'>Logout <i class='glyphicon glyphicon-log-out'></i></span>");
						//Logout
						$("#icon-logout").click(function () {
							location.reload();
					});
					$("#what").removeClass("hide");
					window.alert("User Details Successfully Updated !");
					$("#user-settings").addClass("hide");
					$("#identity").removeClass("hide");
				}
			});
		}	
	});

	$("#btn-login").click(function(){
		window.user = $("#logEmail");
		var log_pass = $("#logPass");
		flag = 1;
		flag = checkValid(user);
		flag = checkValid(log_pass);
		if(flag == 1)
		$.ajax({ type : "GET",
			url : "register_login.php",
			data : {login_email:user.val(),login_pass:log_pass.val(),flg:"login"},
			success : function (data)
			{	
				// console.log(data);
				if(data == false)
				{
					$temp = "Invalid Username or password.";
					window.alert($temp);
				}
				else
				{
					$("#menu").removeClass("hide");
					$(".login-register").addClass("hide");
					$("#identity").removeClass("hide");
					$("#what").removeClass("hide");
					window.name = data;
					$("#identity").append("Welcome "+data+"<span id='icon-logout'>Logout <i class='glyphicon glyphicon-log-out'></i></span>");
					//Logout
					$("#icon-logout").click(function () {
						location.reload();
					});
				}
			}
		});
	});

	// Register.
	$("#btn-register").click(function(){
		window.user = $("#regEmail");
		var firstName = $("#fname");
		var lastName = $("#lname");
		var r_password = $("#registerPassword");
		var rePassword = $("#registerReEnterPassword");
		var phone = $("#phone");
		var address = $("#homeAddress");
		var flag = 1;

		flag = checkValid(firstName);
		flag = checkValid(lastName);
		flag = checkValid(window.user);
		if((r_password.val() == "") || (r_password.val().length < 5))
		{
			r_password.parent().next().removeClass("hide");
			flag = 0;
		}
		else
		{
			r_password.parent().next().addClass("hide");
		}
		if(rePassword.val() != r_password.val())
		{
			rePassword.parent().next().removeClass("hide");
			flag = 0;
		}
		else
		{
			rePassword.parent().next().addClass("hide");	
		}
		if(flag){
			$.ajax({ type : "GET",
				url : "register_login.php",
				data : {fname:firstName.val(),lname:lastName.val(),reg_mail:user.val(),reg_pass:r_password.val(), contact:phone.val(), home:address.val(), flg:"register" },
				success : function (data) 
				{
					// console.log(data);
					if(data == true)
					{
						$temp = user.val()+" already Exists. Try with another one.";
						window.alert($temp);
					}
					else
					{
						$("#menu").removeClass("hide");
						$("#what").removeClass("hide");
						$(".login-register").addClass("hide");
						$("#identity").removeClass("hide");
						window.name = firstName.val();
						$("#identity").append("Welcome "+firstName.val()+"<span id='icon-logout'>Logout <i class='glyphicon glyphicon-log-out'></i></span>");

						//Logout
						$("#icon-logout").click(function () {
							location.reload();
						});
					}
				}
			});
		}
	});
});