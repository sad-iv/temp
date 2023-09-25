<!DOCTYPE html>
<html> <!-- urlpost.html -->
<head>
    <title>Asynchronous Communication Example</title>
</head>
<body style='text-align:center'>
    <h1>Loading a web page into a DIV</h1>
    <div id='info'>This sentence will be replaced</div>

    <script>
        let XHR = new XMLHttpRequest()

        XHR.open("POST", "http://localhost/test/urlpost.php", true)
        XHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        XHR.send("url=news.com")

        XHR.onreadystatechange = function()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("info").innerHTML = this.responseText
            }
        }
    </script>
</body>
</html>