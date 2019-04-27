<?php
/* Smarty version 3.1.33, created on 2019-04-27 13:36:03
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc43ea3b55c44_78197126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa539548b6d5ebd20ab12a0f00637afe07b91e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\index.tpl',
      1 => 1556364963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.wind.tpl' => 1,
    'file:success.wind.tpl' => 1,
  ),
),false)) {
function content_5cc43ea3b55c44_78197126 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/logo.png" />
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


<div class="parent">
    <div class="child">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link d-none" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="false">User</a>
                <a class="nav-item nav-link active" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['tab1Name']->value;?>
</a>
                <a class="nav-item nav-link" id="nav-third-tab" data-toggle="tab" href="#nav-third" role="tab" aria-controls="nav-third" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['tab2Name']->value;?>
</a>
                <a class="nav-item nav-link" id="nav-fourth-tab" data-toggle="tab" href="#nav-fourth" role="tab" aria-controls="nav-fourth" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['tab5Name']->value;?>
</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">

            </div>
            <div class="tab-pane fade show active" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                <div class="t11">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tab1']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <div class="t12 d-none">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tab3']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <div class="tab-pane fade show" id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab">
                <div class="t21">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tab2']->value;
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
                <div class="t22 d-none">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tab4']->value;
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                </div>
            </div>
            <div class="tab-pane fade show" id="nav-fourth" role="tabpanel" aria-labelledby="nav-fourth-tab">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['tab5']->value;
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable5, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:error.wind.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:success.wind.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
