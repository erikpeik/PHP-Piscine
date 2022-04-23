$(document).ready(function () {
	$.fn.fill_div = function() {
		$('#ft_list').empty();
		$.ajax({
			method: 'GET',
			url: 'select.php'
		})
		.done(function(data) {
			$('#ft_list').empty();
			var obj = jQuery.parseJSON(data);
			jQuery.each(obj, function(date_id, input){
				if (date_id && input)
					$.fn.add_element(date_id, input, false);
			});
		})
		.fail(function() {
			alert('error: Reading failed');
		});
	}

	$.fn.add_element = function(date_id, input, is_new) {
		var $div = $("<div>", {id: "element", text: decodeURIComponent(input)});
		$div.click(function () {
			if (window.confirm("Do you really want to remove this Element?")) {
				$div.remove();
				$.ajax({
					method: 'GET',
					url: 'delete.php?date_id=' + date_id
				})
				.done(function () {
					$.fn.fill_div();
				})
				.fail(function () {
					alert('error: Removing failed');
				});
			}
		});
		$("#ft_list").prepend($div);
		if (is_new) {
			$.ajax({
				method: 'GET',
				url: 'insert.php?date_id=' + date_id + '&input=' + input
			})
			.fail(function (){
				alert('error: Insert failed');
			});
		}
	}

	$('#New').click(function() {
		var input = prompt("New TO-DO", "");
		if (!$.trim(input)) {
			return false;
		} else {
			date_id = Date.now();
			$.fn.add_element(date_id, input, true);
		}
	});

	$.fn.fill_div();
});
