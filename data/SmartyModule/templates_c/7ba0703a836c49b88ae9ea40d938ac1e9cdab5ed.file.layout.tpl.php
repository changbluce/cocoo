<?php /* Smarty version Smarty-3.1.8, created on 2013-09-22 14:55:27
         compiled from "F:\zfdemo\module\Application\view\layout\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6178523ee8bf4b4572-75076213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba0703a836c49b88ae9ea40d938ac1e9cdab5ed' => 
    array (
      0 => 'F:\\zfdemo\\module\\Application\\view\\layout\\layout.tpl',
      1 => 1379854523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6178523ee8bf4b4572-75076213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'basePath' => 0,
    'all_rights' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_523ee8bf510df8_06473673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523ee8bf510df8_06473673')) {function content_523ee8bf510df8_06473673($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['this']->value->doctype();?>



<html lang="en">
<head>
    <meta charset="utf-8">
    <?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle()->setSeparator(' - ')->setAutoEscape(false);?>


    <?php $_smarty_tpl->tpl_vars['basePath'] = new Smarty_variable($_smarty_tpl->tpl_vars['this']->value->basePath(), null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['this']->value->headLink()->appendStylesheet(($_smarty_tpl->tpl_vars['basePath']->value)."/css/bootstrap.min.css")->appendStylesheet(($_smarty_tpl->tpl_vars['basePath']->value)."/css/style.css")->appendStylesheet(($_smarty_tpl->tpl_vars['basePath']->value)."/css/bootstrap-responsive.min.css");?>


    <?php echo $_smarty_tpl->tpl_vars['this']->value->headLink(array('rel'=>'shortcut icon','type'=>'image/vnd.microsoft.icon','href'=>($_smarty_tpl->tpl_vars['basePath']->value)."/images/favicon.ico"));?>



    <?php echo $_smarty_tpl->tpl_vars['this']->value->headScript()->appendFile(($_smarty_tpl->tpl_vars['basePath']->value)."/js/html5.js","text/javascript",array('conditional'=>'lt IE9'));?>

    <?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle('ZF2 Album Application');?>


    <?php echo $_smarty_tpl->tpl_vars['this']->value->headMeta();?>


    <!-- Le styles -->
    <?php echo $_smarty_tpl->tpl_vars['this']->value->headLink();?>


    <!-- Scripts -->
    <?php echo $_smarty_tpl->tpl_vars['this']->value->headScript();?>


</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="">Album Application</a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="/"><?php echo $_smarty_tpl->tpl_vars['this']->value->nav;?>
</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <?php echo $_smarty_tpl->tpl_vars['this']->value->content;?>


    <hr>

    <footer>
        <p>&copy; 2006 - 2012 by Zend Technologies Ltd. <?php echo $_smarty_tpl->tpl_vars['all_rights']->value;?>
</p>
    </footer>

</div>
<!-- /container -->

</body>
</html>
<?php }} ?>