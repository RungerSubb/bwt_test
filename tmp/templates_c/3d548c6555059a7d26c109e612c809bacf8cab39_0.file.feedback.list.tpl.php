<?php
/* Smarty version 3.1.33, created on 2019-04-28 19:18:25
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\main.content\feedback.list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc5e061c9a4e0_82404351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d548c6555059a7d26c109e612c809bacf8cab39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\main.content\\feedback.list.tpl',
      1 => 1556471904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc5e061c9a4e0_82404351 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/feedback.list.css" type="text/css">

<div id="fdb-all">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feedbackArray']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="fdb-base">
            <br/>
            <div class="fdb-child">
                <br/>
                <form class="fdb-main">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Name</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" disabled>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
" disabled>
                    </div>
                    <textarea class="form-control message" rows="5" readonly><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</textarea>
                    <br/>
                </form>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<br/>
<br/><?php }
}
