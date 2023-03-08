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