<?php session_start();
include("connection.php");
 ?>
    <DOCTYPE html>

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> </head>
        <?php
        $p_name=$_POST['p_name'];



	if(isset($_POST["submit"]))
	{

    if(empty($_POST["p_name"]) || empty($_POST["p_password"]))
		{
		}else
		{
            $p_name=$_POST['p_name'];
			$p_password=$_POST['p_password'];

            $p_name = stripslashes($p_name);
			$p_password = stripslashes($p_password);
            $p_name = mysqli_real_escape_string($db, $p_name);
		$p_password = mysqli_real_escape_string($db, $p_password);
//	$p_password = md5($p_password);
echo "$p_name";
echo "$p_password";

            $sql="SELECT * FROM players WHERE p_name='$p_name' and p_password='$p_password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

			if(mysqli_num_rows($result) == 1)
			{
                $sql="SELECT * FROM players WHERE p_name='$p_name' and p_password='$p_password'";
                $res2 = mysqli_query($db,$sql);
                $row2 = mysqli_fetch_assoc($res2);
                $_SESSION['p_name']=$row2['p_name'];


				header("location:../../main/");
			}else
			{

                $message = '로그인에 실패 하셨습니다! \n올바른 정보로 재 시도 해주시기 바랍니다.';


                echo "<SCRIPT type='text/javascript'>
                    alert('$message');
                    </SCRIPT>";


			}

		}
	}

?>

            </html>
