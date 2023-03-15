<form action="{{route('book.update', $book->id)}}" method="post">
@csrf
@method('PUT')

    ISBN<input type="text" name="isbn" value="{{$book->isbn}}"/>
    TITLE<input type="text" name="title" value="{{$book->title}}"/>
    AUTHOR<input type="text" name="author" value="{{$book->author}}"/>
    PUBLISHED DATE<input type="date" name="published_date"value="{{$book->published_date}}" />
    DESCRIPTION<input type="text" name="description" value="{{$book->description}}"/>
    PRICE<input type="number" name="price" value="{{$book->price}}"/>

    
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>