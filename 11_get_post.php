<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET (URLs and Forms) and $_POST (Forms) superglobals.
*/

if(isset($_GET["username"])) {
    echo $_GET['username'], "<br>";
}
if(isset($_GET["age"])) {
    echo $_GET['age'], "<br>";
}

if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['name'] . '</h3>';
}

?>

<!-- Pass data through a link -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?> ?username=John&age=25">Link</a>        <!-- Link to current file, pass data, note the "" -->
<!-- http://localhost:8080/php-crash/11_get_post.php%20?username=John&age=25 -->
<!-- Posts are more secure -->

<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">       <!-- submit to self -->
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>