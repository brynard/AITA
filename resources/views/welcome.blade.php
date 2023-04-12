

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-3Wiw5zC39JZ5r5P5j6f5+qLtuX7y5p6U2V7yzeQ44RK0EWO1ZprJowUKMU0P+oLd" crossorigin="anonymous">
    --}}
    <title>Research Management Centre</title>
 
</head>

<body>
   @include('header')
    <main>
      
        <div class="wrapper">
            <section class="item-summary">
                <div class="container">
                    <div class="item-card">
                        <img src="item-logo.png" alt="Items Logo">
                        <h3>7</h3>
                        <p>Items</p>
                    </div>
                    <div class="item-card">
                        <img src="project-logo.png" alt="Projects Logo">
                        <h3>3</h3>
                        <p>Projects</p>
                    </div>
                    <div class="item-card">
                        <img src="value-logo.png" alt="Total Values Logo">
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