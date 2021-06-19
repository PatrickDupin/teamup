<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team UP - Escale seu time</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.16/tailwind.min.css"
          integrity="sha512-bCrETtEVhxwUaYXKR7LeP4wkzfqBrjL2H/u0c7tKRnZGLqatfZzSB+VvG3vCszHoo+QeWOl467pRgsRaXPyZPA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper teal lighten-1">
                <div class="container">
                    <a href="#" class="brand-logo center">Logo</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="m-6">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="page-footer teal lighten-1" style="bottom:0;position:fixed;width:100%">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © <?php echo date('Y') ?> Copyright
                <a class="grey-text text-lighten-4 right" href="https://www.linkedin.com/in/patrickdupin/">Patrick Dupin</a>
            </div>
        </div>
    </footer>
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</html>
