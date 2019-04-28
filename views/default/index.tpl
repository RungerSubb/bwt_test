<html>
<head>
    <title>Weather parser</title>

    <link rel="stylesheet" href="{$templateWebPath}css/main.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="{$templateWebPath}css/img/logo.png" />
    <link rel="stylesheet" href="{$templateWebPath}css/homepage.css" type="text/css">
    <link rel="stylesheet" href="{$templateWebPath}css/hidden.content.css" type="text/css">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css"
          rel="stylesheet" type="text/css" />
    <link href="https://jqueryvalidation.org/files/demo/site-demos.css"
          rel="stylesheet" >

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

</head>
<body>

<ul class="nav nav-main mb-3 nav-pills"  id="main-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="main-home-tab" data-toggle="pill" href="#main-home" role="tab" aria-controls="main-home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="main-sendFeedback-tab" data-toggle="pill" href="#main-sendFeedback" role="tab" aria-controls="main-sendFeedback" aria-selected="false">Send feedback</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="main-weather-tab" data-toggle="pill" href="#main-weather" role="tab" aria-controls="main-weather" aria-selected="false">Weather</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="main-feedbackList-tab" data-toggle="pill" href="#main-feedbackList" role="tab" aria-controls="main-feedbackList" aria-selected="false">Feedback list</a>
    </li>
</ul>
    <div class="tab-content child" id="pills-tabContent">
        <div class="main tab-pane fade show active" id="main-home" role="tabpanel" aria-labelledby="main-home-tab">
            <div class="child">
                {include file={$homepage}}
            </div>
        </div>
        <div class="main tab-pane fade" id="main-sendFeedback" role="tabpanel" aria-labelledby="main-sendFeedback-tab">
            <div class="child">
                {include file='main.content/feedback.tpl'}
            </div>
        </div>
        <div class="main tab-pane fade" id="main-weather" role="tabpanel" aria-labelledby="main-weather-tab">
            <div class="child">
                {include file={$weather}}
            </div>
        </div>
        <div class="main tab-pane fade" id="main-feedbackList" role="tabpanel" aria-labelledby="main-feedbackList-tab">
            <div class="{$user}">
                {include file={$feedbackList}}
            </div>
        </div>
    </div>


{include file="messages/error.wind.tpl"}
{include file="messages/success.wind.tpl"}
<script src="js/main.js"></script>
<script src="js/validation/dist/jquery.validate.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

</body>
</html>

