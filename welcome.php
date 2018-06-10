<!DOCTYPE html>
<html>
<body>

<h1>Look at me, handling forms and stuff!</h1>

<p>Name and email sent to the form</p>

<ul>

<!-- A chunk of PHP that outputs an HTML tag, some text, and the value of a variable -->
<?php
echo "<li>Name: " . $_POST["name"] . "</li>";
?> 

<!-- Some HTML that has just a bit of PHP in it just to display the value of a variable -->
<li>Email: <?php echo $_POST["email"]; ?>  </li>

</ul>

</body>
</html>
