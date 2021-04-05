<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME')}}</title>
     <link rel="icon" href="{{ asset('media/no-bg.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/costume-front-page.css') }}">
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right">
            @auth
            <a href="{{ url('chat') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title">
                <img src="{{ asset('media/cuyang-images/dear-cuyang.jpeg') }}" width="370px" height="auto">
            </div>

            <div class="group-name">
                <span>Candra|Ahmad|Dede|Hania|Santi</span>
            </div>
        </div>
    </div>

    <div class="content-videos">
      <div class="container">
        <div class="title-vidio">
          <h2>Cari tau lebih dalam tentang cuyang!</h2>
        </div>

          <div class="video">
            <div class="video-box">
              <video width="320" height="240" controls>
                    <source src="{{ asset('media/cuyang-videos/ciluk-ba.mp4') }}" type="video/mp4">
                    <source src="{{ asset('media/cuyang-videos/ciluk-ba.ogg') }}" type="video/ogg">
                    Browser Anda tidak mendukung video ini.
                </video>                
            </div>
              <p class="text-videos">Vidio ini menunjukan kegembiraan atau kebahagian bareng</p>
          </div>
          <div class="video">
            <div class="video-box">
              <video width="320" height="240" controls>
                    <source src="{{ asset('media/cuyang-videos/jedag-jedug.mp4') }}" type="video/mp4">
                    <source src="{{ asset('media/cuyang-videos/jedag-jedug.ogg') }}" type="video/ogg">
                    Browser Anda tidak mendukung video ini.
                </video> 
            </div>
            <p class="text-videos">Vidio ini menunjukan pusing akibat banyak tugas dan akhirnya dibikin jedag jedug supaya hilang rasa pusingnya</p>
          </div>
          <div class="video">
            <div class="video-box">
                <video width="320" height="240" controls>
                    <source src="{{ asset('media/cuyang-videos/left-right.mp4') }}" type="video/mp4">
                    <source src="{{ asset('media/cuyang-videos/left-right.ogg') }}" type="video/ogg">
                    Browser Anda tidak mendukung video ini.
                </video> 
            </div>
            <p class="text-videos">Vidio ini menunjukan tipikal jodoh atau orang yang disukainya</p>
          </div>
          <div class="video">
            <div class="video-box">
              <video width="320" height="240" controls>
                    <source src="{{ asset('media/cuyang-videos/small-big.mp4') }}" type="video/mp4">
                    <source src="{{ asset('media/cuyang-videos/small-big.ogg') }}" type="video/ogg">
                    Browser Anda tidak mendukung video ini.
                </video> 
            </div>
            <p class="text-videos">Vidio ini menunjukan pertumbuhan dan perkembangan cuyang waktu dini hingga dewasa</p>
          </div>
          <div class="clear"></div>
          <div class="video">
            <div class="video-box">
              <video width="320" height="240" controls>
                    <source src="{{ asset('media/cuyang-videos/try-for-fun.mp4') }}" type="video/mp4">
                    <source src="{{ asset('media/cuyang-videos/try-for-fun.ogg') }}" type="video/ogg">
                    Browser Anda tidak mendukung video ini.
                </video> 
            </div>
            <p class="text-videos">Vidio ini menunjukan foto foto cuyang dengan berbagai fose. vidio ini terbuat karena terlihat sekilas cuplikan vidio yang ada di youtube</p>
          </div>

          <div class="video">
            <div class="video-box">
              <video width="320" height="240" controls>
                    <source src="{{ asset('media/cuyang-videos/try-for-fun-2.mp4') }}" type="video/mp4">
                    <source src="{{ asset('media/cuyang-videos/try-for-fun-2.ogg') }}" type="video/ogg">
                    Browser Anda tidak mendukung video ini.
                </video> 
            </div>
            <p class="text-videos">Vidio ini menunjukan foto foto cuyang dengan berbagai fose. Ini adalah versi ke dua nya.</p>
          </div>

      </div>
    </div>

</body>

</html>