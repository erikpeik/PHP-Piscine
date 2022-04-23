$(document).ready(function () {
	$.fn.setCookie = function(name, value, days) {
		const d = new Date();
		d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
		let expires = "expires=" + d.toUTCString();
		document.cookie = name + "=" + encodeURIComponent(value) + ";"+ expires + ";path=/";
	}

	$.fn.removeCookie = function(name, value) {
		document.cookie = name + "=" + value
		+ ";expires=Thu, 01 Jan 1970 00:00:01 GMT" + ";path=/";
	}

	$.fn.add_element = function(date_id, input) {
		var $div = $("<div>", {id: "element", text: decodeURIComponent(input)});
		$div.click(function () {
			if (window.confirm("Do you really want to remove this Element?")) {
				$div.remove();
				$.fn.removeCookie(date_id, input);
			}
		});
		$("#ft_list").prepend($div);
	}
	$('#New').click(function() {
		var input = prompt("New TO-DO", "");
		if (!$.trim(input)) {
			return false;
		} else {
			date_id = Date.now();
			$.fn.add_element(date_id, input);
			$.fn.setCookie(date_id, input, 1);
		}
	});
	$('#element').click(function() {
		alert('clicked');
	});

	var cookies = document.cookie.split(';');
	for (var i = 0; i < cookies.length; i++) {
		var name = cookies[i].substring(0, cookies[i].indexOf('='));
		var value = cookies[i].substring(cookies[i].indexOf('=') + 1);
		if (name && value)
			$.fn.add_element(name, value);
	}
});
