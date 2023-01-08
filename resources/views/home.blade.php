@include('head')
<div id="menu">
  <ul>
    <li><i class="fa-solid fa-share"></i> Share</li>
    <li><i class="fa-solid fa-trash"></i> Restore</li>
    <li><i class="fa-solid fa-circle-info"></i> More</li>
  </ul>
</div>
    <div class="container">
      <!-- ----------------------- left-sidebar ----------------------- -->
      <div class="left-sidebar">
        <div class="imp-links">
          <a href="#"><img src="{{asset('frontend/images/newspaper.png')}}" /> Tin Mới Nhất</a>
          <a href="#"><img src="{{asset('frontend/images/people.png')}}" /> Bạn Bè</a>
          <a href="#"><img src="{{asset('frontend/images/meeting.png')}}" /> Nhóm</a>
          <a href="#"
            ><img src="{{asset('frontend/images/marketplace.png')}}" /> MarketPlace</a
          >
          <a href="#"><img src="{{asset('frontend/images/movie.png')}}" /> Watch</a>
          <a href="#">Xem Thêm</a>
        </div>
        <div class="shortcut-links">
          <p>Lối Tắt Của Bạn</p>
          <a href="#"><img src="{{asset('frontend/images/mac.avif')}}" /> Web Developer</a>
          <a href="#"
            ><img src="{{asset('frontend/images/shortcut-2.png')}}" /> Web Designer</a
          >
          <a href="#"
            ><img src="{{asset('frontend/images/code.avif')}}" /> Fullstack Development</a
          >
          <a href="#"><img src="{{asset('frontend/images/web.avif')}}" /> Software Engineer</a>
        </div>
      </div>
      <!-- ----------------------- main content ----------------------- -->
      <div class="main-content">
        <div class="story-gallery">
          <div class="story story1">
            <img src="{{asset('frontend/images/upload.png')}}" />
            <p>Post Story</p>
          </div>
          <div class="story story2">
            <img src="{{asset('frontend/images/eny.jpg')}}" />
            <p>Li Nh</p>
          </div>
          <div class="story story3">
            <img src="{{asset('frontend/images/member-3.png')}}" />
            <p>Emy</p>
          </div>
          <div class="story story4">
            <img src="{{asset('frontend/images/member-2.png')}}" />
            <p>Huy</p>
          </div>
          <div class="story story5">
            <img src="{{asset('frontend/images/eny-2.jpg')}}" />
            <p>Em yêu<i class="fas fa-heart" style="color: red"></i></p>
          </div>
        </div>

        <div class="write-post-container">
          <div class="user-profile">
            <img src="{{asset('frontend/images/user.jpg')}}" />
            <div>
              <p>
                {{$name}}
                <i class="fas fa-check-circle" style="color: #1876f2"></i>
              </p>
              <small>Công khai <i class="fas fa-caret-down"></i></small>
            </div>
          </div>
          <form action="/post/store" method="post" enctype="multipart/form-data">
                      {{ @csrf_field() }}
          <div class="post-input-container">
            <textarea
              name="post_content"
              id=""
              rows="3"
              placeholder="Bạn đang suy nghĩ gì vậy, Huy?"></textarea>
              <input type="file" style="color: #fff" name="file" class="custom-file-input" id="chooseFile" accept="image/*">
              
              <button class="btn-post"><img style="margin:  0" src="{{asset('frontend/images/new-post.png')}}" width="16px">Đăng</button>
            <div class="add-post-links">
              <a href="#"><img src="{{asset('frontend/images/live.png')}}" /> Live Video</a>
              <a href="#"><img src="{{asset('frontend/images/camera.png')}}" /> Photo/Video</a>
              <a href="#"><img src="{{asset('frontend/images/in-love.png')}}" /> Feeling/Activity</a>
            </div>
          </div>
        </div>
