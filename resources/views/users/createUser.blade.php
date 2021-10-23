<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>create user </title>
</head>

<body>
    <div class="container">
        <h1>create person</h1>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="personName" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="personName">

            </div>
            <div class="mb-3">
                <label for="capitalName" class="form-label">Last Name </label>
                <input type="text" name="last_name" class="form-control" id="capitalName">
            </div>
            <div class="mb-3">
                <label for="capitalName" class="form-label">email </label>
                <input type="email" name="email" class="form-control" id="capitalName">
            </div>
            <div class="mb-3">
                <label for="curency" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="curency">
            </div>
            <div class="mb-3">
                <label for="curency" class="form-label">date of birth</label>
                <input type="datetime-local" name="date_of_birth" class="form-control" id="curency">
            </div>
            <div class="mb-3">
                <label for="curency" class="form-label">User Name</label>
                <input type="text" name="user_name" class="form-control" id="curency">
            </div>
            <hr>
            <h4>Profile Informations</h4>

            <div class="mb-3">
                <label for="curency" class="form-label">Profile pic link</label>
                <input type="text" name="profile_pic" class="form-control" id="curency">
            </div>
            <div class="mb-3">
                <label for="curency" class="form-label">Bio</label>
                <input type="text" name="bio" class="form-control" id="curency">
            </div>
            <div class="mb-3">
                <label for="curency" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="curency">
            </div>

            {{-- <div class="mb-3">
               <select name="country_id" id="" class="form-control">
                   @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                   @endforeach

               </select>
            </div> --}}


            <button type="submit" class="btn btn-primary">Create user</button>
            <br>
            <br>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
