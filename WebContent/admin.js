var xmlHttp = getXMLHTTPRequest();

function getXMLHTTPRequest(){
	var xmlHttp;

	if (window.ActiveXObject){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp=false;
		}
	}else {try{
		xmlHttp=new XMLHttpRequest();
	}catch(e){
		xmlHttp=false;
	}
	}
	if (!xmlHttp){
		alert("cannot create xmlHttp object");
	}else{
		return xmlHttp;
	}
}

function RegisterationRequest(){

	if (xmlHttp.readyState ==0 || xmlHttp.readyState ==4){
                var firstname = document.getElementById("firstname").value;
                var lastname = document.getElementById("lastname").value;
                            
		var username = document.getElementById("username").value;
               
                var password = document.getElementById("password").value;
                var role = document.getElementById("role").value;
                var birth_date = document.getElementById("birth_date").value;
		xmlHttp.open("POST", "adduser.php", true);
		xmlHttp.onreadystatechange= ListResponseCallback;
		xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlHttp.send("firstname="+firstname+"&lastname="+lastname+"&username="+username+"&password="+password+"&role="+role+"&birth_date="+birth_date);
                        ///alert("sucsses");
    }}
    
    
    
function ListResponseCallback(){

	if (xmlHttp.readyState==4){
		if (xmlHttp.status==200){
			var xmlResponse = xmlHttp.responseXML;
			
			
			var  message = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;
                        if(message.localeCompare("Added") ){
                            document.getElementById("added").className = "alert alert-success";
                            document.getElementById("added").innerHTML = message;
                        }
                            
                        else{
                            document.getElementById("used").className = "alert alert-warning";
                            document.getElementById("used").innerHTML = message;
                        }
			alert("message: " + message);
			//document.getElementById("search_result").innerHTML = message;
				//document.getElementById("plist").innerHTML = txt;				
			
			
			
		

		}
		
	
}

}