</form>

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="{{asset('frontend/images/user.jpg')}}" />
              <div>
                <p>
                  {{$name}}
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>04 tháng 10, 2022, lúc 12:52</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>

          <p class="post-text">
            Tôi là {{$name}}. Hiện tại tôi đang là 1 <span>Software Engineer </span>của Microsoft. Với niềm đam mê vô tận với lập trình. Tôi đã sáng tạo ra mạng xã hội hoàn toàn mới cho giới trẻ.<br /><a href="#">#gioitre</a>
            <br />
            <!-- <a href="#">#coder</a> <br /><a href="#">#blockchain</a> -->
          </p>
          <img src="https://www.youthcollaboratory.org/sites/default/files/styles/full/public/2019-05/naassom-azevedo-541451-unsplash.jpg?h=3f04afe0&itok=NfFNjwU5" class="post-img" />
          <div class="post-row">
            <div class="activity-icons">
              <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 589k</div>
              <div><img src="{{asset('frontend/images/comment.png')}}" /> 15k</div>
              <div><img src="{{asset('frontend/images/share.png')}}" /> 3k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
          <div width=531 height=340>
          <div class="fb-comments" data-href="https://dangquochuy.xyz/" data-width="" width=550 data-numposts="5"></div>
        </div>
        </div>

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="https://scontent.fvii1-1.fna.fbcdn.net/v/t39.30808-6/321605235_834400964284806_217113060558599026_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=1QJv3H5ha1cAX-AdIYX&_nc_ht=scontent.fvii1-1.fna&oh=00_AfAvGA_Zc2A0b51N-ndKIcryPUmqkpMymqHtWu1JNYKw5Q&oe=63BC9015" />
              <div>
                <p>
                  <!-- {{$name_random}} -->
                  VnExpress
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>{{date("F j, Y, g : i a")}}</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>

          <p class="post-text">
            {{$data["articles"][$r]["description"]}}

          </p>
          <a href="{{$url}}" target="__blank" style="text-decoration: none;">{{$url}}</a>
          <img src="{{$img}}" class="post-img"/>
          <div class="post-row">
            <div class="activity-icons">
              <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 50k</div>
              <div><img src="{{asset('frontend/images/comment.png')}}" /> 15k</div>
              <div><img src="{{asset('frontend/images/share.png')}}" /> 3k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>
        <!-- Video from Youtube -->
        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="https://scontent.fvii1-1.fna.fbcdn.net/v/t39.30808-6/322049291_1259074301310069_8119295995915632222_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=qQ-HCWFhdgYAX8TPQxp&_nc_ht=scontent.fvii1-1.fna&oh=00_AfAeArsX_jzsO5iRWyzpKEqeuXGTtJYPdQbhvTKH37KuJQ&oe=63BD67EB" />
              <div>
                <p>
                  Lê Bảo Bình
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>26 tháng 12, 2022 lúc 20:25</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
         <a href="">#1 trong danh mục âm nhạc Thịnh hành </a>
         <br/>
