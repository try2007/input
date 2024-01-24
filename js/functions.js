function checkForm(form) {
	var name = form.name.value;
	var phone = form.phone.value;
	var bad = "";
	if (name.length == 0) bad += "Вы не ввели имя" + "\n";
	if (phone.length == 0) bad += "Вы не ввели телефон" + "\n";
	if (bad) {
		alert(bad);
		return false;
	}
	return true;
}