<?php 
class User
	{
		private $user;
		private $con;

		public function __construct($con,$user)
		{
			$this->con=$con;
			$user_details_query=mysqli_query($con,"SELECT * FROM associates");
			$this->user=mysqli_fetch_array($user_details_query);
		}
	}
?>