@extends( $tplConfig -> template )
@section('page-content')
<section id="intro">
    <div class="jumbotron masthead" >
        <video poster="{{ asset("assets/img/video-back.jpg")}}" class="bg_video_html5" loop="" autoplay="" muted="" playsinline="" trakkvideo="true">
            <source data-src="https://player.vimeo.com/progressive_redirect/playback/559105800/rendition/720p/file.mp4?loc=external&amp;signature=5e56cd0ca2fa796854e4353f93f15b412a044c41a398e8e6cb42d4341e9c1037" type="video/mp4" src="https://player.vimeo.com/progressive_redirect/playback/559105800/rendition/720p/file.mp4?loc=external&amp;signature=5e56cd0ca2fa796854e4353f93f15b412a044c41a398e8e6cb42d4341e9c1037">
        </video>
    </div>
    <div class="intro-main">
        <h1><font>FullStack Web Development</font></h1>
        
        <p><a class="btn btn-large btn-success" href="{{ route('page_path', ['controller' => 'contact'])}}">CONTACT WITH OLIVER</a></p>
        <p class="intro-text">Oliver Kim's Personal Website</p>
        <h4>
            <span>SPECIALIZED IN</span><br/>
            <span><strong>Backend | Frontend | Ecommerce</strong> <br/></span>
            
        </h4>
        
    </div>
</section>
<section id="maincontent">
    <div class="container">
        @include('theme.resumesection')
        @include('theme.testimonial')
    </div>
</section>
@endsection

