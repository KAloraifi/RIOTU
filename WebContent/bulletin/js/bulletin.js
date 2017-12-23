var isEditMode = false;
var oldId = "";
var oldcode="";
var code="";


function editCell(itemNum){
	var cell_id = $('#'+itemNum);
	oldcode = itemNum;
	//alert('#'+itemNum);
	oldId = cell_id.text();
	//alert("Course ID: "+oldId);
	var itemCell = $("#" + itemNum);
	cellToInput(itemCell, "text" ,itemNum);
	isEditMode = true;
}

function cellToInput(element, type, itemNum){
	console.log('cell to input');
	var text = element.text();
	element.text("");
	// To give the first element autofocus
	if(element.id == ("" + itemNum)){
		element.html("<input type='"+ type +"' value='" + text +"' autofocus/>");
	}
	else{
		element.html("<input type='"+ type +"' value='" + text +"'/>");
	}
}

function cellToSelect(element) {
	var text = element.text();
	element.text("");
	element.html("<select name='category' id='category'><option value='equipments'>equipments\
			</option><option value='devices'>devices</option>\
	<option value='materials'>materials</option></select>");
}

//Save data
function saveCodeCell(itemNum){
	alert(itemNum);
	if(isEditMode){
		var request = new createAJAX();
		var url = "update_course.php";
		//alert(itemNum);
		var code = $("#" + itemNum).children()[0].value;
		$("#" + itemNum).empty();
		$("#" + itemNum).text(code);

		var params = "oldcode=" + oldcode +"&code=" + code;
		alert(params);
		updateCourseChanges(url,params);
		
		isEditMode = false;
	}

}

function saveNameCell(itemNum){
	//alert(itemNum);
	if(isEditMode){
		var request = new createAJAX();
		var url = "update_course.php";
		alert(itemNum);
		var code = itemNum;
		
		var name = $("#name" + itemNum).children()[0].value;
		$("#name" + itemNum).empty();
		$("#name" + itemNum).text(name);

		var params = "code=" + code +"&name=" + name ;
		alert(params);
		updateCourseChanges(url,params);
		
		isEditMode = false;
	}

}

function updateCourseChanges(url, params){
	console.log('updateCourseChanges');
	$.ajax({
		type: "POST",
		url: url,
		dataType: "text",
		data: params , 
		success: function(data){
			console.log('succcess');
			alert("Data: " + data + "\nStatus: " + status);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
	});
}

/*
firstApproach();
// console.log(params);
secondApproach();
function firstApproach(){

    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send(params);
    request.onreadystatechange = callBackFunction;
}

function callBackFunction(){
    if(request.readyState == 4){
        if(request.status == 200){
            alert(response);
        }else{
            // handle server errors
            console.log(request.statusText);
            alert('error');
        }
    }
}

 */

function createAJAX(){
	try{
		// IE7 and later and all major browsers.
		return new XMLHttpRequest();
	} catch(e){
		// earlier versions than IE7.
		try{
			return new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e){
			try{
				return new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				return "Your Browser is not supported";
			}
		}
	}
}