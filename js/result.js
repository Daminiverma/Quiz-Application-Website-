$(document).ready(function () {
// Global Variables.

// Local Variables.
	var correctAnswers = 0, wrongAnswers = 0;
	var questions, allCorret;

//Events.
	//Button Click Events.
	$("#btn-finish").click(function () {
		clearInterval(window.clearTimer);
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
			console.log(ans);

		$.ajax({
			type : "GET",
			url : "result.php",
			data : {ans : window.ans,rand : window.rand, count : window.counter},
			success : function (data1) {
				correctAnswers = data1['Correct'];
				wrongAnswers = data1['Wrong'];
				allCorret = data1['AllCorrect'];
				questions = data1['ques'];

				$("#showResults").click(function () {
					$(this).addClass("hide");
					$("#result").removeClass("hide");
					$("#result-score").text(correctAnswers+"/10");
					$("#result-correct").text(correctAnswers+"/10");
					$("#result-wrong").text(wrongAnswers+"/10");

					for(var i =0;i<window.counter;i++)
					{
						var row = "<tr><td id='que"+[i]+"' class='row1' colspan = 2>"+questions[i]+"</td></tr> <tr> <td class='row2'><div class='subdiv0'>You Answered:</div><div id='you"+[i]+"' class='subdiv1'>"+window.ans[i]+"</div></td><td class='row3'><div class='subdiv0'>Correct Answer:</div><div id='crr"+[i]+"' class='subdiv1'>"+allCorret[i]+"</div></td></tr>";
						$("#modal-table tbody").append(row);
						if(window.ans[i] == "")
						{
							$("#you"+[i]+"").text("-");
						}
						if(window.ans[i] == allCorret[i])
						{
							$("#you"+[i]+"").addClass("green");
						}
						else
						{
							$("#you"+[i]+"").addClass("red");
						}
					}
					var message = "";

					if(correctAnswers >= 8)
					{
						$("#result-text").append(" Qualified");
						message = "Well Done! "+window.name+", You have successfully passed the test. You are now certified in Quiz, where "+window.quizType+" with "+window.quizLevel+" level is the certification topic you have chosen for this assignment.";
					}
					else
					{
						$("#result-text").append(" Not Qualified");
						message = "Oh! "+window.name+", Unfortunately you did not pass the test. Please try again later!";
					}
					window.alert(message);
				});

				$.ajax({
					type : "GET",
					url : "addscore.php",
					data : {score : correctAnswers}
				});
			}
		});
		$("#timer").addClass("hide");
		$("#main-quiz").addClass("hide");
		$("#quiz-completed").removeClass("hide");
		$("#showResults").removeClass("hide");
	});

});