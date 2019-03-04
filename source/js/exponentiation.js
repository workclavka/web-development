$( document ).ready(function() {
	var url = window.location.href
	var arr = url.split("/");
	var path = arr[0] + "//" + arr[2]+ "/";

	$("#performExponentiation").on('click', function() {
		// Получаем занчения полей
		var number = $("#numberForExponentiation").val();
		var power = $("#powerForExponentiation").val();
		var type = "exponentiation";

		// Отправляем post запрос для выполнения операции и получения ответа
		$.post(path + "arithmetic-operations/perform-operation/",{
			number: number, power: power, type: type
		}).done(function(data) {
			$("#resultExponentiation").html(data);
		});
	});
});