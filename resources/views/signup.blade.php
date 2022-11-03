<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])

</head>

<body>
    <div style="height: 100vh" class="container d-flex align-items-center justify-content-center">

        <div style="height: 400px; width: 400px" >
            <div class="h1 text-center">Signup</div>
            <form method="POST" action="/login"   class="d-flex flex-column gap-2 " >
                @csrf
                <label for="name">Full Name :</label>
                <input type="text" name="name" class="form-control" placeholder="John Doe" />
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" id="email"
                    placeholder="example@example.com" required />
                <label for="password">Password :</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Your password..." required />

                    <button type="submit" class="form-control btn btn-primary">Sign up</button>
            </form>
            <p class="mt-2">Already have an account? <a href="/login" >Login</a></p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
