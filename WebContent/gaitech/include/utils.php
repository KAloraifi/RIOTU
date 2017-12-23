<?php function getIndexing($i){

if ($i==1)
return 'ISI';

else if ($i==2)
return 'SCOPUS';
else return 'NOT INDEXED';
	
}

function getMonth($month_id){
	 if ($month_id==1)
	return 'January';
	else if ($month_id==2)
	return 'February';
	else if ($month_id==3)
	return 'March';
	else if ($month_id==4)
	return 'April';
	else if ($month_id==5)
	return 'May';
	else if ($month_id==6)
	return 'June';
	else if ($month_id==7)
	return 'July';
	else if ($month_id==8)
	return 'August';
	else if ($month_id==9)
	return 'September';
	else if ($month_id==10)
	return 'October';
	else if ($month_id==11)
	return 'November';
	else if ($month_id==12)
	return 'December';
}


?>