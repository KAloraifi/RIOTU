function createAddForm() {
  var type = document.getElementById("add").value;
  var conference = document.getElementById('conferenceAddForm');
  var project = document.getElementById('projectAddForm');
  if (type == "conference") {
    conference.style.display = "block";
    project.style.display = "none";
  } else if (type == "project") {
    project.style.display = "block";
    conference.style.display = "none";
  }
}

function createRemoveForm() {
  var type = document.getElementById("remove").value;
  var conference = document.getElementById('conferenceRemoveForm');
  var project = document.getElementById('projectRemoveForm');
  if (type == "conference") {
    conference.style.display = "block";
    project.style.display = "none";
  } else if (type == "project") {
    project.style.display = "block";
    conference.style.display = "none";
  }
}

function createUpdateForm() {
  var name = document.getElementById('updatecname').value;
  var type = document.getElementById("update").value;
  var conference = document.getElementById('conferenceUpdateForm');
  var project = document.getElementById('projectUpdateForm');
  if (type == "conference") {
    conference.style.display = "block";
    project.style.display = "none";
  } else if (type == "project") {
    project.style.display = "block";
    conference.style.display = "none";
  }
}



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

function addRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var targetForm;

    if (document.getElementById("conferenceAddForm").style.display == "block") {
      targetForm = document.getElementsByClassName("cinput");
      xmlHttp.onreadystatechange = addResponse;


      xmlHttp.open("GET", "addconference_project.php?name=" + targetForm[0].value + "&location=" +
        targetForm[1].value + "&start-date=" + targetForm[2].value + "&end-date=" + targetForm[3].value +
        "&picture=" + targetForm[4].value + "&description=" + targetForm[5].value + "&publisher=" +
        targetForm[6].value + "&rank=" + targetForm[7].value);

      xmlHttp.send();

    } else if (document.getElementById("projectAddForm").style.display == "block") {
      targetForm = document.getElementsByClassName("pinput");
      xmlHttp.onreadystatechange = addResponse;
      /*
      var empty = false;
      for (input in targetForm) {
        if (targetForm[input].value.localeCompare("") == 0) {
          empty = true;
        }
      }
      */

      xmlHttp.open("GET", "addconference_project.php?name=" + targetForm[0].value + "&funding-agency=" +
        targetForm[1].value + "&start-date=" + targetForm[2].value + "&end-date=" + targetForm[3].value +
        "&picture=" + targetForm[4].value + "&description=" + targetForm[5].value + "&pi=" +
        targetForm[6].value + "&co-i=" + targetForm[7].value + "&total-budget=" + targetForm[8].value);

      xmlHttp.send();

    }
  }
}

function addResponse() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
    var response = xmlResponse.getElementsByTagName("response")[0];
    if (document.getElementById("conferenceAddForm").style.display == "block") {
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
    } else if (document.getElementById("projectAddForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {

        document.getElementById("added2").style.display = "block";
        document.getElementById("added2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("added2").className = "alert alert alert-success";
        document.getElementById("used2").style.display = "none";

      } else {

        document.getElementById("used2").style.display = "block";
        document.getElementById("used2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("used2").className = "alert alert alert-danger";
        document.getElementById("added2").style.display = "none";

      }
    }

  }
}

function removeRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var input;

    if (document.getElementById("conferenceRemoveForm").style.display == "block") {
      input = document.getElementById("cname");

      if (input.value.localeCompare("") == 0) {
        document.getElementById("removed").innerHTML = "Fill the name field please";
        document.getElementById("removed").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = removeResponse;
        mlHttp.open("GET", "removeconference_project.php?name=" + input.value + "&type=conference");
        xmlHttp.send();
      }

    } else if (document.getElementById("projectRemoveForm").style.display == "block") {
      input = document.getElementById("pname");

      if (input.value.localeCompare("") == 0) {
        document.getElementById("removed2").innerHTML = "Fill the name field please";
        document.getElementById("removed2").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = removeResponse;
        xmlHttp.open("GET", "removeconference_project.php?name=" + input.value + "&type=project");
        xmlHttp.send();
      }

    }
  }
}

function removeResponse() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
    var response = xmlResponse.getElementsByTagName("response")[0];
    if (document.getElementById("conferenceRemoveForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {
        document.getElementById("removed").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("removed").className = "alert alert alert-success";

      } else {
        document.getElementById("removed").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("removed").className = "alert alert alert-danger";
      }
    } else if (document.getElementById("projectRemoveForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {
        document.getElementById("removed2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("removed2").className = "alert alert alert-success";

      } else {
        document.getElementById("removed2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("removed2").className = "alert alert alert-danger";
      }
    }
  }
}

function displayRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var input;

    if (document.getElementById("conferenceUpdateForm").style.display == "block") {
      input = document.getElementById("updatecname");

      if (input.value.localeCompare("") == 0) {
        document.getElementById("removed").innerHTML = "Fill the name field please";
        document.getElementById("removed").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = displayResponse;
        mlHttp.open("GET", "updateconference_project.php?name=" + input.value + "&type=conference");
        xmlHttp.send();
      }

    } else if (document.getElementById("projectRemoveForm").style.display == "block") {
      input = document.getElementById("pname");

      if (input.value.localeCompare("") == 0) {
        document.getElementById("removed2").innerHTML = "Fill the name field please";
        document.getElementById("removed2").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = removeResponse;
        xmlHttp.open("GET", "removeconference_project.php?name=" + input.value + "&type=project");
        xmlHttp.send();
      }

    }
  }
}
