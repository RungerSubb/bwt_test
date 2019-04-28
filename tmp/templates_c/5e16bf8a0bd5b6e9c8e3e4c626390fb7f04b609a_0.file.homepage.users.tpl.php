<?php
/* Smarty version 3.1.33, created on 2019-04-28 18:36:42
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\main.content\homepage.users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc5d69aacc454_82022114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e16bf8a0bd5b6e9c8e3e4c626390fb7f04b609a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\main.content\\homepage.users.tpl',
      1 => 1556469401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc5d69aacc454_82022114 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="user-back">
    <br/>
    <div class="img-parent">
        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/user.png">
    </div>
    <br/>
    <form method="POST" action="/user/logout/" class="old-user" id="user-info-form">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">First name</span>
            </div>
            <input type="text" class="form-control" id="info-name" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" disabled>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Last name</span>
            </div>
            <input type="text" class="form-control" id="info-lastName" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
" disabled>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
            </div>
            <input type="text" class="form-control" id="info-email" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary" id="logoutBtn">Log out</button>
    </form>
    <br/>
</div><?php }
}
