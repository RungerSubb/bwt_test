<?php
/* Smarty version 3.1.33, created on 2019-04-22 18:59:34
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbdf2f60a0bb4_68333713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40cc4f5b69a88e7291e94db8658831893abc32a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\feedback.tpl',
      1 => 1555952204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbdf2f60a0bb4_68333713 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/feedback.css" type="text/css">

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

<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js?hl=en'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/feedback.js"><?php echo '</script'; ?>
>
<?php }
}
