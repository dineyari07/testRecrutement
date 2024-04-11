<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma super application</title>
</head>
<body>
    <header>
        <h1>Ma super application</h1>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/product">Produits</a></li>
                <!-- Ajoutez d'autres liens de navigation ici -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2022 Ma super application</p>
    </footer>
</body>
</html>
