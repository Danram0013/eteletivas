<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librares/css/bootstrap.min.css">
    <link rel="stylesheet" href="librares/css/signin.css">
    <title>ETEletiva</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="/login/logar" method="POST">
            <h1 class="h3 mb-3 fw-normal">ETEletiva</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="login" name="login" placeholder="name@example.com">
                <label for="login">Login</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Senha</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
            <p class="mt-5 mb-3 text-muted">© ETE - MFL 2022</p>
        </form>
    </main>
    <script src="/librares/js/bootstrap.min.js"></script>
</body>

</html>