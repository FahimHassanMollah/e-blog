<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        {{-- <h1>{{ $country->name }} Deatils </h1> --}}
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Cpaital</th>
                    <th scope="col">currency</th>
                    <th scope="col">population</th>
                    <th scope="col">created on</th>
                    <th scope="col">updated on</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                    <tr>

                        <td>
                            <a href="{{ route('country.details',['id'=>$country->id]) }}">{{ $country->name }}</a>
                        </td>
                        <td>{{ $country->capital }}</td>
                        <td>{{ $country->currency }}</td>
                        <td>{{ $country->population }}</td>
                        <td>{{ $country->created_at->diffForHumans() }}</td>
                        <td>{{ $country->updated_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">

                                <a href="{{ route('country.edit',['id' => $country->id]) }}" class="btn btn-success">Update</a>


                                <a href="" class="btn btn-danger ms-1">Delete</a>

                            </div>
                        </td>
                    </tr>

            </tbody>
        </table>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>

