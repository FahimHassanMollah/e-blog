<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>all authos !</title>
</head>

<body>
    <div class="container">
        <h1>All users</h1>
        <div>
            <a href="{{ route('author.create') }}" class="btn btn-warning">Add Author</a>
        </div>
        {{-- {{ dd($users) }} --}}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Name</th>

                    <th scope="col">Email</th>

                </tr>
            </thead>
            <tbody>
                {{-- {{ dd($persons) }} --}}
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            {{ $author->name }}
                        </td>


                        <td>{{ $author->email }}</td>



                        {{-- <td>
                            <div class="d-flex align-items-center justify-content-center">

                                <a href="{{ route('person.edit',['id' => $country->id]) }}" class="btn btn-success">Update</a>

                                <form action="{{ route('country.delete',['id'=>$country->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                     <input type="submit" value="delete" class="btn btn-danger ms-1">
                                </form>


                            </div>
                        </td> --}}
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
