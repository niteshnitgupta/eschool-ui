<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

?>
[{
	"id": "1",
	"title": "Dashboard",
  "url": "dashboard.php",
	"child": null
}, {
	"id": "2",
	"title": "Academics",
	"child": [{
		"id": "3",
		"title": "Departments",
    "url": "dept/index.php",
		"child": null
	}, {
		"id": "4",
		"title": "Academic Years",
    "url": "academic/academicyear/create.php",
		"child": null
	}]
}]
