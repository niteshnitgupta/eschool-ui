<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

?>
[{
	"id": "1",
	"title": "Dashboard",
  "url": "http://localhost/mustafa/AdminLTE-2.3.3/index2.html",
	"child": null
}, {
	"id": "2",
	"title": "Academics",
	"child": [{
				"id": "3",
				"title": "Departments",
		    	"url": "http://localhost/mustafa/AdminLTE-2.3.3/academic/department/create.php",
				"child": null
			}, {
				"id": "4",
				"title": "Academic Years",
		    	"url": "http://localhost/mustafa/AdminLTE-2.3.3/academic/academicyear/create.php",
				"child": null
			}]
}, {
	"id": "5",
	"title": "Subjects",
	"child": [{
				"id": "6",
				"title": "Subjects",
		    	"url": "http://localhost/mustafa/AdminLTE-2.3.3/subject/subject/create.php",
				"child": null
			}, {
				"id": "7",
				"title": "Assign Subjects",
		    	"url": "http://localhost/mustafa/AdminLTE-2.3.3/subject/assignsubjects/create.php",
				"child": null
			}, {
				"id": "8",
				"title": "Subject Allocation",
		    	"url": "http://localhost/mustafa/AdminLTE-2.3.3/subject/subjectallocation/create.php",
				"child": null
			}, {
				"id": "9",
				"title": "Elective Subject",
		    	"url": "http://localhost/mustafa/AdminLTE-2.3.3/subject/electivesubject/create.php",
				"child": null
			}]
}]
