<html>
  <head>
    <title>Travel List</title>
  </head>

  <body>
  <h1>My Travel Bucket List</h1>
    <h2>Places I've Already Been To</h2>
    <ul>
      @foreach ($visited as $place)
      <li>{{ $place->name }}</li>
      @endforeach
    </ul>
    <a href="/">Back home</a>
  </body>
</html>