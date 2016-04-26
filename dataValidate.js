function autoCheckName(name, id) {
	
	var element = name.value;
	var tdTag = document.getElementById(id);
	tdTag.innerHTML = "";
	
	if (!element.match(/[\s]/)) {
		tdTag.innerHTML = "Please enter first and last name";
	}if (!element.match(/^[A-Za-z\-\`\s]+$/)) {
		tdTag.innerHTML = "Characters are limited to (A-Z, a-z, -)"
	} if (element.length == 0) {
		tdTag.innerHTML = "No name is entered";
	} if (tdTag.innerHTML.length > 5) {
		tdTag.innerHTML = "&#8855 " + tdTag.innerHTML;
	}
	return tdTag.innerHTML;
}
function autoCheckEmail(email, id) {
	
	var element = email.value;
	var tdTag = document.getElementById(id);
	tdTag.innerHTML = "";
	
	if (!element.match(/[@][.]/)) {
		tdTag.innerHTML = "Address does not seem valid";
	} if (element.length == 0) {
		tdTag.innerHTML = "No address is entered";
	} if (tdTag.innerHTML.length > 5) {
		tdTag.innerHTML = "&#8855 " + tdTag.innerHTML;
	}

	return tdTag.innerHTML;
}
function checkMssg() {
	
	var element = document.getElementById('message').value;
	var tdTag = document.getElementById('msgErr');
	tdTag.innerHTML = "";
	
	if (element.length < 1) {
		tdTag.innerHTML = "&#8855 Message field is empty";
	}
	return tdTag.innerHTML;
}
function validate() {
	
	var errorMsg = "";
	errorMsg += autoCheckName(document.forms[0].uname,'nameErr');
	errorMsg += '\n';
	errorMsg += autoCheckEmail(document.forms[0].email,'emailErr');
	errorMsg += '\n';
	errorMsg += checkMssg();
	
	if (errorMsg.length > 2) {
		alert("Please fix the following error(s):\n\n" + errorMsg);
		return;
	}

	ubmit();

}
function ubmit() {
	
	var name = document.forms[0].uname.value;
	var email = document.forms[0].email.value;
	var subject = document.forms[0].subject.value;
	var msg = document.getElementById('message').value;
	
	/*
	var url = "mailHandler.php?uname="+name+"&email="+email+"&subject="+subject+"&msg="+msg;
	
	request = new XMLHttpRequest();
	request.open('post',url);
	request.send(null);
	request.onreadystatechange = responseHandler;
	*/
	
	var url = "uname="+name+"&email="+email+"&subject="+subject+"&msg="+msg;
	
	request = new XMLHttpRequest();
	request.open("POST", "mailHandler.php", true);
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	request.send(url);
	request.onreadystatechange = responseHandler;
}
function responseHandler() {
	
	if (request.readyState == 4) {
		document.getElementById('msgErr').innerHTML = request.response;
	}
}