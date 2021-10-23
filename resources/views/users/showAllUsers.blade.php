<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>all users !</title>
</head>

<body>
    <div class="container">
        <h1>All users</h1>
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-warning">Add User</a>
        </div>
        {{-- {{ dd($users) }} --}}
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Nmail</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">User Name</th>
                    <th scope="col">updated on</th>
                    <th scope="col">created on</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ dd($persons) }} --}}
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                             {{ $user->first_name }}
                        </td>

                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>

                        <td>{{ $user->date_of_birth->format('Y-m-d')  }}</td>
                        <td>{{ ($user->user_name) }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->updated_at->format('Y-m-d') }}</td>
                        <td>
                            <a class="btn btn-success" href="">Add profile</a>
                        </td>
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
