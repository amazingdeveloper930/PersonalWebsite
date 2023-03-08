@extends( $tplConfig -> template )
@section('page-content')
<section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="well">
                    <a href="#"><img src="{{ asset("assets/img/photo/oliver.jpg") }}" alt="" /></a>
                </div>
            </div>
            <div class="span8">
                <h4>About Me</h4>
                <p>
                    Hi, My name is Oliver Kim and I am the owner of TM Soft.<br/>
                    After graduating from university with a degree in computer science, I worked for several organizations in various positions where I gained the experience working on team projects, individual software engineering tasks, end-user testing and new software applications.
                    <br/>
I would describe myself as an industrious, diligent, reliable and forward thinking software engineer who possesses the skills and qualities to match the job description.<br/>
I have a track record of achievement and can be trusted to use critical thinking skills to solve complex problems to complete projects whilst adhering to strict organizational time frames and I always take ownership of my ongoing professional development.

                </p>
            </div>
        </div>
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