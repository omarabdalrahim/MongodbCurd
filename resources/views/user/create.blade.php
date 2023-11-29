<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">
        @if(session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Create User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="Card-body">
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        @error('name')<p class="text text-danger ">{{$message}}</p>@enderror
                        </div>
                        <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Name">
                        @error('email')<p class="text text-danger ">{{$message}}</p> @enderror

                        </div>
                        <div class="form-group">
                        <label>password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Name">
                        @error('password')<p class="text text-danger ">{{$message}}</p>@enderror

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                    </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</body>

</html>
