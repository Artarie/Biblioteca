<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




<body>
  <div>
    <h1>BIBLIOTECA</h1>
  </div>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('book.index')}}" >Books</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($categories as $category)
           
            <li><a class="dropdown-item" href="{{route('category.books', $category->id)}}">{{$category->name}}</a></li>
            <hr class="dropdown-divider">
            @endforeach
         
          </ul>
      </ul>
    </div>
  </div>
</nav>


  <hr>
  <div>

    <div>
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      @if(session('deleted'))
      <div class="alert alert-danger">
        {{ session('deleted') }}
      </div>
      @endif
    </div>
    <div style="width: 75%; margin: auto;">
      <table class="table table-hover" style="border: solid 2px black;">
        <thead>
          <tr>
            <th>Acciones</th>
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
          @forelse($books as $book)
          <tr>
            <td nowrap> <a href="books/{{$book->id}}/edit" class="btn btn-primary">Editar
                <i class="fa fa-pencil"></i>
              </a>
              <form action="{{ route('book.destroy', $book->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</a>
              </form>
            </td>
            <td>{{$book->isbn}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->published_date}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->created_at}}</td>
            <td>{{$book->updated_at}}</td>
          </tr>
          @empty
          <td> No hay registros.</td>
          @endforelse
        </tbody>

      </table>
      <div class="d-flex justify-content-center">
     
      </div>
    </div>
  </div>
</body>