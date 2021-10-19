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
        <h1>create country</h1>
        <form action="{{ route('country.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="countryName" class="form-label">Country Name</label>
                <input type="text" name="country_name" class="form-control" id="countryName" >

            </div>
            <div class="mb-3">
                <label for="capitalName" class="form-label">Capital Name</label>
                <input type="text" name="capital_name" class="form-control" id="capitalName">
            </div>
            <div class="mb-3">
                <label for="curency" class="form-label">Currency Name</label>
                <input type="text" name="currency" class="form-control" id="curency">
            </div>
            <div class="mb-3">
                <label for="population" class="form-label">population </label>
                <input type="number" name="population" class="form-control" id="population">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
