// Отправка заявки 
$(document).ready(function() {
	$('#contact').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		if (document.form.name.value == '' || document.form.object.value == '' || document.form.message.value == '' ) {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "../../order",
			data: $('#contact').serialize()        
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$('#name').val('');
            $('#object').val('');
            $('#message').val('');
			$('#contact').trigger('reset');
            //alert("Good");
		}).fail(function(){
            alert("Извините, технические неполадки, попоробуйте позже...");
        });
		return false;
	});
});

// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
	var popup = $('.popup');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.js-overlay-thank-you').fadeOut();
	}
});