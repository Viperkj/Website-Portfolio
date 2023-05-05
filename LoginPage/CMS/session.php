<?php  
    
    include('connection.php');

    session_start();
    $logged = false;
    
    if(isset($_SESSION['logged']))
    {
        if ($_SESSION['logged'] == true)
        {
            $logged = true ;
            $email = $_SESSION['email'];
        }
    }
    else
        $logged=false;

    if($logged != true)
    {
        $email = "Admin"; // set default username to 'Admin'
        $password = "Password"; // set default password to 'Password'

        if (isset($_POST['email']) && isset($_POST['pass']))
        {
            $email=$_POST['email'];
            $password=$_POST['pass'];            
            
            $sql = "SELECT * FROM admin WHERE username='$email' AND pw='$password' ";

            $result = mysqli_query($connection,$sql);
            $count = mysqli_num_rows($result);
            
            if ($count == 1) {
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $_SESSION['user'] = $row['email'];
                $_SESSION['logged']=true;
                $_SESSION['account']="user";
                header("Location:index.php");
            }    

            else{
        echo "<script>
        alert('Invalid username and Password!!');
        window.location.href='login.php';
        </script>";
            }
        }
    }
?>
