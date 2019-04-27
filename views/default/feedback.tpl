<link rel="stylesheet" href="{$templateWebPath}css/feedback.css" type="text/css">

<br/>
<form method="POST" action="/feedback/send/" class="new-user" id="feedback-form">
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="email" class="form-control" id="feedback-email" name="feedback-email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" id="name" name="feedback-name"  placeholder="Name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <textarea class="form-control message" placeholder="Your message" id="message" name="message" rows="6"></textarea>
        </div>
        <div class="form-group col-md-6 container">
            <div class="g-recaptcha" name="captcha" data-sitekey="6LdeYp8UAAAAACTLjmravm0btx-g6uqSAj0cguBE" data-size="compact">

            </div>
        </div>
    </div>
    <button id="sendBtn" type="submit" class="btn btn-primary">Send</button>
</form>
<br/>

<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
<script src="js/feedback.js"></script>
