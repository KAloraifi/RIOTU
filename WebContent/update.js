var xmlHttp = getXMLHTTPRequest();

function getXMLHTTPRequest() {
  var xmlHttp;

  if (window.ActiveXObject) {
    try {
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e) {
      xmlHttp = false;
    }
  } else {
    try {
      xmlHttp = new XMLHttpRequest();
    } catch (e) {
      xmlHttp = false;
    }
  }
  if (!xmlHttp) {
    alert("cannot create xmlHttp object");
  } else {
    return xmlHttp;
  }
}

function DisplayRequest() {

  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var username = document.getElementById("usernamedisplay").value;

    if (username.localeCompare("") == 0) {
      document.getElementById("display").innerHTML = "Fill the username field please";
      document.getElementById("display").className = "alert alert alert-danger";

    } else {

      xmlHttp.open("POST", "updateuser.php", true);
      xmlHttp.onreadystatechange = DisplayCallback;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("username=" + username);

    }

  }

}

function DisplayCallback() {

  if (xmlHttp.responseXML == null) {
    var xmlResponse = xmlHttp.responseText;

    var message = JSON.parse(xmlResponse);

    document.getElementById("userUpdateForm").style.display = "block";
    document.getElementById("display").style.display = "none";
    document.getElementById("firstname_up").setAttribute("value", message.firstname);
    document.getElementById("lastname_up").setAttribute("value", message.lastname);

    document.getElementById("username_up").setAttribute("value", message.username);

    document.getElementById("password_up").setAttribute("value", message.password);
    document.getElementById("role_up").setAttribute("value", message.role);
    document.getElementById("birth_date_up").setAttribute("value", message.birth_date);
    document.getElementById("join_date").setAttribute("value", message.join_date);
    

  } else {
    var xmlResponse1 = xmlHttp.responseXML;
    var message1 = xmlResponse1.getElementsByTagName("message")[0].childNodes[0].nodeValue;
    document.getElementById("display").innerHTML = message1;
    document.getElementById("display").className = "alert alert alert-danger";
    document.getElementById("userUpdateForm").style.display = "none";
     document.getElementById("display").style.display = "block";

  }
}



function UpdateRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var firstname = document.getElementById("firstname_up").value;
    var lastname = document.getElementById("lastname_up").value;

    var username = document.getElementById("username_up").value;

    var password = document.getElementById("password_up").value;
    var role = document.getElementById("role_up").value;

    if ((username.localeCompare("") == 0) || (firstname.localeCompare("") == 0) || (lastname.localeCompare("") == 0) || (password.localeCompare("") == 0) || (role.localeCompare("") == 0)) {

      document.getElementById("updatep").innerHTML = "Fill the required fields please";
      document.getElementById("updatep").className = "alert alert alert-danger";

    } else {


      var birth_date = document.getElementById("birth_date_up").value;
      var join_date = document.getElementById("join_date_up").value;
      xmlHttp.open("POST", "updateuser.php", true);
      xmlHttp.onreadystatechange = UpdateCallback;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("firstname=" + firstname + "&lastname=" + lastname + "&username=" + username + "&password=" + password + "&role=" + role + "&birth_date=" + birth_date + "&join_date=" + join_date);

    }
  }
}

function UpdateCallback() {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {

      document.getElementById("updatep").style.display = "block";
      document.getElementById("updatep").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("updatep").className = "alert alert alert-success";
      

    } else {

      document.getElementById("updatep").style.display = "block";
      document.getElementById("updatep").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("updatep").className = "alert alert alert-danger";
      

    }
  }
}
