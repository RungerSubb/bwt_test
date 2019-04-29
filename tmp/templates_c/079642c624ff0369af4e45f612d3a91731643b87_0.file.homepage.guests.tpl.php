<?php
/* Smarty version 3.1.33, created on 2019-04-29 13:18:45
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\main.content\homepage.guests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc6dd95804459_39596629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '079642c624ff0369af4e45f612d3a91731643b87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\main.content\\homepage.guests.tpl',
      1 => 1556536484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc6dd95804459_39596629 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="login-first-tab" data-toggle="tab" href="#login-first" role="tab" aria-controls="login-first" aria-selected="true">Sign In</a>
        <a class="nav-item nav-link" id="login-second-tab" data-toggle="tab" href="#login-second" role="tab" aria-controls="login-second" aria-selected="false">Register</a>
    </div>
</nav>
<div class="input-tabs tab-content" id="nav-tabContent">
    <div class="input-tab tab-pane fade show active" id="login-first" role="tabpanel" aria-labelledby="login-first-tab">
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

    </div>
    <div class="input-tab tab-pane fade" id="login-second" role="tabpanel" aria-labelledby="login-second-tab">
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
>
    </div>
</div><?php }
}
