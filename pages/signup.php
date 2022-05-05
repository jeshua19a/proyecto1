<?php
	include('conn.php');
	if(isset($_POST['susername'])){
		$username=$_POST['susername'];
		$password=$_POST['spassword'];

		$query=$conn->query("select * from user where username='$username'");

		if ($query->num_rows>0){
			?>
  				<span>El nombre de usuario ya existe.</span>
  			<?php 
		}


	}
?>