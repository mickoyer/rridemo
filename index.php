<!DOCTYPE HTML>  
<html>

<head>

<script type="text/javascript">

/*
 * disable()
 * disable company list
 */
function disable() {
    document.getElementById("company").disabled=true;
//     alert("Here");
}

/*
 * enable()
 * enable company list
 */
function enable() {
    document.getElementById("company").disabled=false;
//     alert("There");
//     window.onload = enable;
}

function validateForm() {
    var x = document.forms["input_form"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var x = document.forms["input_form"]["email"].value;
    if (x == null || x == "") {
        alert("Email must be filled out");
        return false;
    }
    var x = document.forms["input_form"]["website"].value;
    if (x == null || x == "") {
        alert("Website must be filled out");
        return false;
    }
}

</script>

<style>
body {
    background-color: lightblue;
    font-family: verdana;
    font-size: 16px;
}

h2 {
    color: gray;
    text-align: center;
}

p {
    font-family: verdana;
    font-size: 16px;
}
input {
    font-family: verdana;
    font-size: 16px;
}
</style>

</head>
<body>  

<h2>RRI Programming Example:</h2>
<blockquote>
<form name="input_form" action="welcome_post.php" onsubmit="return validateForm()" method="post">

<!--
  Name:<br>
  <input type="text" name="name" size="35">
  <br><br>
  E-mail:<br>
  <input type="text" name="email" size="35">
  <br><br>
  Website:<br>
  <input type="text" name="website" size="35">
  <br><br>
-->

<!-- pre-fill for testing
-->
  Name:<br>
  <input type="text" name="name" size="35" value="John Doe">
  <br><br>
  E-mail:<br>
  <input type="text" name="email" size="35" value="jdoe@example.com">
  <br><br>
  Website:<br>
  <input type="text" name="website" size="35" value="http://www.example.com">
  <br><br>
  Type:<p>
  <input type="radio" name="type" value="employer" onclick="disable()">Agent/Employer<p>
  <input type="radio" name="type" value="employee" checked="checked" onclick="enable()">Employee<p>

  <br><br>
<select id="company" name="company">
  <option>Acme Widget Co.</option>
  <option>Globex Corporation</option>
  <option>Initech, Inc.</option>
  <option>Hooli, LLC</option>
</select>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<blockquote>

</body>
</html>