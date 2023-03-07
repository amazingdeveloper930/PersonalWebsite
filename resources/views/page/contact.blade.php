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
              
    
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form method="post" role="form" class="contactForm" action="{{ route('page_path', ['controller' => 'contact', 'func' => 'sendmessage'])}}">
                @csrf
                <div class="row">
                  <div class="span4 form-group">
                    <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" />
                    <div class="validation"></div>
                  </div>
    
                  <div class="span4 form-group">
                    <input type="email" class="input-block-level" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="span8 form-group">
                    <input type="text" class="input-block-level" name="subject" id="subject" placeholder="Subject" data-rule="minlen:8" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="span8 form-group">
                    <textarea class="input-block-level" name="message" rows="15" data-rule="required" data-msg="Please write something for me" placeholder="Message"></textarea>
                    <div class="validation"></div>
                    <div style="text-align: center;">
                      <button class="btn btn-medium btn-success" type="submit">Send a message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
    </div>
</section>
@endsection

