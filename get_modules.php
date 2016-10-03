<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

?>
[{
	"id": "1",
	"title": "Dashboard",
	"url": "#",
	"child": null
}, {
	"id": "2",
	"title": "Academics",
	"url": "",
	"child": [{
		"id": "3",
		"title": "Departments",
		"url": "http://localhost/ui/academic/department/create.php",
		"child": null
	}, {
		"id": "4",
		"title": "Academic Years",
		"url": "http://localhost/ui/academic/academicyear/create.php",
		"child": null
	}, {
		"id": "4",
		"title": "Assignments &amp; Notes",
		"url": "",
		"child": [{
					"id": "4",
					"title": "Add Assignements",
					"url": "http://localhost/ui/academic/assignments_notes/assignments/create.php",
					"child": null
				},{
					"id": "4",
					"title": "Add Notes",
					"url": "http://localhost/ui/academic/assignments_notes/notes/create.php",
					"child": null
				}]
	}]
}, {
	"id": "5",
	"title": "Subject",
	"url": "",
	"child": [{
		"id": "6",
		"title": "Subject",
		"url": "http://localhost/ui/subject/subject/create.php",
		"child": null
	}, {
		"id": "7",
		"title": "Assign Subject",
		"url": "http://localhost/ui/subject/assignsubjects/create.php",
		"child": null
	}, {
		"id": "8",
		"title": "Subject Allocation",
		"url": "http://localhost/ui/subject/subjectallocation/create.php",
		"child": null
	}, {
		"id": "9",
		"title": "Elective Subject",
		"url": "http://localhost/ui/subject/electivesubject/create.php",
		"child": null
	}]
}, {
	"id": "10",
	"title": "Course &amp; Batch",
	"url": "",
	"child": [{
		"id": "11",
		"title": "Course",
		"url": "http://localhost/ui/course_batch/course/create.php",
		"child": null
	}, {
		"id": "12",
		"title": "Batch",
		"url": "http://localhost/ui/course_batch/batch/create.php",
		"child": null
	}, {
		"id": "13",
		"title": "Class Teacher Allocation",
		"url": "http://localhost/ui/course_batch/class_teacher_allocation/create.php",
		"child": null
	}]
}, {
	"id": "10",
	"title": "Settings",
	"url": "",
	"child": [{
		"id": "11",
		"title": "Institute Details",
		"url": "http://localhost/ui/settings/institude_details/create.php",
		"child": null
	}, {
		"id": "12",
		"title": "Student Import",
		"url": "http://localhost/ui/settings/import/student_import.php",
		"child": null
	}, {
		"id": "13",
		"title": "Employee Import",
		"url": "http://localhost/ui/settings/import/emp_import.php",
		"child": null
	}]
}, {
	"id": "10",
	"title": "Events",
	"url": "",
	"child": [{
		"id": "11",
		"title": "Event Type",
		"url": "http://localhost/ui/events/event_type/create.php",
		"child": null
	}, {
		"id": "12",
		"title": "Add Event",
		"url": "http://localhost/ui/events/event/create.php",
		"child": null
	}]
}, {
	"id": "14",
	"title": "HR/Payroll",
	"url": "",
	"child": [{
		"id": "15",
		"title": "Employee Management",
		"url": "",
		"child": [{
					"id": "16",
					"title": "Add User Type",
					"url": "http://localhost/ui/hr_payroll/employee_management/usertype/create.php",
					"child": null
				}, {
					"id": "17",
					"title": "Add Department",
					"url": "http://localhost/ui/hr_payroll/employee_management/department/create.php",
					"child": null
				}, {
					"id": "18",
					"title": "Add Designation",
					"url": "http://localhost/ui/hr_payroll/employee_management/designation/create.php",
					"child": null
				}, {
					"id": "19",
					"title": "Add Employee",
					"url": "http://localhost/ui/hr_payroll/employee_management/employee/create.php",
					"child": null
				}, {
					"id": "20",
					"title": "Employee List",
					"url": "",
					"child": null
				}]
	}]
}, {
	"id": "21",
	"title": "Task Manager",
	"url": "http://localhost/ui/task_details/create.php",
	"child": null
}, {
	"id": "10",
	"title": "Library",
	"url": "",
	"child": [{
		"id": "11",
		"title": "Add Category",
		"url": "http://localhost/ui/library/category/create.php",
		"child": null
	}, {
		"id": "11",
		"title": "Add Books",
		"url": "http://localhost/ui/library/add_book/create.php",
		"child": null
	}, {
		"id": "11",
		"title": "Issue Book",
		"url": "http://localhost/ui/library/issue_book/create.php",
		"child": null
	}, {
		"id": "11",
		"title": "Book Return",
		"url": "http://localhost/ui/library/return_book/create.php",
		"child": null
	}]
}, {
	"id": "14",
	"title": "Student",
	"url": "",
	"child": [{
		"id": "16",
		"title": "Student Category",
		"url": "http://localhost/ui/student/studentcategory/create.php",
		"child": null
	}, {
		"id": "17",
		"title": "Student Admission",
		"url": "http://localhost/ui/student/studentadmission/create.php",
		"child": null
	}, {
		"id": "18",
		"title": "Student List",
		"url": "http://localhost/ui/student/studentlist/designation/create.php",
		"child": null
	}, {
		"id": "19",
		"title": "Attendance",
		"url": "http://localhost/ui/student/attendance/create.php",
		"child": null
	}]
}]
