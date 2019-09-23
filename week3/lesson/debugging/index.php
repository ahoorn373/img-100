<?php

var_dump($_POST);

// This allows us to check all the POST items that are submitted at once

// We also touched on using the VS Code debugging panel. Note that this probably won't work on your home computer without some configuration.

?>
<form method="post">
    <label for="age">Age</label>
    <input type="number" name="age" id="age">
    <input type="text" name="name" id="name">
    <input type="occupation" name="occupation" id="occupation">
    <input type="submit" value="submit">
</form>
