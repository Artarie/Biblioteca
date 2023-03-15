<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1>DAR DE ALTA LIBRO</h1>

<form action="{{route('book.store')}}" method="post">
    <div class="form-group border border-dark" style="width: 75%; margin: auto;">
        @csrf
        @method('POST')
        ISBN<input type="text" name="isbn" class="form-control" />
        <br>
        TITLE<input type="text" name="title" class="form-control" />
        <br>
        AUTHOR<input type="text" name="author" class="form-control" />
        <br>
        PUBLISHED DATE<input type="date" name="published_date" class="form-control" />
        <br>
        DESCRIPTION<input type="text" name="description" class="form-control" />
        <br>
        PRICE<input type="number" name="price" class="form-control" />
        <br>
        CATEGORY
        <select name="category" class="form-control">
            <option value=""> -- Select category</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}"> {{$category->name}}</option>

          @endforeach
        </select>


        <br>
        <input type="submit" class="btn btn-primary" style="text-align:center;">
    </div>
</form>