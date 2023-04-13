<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <script src="https://kit.fontawesome.com/fa624bee14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Research Management Centre</title>
    <style>

    </style>
</head>

<body>
    @include('header')
    <main>

        <div class="wrapper">
            <section class="item-summary">
                <div class="container ">
                    <div class="item-card">
                        <i class="fas fa-shopping-cart"></i>
                        <h3>7</h3>
                        <p>Items</p>
                    </div>
                    <div class="item-card">
                        <i class="fas fa-project-diagram"></i>
                        <h3>3</h3>
                        <p>Projects</p>
                    </div>
                    <div class="item-card">
                        <i class="fas fa-sort-numeric-up"></i>
                        <h3>$500k</h3>
                        <p>Total Values</p>
                    </div>
                </div>
            </section>
            <section class="activities">
                <div class="container">
                    <h2>Activities</h2>
                    <ul>
                        <li class="done">Submit research proposal</li>
                        <li class="done">Review research proposal</li>
                        <li class="current">Conduct research</li>
                        <li>Write research paper</li>
                        <li>Present research findings</li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
