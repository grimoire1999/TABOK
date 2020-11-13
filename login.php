<?php
session_start();
include 'init.php';

if (isset($_POST['uname']) && isset($_POST['pswd'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pswd = validate($_POST['pswd']);

    if (empty($uname)){
        header("Location: index.php?error=username is required");
        exit();
    }
    else if(empty($pswd)){
        header("Location: index.php?error=password is required");
        exit();
    }
    else {
        $sql = "SELECT * FROM tbl_screener WHERE scrnUname='$uname' AND scrnPass='$pswd'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['scrnUname'] === $uname && $row['scrnPass'] === $pswd) {
				$_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                         
				header("Location: homepage.php");
                exit();

			}else{
				header("Location: index.php?error=Incorrect Username or Password");
				exit();
			}
		}else{
			header("Location: index.php?error=Incorrect Username or Password");
			exit();
		}
	}

}else{
	header("Location: index.php");
	exit();
}


?>