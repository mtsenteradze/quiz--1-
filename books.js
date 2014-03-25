function myFunction(){

	if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject ('Microsoft.XMLHTTP');
	}


	xmlhttp.onreadystatechange = function(){
		if (xmlthhp.readyState == 4 && xmlhttp.status == 200){
			alert ('hello');
		}
	}
	


	xmlhttp.open("POST","book-registration.php",true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send();
}


