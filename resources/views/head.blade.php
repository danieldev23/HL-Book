<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link href='{{asset('frontend/images/letter-h.png')}}' rel='icon' type='image/x-icon'/>
    <title>HLBook - Mạng Xã Hội Dành Cho Giới Trẻ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
  </head>
  <div>
    <script src="{{asset('frontend/js/script.js')}}"></script>
    <nav>
      <div class="nav-left">
       <a href="/"> <img src="{{asset('frontend/images/letter-h.png')}}" class="logo-img" /></a>
        <!-- <h1 style="color: #1876f2; font-size: 34px">H</h1> -->
        <h1 class="logo">LBook</h1>

        <ul>
          <li><img src="{{asset('frontend/images/notification.png')}}"/></li>
          <li><a href="/chatify"><img src="{{asset('frontend/images/email.png')}}"/></a></li>
          <li><img src="{{asset('frontend/images/tv.png')}}"/></li>
        </ul>
      </div>
      <div class="search-box">
        <img src="{{asset('frontend/images/search.png')}}" />
        <input type="text" placeholder="Tìm kiếm trên HLBook...?" />
      </div>
      <div class="nav-right">
        <div class="nav-user-icon online" onclick="settingsMenuToggle()">
          <img src="{{asset('frontend/images/user.jpg')}}" />
        </div>
      </div>
      <!-- ----------------------- setting-menu ----------------------- -->
      <div class="settings-menu" id="settings">
        <div class="settings-menu-inner">
          <div class="user-profile">
            <img src="{{asset('frontend/images/user.jpg')}}" />
            <div>
              <p>
                {{$name}}
                <i class="fas fa-check-circle" style="color: #1876f2"></i>
              </p>
              <a href="/profile">See your profile</a>
            </div>
          </div>
          <hr />
          <div class="user-profile">
            <img src="{{asset('frontend/images/feedback.png')}}" />
            <div>
              <p>Give Feedback</p>
              <a href="#">Help us to improve the new design</a>
            </div>
          </div>
          <hr />
          <div class="setting-links">
            <img src="{{asset('frontend/images/settings.png')}}" class="setting-icon" />
            <a href="#"
              >Setting & Privacy <img src="{{asset('frontend/images/arrow.png')}}" width="10px"
            /></a>
          </div>
          <div class="setting-links">
            <img src="{{asset('frontend/images/help-desk.png')}}" class="setting-icon" />
            <a href="#"
              >Help & Support <img src="{{asset('frontend/images/arrow.png')}}" width="10px"
            /></a>
          </div>

          <div class="setting-links">
            <img src="{{asset('frontend/images/brightness.png')}}" class="setting-icon" />
            <a href="#"
              >Display & Accessibility <img src="{{asset('frontend/images/arrow.png')}}" width="10px"
            /></a>
          </div>
          <div class="setting-links">
            <img src="{{asset('frontend/images/logout.png')}}" class="setting-icon" />
            <a href="/logout/store">Logout <img src="{{asset('frontend/images/arrow.png')}}" width="10px" /></a>
          </div>
          <button class="btn-up" onclick="up()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #525252; transform: ;msFilter:;"><path d="M4 14h4v7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7h4a1.001 1.001 0 0 0 .781-1.625l-8-10c-.381-.475-1.181-.475-1.562 0l-8 10A1.001 1.001 0 0 0 4 14z"></path></svg></button>
        </div>
      </div>
    </nav>