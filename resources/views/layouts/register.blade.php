<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Sign up</title>
</head>
<body>
    <h1 class="text-center">Sign up</h1>
    <form action="{{route('user.register')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" autofocus>

            @error('name')
            <div class="alert alert-danger text-center">
                {{$message}}
            </div>
            @enderror

        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" >

            @error('email')
            <div class="alert alert-danger text-center">
                {{$message}}
            </div>
            @enderror

        </div>
        <div class="form-group mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" >

            @error('password')
            <div class="alert alert-danger text-center">
                {{$message}}
            </div>
            @enderror

        </div>
        <div class="d-grid mx-auto text-center">
            <button type="submit" class="btn btn-dark btn-block">Create</button>
        </div>
    </form>
</body>
</html>
