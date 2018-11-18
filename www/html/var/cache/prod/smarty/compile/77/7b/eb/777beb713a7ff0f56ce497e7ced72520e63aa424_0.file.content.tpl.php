<?php
/* Smarty version 3.1.32, created on 2018-11-18 01:24:50
  from '/var/www/html/admin1/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf0b152168db7_59173871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777beb713a7ff0f56ce497e7ced72520e63aa424' => 
    array (
      0 => '/var/www/html/admin1/themes/new-theme/template/content.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0b152168db7_59173871 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
