<?php
/* Smarty version 3.1.33, created on 2019-04-28 18:12:17
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\main.content\feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc5d0e1f009a1_93854062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7c49c01c92ad87ce74e518a0e65ef79abbac75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\main.content\\feedback.tpl',
      1 => 1556467936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc5d0e1f009a1_93854062 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/feedback.css" type="text/css">
<div class="feedback-back">
    <div class="img-parent">
        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/message.png">
    </div>
    <form method="POST" action="/feedback/send/" class="new-user" id="feedback-form">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="feedback-email" name="feedback-email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" id="feedback-name" name="feedback-name"  placeholder="Name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>
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
<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js?hl=en'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/feedback.js"><?php echo '</script'; ?>
><?php }
}
