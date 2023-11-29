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
                <h3>List User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key =>$value)
                      <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$value->_id}}</td>
                        <td>{{$value->email}}</td>
                        <td>
                            <a href="{{route('user.edit',$value->_id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('user.destroy',$value->_id)}}" class="btn btn-danger">Delete</a>
                        </td>

                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>  
            </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</body>

</html>
