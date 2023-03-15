<form action="{{route('book.store')}}" method="post">
@csrf
@method('POST')
    ISBN<input type="text" name="isbn" />
    TITLE<input type="text" name="title" />
    AUTHOR<input type="text" name="author" />
    PUBLISHED DATE<input type="date" name="published_date" />
    DESCRIPTION<input type="text" name="description" />
    PRICE<input type="number" name="price" />

    
    <input type="submit">
</form>