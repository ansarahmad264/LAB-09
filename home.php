<?php session_start();
    
    if(!isset($_SESSION['ADMIN_LOGIN']) || $_SESSION['ADMIN_LOGIN'] !== 'yes'){

        echo '<b> You are not logged in. Please log in to access this page. </b>';
        echo '<form action="login.php" method="post">
                <input type="submit" value="Login">
            </form>';
       // header('location:login.php');
        exit;
    }
    
    echo "Welcome ".$_SESSION['ADMIN'];

    if(isset($_POST['logout'])){
        header('location:login.php');
    }
    else if(isset($_POST['categories'])){
        header('location:categories.php');
    }   
    
    
?>

<html>
    <form method="post">
        <input type="submit" name="categories" value="Categories">
        <input type="submit" name="logout" value="Logout">
    </form>
</html>