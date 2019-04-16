<?php
/* Smarty version 3.1.33, created on 2019-04-10 15:24:17
  from 'C:\xampp\htdocs\bwt_test.com\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cadee8181cca1_66466434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df6f709e3d60ed21e137c7cf5446b1b7913e70d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.com\\views\\default\\index.tpl',
      1 => 1554902652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cadee8181cca1_66466434 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <?php echo '<script'; ?>

            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"><?php echo '</script'; ?>
>

</head>
<body>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['currentForm']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</body>
</html>

<?php }
}
