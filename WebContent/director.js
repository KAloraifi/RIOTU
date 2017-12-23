function createAddForm() {
  var type = document.getElementById("addCP").value;
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
  var type = document.getElementById("removeCP").value;
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
  var type = document.getElementById("updateCP").value;
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

function addCPRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var targetForm;

    if (document.getElementById("conferenceAddForm").style.display == "block") {
      targetForm = document.getElementsByClassName("cinput");
      if (targetForm[0].value.localeCompare("") == 0 || targetForm[1].value.localeCompare("") == 0 || targetForm[2].value.localeCompare("") == 0 ||
        targetForm[3].value.localeCompare("") == 0 || targetForm[4].value.localeCompare("") == 0 || targetForm[5].value.localeCompare("") == 0 ||
        targetForm[6].value.localeCompare("") == 0 || targetForm[7].value.localeCompare("") == 0) {
        document.getElementById("addedc").innerHTML = "Fill the required fields please";
        document.getElementById("addedc").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = addCPResponse;
        xmlHttp.open("GET", "addconference_project.php?name=" + targetForm[0].value + "&location=" +
          targetForm[1].value + "&start-date=" + targetForm[2].value + "&end-date=" + targetForm[3].value +
          "&picture=" + targetForm[4].value + "&description=" + targetForm[5].value + "&publisher=" +
          targetForm[6].value + "&rank=" + targetForm[7].value);

        xmlHttp.send();
      }
    } else if (document.getElementById("projectAddForm").style.display == "block") {
      targetForm = document.getElementsByClassName("pinput");
      if (targetForm[0].value.localeCompare("") == 0 || targetForm[1].value.localeCompare("") == 0 || targetForm[2].value.localeCompare("") == 0 ||
        targetForm[3].value.localeCompare("") == 0 || targetForm[4].value.localeCompare("") == 0 || targetForm[5].value.localeCompare("") == 0 ||
        targetForm[6].value.localeCompare("") == 0 || targetForm[7].value.localeCompare("") == 0 || targetForm[8].value.localeCompare("") == 0) {
        document.getElementById("addedc2").innerHTML = "Fill the required fields please";
        document.getElementById("addedc2").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = addCPResponse;
        xmlHttp.open("GET", "addconference_project.php?name=" + targetForm[0].value + "&funding-agency=" +
          targetForm[1].value + "&start-date=" + targetForm[2].value + "&end-date=" + targetForm[3].value +
          "&picture=" + targetForm[4].value + "&description=" + targetForm[5].value + "&pi=" +
          targetForm[6].value + "&co-i=" + targetForm[7].value + "&total-budget=" + targetForm[8].value);

        xmlHttp.send();
      }


    }
  }
}

function addCPResponse() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
    var response = xmlResponse.getElementsByTagName("response")[0];
    if (document.getElementById("conferenceAddForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {


        document.getElementById("addedc").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("addedc").className = "alert alert alert-success";


      } else {


        document.getElementById("addedc").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("addedc").className = "alert alert alert-danger";


      }
    } else if (document.getElementById("projectAddForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {


        document.getElementById("addedc2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("addedc2").className = "alert alert alert-success";


      } else {


        document.getElementById("addedc2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("addedc2").className = "alert alert alert-danger";


      }
    }
  }
}

function removeCPRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var input;

    if (document.getElementById("conferenceRemoveForm").style.display == "block") {
      input = document.getElementById("cname");

      if (input.value.localeCompare("") == 0) {
        document.getElementById("removed").innerHTML = "Fill the name field please";
        document.getElementById("removed").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = removeCPResponse;
        xmlHttp.open("GET", "removeconference_project.php?name=" + input.value + "&type=conference");
        xmlHttp.send();
      }

    } else if (document.getElementById("projectRemoveForm").style.display == "block") {
      input = document.getElementById("pname");

      if (input.value.localeCompare("") == 0) {
        document.getElementById("removed2").innerHTML = "Fill the name field please";
        document.getElementById("removed2").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = removeCPResponse;
        xmlHttp.open("GET", "removeconference_project.php?name=" + input.value + "&type=project");
        xmlHttp.send();
      }

    }
  }
}

function removeCPResponse() {
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

function displayCPRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var input = document.getElementById("updatename");

    if (document.getElementById("conferenceUpdateForm").style.display == "block") {

      if (input.value.localeCompare("") == 0) {
        document.getElementById("show").innerHTML = "Fill the name field please";
        document.getElementById("show").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = displayCPResponse;
        xmlHttp.open("GET", "displayconference_project.php?name=" + input.value + "&type=conference");
        xmlHttp.send();
      }

    } else if (document.getElementById("projectUpdateForm").style.display == "block") {

      if (input.value.localeCompare("") == 0) {
        document.getElementById("show").innerHTML = "Fill the name field please";
        document.getElementById("show").className = "alert alert alert-danger";
      } else {
        xmlHttp.onreadystatechange = displayCPResponse;
        xmlHttp.open("GET", "displayconference_project.php?name=" + input.value + "&type=project");
        xmlHttp.send();
      }

    }
  }
}

