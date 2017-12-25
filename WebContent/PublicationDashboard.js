
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

function addPublicationRequest() {

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
        var author = document.getElementById("author").value;
       
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

    if ((title.localeCompare("") == 0) || (impactfactor.localeCompare("") == 0) || (year.localeCompare("") == 0) || (month.localeCompare("") == 0) || (pages.localeCompare("") == 0)|| (publisher.localeCompare("") == 0)|| (issue.localeCompare("") == 0) || (volume.localeCompare("") == 0) || (indexing.localeCompare("") == 0) || (booktitle.localeCompare("") == 0) || (hlink.localeCompare("") == 0)|| (author.localeCompare("") == 0)) {

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
    
      xmlHttp.open("POST", "PublicationAdd.php", true);
      xmlHttp.onreadystatechange = addPublicationResponse;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title + "&impactfactor=" + impactfactor + "&year=" + year + "&month=" + month + "&pages=" + pages + "&publisher=" + publisher+ "&issue=" + issue+ "&volume=" + volume+ "&category=" + category + "&indexing=" + indexing  + "&booktitle=" + booktitle + "&hlink=" + hlink+"&author="+author);
      
    }
  }
}

function addPublicationResponse(){
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

function removePublicationRequest(op){
   
    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
      var title = document.getElementById("title"+op).innerHTML;

//      if (title.localeCompare("") == 0) {
//        document.getElementById("publicationremove").innerHTML = "Fill the username field please";
//        document.getElementById("publicationremove").className = "alert alert alert-danger";
//
//      } else {

        xmlHttp.open("POST", "removepublication.php", true);
        xmlHttp.onreadystatechange = publicationRemoveCallback;
        xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlHttp.send("title=" + title);
       
        document.getElementById("InvoiceTableBody").deleteRow(op-1);
      //}

    }
}

function publicationRemoveCallback(){
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var xmlResponse = xmlHttp.responseXML;
        var message = xmlResponse.getElementsByTagName("message")[0].childNodes[0].nodeValue;
alert(message);

    }
}
function getIdName(i){
	if (i==0){
		return 'title';
	}else if (i==1){
		return 'date';
	}else if (i==2){
		return 'publisher';
	}else if (i==3){
		return 'booktitle';
	}
    }

var count=0;
function displayPublication(op){
    
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("title"+op).innerHTML;
    
    //var tableBody = document.getElementById("InvoiceTableBody");
                var old =document.getElementById("row"+op);
		var row = document.createElement("tr");
		row.setAttribute('id',"newraw");
                var cell = document.createElement("td");  
			var input = document.createElement("input");

			input.setAttribute('type',"text");
			input.setAttribute('name', "id"+op);
			input.setAttribute('id', "id"+op);
			
			cell.appendChild(input);
			row.appendChild(cell);
		for (var i = 0; i <4; i++) {	
			 cell = document.createElement("td");  
			 input = document.createElement("input");

			input.setAttribute('type',"text");
			input.setAttribute('name', getIdName(i)+op);
			input.setAttribute('id', getIdName(i)+op);
			
			cell.appendChild(input);
			row.appendChild(cell);
		}
               
               cell.appendChild(document.getElementById("colume"+op));
                old.parentNode.replaceChild(row, old);
   count=op;
    

      xmlHttp.open("POST", "UpdatePublication.php", true);
      xmlHttp.onreadystatechange = DisplayPublicationCallback;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title);
      document.getElementById("u"+op).style.display="block";

  

  }
    
}


function DisplayPublicationCallback(){
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    
  if (xmlHttp.responseXML == null) {
      
    var xmlResponse = xmlHttp.responseText;

    var message = JSON.parse(xmlResponse);
    
    
     document.getElementById("id"+count).setAttribute("value", count);

    document.getElementById("title"+count).setAttribute("value", message.title);
   


    document.getElementById("date"+count).setAttribute("value", message.year+"-"+message.month);

 
    document.getElementById("publisher"+count).setAttribute("value", message.publisher);

    
    
    document.getElementById("booktitle"+count).setAttribute("value", message.booktitle);

    count=0;
    

  } else {
    var xmlResponse1 = xmlHttp.responseXML;
    var message1 = xmlResponse1.getElementsByTagName("message")[0].childNodes[0].nodeValue;
    alert(message1);


  }
}

}

function updatePublicationRequest(op){
      if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
    var title = document.getElementById("title"+op).value;
   // var impactfactor = document.getElementById("impactfactorUp").value;

//    var year = document.getElementById("yearUp").value;
//
//    var month = document.getElementById("monthUp").value;
//    var pages = document.getElementById("pagesUp").value;
    
     var publisher =document.getElementById("publisher"+op).value;
    
//          var issue = document.getElementById("issueUp").value;
//      
//       var volume = document.getElementById("volumeUp").value;
//       
//       var category = document.getElementById("categoryUp").value;
//       var indexing = document.getElementById("indexingUp").value;
       var booktitle = document.getElementById("booktitle"+op).value;
//        var hlink = document.getElementById("hlinkUp").value;
//        var author = document.getElementById("authorUp").value;

//if( (category.localeCompare("") == 0) || category==null){
//          document.getElementById("updatepublication").innerHTML = "Fill the required fields please";
//      document.getElementById("updatepublication").className = "alert alert alert-danger";
//      document.getElementById("usedtitleUp").style.display = "none";
//      document.getElementById("wrongcategoryUp").style.display = "none";
//      document.getElementById("updatepublication").style.display = "block";
    
}
    else if ((title.localeCompare("") == 0) || (publisher.localeCompare("") == 0) || (booktitle.localeCompare("") == 0)) {
        
//      document.getElementById("updatepublication").innerHTML = "Fill the required fields please";
//      document.getElementById("updatepublication").className = "alert alert alert-danger";
//      document.getElementById("usedtitleUp").style.display = "none";
//      document.getElementById("wrongcategoryUp").style.display = "none";
//      document.getElementById("updatepublication").style.display = "block";
alert("Fill the required fields please");

  
       }
        
      else{
    
      xmlHttp.open("POST", "UpdatePublication.php", true);
      xmlHttp.onreadystatechange = updatePublicationResponse;
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlHttp.send("title=" + title + "&publisher=" + publisher+  "&booktitle=" + booktitle);
      
    }
}



function updatePublicationResponse(){
          if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    var xmlResponse = xmlHttp.responseXML;
   alert(xmlHttp.responseText);
    var response = xmlResponse.getElementsByTagName("response")[0];

    if (response.childNodes[1].childNodes[0].nodeValue == 1) {
alert(response.childNodes[0].childNodes[0].nodeValue);
//      document.getElementById("updatepublication").style.display = "block";
//      document.getElementById("updatepublication").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
//      document.getElementById("updatepublication").className = "alert alert alert-success";
      

    } else {
alert(response.childNodes[0].childNodes[0].nodeValue);
//      document.getElementById("updatepublication").style.display = "block";
//      document.getElementById("updatepublication").innerHTML = response.childNodes[0].childNodes[0].nodeValue;
//      document.getElementById("updatepublication").className = "alert alert alert-danger";
      

    }
  }
}
