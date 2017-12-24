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

function addPublicationUserRequest() {

  if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("title").value;
    var impactfactor = document.getElementById("impactfactor").value;

    var year = document.getElementById("year").value;

    var month = document.getElementById("month").value;
    var pages = document.getElementById("pages").value;
    
     var publisher = document.getElementById("publisher").value;
     
      var issue = document.getElementById("issue").value;
      
       var volume = document.getElementById("volume").value;
       
       var category = document.getElementById("category").value;
       var indexing = document.getElementById("indexing").value;
       var booktitle = document.getElementById("booktitle").value;
        var hlink = document.getElementById("hlink").value;
       
         var c=category.toUpperCase();
      
        if(c.localeCompare("JOURNAL") ==0){
            category=1;
            
        }
        else if(c.localeCompare("CONFERENCE") ==0){
            category=2;
        }
        else if(c.localeCompare("BOOK") ==0){
            category=3;
        }
        else if(c.localeCompare("BOOK CHAPTER") ==0){
            category=4;
        }
        else if(c.localeCompare("WORKSHOP") ==0){
            category=5;
        }
                else if(c.localeCompare("WORK IN PROGRESS") ==0){
            category=6;
        }
                else if(c.localeCompare("DEMO") ==0){
            category=7;
        }
                else if(c.localeCompare("POSTER") ==0){
            category=8;
        }
        else{
            category=0;
        }

    if ((title.localeCompare("") == 0) || (impactfactor.localeCompare("") == 0) || (year.localeCompare("") == 0) || (month.localeCompare("") == 0) || (pages.localeCompare("") == 0)|| (publisher.localeCompare("") == 0)|| (issue.localeCompare("") == 0) || (volume.localeCompare("") == 0) || (indexing.localeCompare("") == 0) || (booktitle.localeCompare("") == 0) || (hlink.localeCompare("") == 0)) {

      document.getElementById("publicationadded").innerHTML = "Fill the required fields please";
      document.getElementById("publicationadded").className = "alert alert alert-danger";
            document.getElementById("usedtitle").style.display = "none";
      document.getElementById("wrongcategory").style.display = "none";
            document.getElementById("publicationadded").style.display = "block";

    } else if(category == 0){
            document.getElementById("wrongcategory").innerHTML = "Wrong type of category";
            document.getElementById("wrongcategory").className = "alert alert alert-danger";
            document.getElementById("wrongcategory").style.display = "block";
             document.getElementById("publicationadded").style.display = "none";
             document.getElementById("usedtitle").style.display = "none";
        }
        else{
    
      xmlHttp.open("POST", "PublicationUserAdd.php", true);
      xmlHttp.onreadystatechange = addPublicationUserResponse;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title + "&impactfactor=" + impactfactor + "&year=" + year + "&month=" + month + "&pages=" + pages + "&publisher=" + publisher+ "&issue=" + issue+ "&volume=" + volume+ "&category=" + category + "&indexing=" + indexing  + "&booktitle=" + booktitle + "&hlink=" + hlink );
      
    }
  }
}

function addPublicationUserResponse(){
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
   
    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {

      document.getElementById("publicationadded").style.display = "block";
      document.getElementById("publicationadded").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("publicationadded").className = "alert alert alert-success";
      document.getElementById("usedtitle").style.display = "none";
      document.getElementById("wrongcategory").style.display = "none";

    } else {

      document.getElementById("usedtitle").style.display = "block";
      document.getElementById("usedtitle").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("usedtitle").className = "alert alert alert-danger";
      document.getElementById("publicationadded").style.display = "none";
      

    }
  }
}

function removePublicationUserRequest(){
    
    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
      var title = document.getElementById("titleremove").value;

      if (title.localeCompare("") == 0) {
        document.getElementById("publicationremove").innerHTML = "Fill the username field please";
        document.getElementById("publicationremove").className = "alert alert alert-danger";

      } else {

        xmlHttp.open("POST", "removepublicationUser.php", true);
        xmlHttp.onreadystatechange = publicationRemoveUserCallback;
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("title=" + title);
        
      }

    }
}

function publicationRemoveUserCallback(){
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var xmlResponse = xmlHttp.responseXML;
        var message = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;

        if (message.localeCompare("Record deleted successfully") == 0) {
          document.getElementById("publicationremove").innerHTML = message;
          document.getElementById("publicationremove").className = "alert alert alert-success";

        } else {
          document.getElementById("publicationremove").innerHTML = message;
          document.getElementById("publicationremove").className = "alert alert alert-danger";
        }
    }
}

function displayPublicationUser(){
    
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("titledisplay").value;

    if (title.localeCompare("") == 0) {
      document.getElementById("displaypublication").innerHTML = "Fill the username field please";
      document.getElementById("displaypublication").className = "alert alert alert-danger";

    } else {

      xmlHttp.open("POST", "PublicationUpdateUser.php", true);
      xmlHttp.onreadystatechange = DisplayPublicationUserCallback;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title);
      

    }

  }
    
}


