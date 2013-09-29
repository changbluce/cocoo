<?php /* Smarty version Smarty-3.1.8, created on 2013-09-15 02:05:16
         compiled from "F:\zfdemo\module\User\view\user\user\login.phtml" */ ?>
<?php /*%%SmartyHeaderCode:137445234f9bc677005-53684799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c09791a028c14808275157e0f6cc22996e52bdd' => 
    array (
      0 => 'F:\\zfdemo\\module\\User\\view\\user\\user\\login.phtml',
      1 => 1354090079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137445234f9bc677005-53684799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5234f9bc6c9bb1_68499280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5234f9bc6c9bb1_68499280')) {function content_5234f9bc6c9bb1_68499280($_smarty_tpl) {?><<?php ?>?php

$title = 'Login';
$this->headTitle($title);
?<?php ?>>
<h1><<?php ?>?php echo $this->escapeHtml($title); ?<?php ?>></h1>
<div class="login">
    <p style="color:#FF0000"><<?php ?>?php echo $this->errorMessage; ?<?php ?>></p>
   <<?php ?>?php
        $form = $this->form;
        $form->setAttribute('action','/user/login');
        $form->prepare();
        echo $this->form()->openTag($form) . "\n";
        echo $this->formRow($form->get('email')) . "\n";
        echo $this->formRow($form->get('password')) . "<br/>\n";
        echo $this->formRow($form->get('submit')) . "\n";
        echo $this->form()->closeTag($form) . "\n";
   ?<?php ?>>
</div>

<?php }} ?>