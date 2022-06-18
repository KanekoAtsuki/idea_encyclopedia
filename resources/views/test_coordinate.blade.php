<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test_coordinate</title>
</head>

<body>
  <h1>test_coordinate</h1>
  <h2>これは座標取得のテストページです</h2>

  <input type="button" value="button" id="cat" onclick="buttonClick()">

  <script>
    function buttonClick() {
      var elem = document.getElementById('cat');
      var r = elem.getBoundingClientRect();

      console.log(r.left + window.pageXOffset, r.top + window.pageYOffset);
    }
  </script>
</body>

</html>