<?php
session_start();

// error_reporting(E_ALL);
// ini_set('display_errors', 1); 

include("database.php");

$password = $_COOKIE['password'];

if (isset($password) || $password == 'evening') {
    header("Location: evening.php?id={$_SESSION['name']}");
    exit;
}

if (isset($password) || $password == 'day') {
    header("Location: day.php?id={$_SESSION['name']}");
    exit;
}

if (isset($password) || $password == 'weekend') {
    header("Location: weekend.php?id={$_SESSION['name']}");
    exit;
}

    // $passArray = array('weekend', 'day', 'evening');

    // if (isset($_POST['password']) && $_POST['password'] == 'weekend') {
    //     setcookie("password", 'weekend', strtotime('+30 days'));
    //     header('Location: weekend.php');
    //     exit;
    // }

    // if (isset($_POST['password']) && $_POST['password'] == 'evening') {
    //     setcookie("password", 'evening', strtotime('+30 days'));
    //     header('Location: evening.php');
    //     exit;
    // }

    // if (isset($_POST['password']) && $_POST['password'] == 'day') {
    //     setcookie("password", 'day', strtotime('+30 days'));
    //     header('Location: day.php');
    //     exit;
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laura &amp; Oliver | 1st June 2019 | Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to the wedding website of Oliver &amp; Laura" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=GFS+Didot" rel="stylesheet">
    
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Custom -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section class="login">
        <div class="container">
            <img src="images/ol-logo.png" alt="Ollie and Laura">
            <h2>01 | 06 | 19</h2>
            <p>PLEASE ENTER THE PASSWORD PROVIDED ON YOUR INVITATION</p>

            <?php
                if(isset($_POST["submit"])){

                    $password = $_POST['password'];
                    $password = stripslashes($password);
                    $password = str_replace(' ', '', $password);
                    $password = strtolower($password);

                    $query = "SELECT * FROM guestlist WHERE name = '$password' ";

                    $result = $conn->query($query);

                    if ($result->num_rows == 1) {
                        
                        $user = $result->fetch_array();
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['userlevel'] = $user['invitation_code'];      

                        if($_SESSION['userlevel'] == "1"){
                            header("Location: evening.php?id={$_SESSION['name']}");
                            setcookie("password", 'evening', strtotime('+30 days'));
                        } elseif($_SESSION['userlevel'] == "2"){
                            header("Location: day.php?id={$_SESSION['name']}");
                            setcookie("password", 'day', strtotime('+30 days'));
                        } elseif($_SESSION['userlevel'] == "3"){
                            header("Location: weekend.php?id={$_SESSION['name']}");
                            setcookie("password", 'weekend', strtotime('+30 days'));
                        }
                    } else { ?>
                        <div class="error">
                            <p>You have entered the incorrect password. Please try again.</p>
                        </div>
                    <?php }
                }
            ?>

            <form method="POST" action="<?php echo $_SERVER[PHP_SELF]?>">
                <input type="text" name="password" placeholder="Enter password">
                <button type="submit" name="submit" class="btn btn-default btn-block">Enter</button>
            </form>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>