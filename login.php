<html>
    <form method="post">
        <label for="username">User Name</label>
        <br>
        <input type="text" name="usernametextbox">
        <br><br>
        <label for="password">Password </label>
        <br>
        <input type="text" name="passwordtextbox">
        <br><br>
        <input type="submit" name ="submitbutton">
    </form>
</html>

<?php session_start();
    include "connect.php";
    if(isset($_POST['submitbutton'])){
        $userName = $_POST['usernametextbox'];
        $password = $_POST['passwordtextbox'];

        $query = "SELECT * FROM sessions WHERE user_name = '$userName' AND password = '$password' ";
        $result = mysqli_query($_connect, $query);

        if(mysqli_num_rows($result)>0){
            $_SESSION['ADMIN_LOGIN'] = 'yes';
            $_SESSION['ADMIN'] = $userName;
            header('location:home.php');
            die();
        }
        else{
            echo "Please Enter the Correct Details";
        }
    }
?>