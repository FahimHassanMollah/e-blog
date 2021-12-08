<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>book edit </title>
</head>

<body>
    <div class="container">
        <h1>edit book</h1>
        <form action="{{ route('book.update',['id'=>$book->id]) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="authorname" class="form-label">Book Name</label>
                <input type="text" value="{{ $book->name }}" name="name" class="form-control" id="authorname">

            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Book description</label>
                <textarea name="description" class="form-control" id="desc" cols="30" rows="4">{{ $book->description }}</textarea>

            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" name="Isbn" class="form-control" value="{{ $book->Isbn }}" id="isbn">

            </div>
            {{-- <div class="form-group">
                <label class="form-label" for="">Book authror</label>
                <select class="form-control" name="authors" id="" multiple>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="form-group">
                <p class="form-label">Author </p>
                @foreach ($authors as $author)
                    <label class="form-label" for="">{{ $author->name }}</label>
                    <input name="authors[]" value="{{ $author->id }}"  class="form-check-input"  type="checkbox" name="" id="">
                    <br>
                @endforeach

            </div>
            {{-- <div class="mb-3">
                <label for="authorEmail" class="form-label">Book Email </label>
                <input type="email" name="email" class="form-control" id="authorEmail">
            </div> --}}





            <button type="submit" class="btn btn-primary mt-4">Update book</button>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
