function	add_element() {
	var input = prompt("New TO-DO", "");
	if (input == null) {
		return false;
	}
	var ft_list = document.getElementById('ft_list');
	var element = document.createElement('div');
	document.cookie = ft_list;
	element.appendChild(document.createTextNode(input));
	ft_list.prepend(element);
	document.cookie = input + '=' + input;
	element.addEventListener('click', function remove_it() {
		ft_list.removeChild(element);
	return true;
	});
}
