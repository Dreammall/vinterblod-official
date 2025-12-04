<!-- 全ページの共通部分を記載 layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="description" content="このページでは架空のノルウェーのブラックメタルバンド「VinterBlød」について紹介しています。">
  <link rel="canonical" href="https://vinterblod-official.onrender.com/index.html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- PC用 favicon -->
  <link rel="icon" href="{{ asset('images/icon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}" type="image/x-icon">

  <!-- Apple Touch Icon（iOSホーム画面用）-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">

  <!-- Android Chrome用 -->
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/apple-touch-icon.png') }}">

  <!-- Microsoft タイルアイコン（Windowsのピン留め用） -->
  <meta name="msapplication-TileImage" content="{{ asset('images/icon.png') }}">

  <!-- Safariでの表示制御（オプション） -->
  <meta name="apple-mobile-web-app-capable" content="yes">

  <!-- JS,CSS 読み込み -->
    @vite([
      'resources/css/style.css',
      'resources/css/menu-style.css',
      'resources/css/fade-in.css',
      'resources/css/app.css',
      'resources/js/app.js'
    ])
</head>

<body>
  <div class="side-bg left"></div>
  <div class="side-bg right"></div>
  
  <div class="container">
    <header>

      <!-- バンドロゴ -->
      <img src="{{ asset('images/LOGO.webp') }}" alt="VinterBlod Logo" class="logo">

      <!-- ヘッダー -->
      @yield('top')
      
      <!-- ハンバーガーアイコン -->
      <div class="hamburger-wrapper">
        <img src="{{ asset('images/00-menu-icon-white.webp') }}" alt="メニューを開く" class="hamburger-icon open-icon">
        <img src="{{ asset('images/menu-batsu-icon-white.webp') }}" alt="メニューを閉じる" class="hamburger-icon close-icon">
      </div>

      <!-- メニュー -->
      @yield('menu')
      
    </header>

    <main>
      <!--  コンテンツ -->
      @yield('contents')
    </main>

    <footer>
      <p>© 2025 VinterBlod — All rights reserved. | Art by respective artists</p>
    </footer>

  </div>
</body>
</html>