function displayCPResponse() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var responseObj = JSON.parse(xmlHttp.responseText);

    if (document.getElementById("conferenceUpdateForm").style.display == "block") {
      if (responseObj[0].name != null) {

        document.getElementById("updatec-name").setAttribute("value", responseObj[0].name);
        document.getElementById("updatec-location").setAttribute("value", responseObj[0].location);
        document.getElementById("updatec-start-date").setAttribute("value", responseObj[0].start_date);
        document.getElementById("updatec-end-date").setAttribute("value", responseObj[0].end_date);
        document.getElementById("updatec-picture").setAttribute("value", responseObj[0].picture);
        document.getElementById("updatec-description").setAttribute("value", responseObj[0].description);
        document.getElementById("updatec-publisher").setAttribute("value", responseObj[0].publisher);
        document.getElementById("updatec-rank").setAttribute("value", responseObj[0].rank);

      } else {

        document.getElementById("show").innerHTML = "Conference name doesn't exist";
        document.getElementById("used").className = "alert alert alert-danger";

      }
    } else if (document.getElementById("projectUpdateForm").style.display == "block") {
      if (responseObj[0].name != null) {

        document.getElementById("updatep-name").setAttribute("value", responseObj[0].name);
        document.getElementById("updatep-funding-agency").setAttribute("value", responseObj[0].funding_agency);

        document.getElementById("updatep-start-date").setAttribute("value", responseObj[0].start_date);

        document.getElementById("updatep-end-date").setAttribute("value", responseObj[0].end_date);
        document.getElementById("updatep-picture").setAttribute("value", responseObj[0].picture);
        document.getElementById("updatep-description").setAttribute("value", responseObj[0].description);
        document.getElementById("updatep-pi").setAttribute("value", responseObj[0].pi);
        document.getElementById("updatep-co-i").setAttribute("value", responseObj[0].co_i);
        document.getElementById("updatep-total-budget").setAttribute("value", responseObj[0].total_budget);

      } else {

        document.getElementById("show").innerHTML = "Conference name doesn't exist";
        document.getElementById("used").className = "alert alert alert-danger";

      }
    }
  }
}

function updateCPRequest() {
  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    if (document.getElementById("conferenceUpdateForm").style.display == "block") {

      var name = document.getElementById("updatec-name").value;
      var location = document.getElementById("updatec-location").value;
      var startDate = document.getElementById("updatec-start-date").value;
      var endDate = document.getElementById("updatec-end-date").value;
      var picture = document.getElementById("updatec-picture").value;
      var description = document.getElementById("updatec-description").value;
      var publisher = document.getElementById("updatec-publisher").value;
      var rank = document.getElementById("updatec-rank").value;

      if (name.localeCompare("") == 0 || location.localeCompare("") == 0 || startDate.localeCompare("") == 0 ||
        endDate.localeCompare("") == 0 || picture.localeCompare("") == 0 || description.localeCompare("") == 0 ||
        publisher.localeCompare("") == 0 || rank.localeCompare("") == 0) {

        document.getElementById("updated").innerHTML = "Fill the required fields please";
        document.getElementById("updated").className = "alert alert alert-danger";

      } else {
        xmlHttp.onreadystatechange = updateCPResponse;
        xmlHttp.open("GET", "updateconference_project.php?name=" + name + "&location=" + location + "&start-date=" + startDate +
          "&end-date=" + endDate + "&picture=" + picture + "&description=" + description + "&publisher=" + publisher + "&rank=" + rank);
        xmlHttp.send();
      }

    } else if (document.getElementById("projectUpdateForm").style.display == "block") {

      var name = document.getElementById("updatep-name").value;
      var fundingAgency = document.getElementById("updatep-funding-agency").value;
      var startDate = document.getElementById("updatep-start-date").value;
      var endDate = document.getElementById("updatep-end-date").value;
      var picture = document.getElementById("updatep-picture").value;
      var description = document.getElementById("updatep-description").value;
      var pi = document.getElementById("updatep-pi").value;
      var coI = document.getElementById("updatep-co-i").value;
      var totalBudget = document.getElementById("updatep-total-budget").value;

      if (name.localeCompare("") == 0 || fundingAgency.localeCompare("") == 0 || startDate.localeCompare("") == 0 ||
        endDate.localeCompare("") == 0 || picture.localeCompare("") == 0 || description.localeCompare("") == 0 ||
        pi.localeCompare("") == 0 || coI.localeCompare("") == 0 || totalBudget.localeCompare("") == 0) {

        document.getElementById("updated2").innerHTML = "Fill the required fields please";
        document.getElementById("updated2").className = "alert alert alert-danger";

      } else {
        xmlHttp.onreadystatechange = updateCPResponse;
        xmlHttp.open("GET", "updateconference_project.php?name=" + name + "&funding-agency=" + fundingAgency + "&start-date=" + startDate +
          "&end-date=" + endDate + "&picture=" + picture + "&description=" + description + "&pi=" + pi + "&co-i=" + coI + "&total-budget=" + totalBudget);
        xmlHttp.send();
      }
    }
  }
}

function updateCPResponse() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
    var response = xmlResponse.getElementsByTagName("response")[0];
    if (document.getElementById("conferenceUpdateForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {

        document.getElementById("updated").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("updated").className = "alert alert alert-success";

      } else {

        document.getElementById("updated").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("updated").className = "alert alert alert-danger";


      }
    } else if (document.getElementById("projectUpdateForm").style.display == "block") {
      if (response.childNodes[1].childNodes[0].nodeValue == 1) {

        document.getElementById("updated2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("updated2").className = "alert alert alert-success";

      } else {

        document.getElementById("updated2").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
        document.getElementById("updated2").className = "alert alert alert-danger";


      }
    }
  }
}
