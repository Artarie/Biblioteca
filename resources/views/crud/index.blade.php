<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<body>
  <div>
    <h1>BIBLIOTECA</h1>
  </div>
  <div>
    <div>
      <a href="{{route('book.create')}}" type="button" class="btn btn-primary">CREAR LIBRO</a>
    </div>
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
    <div>
      <table class="table table-hover">
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
          @foreach($books as $book)
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
          @endforeach
        </tbody>

      </table>
      <div class="d-flex justify-content-center">
    {{ $books->links() }}
</div>
    </div>
  </div>
</body>