function DisplayPublicationUserCallback(){
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    
  if (xmlHttp.responseXML == null) {
      
    var xmlResponse = xmlHttp.responseText;

    var message = JSON.parse(xmlResponse);


    document.getElementById("publicationUpdateForm").style.display = "block";
    document.getElementById("displaypublication").style.display = "none";
    document.getElementById("titleUp").setAttribute("value", message.title);
    document.getElementById("impactfactorUp").setAttribute("value", message.impactfactor);

    document.getElementById("yearUp").setAttribute("value", message.year);

    document.getElementById("monthUp").setAttribute("value", message.month);
    document.getElementById("pagesUp").setAttribute("value", message.pages);
    document.getElementById("publisherUp").setAttribute("value", message.publisher);
    document.getElementById("issueUp").setAttribute("value", message.issue);
    
    
    document.getElementById("volumeUp").setAttribute("value", message.volume);

    document.getElementById("categoryUp").setAttribute("value", message.category);
    document.getElementById("indexingUp").setAttribute("value", message.indexing);
    document.getElementById("booktitleUp").setAttribute("value", message.booktitle);
    document.getElementById("hlinkUp").setAttribute("value", message.hlink);
    document.getElementById("author").setAttribute("value", message.author);
    

  } else {
    var xmlResponse1 = xmlHttp.responseXML;
    var message1 = xmlResponse1.getElementsByTagName("message")[0].childNodes[0].nodeValue;
    document.getElementById("displaypublication").innerHTML = message1;
    document.getElementById("displaypublication").className = "alert alert alert-danger";
    document.getElementById("publicationUpdateForm").style.display = "none";
     document.getElementById("displaypublication").style.display = "block";

  }
}

}

function updatePublicationUserRequest(){
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("titleUp").value;
    var impactfactor = document.getElementById("impactfactorUp").value;

    var year = document.getElementById("yearUp").value;

    var month = document.getElementById("monthUp").value;
    var pages = document.getElementById("pagesUp").value;
    
     var publisher =document.getElementById("publisherUp").value;
    
          var issue = document.getElementById("issueUp").value;
      
       var volume = document.getElementById("volumeUp").value;
       
       var category = document.getElementById("categoryUp").value;
       var indexing = document.getElementById("indexingUp").value;
       var booktitle = document.getElementById("booktitleUp").value;
       var hlink = document.getElementById("hlinkUp").value;
       var author = document.getElementById("author").value; 

if( (category.localeCompare("") == 0) || category==null){
          document.getElementById("updatepublication").innerHTML = "Fill the required fields please";
      document.getElementById("updatepublication").className = "alert alert alert-danger";
      document.getElementById("usedtitleUp").style.display = "none";
      document.getElementById("wrongcategoryUp").style.display = "none";
      document.getElementById("updatepublication").style.display = "block";
    
}
    else if ((title.localeCompare("") == 0) || (impactfactor.localeCompare("") == 0) || (year.localeCompare("") == 0) || (month.localeCompare("") == 0) || (pages.localeCompare("") == 0)|| (publisher.localeCompare("") == 0)|| (issue.localeCompare("") == 0) || (volume.localeCompare("") == 0) || (indexing.localeCompare("") == 0) || (booktitle.localeCompare("") == 0) || (hlink.localeCompare("") == 0)) {
        
      document.getElementById("updatepublication").innerHTML = "Fill the required fields please";
      document.getElementById("updatepublication").className = "alert alert alert-danger";
      document.getElementById("usedtitleUp").style.display = "none";
      document.getElementById("wrongcategoryUp").style.display = "none";
      document.getElementById("updatepublication").style.display = "block";

  
       }
        
      else{
    
      xmlHttp.open("POST", "PublicationUpdateUser.php", true);
      xmlHttp.onreadystatechange = updatePublicationUserResponse;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title + "&impactfactor=" + impactfactor + "&year=" + year + "&month=" + month + "&pages=" + pages + "&publisher=" + publisher+ "&issue=" + issue+ "&volume=" + volume+ "&category=" + category + "&indexing=" + indexing  + "&booktitle=" + booktitle + "&hlink=" + hlink+"&author="+author );
      
    }
}
}


function updatePublicationUserResponse(){
          if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
   
    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {

      document.getElementById("updatepublication").style.display = "block";
      document.getElementById("updatepublication").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("updatepublication").className = "alert alert alert-success";
      

    } else {

      document.getElementById("updatepublication").style.display = "block";
      document.getElementById("updatepublication").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
      document.getElementById("updatepublication").className = "alert alert alert-danger";
      

    }
  }
}



