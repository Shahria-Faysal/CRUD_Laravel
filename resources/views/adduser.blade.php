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
            <div class="col-4">
                <h1>Add new User</h1>
                <form action="{{ route('addUser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{ old('username') }}" class="form-control" name="username">
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" value="{{ old('useremail') }}" class="form-control" name="useremail">
                        <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" value="{{ old('userage') }}" class="form-control" name="userage">
                        <span class="text-danger">
                            @error('userage')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" value="{{ old('usercity') }}" class="form-control" name="usercity">
                        <span class="text-danger">
                            @error('usercity')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>