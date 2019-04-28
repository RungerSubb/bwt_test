<link rel="stylesheet" href="{$templateWebPath}css/feedback.css" type="text/css">
<div class="feedback-back">
    <div class="img-parent">
        <img src="{$templateWebPath}css/img/message.png">
    </div>
    <form method="POST" action="/feedback/send/" class="new-user" id="feedback-form">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="feedback-email" name="feedback-email" placeholder="Email" value="{$email}" {$readonly}>
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" id="feedback-name" name="feedback-name"  placeholder="Name" value="{$name}" {$readonly}>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <textarea class="form-control message" placeholder="Your message" id="feedback-message" name="message" rows="6"></textarea>
            </div>
            <div class="form-group col-md-6 container">
                <div class="g-recaptcha" id="captcha" name="captcha" data-sitekey="6LdeYp8UAAAAACTLjmravm0btx-g6uqSAj0cguBE" data-size="compact">

                </div>
            </div>
        </div>
        <button id="sendBtn" type="submit" class="btn btn-primary">Send</button>
    </form>
    <br/>
</div>
<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
<script src="js/feedback.js"></script>