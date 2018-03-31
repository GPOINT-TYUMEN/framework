$(function () {
	var format = {
		'input': '<div class="form-group">' +
                    '<label for="exampleInputEmail1">Название поля</label>' +
                      '<div class="form-group has-error">' +
                       '<label class="control-label" for="inputError"></label>'+
                     '</div>' +
                     ' <input type="nickname" class="form-control" id="nickname" placeholder="Значение">' +
                   '</div>' +

				 '<div class="form-group">' +
                    '<label for="exampleInputEmail1">Значение поля</label>' +
                      '<div class="form-group has-error">' +
                       '<label class="control-label" for="inputError"></label>'+
                     '</div>' +
                     ' <input type="nickname" class="form-control" id="nickname" placeholder="Значение">' +
                   '</div>',

        'textarea': '<div class="form-group">' +
                    '<label for="exampleInputEmail1">Название поля</label>' +
                      '<div class="form-group has-error">' +
                       '<label class="control-label" for="inputError"></label>'+
                     '</div>' +
                     ' <input type="nickname" class="form-control" id="nickname" placeholder="Значение">' +
                   '</div>' +   

                    '<div class="form-group">' +   
	        			' <label>Textarea</label>' + 
	                    '<textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>' +
	                 '</div>'                     
	};

	$('.content-1 button').click(function () {
		var data = {
			'var': $('.content-1 #var').val(),
			'type': $('.content-1 select option:selected').attr('format'),
		};

		$('.dynamic').append(format[data["type"]]);

		//CREATE
		$('.content-2 button').on('click', function () {
			var content = {
				'info': $('.content-2 .dynamic').html()
			}; 

			$('.box-info').html($('.content-2 .dynamic').html());	
		});

	});
});