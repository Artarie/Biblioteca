<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<body>
  <div>
    <h1>BIBLIOTECA</h1>
  </div>
  <div>
    <div>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('book.index')}}">Books</a>
          </li>

         
        </ul>
      </div>
    </div>
  </nav>

    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ISBN</th>
          <th>Title</th>
          <th>Author</th>
          <th>Published_date</th>
          <th>Description</th>
          <th>Price</th>
          <th>Created_at</th>
          <th>Updated_at</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$books->isbn}}</td>
          <td>{{$books->title}}</td>
          <td>{{$books->author}}</td>
          <td>{{$books->published_date}}</td>
          <td>{{$books->description}}</td>
          <td>{{$books->price}}</td>
          <td>{{$books->created_at}}</td>
          <td>{{$books->updated_at}}</td>
        </tr>
      </tbody>

    </table>
  </div>
</body>