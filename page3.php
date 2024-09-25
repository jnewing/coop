<!doctype html>


<html>
<head>
    <title>This is the title of the webpage!</title>
</head>
<body>
    <h1>Basic Form</h1>
    <?php
    if(!isset($_POST['done'])){
        ?>
    
        <form action="" method="post">
        <label><strong>Phone #:</strong></label>
        <input type="phone" name="usr_phone" />
        <br /><br />

        <label><strong>Email Field</strong></label>
        <input type="email" name="usr_email" />
        <br /><br />

        <label><strong>Message</strong></label><br />
        <textarea placeholder="Type message here" name="usr_message"></textarea>
        <br /><br />

        <button type="submit" name="done">Done</button>
    </form>
    <?php
    }
    ?>
    
    <?php
if(isset($_POST['done'])){
  $input = "{$_POST['usr_phone']}  {$_POST['usr_email']}  {$_POST['usr_message']}";
  $message = "Success! You entered: " . $input;
     print($message); 
}
?>
</body>
</html>
