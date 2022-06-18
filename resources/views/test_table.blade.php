<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - &lt;Table&gt; Responsive</title>
  <link rel="stylesheet" href="{{asset('css/table_style.css')}}">

</head>

<body>
  <!-- partial:index.partial.html -->
  <h1><span class="blue"></span>Laravel<span class="blue"></span> <span class="yellow">テーブル練習</pan>
  </h1>
  <h2>ブレイド <a href="https://github.com/pablorgarcia" target="_blank">テンプレート練習</a></h2>

  <table class="container">
    <thead>
      <tr>
        <th>
          <h1>国</h1>
        </th>
        <th>
          <h1>首都</h1>
        </th>
        <th>
          <h1>通貨</h1>
        </th>
        <th>
          <h1>政治体制</h1>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $value)
      <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->syuto}}</td>
        <td>{{$value->tuuka}}</td>
        <td>{{$value->seiji_taisei}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- partial -->
  <script src="./script.js"></script>

</body>

</html>