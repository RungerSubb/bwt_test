<?php
/* Smarty version 3.1.33, created on 2019-04-22 17:36:49
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbddf91eb7c92_64175010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abdbe5f83bf5cee360b22845f6cf901c5cca0508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\login.tpl',
      1 => 1555837207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbddf91eb7c92_64175010 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/login.css" type="text/css">

<div class="img-parent">
    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/logo.png">
</div>
<form method="POST" action="/user/login/" class="old-user" id="login-form">
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="email"  placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name="pass" class="form-control" id="password" placeholder="Password">
    </div>
    <br/>
    <button type="submit" class="btn btn-primary" id="loginBtn">Sign in</button>
</form>
<br/>

<?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>







<?php }
}
