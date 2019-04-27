<?php
/* Smarty version 3.1.33, created on 2019-04-21 11:00:32
  from 'C:\xampp\htdocs\bwt_test.com\views\default\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbc31303abb30_42441757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd542acabe7141f5d941eb7e82ff0d3b1b9204997' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.com\\views\\default\\register.tpl',
      1 => 1555837202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbc31303abb30_42441757 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/register.css" type="text/css">

<br/>
<form method="POST" action="/user/register/" class="new-user" id="register-form">
    <div class="form-row">
        <div class="form-group col-md-12">
            <input type="email" class="form-control" id="new-email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="password" class="form-control" id="pass1" name="passNew" placeholder="Password">
        </div>
        <div class="form-group col-md-6">
            <input type="password" class="form-control" id="pass2" name="passConf" placeholder="Confirm password">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input class="form-control" id="first-name" name="firstName"  placeholder="First name">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" id="last-name" name="lastName" placeholder="Last name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input id="birth-date" placeholder="Birth date" name="birthDate" class="form-group col-md-10"/>
        </div>
        <div class="form-group col-md-6">
            <select id="sex" placeholder="Sex" name="sex" class="form-control">
                <option selected>Not specified</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
    </div>
    <button id="registerBtn" type="submit" class="btn btn-primary">Submit</button>
</form>
<br/>

<?php echo '<script'; ?>
 src="js/register.js"><?php echo '</script'; ?>
><?php }
}
