<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<body>
  <div>
    <h1>BIBLIOTECA</h1>
  </div>
  <div>
    <div>
      <a href="{{route('book.create')}}" type="button" class="btn btn-primary">CREAR LIBRO</a>
      @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
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