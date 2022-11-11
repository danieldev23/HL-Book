@include('head')
    <div class="container">
      <!-- ----------------------- left-sidebar ----------------------- -->
      <div class="left-sidebar">
        <div class="imp-links">
          <a href="#"><img src="{{asset('frontend/images/newspaper.png')}}" /> Lastes News</a>
          <a href="#"><img src="{{asset('frontend/images/people.png')}}" /> Friends</a>
          <a href="#"><img src="{{asset('frontend/images/meeting.png')}}" /> Group</a>
          <a href="#"
            ><img src="{{asset('frontend/images/marketplace.png')}}" /> MarketPlace</a
          >
          <a href="#"><img src="{{asset('frontend/images/movie.png')}}" /> Watch</a>
          <a href="#">See More</a>
        </div>
        <div class="shortcut-links">
          <p>Your Shortcuts</p>
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
        @foreach ($users as $user)
        <div class="write-post-container">
          <div class="user-profile">
            <img src="{{asset('frontend/images/user.jpg')}}" />
            <div>
              <p>
                {{$user->name}}
                <i class="fas fa-check-circle" style="color: #1876f2"></i>
              </p>
              <small>Public <i class="fas fa-caret-down"></i></small>
            </div>
          </div>
          <form action="/post/store" method="post" enctype="multipart/form-data">
                      {{ @csrf_field() }}
          <div class="post-input-container">
            <textarea
              name="input_text"
              id=""
              rows="3"
              placeholder="What's on your mind, Huy?"></textarea>
              <input type="file" style="color: #fff" name="file" class="custom-file-input" id="chooseFile" accept="image/*">
              
              <button class="btn-post"><img style="margin:  0" src="{{asset('frontend/images/new-post.png')}}" width="16px">Post</button>
            <div class="add-post-links">
              <a href="#"><img src="{{asset('frontend/images/live.png')}}" /> Live Video</a>
              <a href="#"><img src="{{asset('frontend/images/camera.png')}}" /> Photo/Video</a>
              <a href="#"><img src="{{asset('frontend/images/in-love.png')}}" /> Feeling/Activity</a>
            </div>
          </div>
        </div>
</form>
        @endforeach
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
          <img src="{{asset('frontend/images/fbcover.jpg')}}" class="post-img" />
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
              <img src="{{$avatar}}" />
              <div>
                <p>
                  {{$name_random}}
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
              <img src="https://scontent.fvii1-1.fna.fbcdn.net/v/t39.30808-6/287471361_3175544496040437_8181350988583424254_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=nO-66uPhxW8AX8spQS9&_nc_ht=scontent.fvii1-1.fna&oh=00_AfBh3caMDzACvLbuLqEESWpSSs4Oqq94kvxUtFXQ2NF4sA&oe=6371F6B1" />
              <div>
                <p>
                  Lê Bảo Bình
                  <i class="fas fa-check-circle" style="color: #1876f2"></i>
                </p>
                <span>December 25 2022, 20:00 pm</span>
              </div>
            </div>
            <a href="#"><i class="fas fa-ellipsis-v"></i></a>
          </div>
          <p class="post-text">
          THƯƠNG EM ĐẾN GIÀ | LÊ BẢO BÌNH | OFFICIAL MUSIC VIDEO
            <!-- I am a <span>Web Developer. </span>I can provide clean code and
            pixel perfect design. I also make the website more & more
            interactive with web animations. <br /><a href="#">#developer</a> -->
            <br />
            <!-- <a href="#">#coder</a> <br /><a href="#">#blockchain</a> -->
          </p>
          <iframe class="post-video" height="315" src="https://www.youtube.com/embed/8zRy02Wl1JA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            src="{{asset('frontend/images/video.mp4')}}"
            class="post-video"
            autoplay
            loop
            muted></video>
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
          <iframe class="post-video" height="315" src="https://www.youtube.com/embed/3wSrigLLB2k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
          <h3 class="heading">Upcoming Events <span>See all</span></h3>
          <img src="{{asset('frontend/images/eve.jpg')}}" alt="event-img">
          <div class="event-date">
             <h3>21 <b>july</b></h3>
             <h4>United state of America <span>New York City</span></h4>
          </div>
          <button><i class="fa-regular fa-star"></i> interested</button>
       </div>
       <div class="create-page">
          <ul>
             <li>
                <i class="fa-solid fa-circle-plus"></i>
                <h4>Create Page &amp; Groups</h4>
                <i class="fa-solid fa-magnifying-glass"></i>
             </li>
             <li>
                <img src="{{asset('frontend/images/group.jpg')}}" alt="groups">
             </li>
             <li>
                <b>Dveloper Community <span>200k Members</span></b>
                <button>Join Group</button>
             </li>
          </ul>
       </div>
        <div class="sidebar-title">
          <h4>Advertisement</h4>
          <a href="#">Close</a>
        </div>
        <video src="{{asset('frontend/images/ads.mp4')}}" class="ads" autoplay loop muted></video>
        <div class="sidebar-title">
          <h4>Conversation</h4>
          <a href="#">Hide Chat</a>
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

@include('footer')
