<?php
/* Smarty version 3.1.33, created on 2019-04-28 18:44:38
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc5d8766ada67_74583008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa539548b6d5ebd20ab12a0f00637afe07b91e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\index.tpl',
      1 => 1556469875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.content/feedback.tpl' => 1,
    'file:messages/error.wind.tpl' => 1,
    'file:messages/success.wind.tpl' => 1,
  ),
),false)) {
function content_5cc5d8766ada67_74583008 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title>Weather parser</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/logo.png" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/homepage.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/hidden.content.css" type="text/css">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css"
          rel="stylesheet" type="text/css" />
    <link href="https://jqueryvalidation.org/files/demo/site-demos.css"
          rel="stylesheet" >

    <?php echo '<script'; ?>

            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"><?php echo '</script'; ?>
>

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
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['homepage']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
        <div class="main tab-pane fade" id="main-sendFeedback" role="tabpanel" aria-labelledby="main-sendFeedback-tab">
            <div class="child">
                <?php $_smarty_tpl->_subTemplateRender('file:main.content/feedback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
        <div class="main tab-pane fade" id="main-weather" role="tabpanel" aria-labelledby="main-weather-tab">
            <div class="child">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['weather']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
        <div class="main tab-pane fade" id="main-feedbackList" role="tabpanel" aria-labelledby="main-feedbackList-tab">
            <div class="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['feedbackList']->value;
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:messages/error.wind.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:messages/success.wind.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/validation/dist/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
