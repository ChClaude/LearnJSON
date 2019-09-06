<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSON and PHP</title>
</head>
<body>
<h1>PHP and JSON</h1>
<h3>PHP has some built-in functions to handle JSON.</h3>
<p>Objects in PHP can be converted into JSON by using the PHP function json_encode():</p>
<p id="demo"></p>

<script>
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(JSON.parse(this.responseText));;
        }
    };

    xmlhttp.open("GET", "myScripts.php", true);
    xmlhttp.send();
</script>

</body>
</html>
