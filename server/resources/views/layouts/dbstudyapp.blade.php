<html>
<head>
  <title>@yield('title')</title>
  <style>
    th { background-color: #999; color: fff; padding: 5px 10px; }
    td { border: solid 1px #aaa; color: #999; padding: 5px 10px; }
  </style>
</head>

<body>
  <h1>@yield('title')</h1>

  @section('menubar')

  <h2 class="menutitle"> メニュー </h2>
  <ul>
    <li>@show</li>
  </ul>

  <div class="content">
    @yield('content')
  </div>

  <div class="footer">
    @yield('footer')
  </div>
</body>

</html>