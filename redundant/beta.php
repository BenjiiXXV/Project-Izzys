
<?php
session_start();
    if (isset($_SESSION['user'])) {
        echo "page received";
    }
    else {
        include('db.php');
        $db = new DB();
        $user = $db->loginUser('user', 'password');
            
        if($db->loginUser($_POST['user'],$_POST['password'])) {
            echo 'User logged in';
        }
        else {
            echo "can't login";
        }
?>
    <!DOCTYPE html> 
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"> </script>
        </head>

        <body>
            <center>
                <h3>Please log in:</h3>
                <form action="#" method="post">
                <table>
                    <tr>
                        <td>Username: </td>
                        <td><input type="user" name="user" required value="<?php echo $user; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Log in!"></td>
                    </tr>
                </table>
                </form>
            </center>
        </body>
    </html>
<?php
}
?>