CON HỨA SẼ VỀ - LÊ BẢO BÌNH | OFFICIAL MUSIC VIDEO | NHẠC XUÂN 2023 - MẸ, XUÂN NÀY CON VẪN THA HƯƠNG

            <br />

          </p>
          <iframe class="post-video" height="315" src="https://www.youtube.com/embed/xPKU5WkLOqA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="post-row">
            <div class="activity-icons">
        <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 500k</div>
        <div><img src="{{asset('frontend/images/comment.png')}}" /> 150k</div>
        <div><img src="{{asset('frontend/images/share.png')}}" /> 30k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>
        <!-- Video from Youtube -->

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="{{asset('frontend/images/user.jpg')}}" />
              <div>
                <p>
                  Dang Quoc Huy
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>October 04 2022, 12:52 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>

          <p class="post-text">
            I am a <span>Web Developer. </span>I can provide clean code and
            pixel perfect design. I also make the website more & more
            interactive with web animations. <br /><a href="#">#developer</a>
            <br />
            <a href="#">#coder</a> <br /><a href="#">#blockchain</a>
          </p>
          <img src="{{asset('frontend/images/fb.jpg')}}" class="post-img" />
          <div class="post-row">
            <div class="activity-icons">
              <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 50k</div>
              <div><img src="{{asset('frontend/images/comment.png')}}" /> 15k</div>
              <div><img src="{{asset('frontend/images/share.png')}}" /> 3k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>


        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="https://yt3.ggpht.com/oync4tGFg8V9t41lXitj1-JdfT46uaqUL_6zK3hpILehdLL6pDQGbMPY6QEuStb9F-5CoFkM9g=s48-c-k-c0x00ffffff-no-rj" />
              <div>
                <p>
                  Diệu Kiên Official
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>October 30 2022, 19:00 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
          XUÔI DÒNG CỬU LONG | DIỆU KIÊN x TIẾN TỚI - OFFICIAL MV
            <!-- I am a <span>Web Developer. </span>I can provide clean code and
            pixel perfect design. I also make the website more & more
            interactive with web animations. <br /><a href="#">#developer</a> -->
            <br />
            <!-- <a href="#">#coder</a> <br /><a href="#">#blockchain</a> -->
          </p>
          <iframe class="post-video" height="315" src="https://www.youtube.com/embed/273Kow05WFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="post-row">
            <div class="activity-icons">
        <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 50k</div>
        <div><img src="{{asset('frontend/images/comment.png')}}" /> 15k</div>
        <div><img src="{{asset('frontend/images/share.png')}}" /> 3k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>

        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="{{asset('frontend/images/me.jpg')}}" />
              <div>
                <p>
                  Đặng Quốc Huy
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>October 04 2022, 12:52 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
            I am a <span>Web Developer. </span>I can provide clean code and
            pixel perfect design. I also make the website more & more
            interactive with web animations. <br /><a href="#">#developer</a>
            <br />
            <a href="#">#coder</a> <br /><a href="#">#blockchain</a>
          </p>
          <video
            
            class="post-video"
            autoplay
            controls
            loop
            <source src="https://cdn.glitch.global/a8842503-92c0-4cc3-8dd2-ec46ac7c827b/Finance%20Business%20Video%20Background.mp4?v=1651065395675" type="video/mp4">
          </video>
          <div class="post-row">
            <div class="activity-icons">
        <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 50k</div>
        <div><img src="{{asset('frontend/images/comment.png')}}" /> 15k</div>
        <div><img src="{{asset('frontend/images/share.png')}}" /> 3k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>


        <div class="post-container">
          <div class="post-row">
            <div class="user-profile">
              <img src="{{asset('frontend/images/me.jpg')}}" />
              <div>
                <p>
                  Đặng Quốc Huy
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>October 04 2022, 12:52 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
            I am a <span>Web Developer. </span>I can provide clean code and
            pixel perfect design. I also make the website more & more
            interactive with web animations. <br /><a href="#">#developer</a>
            <br />
            <a href="#">#coder</a> <br /><a href="#">#blockchain</a>
          </p>
          <iframe class="post-video" height="315" src="https://www.youtube.com/embed/d8rXacGdR_4&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="post-row">
            <div class="activity-icons">
        <div><img src="{{asset('frontend/images/positive-vote.png')}}" /> 50k</div>
        <div><img src="{{asset('frontend/images/comment.png')}}" /> 15k</div>
        <div><img src="{{asset('frontend/images/share.png')}}" /> 3k</div>
            </div>
            <div class="post-profile-icon">
              <img src="{{asset('frontend/images/user.jpg')}}" /> <i class="fas fa-caret-down"></i>
            </div>
          </div>
        </div>

        <button type="button" class="load-more-btn">Load More</button>
      </div>
      <!-- ----------------------- right-sidebar ----------------------- -->
      <div class="right-sidebar">

        <div class="event">
          <div class="left-event">
             <!-- <h3>03</h3>
                <span>October</span> -->
          </div>
          <div class="right-event">
          </div>
       </div>
       <div class="event">
          <h3 class="heading">Sự Kiện Sắp Tới <span>Xem tất cả</span></h3>
          <img src="{{asset('frontend/images/tet.jpg')}}" alt="event-img">
          <div class="event-date">
             <h3>21 <b>july</b></h3>
             <h4>Tết Nguyên Đán Quý Mão <span>Tỉnh Nghệ An</span></h4>
          </div>
          <button><i class="fa-regular fa-star"></i> Quan tâm</button>
       </div>
       <div class="create-page">
          <ul>
             <li>
                <i class="fa-solid fa-circle-plus"></i>
                <h4>Tạo Trang &amp; Nhóm</h4>
                <i class="fa-solid fa-magnifying-glass"></i>
             </li>
             <li>
                <img src="https://images.unsplash.com/photo-1566837945700-30057527ade0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="groups">
             </li>
             <li>
                <b>Dveloper Community <span>200k Thành viên</span></b>
                <button>Tham gia</button>
             </li>
          </ul>
       </div>
        <div class="sidebar-title">
          <h4>Quảng cáo</h4>
          <a href="#">Đóng</a>
        </div>
        <video src="{{asset('frontend/images/ads.mp4')}}" class="ads" autoplay loop muted></video>
        <div class="sidebar-title">
          <h4>Trò chuyện</h4>
          <a href="#">Ẩn</a>
        </div>

        <div class="online-list">
          <div class="online">
            <img src="{{asset('frontend/images/eny.jpg')}}" />
          </div>
          <p>Bé Linhh cutee<i class="fas fa-heart" style="color: red"></i></p>
        </div>

        <div class="online-list">
          <div class="online">
            <img src="{{asset('frontend/images/me.jpg')}}" />
          </div>
          <p>
            Đặng Quốc Huy
            <i class="fas fa-check-circle" style="color: #1876f2"></i>
          </p>
        </div>
        <div class="online-list">
          <div class="online">
            <img src="{{asset('frontend/images/nhat.jpg')}}" />
          </div>
          <p>Đặng Long Nhật</p>
        </div>
        <div class="online-list">
          <div class="online">
            <img src="{{asset('frontend/images/huyenngu.jpg')}}" />
          </div>
          <p>Nguyễn Thanh Huyền</p>
        </div>
      </div>
    </div>
          <div class="alert" id="error">
        <i class="fa-solid fa-wifi icon"></i>
        <div class="content">
            <div class="title">
                Wifi disconnect!
            </div>
            <div class="des">
                Please check your connection
            </div>
        </div>
        <i class="fa-solid fa-x close"></i>
    </div>

    <div class="alert" id="success">
        <i class="fa-solid fa-wifi icon"></i>
        <div class="content">
            <div class="title">
                Wifi connected!
            </div>
            <div class="des">
                Successfully connected
            </div>
        </div>
        <i class="fa-solid fa-x close"></i>
    </div>
    <div>
    </div>
@include('footer')
