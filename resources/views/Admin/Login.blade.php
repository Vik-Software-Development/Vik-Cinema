<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">Login</h1>
            <hr class="my-4">
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div>
    </div>

    <div class="container py-5">
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger text-center" role="alert">
            {{$error}}
        </div>
        @endforeach
        @endif
        <form action="{{route('login.do')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>