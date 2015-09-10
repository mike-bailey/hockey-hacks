<html>
<!-- This was used to mitigate autoplaying in Monumental Network videos -->
        <head>
                <title>Alternate Embed Generator</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        </head>
<body>
<div style="padding-left: 15px; font: 20; color: white; background-color: darkgray;">
Michael's Monumental Embed Thingy
</div>
<div style="margin-left: 15px">
<?php
if (isset($_POST["source"])) {
        $sourcelol = $_POST["source"];
        $sourcefixed = str_replace("//", "http://", $sourcelol);
        $sourcelol = str_replace('"', "'", $sourcefixed);
        $key=rand() . rand();
        $sourcepreview = "<script>function addVideo" . $key . "() {      document.getElementById('noautoplay" . $key .  "').innerHTML = \" " . $sourcelol . " \" " . "} </script> <div id='noautoplay" . $key . "'><img src='http://tools.michaelbailey.co/rmnb/screen.png' onclick='addVideo" . $key . "()' /></div>";
        $sourcefixed = htmlspecialchars("<script>function addVideo" . $key . "() {      document.getElementById('noautoplay" . $key .  "').innerHTML = " ) . "&quot;" . htmlspecialchars ($sourcelol) . "&quot;" . htmlspecialchars("} </script> <div id='noautoplay" . $key . "'><img src='http://tools.michaelbailey.co/rmnb/screen.png' onclick='addVideo" . $key . "()' /></div>");
        echo "<br><br><b>Source code</b><br><div id='code' style='font-family: monospace;' >" . $sourcefixed . "</div>";
        echo "<div id='preview'><br><br><br>Preview:<br>" . $sourcepreview . "</div>";
}
?>
<br>
<form method="POST" action="index.php" style="padding-left: 15px;">
<br>Post your embed in this itty bitty box for voodoo!<br>
<input type="text" name="source"><br>
<input type="submit" value="Fire mah lazurs!!">
</form>
</div>
</body>
</html>
