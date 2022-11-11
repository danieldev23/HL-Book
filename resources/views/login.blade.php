
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{{ asset('/') }}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{   $title  }}</title>
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}">
</head>
<body>
    <main>
        <div class="row">
            <div class="colm-logo">
                <img src="{{asset('frontend/images/hlbook.png')}}" alt="Logo">            <h2><p>HL Book is a brand new platform. Developed based on Facebook and Tiktok. <br/>Bring great value to business people.</h2>
            </div>
            <div class="colm-form">
                <div class="form-container">
                    <form action="/login/store" method="post">
                      {{ @csrf_field() }}
                    <div class="text-field">
                        <label for="username3">Username</label>
                        <input autocomplete="off" name="email" type="email" id="username3" placeholder="Enter your username or phone number" />

                      </div>
                      <div class="text-field ip">
                        <label for="username3">Password</label>
                        <input autocomplete="off" type="password" id="username3" placeholder="Enter your password" name="password" />
                        @include('alert')

                      </div>
                      <div class="wrap">
                        <button class="button">Login</button>
                            @csrf
                        </form>
                        </div>
                      <!-- <button class="glow-on-hover" type="button">LOGIN</button> -->
                    <a href="#">Forgotten password?</a>
                    <form action="signup" method="get">
                    <button class="button" style="    background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
                                                background: linear-gradient(to right, #0575E6, #00F260);">Create new Account</button>
                    </form>   
            </div>
                <p><a href="#" class="title"><b>Create a Page</b></a> for a celebrity, brand or business.</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-contents">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">മലയാളം</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><button>+</button></li>
           
            
               
                
                
            </ol>
            <small>HLBook © 2022</small>
        </div>
    </footer>
</body>
</html>