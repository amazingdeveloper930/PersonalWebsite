  <!-- Footer
 ================================================== -->
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
            <h4>TM Soft</h4>
            <address>
					<strong>TM Soft Company, Inc.</strong>
					
					</address>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h4>Browse pages</h4>
            <ul class="nav nav-list regular">
              <li><a href="{{ route('page_path', ['controller' => 'home'])}}">Home</a></li>
              <li><a href="{{ route('page_path', ['controller' => 'about'])}}">About Me</a></li>
              <li><a href="{{ route('page_path', ['controller' => 'portfolio'])}}">Portfolio</a></li>
              <li><a href="{{ route('page_path', ['controller' => 'contact'])}}">Contact</a></li>
            </ul>
          </div>
        </div>
        {{-- 
        <div class="span4">
          <div class="widget">
            <h4>Get email updates</h4>
            <form class="form-horizontal" action="#" method="post">
              <fieldset>
                <p>
                  Sign up for email updates and we'll plant a tree for you through Trees for the Future.
                </p>

                <div class="input-prepend input-append">
                  <input class="span2" id="appendedPrependedInput" type="text" placeholder="Email">
                  <button class="btn btn-inverse" type="submit">Subscribe!</button>
                </div>
              </fieldset>
            </form>
            <ul class="social_small">
              <li class="facebook first"><a href="#" title="Facebook">Facebook</a></li>
              <li class="twitt"><a href="#" title="Twitter">Twitter</a></li>
              <li class="googleplus"><a href="#" title="google plus">Google plus</a></li>
              <li class="flickr"><a href="#" title="flickr">Flickr</a></li>
              <li class="dribbble"><a href="#" title="Dribbble">Dribbble</a></li>
            </ul>
          </div>
        </div> --}}
      </div>
    </div>

    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>&copy; TM Soft - All right reserved</p>
          </div>
          <div class="span6">
            <div class="pull-right">
              <div class="credits">
                Developed By Oliver Kim</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>