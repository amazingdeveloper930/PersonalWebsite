@extends( $tplConfig -> template )
@section('page-content')

<section id="maincontent">
    <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              
              <div class="widget">
                <h4 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;Project detail</h4>
                <ul class="project-detal">
                  <li><label>Start Date : {{ $project -> start_date }}</label> </li>
                  <li><label>End Date : {{ $project -> end_date }}</label> </li>
                  <li><label>Skills : {{ $project -> skills }}</label><br /> 
                  </li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="span8">
            <article class="blog-post">
              <div class="tooltip-demo headline">
                <h4>{{ $project -> title }}</h4>
                
              </div>
              <div class="clearfix"></div>
              <div class="well">
                <a href="#"><img src="{{ asset("assets/img/portfolios/" . $project -> bigImage() -> path) }}" alt="" /></a>
                <h5>Description : </h5>
                <p>
                  <?php
                    $description = $project -> description;
                    $description = str_replace("<br/>", '', $description);
                    $description = nl2br($description);
                  ?>
                  {!! $description !!}
                </p>
                <a href="{{ $project -> url}}" class="btn btn-large btn-success" target="_blank">Visit This Project</a>
              </div>
            </article>
  
          </div>
        </div>
      </div>
</section>
@endsection