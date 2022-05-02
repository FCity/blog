<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
  <header>
    <h1 id="site-header">Blog</h1>
  </header>

  <nav>
    <ul>
      <li>
        <a href="/">Home</a>
      </li>
      <li>
        <a href="/posts">Posts</a>
      </li>
      <li>
        <a href="/posts/create">Write</a>
      </li>
      <li>
        <a href="/about">About</a>
      </li>
    </ul>
  </nav>

  <main>
    @yield('section')
  </main>
</body>
</html>