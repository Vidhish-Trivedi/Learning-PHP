<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
  You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
  Stored on browser (client), sensitive data shouldn't be stored in cookies.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie
setcookie('name', 'Brad', time() + 21600); // 86400 = 1 day    ;       setcookie(key, value, expire_time);

// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);           // Provide empty value, expire_time = some time in the past;

?>
