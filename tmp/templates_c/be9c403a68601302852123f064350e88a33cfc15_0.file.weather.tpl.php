<?php
/* Smarty version 3.1.33, created on 2019-05-01 00:36:57
  from 'C:\xampp\htdocs\bwt_test.loc\views\default\main.content\weather.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc8ce0994b082_73054268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be9c403a68601302852123f064350e88a33cfc15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bwt_test.loc\\views\\default\\main.content\\weather.tpl',
      1 => 1556663815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc8ce0994b082_73054268 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/weather.css" type="text/css">
<div class="weather-main">
    <br/>
    <div class="form-row">
        <div class="form-group col-md-4">
            <div class="weather-image">
                <img class="weather-icon" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/weather.icons/<?php echo $_smarty_tpl->tpl_vars['weatherImage']->value;?>
"><br/>
            </div>
            <div class="weather-text"><?php echo $_smarty_tpl->tpl_vars['temperature']->value;?>
°C</div>
        </div>
        <div class="form-group col-md-7">
            <div class="location city">
                <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
,
            </div>
            <div class="location country">
                <?php echo $_smarty_tpl->tpl_vars['country']->value;?>

            </div>
        </div>
        <div class="form-group col-md-1">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        </div>
        <div class="form-group col-md-3">
           <div class="weather-image sun">
                <img class="weather-icon mini" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/weather.icons/humidity.png">
            </div>

            <div class="weather-text-mini">Humidity</div>
            <div class="weather-text-mini"><?php echo $_smarty_tpl->tpl_vars['humidity']->value;?>
%</div>
        </div>
        <div class="form-group col-md-3">
            <div class="weather-image sun">
                <img class="weather-icon mini" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/weather.icons/sunrise.png">
            </div>
            <div class="weather-text-mini">Sunrise</div>
            <div class="weather-text-mini"><?php echo $_smarty_tpl->tpl_vars['sunrise']->value;?>
</div>
        </div>
        <div class="form-group col-md-3">
            <div class="weather-image sun">
                <img class="weather-icon mini" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/img/weather.icons/sunset.png">
            </div>
            <div class="weather-text-mini">Sunset</div>
            <div class="weather-text-mini"><?php echo $_smarty_tpl->tpl_vars['sunset']->value;?>
</div>
        </div>
    </div>

</div><?php }
}
