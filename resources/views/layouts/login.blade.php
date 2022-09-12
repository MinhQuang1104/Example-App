<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <h1 class="text-center">Login</h1>
    <form action="{{route('user.login')}}" method="POST">
        @csrf
        @if (session()->has('message'))
            <div class="alert alert-danger text-center">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required autofocus>
        </div>
        <div class="form-group mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group mb-3">
            <label>
                <input type="checkbox" name="remember" class="form-check-input"> Remember Me
            </label>
        </div>
        <div class="d-grid mx-auto mb-3">
            <button type="submit" class="btn btn-dark btn-block">Sign in</button>
        
            <button type="submit" class="btn btn-dark btn-block"><a href="{{route('register')}}">Sign up</a></button>
        </div>
    </form>
</body>
</html>
