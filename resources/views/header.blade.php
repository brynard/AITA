
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-3Wiw5zC39JZ5r5P5j6f5+qLtuX7y5p6U2V7yzeQ44RK0EWO1ZprJowUKMU0P+oLd" crossorigin="anonymous"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script  type="text/javascript" src="{{ asset('js/app.js') }}"></script>
       <script>
   
   $(document).ready(function () {
    $(".profile-name").click(function () {
        $(".dropdown-content").toggleClass("show");
    });

    $(document).on("click", function (event) {
        if (!$(event.target).closest(".profile-name, .dropdown-content").length) {
            $(".dropdown-content").removeClass("show");
        }
    });
});
  
       </script>
        
    <title>Research Management Centre</title>
    
</head>

<body>
    <header>
        <div class="header-top">
            <div class="left-items">
                <span class="contact-info">rmc@utm.my</span>
                <span class="facebook-icon"><i class="fab fa-facebook-f"></i></span>
            </div>
            <div class="center-item">

                <span class="international-grants">International Grant Opportunities</span>
            </div>
            <div class="right-items">
                <div class="profile-dropdown">
                    <a href="#" class="profile-name"><i class="fas fa-user"></i>  {{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    </div>
                  </div>
                  

            </div>
        </div>
        <div class="container">
            <img src="{{ asset('assets/logo.jpg') }}" alt="RMC Logo"style="width: 1000px; height: 120px;">
          
        </div>
    </header>
  <main>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Items</a></li>
            <li><a href="#">Loan</a></li>
            <li><a href="#">Report</a></li>
        </ul>
    </nav>
  </main>
</body>

</html>