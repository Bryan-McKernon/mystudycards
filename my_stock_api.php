<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaScript - read JSON from URL</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="mypanel"></div>

    <script>
      const userAction = async () => {
        const response = await fetch('https://api.intrinio.com/prices?identifier=AAPL');
        const myJson = await response.json(); //extract JSON from the http response
        var myJSONX = JSON.stringify(myJson);
        document.getElementById("mypanel").innerHTML = myJSONX;

      }
    </script>

</body>
</html>
