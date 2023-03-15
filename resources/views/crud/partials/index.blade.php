<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1>EDITAR LIBRO {{$book->title}}</h1>
<form action="{{route('book.update', $book->id)}}" method="post">
<div class="form-group border border-dark" style="width: 75%; margin: auto;">

@csrf
@method('PUT')

    ISBN<input type="text" name="isbn" value="{{$book->isbn}}"  class="form-control"/>
    TITLE<input type="text" name="title" value="{{$book->title}}"  class="form-control"/>
    AUTHOR<input type="text" name="author" value="{{$book->author}}"  class="form-control"/>
    PUBLISHED DATE<input type="date" name="published_date"value="{{$book->published_date}}"  class="form-control"/>
    DESCRIPTION<input type="text" name="description" value="{{$book->description}}"  class="form-control"/>
    PRICE<input type="number" name="price" value="{{$book->price}}"  class="form-control"/>

    
    <button type="submit" class="btn btn-primary">Actualizar</button>
</div>
</form>