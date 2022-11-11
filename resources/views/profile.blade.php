@include('head')
    <!-- profile-page -->
    <div class="profile-container">
      <img src="{{asset('frontend/images/fb.jpg')}}" alt="cover" class="cover-img" />
      <div class="profile-details">
        <div class="pd-left">
          <div class="pd-row">
            <img src="{{asset('frontend/images/user.jpg')}}" class="pd-img" />
            <div>
              <h3>
                {{$name}}
                <div class="famous">
                <i
                  class="fas fa-check-circle"
                  style="color: #1876f2; font-size: 20px"></i>
                  <p class="check">Huy hiệu đã xác minh xác nhận đây là Trang cá nhân xác thực của người của công chúng</p>
                </div>

              </h3>
              <p>4968 Friend - 100 mutual</p>
              <img src="{{asset('frontend/images/mycrush.jpg')}}" />
              <img src="{{asset('frontend/images/nhat.jpg')}}" />
              <img src="{{asset('frontend/images/me.jpg')}}" />
              <img src="{{asset('frontend/images/huyenngu.jpg')}}" />
            </div>
          </div>
        </div>
        <div class="pd-right btn-">
          <button class="btn-friend" type="button">
            <img src="{{asset('frontend/images/friendship.png')}}" />Friends
          </button>
          <button class="btn-message" type="button"><img src="{{asset('frontend/images/chat.png')}}" />Message</button>
          <br />
          <a href=""><img src="{{asset('frontend/images/more.png')}}"/></a>
        </div>
      </div>
    <div class="profile-info">
  <div class="info-col">
    <div class="profile-intro">
      <h3>Intro</h3>
      <p class="intro-text">Very little is needed to make a happy life, it is all within yourself, in your way of thinking.</p>
      <hr>
      <ul>
        <li><img src="{{asset('frontend/images/working1.png')}}"> Founder and CEO at HLBook</li>
        <li><img src="{{asset('frontend/images/working.png')}}"> Software Engineer at Julie Store</li>
        <li>
          <img src="{{asset('frontend/images/graduation-cap.png')}}"> Studied at Nam Dan 2 School
        </li>
        <li>
         <img src="{{asset('frontend/images/work-from-home.png')}}"> Live in Vinh city
      </li>
      <li><img src="{{asset('frontend/images/heart.png')}}"> In a relationship</li>
      <li><img class="x1b0d499 xuo83w3" width="15px" src="https://static.xx.fbcdn.net/rsrc.php/v3/yJ/r/OyWm6cSjuMt.png"> Followed by 113.519.283 people</li>
      <li><img class="x1b0d499 xuo83w3" src="https://static.xx.fbcdn.net/rsrc.php/v3/yV/r/ufIMw_ngzRh.png" width="15"> <a href="" style="text-decoration: none;">danieldev23</a></li>
    </ul>
    </div>

    <div class="profile-intro">
      <div class="title-box">
        <h3>Photo</h3>
        <a href="">All photos</a>
      </div>

        <div class="photo-box">
          <div><img src="{{asset('frontend/images/image-1.jpg')}}"></div>
          <div><img src="{{asset('frontend/images/image-2.jpg')}}"></div>
          <div><img src="{{asset('frontend/images/image-3.jpg')}}"></div>
          <div><img src="{{asset('frontend/images/anh-1.jpg')}}"></div>
          <div><img src="{{asset('frontend/images/anh-2.png')}}"></div>

        </div>
    </div>
    <div class="profile-intro">
      <div class="title-box">
        <h3>Friends</h3> 
        <a href="">All friends</a>
      </div>
      <p>4968 (100 mutual)</p>
        <div class="friends-box">
          <div><img src="{{asset('frontend/images/mycrush.jpg')}}"> <p>Li Nh</p></div>
          <div><img src="{{asset('frontend/images/nhat.jpg')}}"> <p>Nhật</p></div>
          <div><img src="{{asset('frontend/images/me.jpg')}}"> <p>Huy</p></div>
          <div><img src="{{asset('frontend/images/huyenngu.jpg')}}">Huyền</div>
          <div><img src="{{asset('frontend/images/user.jpg')}}"> <p>D.Q.Huy</p></div>
          <div><img src="{{asset('frontend/images/manhezai.jpg')}}"> <p>Mạnh</p></div>
          <div><img src="{{asset('frontend/images/member-5.png')}}">Anthony E</div>
          <div><img src="{{asset('frontend/images/member-8.png')}}">Alexander Rose</div>
          <div><img src="{{asset('frontend/images/member-9.png')}}">Jame Doe</div>



        </div>
    </div>
  </div>
  <div class="post-col">       
     <div class="write-post-container">
    <div class="user-profile">
      <img src="{{asset('frontend/images/user.jpg')}}" />
      <div>
        <p>
                          {{$name}}

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
        placeholder="What's on your mind, Huy?">
        </textarea>
        <input type="file" name="file" class="custom-file-input" id="chooseFile" style="color: #fff">
        	<button class="btn-post"><img style="margin:  0" src="{{asset('frontend/images/new-post.png')}}" width="16px">Post</button>

      <div class="add-post-links">
        <a href="#"><img src="{{asset('frontend/images/live.png')}}" /> Live Video</a>
        <a href="#"><img src="{{asset('frontend/images/camera.png')}}" /> Photo/Video</a>
        <a href="#"><img src="{{asset('frontend/images/in-love.png')}}" /> Feeling/Activity</a>
      </div>
    </div>
  </div>
  @foreach($des as $post)

  <div class="post-container">
    <div class="post-row">
      <div class="user-profile">
        <img src="{{asset('frontend/images/user.jpg')}}" />
        <div>
          <p>
                            {{$name}}

            <i class="fas fa-check-circle" style="color: #1876f2"></i>
          </p>
          <span>October 04 2022, 12:52 pm</span>
        </div>
      </div>
      <a href="#"><i class="fas fa-ellipsis-v"></i></a>
    </div>
    <p class="post-text">
      {{$post->input_des}}
      <!-- I am a <span>Web Developer. </span>I can provide clean code and
      pixel perfect design. I also make the website more & more
      interactive with web animations. <br /><a href="#">#developer</a> -->
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
        <img src="{{asset('frontend/images/user.jpg')}}" />
        <div>
          <p>
                            {{$name}}

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

@endforeach

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
      ></video>
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
</div>

</div>

@include('footer')