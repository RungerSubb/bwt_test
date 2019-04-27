<html>
<head>
    <title>{$pageTitle}</title>

    <link rel="stylesheet" href="{$templateWebPath}css/main.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="{$templateWebPath}css/img/logo.png" />
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


<div class="parent">
    <div class="child">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link d-none" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="false">User</a>
                <a class="nav-item nav-link active" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="true">{$tab1Name}</a>
                <a class="nav-item nav-link" id="nav-third-tab" data-toggle="tab" href="#nav-third" role="tab" aria-controls="nav-third" aria-selected="false">{$tab2Name}</a>
                <a class="nav-item nav-link" id="nav-fourth-tab" data-toggle="tab" href="#nav-fourth" role="tab" aria-controls="nav-fourth" aria-selected="false">{$tab5Name}</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">

            </div>
            <div class="tab-pane fade show active" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                <div class="t11">
                    {include file={$tab1}}
                </div>
                <div class="t12 d-none">
                    {include file={$tab3}}
                </div>
            </div>
            <div class="tab-pane fade show" id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab">
                <div class="t21">
                    {include file={$tab2}}
                </div>
                <div class="t22 d-none">
                    {include file={$tab4}}
                </div>
            </div>
            <div class="tab-pane fade show" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
                {include file={$tab5}}
            </div>
        </div>
    </div>
</div>
{include file="error.wind.tpl"}
{include file="success.wind.tpl"}
<script src="js/main.js"></script>
<script src="js/validation/dist/jquery.validate.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
</body>
</html>

