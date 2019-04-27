<?php
/* Smarty version 3.1.33, created on 2019-04-21 11:00:32
  from 'C:\xampp\htdocs\bwt_test.com\views\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbc31302cee29_14479021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150a8a082194c8ce22430b4a5a58c7634adfc093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.com\\views\\default\\login.tpl',
      1 => 1555837207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbc31302cee29_14479021 (Smarty_Internal_Template $_smarty_tpl) {
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
