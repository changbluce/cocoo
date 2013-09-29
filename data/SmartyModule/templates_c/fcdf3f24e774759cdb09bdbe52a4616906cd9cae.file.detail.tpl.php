<?php /* Smarty version Smarty-3.1.8, created on 2013-09-22 14:55:27
         compiled from "F:\zfdemo\module\Application\view\application\album\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25069523ee8bf460e40-24403307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcdf3f24e774759cdb09bdbe52a4616906cd9cae' => 
    array (
      0 => 'F:\\zfdemo\\module\\Application\\view\\application\\album\\detail.tpl',
      1 => 1379207943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25069523ee8bf460e40-24403307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_523ee8bf4a6261_85825638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523ee8bf4a6261_85825638')) {function content_523ee8bf4a6261_85825638($_smarty_tpl) {?> <div class="hero-unit">
    <h1>Welcome to <span class="zf-green"><?php echo $_smarty_tpl->tpl_vars['album']->value->title;?>
</span></h1>
      <p>Author: <h4><?php echo $_smarty_tpl->tpl_vars['album']->value->artist;?>
</h4></p> 
  </div>
<?php }} ?>