<section id="bottom">
    <div class="container">

      <!-- divider -->
      <div class="row">
        <div class="span12">
          <div class="divider"></div>
        </div>
      </div>
      <!-- end divider -->


      <div class="row">
        <div class="span12">
          <h3 class="heading-success"><a class="btn btn-large btn-success" href="#"><i class="m-icon-big-swapdown m-icon-white"></i></a> Recent works</h3>

          <div id="latest-work" class=" btleft">

              <ul class="portfolio-area da-thumbs">
                @foreach($projects as $project)
                <li>
                  <div class="thumbnail">
                    <div class="image-wrapp">
                        <img src="{{ asset("assets/img/portfolios/" . $project -> mainImage() -> path)}}" alt="{{ $project -> title }}" title="{{ $project -> title }}">
                      <article class="da-animate da-slideFromRight" style="display: block;">
                        <a class="link_post" href="{{ route('page_path', ['controller' => 'portfolio', 'func' => 'details', 'para' => $project -> id])}}"><img src="{{asset('assets/img/icons/link_post_icon.png')}}" alt="" /></a>
                        <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset("assets/img/portfolios/" . $project -> normalImage()[0] -> path)}}"><img src="{{asset('assets/img/icons/zoom_icon.png')}}" alt="{{ $project -> title}}" title="{{ $project -> title}}" /></a></span>
                      </article>
                    </div>
                    <div class="caption">
                      <h4><a href="{{ route('page_path', ['controller' => 'portfolio', 'func' => 'details', 'para' => $project -> id])}}">{{ $project -> title }}</a></h4>
                    </div>

                  </div>
                </li>
                @endforeach
              </ul>
          </div>
        </div>
      </div>
    </div>
  </section>