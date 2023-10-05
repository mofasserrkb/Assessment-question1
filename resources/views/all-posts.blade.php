<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>POSTS</h2>

  <table class="table">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Post ID</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($post as $allpost)


      <tr>
        <td>{{$allpost->userID}}</td>
        <td>{{$allpost->id}}</td>
        <td>{{$allpost->title}}</td>
       <td> {{$allpost->body}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
