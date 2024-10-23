<!DOCTYPE html>
<html lang="en">
<style>
    nav {
        background-color:cornflowerblue;
    }

    ul {
        list-style-type: none;
        margin: 20px;
        padding: 20px;

    }

    li {
        display: inline-block;
        margin-right: 60px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        color: #666;
    }

</style>
<h1>
    ÇANAKKALE TEKNİK BİLİMLER M.Y.O
</h1>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BasitWebSitesi</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>


<nav>
    <ul>
        <li><a href="/">Ana Sayfa</a></li>
        <li><a href="/about">Hakkımızda</a></li>

        <li><a href="/contact">İletişim</a></li>
    </ul>
</nav>
        <main> @yield('main') </main>




</body>
<main>

</main>
</html>
