<?php
/* Smarty version 3.1.33, created on 2019-04-17 21:21:44
  from 'C:\xampp\htdocs\bwt_test.com\views\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb77cc8d9d593_48221388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dfc1c8e7edde3d5fb5f3d71188f3e17ab79cda8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.com\\views\\default\\login.tpl',
      1 => 1555528901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb77cc8d9d593_48221388 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/register.css" type="text/css">

<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-input-tab" data-toggle="tab" href="#nav-input" role="tab" aria-controls="nav-input" aria-selected="true">Sign in</a>
        <a class="nav-item nav-link" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-input" role="tabpanel" aria-labelledby="nav-input-tab">
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
    </div>
    <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
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
    </div>
</div>

<div class="modal fade" id="fail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="fail-body">
            </div>
        </div>
    </div>
</div>


<?php }
}
