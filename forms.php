<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyles.css">
    <title>Document</title>
</head>
<body>
<?php include 'htmlForms.php';?>
<?php
$content = "This is the content of the <h3> tag.";
echo '<h3>' . $content . '</h3>';
$content = "This is the content of the <h3> tag.";
echo '<h3>' . $content . '</h3>';
echo '<h1>Hello user</h1>';
echo '<p>This is a paragraph.</p>';


?>

<h1>Form Registration</h1> 
    <p>Please fill in the information required</p>

<form action="forms.php" method="get">
   <fieldset>
    <label for="first-name">Enter your First Name: <input type="text" required ></label>
    <label for="Last-name">Enter your Last Name: <input type="text" required ></label>
    <label for="email">Enter your email: <input type="email" required ></label>
    <label for="password">Create a New Password: <input type="password" required  minlength="8" pattern="[a-z0-5]{8,}"></label>

   </fieldset>
<fieldset>
  <legend>Account tye (required)</legend>
  <label for="personal"><input type="radio" name="Account-type">Personal</label>
  <label for="busines"><input type="radio" name="Account-type">Busines</label>
</fieldset>
<input type="submit" name="" id="submit" value="submit">


</form>




</body>
</html>