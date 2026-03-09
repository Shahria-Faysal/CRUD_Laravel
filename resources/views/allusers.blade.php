<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All users Data</h1>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    <a href="newuser" class="btn btn-success btn-sm">Add User</a>
                    @foreach ($data as $user)
                        <h3>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->city }}</td>
                                <td><a href="{{ route('view.user',$user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                                <td><a href="{{ route('delete.user',$user->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                <td><a href="{{ route('update.page',$user->id) }}" class="btn btn-primary btn-sm">Update</a></td>
                            </tr>
                        </h3>
                    @endforeach
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</body>

</html>