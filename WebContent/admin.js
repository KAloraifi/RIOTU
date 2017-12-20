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

function registerationRequest() {

  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;

    var username = document.getElementById("username").value;

    var password = document.getElementById("password").value;
    var role = document.getElementById("role").value;

    if ((username.localeCompare("") == 0) || (firstname.localeCompare("") == 0) || (lastname.localeCompare("") == 0) || (password.localeCompare("") == 0) || (role.localeCompare("") == 0)) {

      document.getElementById("added").innerHTML = "Fill the required fields please";
      document.getElementById("added").className = "alert alert alert-danger";

    } else {


      var birth_date = document.getElementById("birth_date").value;
      xmlHttp.open("POST", "adduser.php", true);
      xmlHttp.onreadystatechange = RegisterationResponse;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("firstname=" + firstname + "&lastname=" + lastname + "&username=" + username + "&password=" + password + "&role=" + role + "&birth_date=" + birth_date);

    }
  }
}



function registerationResponse() {

  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {

      document.getElementById("added").style.display = "block";
      document.getElementById("added").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("added").className = "alert alert alert-success";
      document.getElementById("used").style.display = "none";

    } else {

      document.getElementById("used").style.display = "block";
      document.getElementById("used").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("used").className = "alert alert alert-danger";
      document.getElementById("added").style.display = "none";

    }
  }
}

  function removeRequest() {

    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
      var username = document.getElementById("usernameremove").value;

      if (username.localeCompare("") == 0) {
        document.getElementById("remove").innerHTML = "Fill the username field please";
        document.getElementById("remove").className = "alert alert alert-danger";

      } else {

        xmlHttp.open("POST", "removeuser.php", true);
        xmlHttp.onreadystatechange = removeCallback;
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("username=" + username);

      }

    }
  }

  function removeResponse() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var xmlResponse = xmlHttp.responseXML;
        var message = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;

        if (message.localeCompare("Record deleted successfully") == 0) {
          document.getElementById("remove").innerHTML = message;
          document.getElementById("remove").className = "alert alert alert-success";

        } else {
          document.getElementById("remove").innerHTML = message;
          document.getElementById("remove").className = "alert alert alert-danger";
        }
    }
  }
