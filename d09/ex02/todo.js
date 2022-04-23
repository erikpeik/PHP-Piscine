function	setCookie(name, value, days) {
	const d = new Date();
	d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
	let expires = "expires=" + d.toUTCString();
	document.cookie = name + "=" + encodeURIComponent(value) + ";"+ expires + ";path=/";
}

function	removeCookie(name, value) {
	document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/";
}

window.onload = function() {
	var cookies = document.cookie.split(';');
	for (var i = 0; i < cookies.length; i++) {
		var name = cookies[i].substring(0, cookies[i].indexOf('='));
		var value = cookies[i].substring(cookies[i].indexOf('=') + 1);
		if (name && value)
			add_element(name, value);
	}
}

function	add_element(date_id, input) {

	var ft_list = document.getElementById('ft_list');
	var element = document.createElement('div');
	element.setAttribute("class", "element");
	element.appendChild(document.createTextNode(decodeURIComponent(input)));
	element.addEventListener('click', function remove_it() {
		if (window.confirm("Do you really want to remove this Element?")) {
			ft_list.removeChild(element);
			removeCookie(date_id, input);
		}
	});
	ft_list.prepend(element);
}

function new_prompt() {
	var input = prompt("New TO-DO", "");
	if (input == null || input == '' || input.trim().length == 0) {
		return false;
	} else {
		date_id = Date.now();
		add_element(date_id, input);
		setCookie(date_id, input, 1);
	}
}
