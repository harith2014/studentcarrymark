function sum()
{
		var num1 = document.myform.quiz.value;
		var num2 = document.myform.test.value;
		var num3 = document.myform.assign.value;
		var num4 = document.myform.proj.value;
		var sum = parseInt(num1) + parseInt(num2) + parseInt(num3) + parseInt(num4);
		document.getElementById('add').value = sum;
}