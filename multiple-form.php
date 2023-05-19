<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>multiple form</title>
</head>

<body>
  <p id="demo">1</p>
  <h1>hello</h1>
  <script>
    let text = "";
    let i = 0;
    while (i < 10) {
      text += "<br>The number is " + i;
      i++;
    }
    document.getElementById("demo").innerHTML = text;
  </script>
</body>

</html>