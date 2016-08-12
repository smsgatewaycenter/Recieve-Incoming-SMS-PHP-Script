<?php
/**************************************************************************************************
| SmsGatewayCenter.com
| httpw://www.SmsGatewayCenter.com
| contact@SmsGatewayCenter.com.com
|**************************************************************************************************
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement and to be bound by it.
|
| Copyright (c) 2010 - 2016 SmsGatewayCenter.com. All rights reserved.
|**************************************************************************************************/
	//Save this file as incoming_sms.php
	
	//If you are planning to insert this data in your database, then create a database connection file and include the file name as shown below.
	//ofcourse uncomment the following if you have that file
	//include('db_con.php');
	
	//We send out various information such as circle, operator, etc., 
	//2 important parameters are Recepient Phone Number and Message
	//So you can just grab those 2 important parameters as shown below.
	
	//If $_GET is not working then try $_REQUEST
	$incoming_sms_no = $_GET['phonecode']; //Short code or Long Code number [OPTIONAL]
	$incoming_sms_keyword = $_GET['keyword']; //Short code or Long Code Keyword such as MYCOMPANY [OPTIONAL]
	$recepient_mobile = $_GET['phoneno'];
	$recepient_message = $_GET['content'];
	$recepient_circle = $_GET['location']; //Recepient's Circle or Location [OPTIONAL]
	$recepient_operator = $_GET['carrier']; //Recepient's Operator Name such as Idea, Airtel [OPTIONAL]
	
	//Now you can print all the received data or insert it in your database.
	echo $incoming_sms_no;
	echo "<br />";
	echo $incoming_sms_keyword;
	echo "<br />";
	echo $recepient_mobile;
	echo "<br />";
	echo $recepient_message;
	echo "<br />";
	echo $recepient_circle;
	echo "<br />";
	echo $recepient_operator;
	echo "<br />";
	
	//OR
	//If you are planning to capture in the database, then store the values to your database table
	
	

