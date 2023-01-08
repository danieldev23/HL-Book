@if($errors->any())
    <div class="alert aler-danger">
        <style>
            ul {
                list-style: none;
            }
        </style>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{  $error  }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert aler-danger">
        {{  Session::get ('error')  }}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert aler-danger">
        <script>alert("Sai email rồi kìa! Haha")</script>
        {{  Session::get ('error')  }}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert aler-success">
        {{  Session::get ('success')  }}
    </div>
@endif
