$(document).ready(function () {

// Global Variables.
	window.ans = Array();
	window.clearTimer, window.quizType, window.quizLevel, window.rand = [], window.counter = 0;

//Local Variables.
	var count = 599, time, minute, second, quesBank;

// Functions.
	// Timer.
	function updateTimer() {
		if(count == 5)
		{
			$("#timer-right").css('color','red');
		}
		if(count == -1)
		{
			clearInterval(window.clearTimer);
			$("#btn-next").addClass("hide");
			$("#btn-finish").removeClass("hide");
			$(".radioButton").attr('disabled', true); 
			window.alert("Time Out !");
		}
		else
		{
			minute = parseInt(count/60);
			second = parseInt(count%60);
			time = minute + " : " + second;
			$("#timer-right").text(time);
			count--;
		}
	}

	// Change Questions.
	function changeQues (counter) {
		var ques;
		ques = quesBank[counter];
		$(".radioButton").prop("checked",false);
		$("#head").text(ques[0]);
		$("#id-op1").text(ques[1]);
		$("#id-op2").text(ques[2]);
		$("#id-op3").text(ques[3]);
		$("#id-op4").text(ques[4]);
	}

//Events.
	// QuizType.
	$("#gk").click(function () {
		window.quizType = "GK";
		$(this).parent().next().text("Quiz Type: "+window.quizType);
		$("#gk-it").addClass("hide");
		$("#quiz-types").removeClass("hide");
		$("#difficulty-level").removeClass("hide");
	});
	$("#it").click(function () {
		window.quizType = "IT";
		$(this).parent().next().text("Quiz Type: "+window.quizType);
		$("#gk-it").addClass("hide");
		$("#quiz-types").removeClass("hide");
		$("#difficulty-level").removeClass("hide");
	});

	// Difficulty Level.
	$($("#difficulty-level").children()[1]).click(function () {
		$($(this).children()[0]).prop("checked",true);
		$("#btn-level-continue").removeClass("hide");
		window.quizLevel = "Easy";
	});

	$($("#difficulty-level").children()[2]).click(function () {
		$($(this).children()[0]).prop("checked",true);
		$("#btn-level-continue").removeClass("hide");
		window.quizLevel = "Hard";
	});

	// Button Click Events.
	$("#btn-level-continue").click(function() {
		$(this).parent().next().text("Difficulty level: "+window.quizLevel);
		$("#difficulty-level").addClass("hide");
		$("#quiz-levels").removeClass("hide");
		$("#btn-start-quiz").removeClass("hide");
	});

	$("#btn-start-quiz").unbind("click",false);
	$("#btn-start-quiz").click(function() {
		$("#btn-next").removeClass("hide");
		$("#btn-finish").addClass("hide");
		window.counter = 0;
		$.ajax({ type : "GET",
			url : "user_info.php",
			data : {mail:window.user.val(), type:window.quizType, level:window.quizLevel},
		});

		$.ajax({

			url:"generateRandom.php",
			data:{
				type : window.quizType, 
				level : window.quizLevel
			},
			success: function (data1) 
			{
				window.rand = data1;
				console.log("rand = "+window.rand);
				
				$.ajax({

					url:"questions.php",
					data:{
						rand : window.rand,
					},
					success: function (data2) 
					{
						quesBank = data2;
						changeQues(window.counter);
						window.counter = window.counter+1;
					}
				});
			}
		});
		$('#icon-logout').attr('disabled',true);
		$("#menu").addClass("hide");
		$("#btn-start-quiz").addClass("hide");
		$("#timer").removeClass("hide");
		$("#main-quiz").removeClass("hide");
		setTimeout(function (){
			window.clearTimer = setInterval(updateTimer, 1000);
		}, 3000);
	});

	$("#btn-next").click(function () {
		if(window.counter < 10)
		{
			if(window.counter == 9)
			{
				$("#btn-next").addClass("hide");
				$("#btn-finish").removeClass("hide");
			}
			var flag = 0;
			$(".radioButton").each(function () {
				if($(this).prop("checked"))
				{
					res = $(this).next().text();
					flag = 1;
				}
			});
			if(flag == 1)
			{
				window.ans.push(res);
			}
			else
			{
				window.ans.push("");
			}
			changeQues(window.counter);
			window.counter++;
		}
	});
});