<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => '<i class="fa fa-users "></i>'
		),
		
		array(
			'path' => 'newcase', 
			'label' => 'Newcase', 
			'icon' => '<i class="fa fa-briefcase "></i>'
		),
		
		array(
			'path' => 'appointment', 
			'label' => 'Appointment', 
			'icon' => '<i class="fa fa-paperclip "></i>'
		),
		
		array(
			'path' => 'casestudy', 
			'label' => 'Casestudy', 
			'icon' => '<i class="fa fa-hacker-news "></i>'
		),
		
		array(
			'path' => 'document', 
			'label' => 'Document', 
			'icon' => '<i class="fa fa-file-archive-o "></i>'
		),
		
		array(
			'path' => 'todolist', 
			'label' => 'Todolist', 
			'icon' => '<i class="fa fa-filter "></i>'
		),
		
		array(
			'path' => 'mytask', 
			'label' => 'Mytask', 
			'icon' => '<i class="fa fa-diamond fa-3x"></i>'
		),
		
		array(
			'path' => 'client', 
			'label' => 'Client', 
			'icon' => '<i class="fa fa-dribbble fa-3x"></i>'
		),
		
		array(
			'path' => 'staff', 
			'label' => 'Staff', 
			'icon' => '<i class="fa fa-eject fa-3x"></i>'
		)
	);
		
	
	
			public static $role = array(
		array(
			"value" => "Admin", 
			"label" => "Admin", 
		),
		array(
			"value" => "Users", 
			"label" => "Users", 
		),
		array(
			"value" => "Staff", 
			"label" => "Staff", 
		),
		array(
			"value" => "Client", 
			"label" => "Client", 
		),);
		
			public static $account_status = array(
		array(
			"value" => "Active", 
			"label" => "Active", 
		),
		array(
			"value" => "Pending", 
			"label" => "Pending", 
		),
		array(
			"value" => "Blocked", 
			"label" => "Blocked", 
		),);
		
			public static $court_category = array(
		array(
			"value" => "Supreme court", 
			"label" => "Supreme Court", 
		),
		array(
			"value" => "Court of Appeals", 
			"label" => "Court Of Appeals", 
		),
		array(
			"value" => "High Court", 
			"label" => "High Court", 
		),
		array(
			"value" => "Industrial Court", 
			"label" => "Industrial Court", 
		),
		array(
			"value" => "Land Court", 
			"label" => "Land Court", 
		),
		array(
			"value" => "subordinate courts", 
			"label" => "Subordinate Courts", 
		),);
		
			public static $case_stage = array(
		array(
			"value" => "Bail/Bond", 
			"label" => "Bail/Bond", 
		),
		array(
			"value" => "On first appearance in court", 
			"label" => "On First Appearance In Court", 
		),
		array(
			"value" => "Conviction & Appeal", 
			"label" => "Conviction & Appeal", 
		),
		array(
			"value" => "At the time of arrest", 
			"label" => "At The Time Of Arrest", 
		),
		array(
			"value" => "Detention & custody", 
			"label" => "Detention & Custody", 
		),
		array(
			"value" => "During investigations", 
			"label" => "During Investigations", 
		),
		array(
			"value" => "After Arrest", 
			"label" => "After Arrest", 
		),
		array(
			"value" => "During Trial", 
			"label" => "During Trial", 
		),);
		
			public static $priority = array(
		array(
			"value" => "high", 
			"label" => "High", 
		),
		array(
			"value" => "medium", 
			"label" => "Medium", 
		),
		array(
			"value" => "low", 
			"label" => "Low", 
		),);
		
			public static $status = array(
		array(
			"value" => "overdue", 
			"label" => "Overdue", 
		),
		array(
			"value" => "done", 
			"label" => "Done", 
		),);
		
			public static $gender = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);
		
			public static $relationship = array(
		array(
			"value" => "single", 
			"label" => "Single", 
		),
		array(
			"value" => "married", 
			"label" => "Married", 
		),
		array(
			"value" => "widowed", 
			"label" => "Widowed", 
		),);
		
}