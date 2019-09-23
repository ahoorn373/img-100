<?php

// Show how query strings can be used with HTML forms and without them
/*
Note that the $_GET superglobal variables can be used to capture query strings
They can be used when url params are added to the url manually, when they are submitted with a form (with a method of get)
or when they are added to an anchor like in this example
*/

if (isset($_GET['name'])) {
    echo 'You clicked ' . $_GET['name'] . '<br>';
}

?>
<a href="?name=homer">Homer</a>
<a href="?name=bart">Bart</a>
<a href="?name=lisa">Lisa</a>
<a href="?name=marge">Marge</a>
