<?php /* Smarty version Smarty-3.1.8, created on 2013-09-22 10:05:16
         compiled from "F:\zfdemo\module\Application\view\error\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11649523ea4bc11fd91-30932874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd99e6fccefbd0ab671c2c304ae4547922f87d695' => 
    array (
      0 => 'F:\\zfdemo\\module\\Application\\view\\error\\404.tpl',
      1 => 1358765576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11649523ea4bc11fd91-30932874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_523ea4bc1bd310_44518833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523ea4bc1bd310_44518833')) {function content_523ea4bc1bd310_44518833($_smarty_tpl) {?><h1>A 404 error occurred</h1>
<h2><<?php ?>?php echo $this->message ?<?php ?>></h2>

<<?php ?>?php if (isset($this->reason) && $this->reason): ?<?php ?>>

<<?php ?>?php
$reasonMessage= '';
switch ($this->reason) {
    case 'error-controller-cannot-dispatch':
        $reasonMessage = 'The requested controller was unable to dispatch the request.';
        break;
    case 'error-controller-not-found':
        $reasonMessage = 'The requested controller could not be mapped to an existing controller class.';
        break;
    case 'error-controller-invalid':
        $reasonMessage = 'The requested controller was not dispatchable.';
        break;
    case 'error-router-no-match':
        $reasonMessage = 'The requested URL could not be matched by routing.';
        break;
    default:
        $reasonMessage = 'We cannot determine at this time why a 404 was generated.';
        break;
}
?<?php ?>>

<p><<?php ?>?php echo $reasonMessage ?<?php ?>></p>

<<?php ?>?php endif ?<?php ?>>

<<?php ?>?php if (isset($this->controller) && $this->controller): ?<?php ?>>

<dl>
    <dt>Controller:</dt>
    <dd><<?php ?>?php $this->escape($this->controller) ?<?php ?>>
<<?php ?>?php
if (isset($this->controller_class) 
    && $this->controller_class
    && $this->controller_class != $this->controller
) {
    echo " (resolves to " . $this->escape($this->controller_class) . ")";
}
?<?php ?>>
</dd>

<<?php ?>?php endif ?<?php ?>>

<<?php ?>?php if (isset($this->exception) && $this->exception): ?<?php ?>>

<h2>Exception:</h2>

<p><b><<?php ?>?php echo $this->escape($this->exception->getMessage()) ?<?php ?>></b></p>

<h3>Stack trace</h3>

<pre>
<<?php ?>?php echo $this->exception->getTraceAsString() ?<?php ?>>
</pre>

<<?php ?>?php endif ?<?php ?>>
<?php }} ?>