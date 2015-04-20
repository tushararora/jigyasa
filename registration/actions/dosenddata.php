<?php
	require('../commons/connection.php');
	session_start();
	if(isset($_POST['register']))
	{
		$userName=$db->escapeString($_POST['name']);
		$userContact=$db->escapeString($_POST['contact']);
		$userEmail=$db->escapeString($_POST['email']);
		$userCollege=$db->escapeString($_POST['college']);
		$userCity=$db->escapeString($_POST['city']);
		$userState=$db->escapeString($_POST['state']);
		$userEvent=$db->escapeString($_POST['event']);
		$userAccommodation=$db->escapeString($_POST['accommodation']);
		$userQuery=$db->escapeString($_POST['query']);
		$result=$result=$qgen->select("*","registration");
		while($arr=$db->fetchAssoc($result)){
			if(($arr['user_name']==$userName) && ($arr['user_event']==$userEvent)){
				$msg="Duplicate Entry";
				$_SESSION['msg']=$msg;
				header("Location:../");die;
			}
		}
		$result=$qgen->insert("registration","user_name,user_contact,user_email,user_college,user_city,
		user_state,user_event,user_accommodation,user_query","'".$userName."','".$userContact."','".$userEmail."',
		'".$userCollege."','".$userCity."','".$userState."','".$userEvent."','".$userAccommodation."','".$userQuery."'");
		if($result){
			$msg="Thank you ".$userName.". You are successfully registered for".$userEvent.".";
			$_SESSION['msg']=$msg;
			header("Location:../");die;
		}
		$db->closeConnection();
		header("Location:../");die;
	}

?>