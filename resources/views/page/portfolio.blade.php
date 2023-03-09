@extends( $tplConfig -> template )
@section('page-content')
<section id="maincontent">
    <div class="container">
          
          <div class="row">
            <div class="span12">
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#all" data-toggle="tab">All categories</a></li>
                        @foreach($tags as $tag)
                        <li><a href="#{{"category_" . $tag -> id}}" data-toggle="tab">{{$tag -> title}}</a></li>
                        @endforeach
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="all">
                          <ul class="portfolio-area da-thumbs">
                            @foreach(App\Models\Projects::orderby('id', 'DESC') -> get() as $project)
                            <li>
                              <div class="col">
                                <div class="thumbnail">
                                    <div class="image-wrapp">
                                      <img src="{{ asset("assets/img/portfolios/" . $project -> mainImage() -> path)}}" alt="{{ $project -> title }}" title="{{ $project -> title }}">
                                      <article class="da-slideFromTop" style="display: none;">
                                        <a class="link_post" href="{{ route('page_path', ['controller' => 'portfolio', 'func' => 'details', 'para' => $project -> id])}}"><img src="{{asset('assets/img/icons/link_post_icon.png')}}" alt=""></a>
                                        <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset("assets/img/portfolios/" . $project -> normalImage()[0] -> path)}}"><img src="{{asset('assets/img/icons/zoom_icon.png')}}" alt="{{ $project -> title }}" title="{{ $project -> title }}"></a></span>
                                      </article>
                                    </div>
                    
                                    <div class="caption">
                                      <h4><a href="{{ route('page_path', ['controller' => 'portfolio', 'func' => 'details', 'para' => $project -> id])}}">{{ $project -> title }}</a></h4>
                                     
                                    </div>
                                  </div>
                              </div>
                            </li>
                            @endforeach
                          </ul>
                          
                        </div>
                        @foreach($tags as $tag)
                        <div class="tab-pane" id="{{"category_" . $tag -> id}}">
                          
                          <ul class="portfolio-area da-thumbs">
                            @foreach($tag -> projects -> reverse() as $project)
                            <li>
                                <div class="col">
                                  <div class="thumbnail">
                                      <div class="image-wrapp">
                                        <img src="{{ asset("assets/img/portfolios/" . $project -> mainImage() -> path)}}" alt="{{ $project -> title }}" title="{{ $project -> title }}">
                                        <article class="da-slideFromTop" style="display: none;">
                                          <a class="link_post" href="{{ route('page_path', ['controller' => 'portfolio', 'func' => 'details', 'para' => $project -> id])}}"><img src="{{asset('assets/img/icons/link_post_icon.png')}}" alt=""></a>
                                          <span><a class="zoom" data-pretty="prettyPhoto" href="{{ asset("assets/img/portfolios/" . $project -> normalImage()[0] -> path)}}"><img src="{{asset('assets/img/icons/zoom_icon.png')}}" alt="{{ $project -> title }}" title="{{ $project -> title }}"></a></span>
                                        </article>
                                      </div>
                      
                                      <div class="caption">
                                        <h4><a href="{{ route('page_path', ['controller' => 'portfolio', 'func' => 'details', 'para' => $project -> id])}}">{{ $project -> title }}</a></h4>
                                       
                                      </div>
                                    </div>
                                </div>
                              </li>
                            @endforeach
                          </ul>  
                        </div>
                        @endforeach
                      </div>
                </div>
            </div>
          </div>
    </div>
</section>
@endsection

