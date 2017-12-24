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



function addNewsUser(){
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("titleNews").value;
    var shortDescription = document.getElementById("shortDescriptionNews").value;

    var longDescription = document.getElementById("longDescriptionNews").value;

    var date = document.getElementById("datenews").value;
     var picture1 = document.getElementById("pictureNews1").value;
     var picture2 = document.getElementById("pictureNews2").value;
     var picture3 = document.getElementById("pictureNews3").value;
     var picture4 = document.getElementById("pictureNews4").value;
    if ((title.localeCompare("") == 0) || (shortDescription.localeCompare("") == 0) || (longDescription.localeCompare("") == 0) || (date.localeCompare("") == 0)) {

      document.getElementById("newsAdd").innerHTML = "Fill the required fields please";
      document.getElementById("newsAdd").className = "alert alert alert-danger";

    } else {
        
      xmlHttp.open("POST", "NewsAddUser.php", true);
      xmlHttp.onreadystatechange = addNewsResponseUser;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title + "&shortDescription=" + shortDescription + "&longDescription=" + longDescription + "&date=" + date+"&picture1="+picture1+"&picture2="+picture2+"&picture3="+picture3+"&picture4="+picture4);
      
    
      }
}
}

function  addNewsResponseUser(){
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
  
    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {

      document.getElementById("newsAdd").style.display = "block";
      document.getElementById("newsAdd").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("newsAdd").className = "alert alert alert-success";
      document.getElementById("newsused").style.display = "none";

    } else {

      document.getElementById("newsused").style.display = "block";
      document.getElementById("newsused").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("newsused").className = "alert alert alert-danger";
      document.getElementById("newsAdd").style.display = "none";

    }
  }
}

function removeNewsRequestUser(){
        if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
      var title = document.getElementById("titleNewsRemove").value;

      if (title.localeCompare("") == 0) {
        document.getElementById("newsRemove").innerHTML = "Fill the username field please";
        document.getElementById("newsRemove").className = "alert alert alert-danger";

      } else {

        xmlHttp.open("POST", "RemoveNewsUser.php", true);
        xmlHttp.onreadystatechange = removeNewsCallbackUser;
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("title=" + title); 
       

      }

    }
}

function removeNewsCallbackUser(){
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var xmlResponse = xmlHttp.responseXML;
     
        var message = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;
       
        if (message.localeCompare("Record deleted successfully") == 0) {
          document.getElementById("newsRemove").innerHTML = message;
          document.getElementById("newsRemove").className = "alert alert alert-success";

        } else {
          document.getElementById("newsRemove").innerHTML = message;
          document.getElementById("newsRemove").className = "alert alert alert-danger";
        }
    }
}

function newsDisplayUser(){
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("titledisplayNews").value;

    if (title.localeCompare("") == 0) {
      document.getElementById("displayNews").innerHTML = "Fill the username field please";
      document.getElementById("displayNews").className = "alert alert alert-danger";

    } else {

      xmlHttp.open("POST", "UpdateNewsUser.php", true);
      xmlHttp.onreadystatechange = DisplayNewsCallbackUser;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title);
      

    }

  }
}
function DisplayNewsCallbackUser(){
    

  if (xmlHttp.responseXML == null) {
    var xmlResponse = xmlHttp.responseText;

    var message = JSON.parse(xmlResponse);


    document.getElementById("NewsUpdate").style.display = "block";
    document.getElementById("displayNews").style.display = "none";
    document.getElementById("titleNewsUp").setAttribute("value", message.title);
    document.getElementById("shortDescriptionNewsUp").setAttribute("value", message.shortDescription);

    document.getElementById("longDescriptionNewsUp").setAttribute("value", message.longDescription);

    document.getElementById("datenewsUp").setAttribute("value", message.date);
    document.getElementById("pictureNewsUp1").setAttribute("value", message.picture1);
    document.getElementById("pictureNewsUp2").setAttribute("value", message.picture2);
    document.getElementById("pictureNewsUp3").setAttribute("value", message.picture3);
    document.getElementById("pictureNewsUp4").setAttribute("value", message.picture4);
    document.getElementById("authornews").setAttribute("value", message.author);


  } else {
    var xmlResponse1 = xmlHttp.responseXML;
    var message1 = xmlResponse1.getElementsByTagName("message")[0].childNodes[0].nodeValue;
    document.getElementById("displayNews").innerHTML = message1;
    document.getElementById("displayNews").className = "alert alert alert-danger";
    document.getElementById("NewsUpdate").style.display = "none";
    document.getElementById("displayNews").style.display = "block";
  }
}


function UpdateNewsRequestUser() {
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("titleNewsUp").value;
    var shortDescription = document.getElementById("shortDescriptionNewsUp").value;

    var longDescription = document.getElementById("longDescriptionNewsUp").value;

    var date = document.getElementById("datenewsUp").value;
     var picture1 = document.getElementById("pictureNewsUp1").value;
     var picture2 = document.getElementById("pictureNewsUp2").value;
     var picture3 = document.getElementById("pictureNewsUp3").value;
     var picture4 = document.getElementById("pictureNewsUp4").value;
     var author = document.getElementById("authornews").value;
    if ((title.localeCompare("") == 0) || (shortDescription.localeCompare("") == 0) || (longDescription.localeCompare("") == 0) || (date.localeCompare("") == 0)) {

      document.getElementById("updateNews").innerHTML = "Fill the required fields please";
      document.getElementById("updateNews").className = "alert alert alert-danger";

    } else {


      
      xmlHttp.open("POST", "UpdateNewsUser.php", true);
      xmlHttp.onreadystatechange = updateNewsCallbackUser;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title + "&shortDescription=" + shortDescription + "&longDescription=" + longDescription + "&date=" + date + "&picture1=" + picture1 + "&picture2=" + picture2 + "&picture3=" + picture3+ "&picture4="+ picture4+"&author="+author);
      
    }
  }
}

function updateNewsCallbackUser(){
          if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;

    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {

      document.getElementById("updateNews").style.display = "block";
      document.getElementById("updateNews").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("updateNews").className = "alert alert alert-success";
      

    } else {

      document.getElementById("updateNews").style.display = "block";
      document.getElementById("updateNews").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("updateNews").className = "alert alert alert-danger";
      

    }
  }
}




