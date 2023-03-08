@extends( $tplConfig -> template )
@section('page-content')
<section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span4">
              <aside>
                <div class="widget">
                  <h4 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;Get in touch with Oliver</h4>
                  <ul>
                    <li><label><strong>Phone : </strong></label>
                      <p>+1 415 745 8616</p>
                    </li>
                    <li><label><strong>Email : </strong></label>
                      <p>dreamcomestrue9999@gmail.com</p>
                    </li>
                    <li><label><strong>Skype : </strong></label>
                      <p>live:eastern.star930</p>
                    </li>
                    <li><label><strong>Github : </strong></label>
                        <p>https://github.com/amazingdeveloper930</p>
                    </li>
                    <li><label><strong>Linkedin : </strong></label>
                        <p>https://www.linkedin.com/in/topdev930/</p>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
            <div class="span8">
              
              @include('theme.contactform')

            </div>
          </div>
    </div>
</section>
@endsection

