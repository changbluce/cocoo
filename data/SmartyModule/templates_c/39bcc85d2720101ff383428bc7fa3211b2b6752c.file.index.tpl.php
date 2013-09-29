<?php /* Smarty version Smarty-3.1.8, created on 2013-09-22 14:54:54
         compiled from "F:\zfdemo\module\Application\view\error\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23224523ee89e768136-69153520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39bcc85d2720101ff383428bc7fa3211b2b6752c' => 
    array (
      0 => 'F:\\zfdemo\\module\\Application\\view\\error\\index.tpl',
      1 => 1358765576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23224523ee89e768136-69153520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_523ee89e7bf176_15526814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523ee89e7bf176_15526814')) {function content_523ee89e7bf176_15526814($_smarty_tpl) {?><h1>An error occurred</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</h2>

<?php if ($_smarty_tpl->tpl_vars['this']->value->display_exceptions){?>

<?php if ($_smarty_tpl->tpl_vars['this']->value->exception){?>
<hr/>
<h2>Additional information:</h2>
<h3><?php echo get_class($_smarty_tpl->tpl_vars['this']->value->exception);?>
</h3>
<dl>
    <dt>File:</dt>
    <dd>
        <pre class="prettyprint linenums"><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getFile();?>
:<?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getLine();?>
</pre>
    </dd>
    <dt>Message:</dt>
    <dd>
        <pre class="prettyprint linenums"><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getMessage();?>
</pre>
    </dd>
    <dt>Stack trace:</dt>
    <dd>
        <pre class="prettyprint linenums"><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getTraceAsString();?>
</pre>
    </dd>
</dl>
<?php $_smarty_tpl->tpl_vars['e'] = new Smarty_variable($_smarty_tpl->tpl_vars['this']->value->exception->getPrevious(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['e']->value){?>
<hr/>
<h2>Previous exceptions:</h2>
<ul class="unstyled">
    <?php while ($_smarty_tpl->tpl_vars['e']->value){?>
    <li>
        <h3><?php echo get_class($_smarty_tpl->tpl_vars['e']->value);?>
</h3>
        <dl>
            <dt>File:</dt>
            <dd>
                <pre class="prettyprint linenums"><?php echo $_smarty_tpl->tpl_vars['e']->value->getFile();?>
:<?php echo $_smarty_tpl->tpl_vars['e']->value->getLine();?>
</pre>
            </dd>
            <dt>Message:</dt>
            <dd>
                <pre class="prettyprint linenums"><?php echo $_smarty_tpl->tpl_vars['e']->value->getMessage();?>
</pre>
            </dd>
            <dt>Stack trace:</dt>
            <dd>
                <pre class="prettyprint linenums"><?php echo $_smarty_tpl->tpl_vars['e']->value->getTraceAsString();?>
</pre>
            </dd>
        </dl>
        <?php $_smarty_tpl->tpl_vars['e'] = new Smarty_variable($_smarty_tpl->tpl_vars['e']->value->getPrevious(), null, 0);?>
        <?php }?>
    </li>
</ul>
<?php }?>
<?php }else{ ?>
<h3>No Exception available</h3>
<?php }?>
<?php }?>
<?php }} ?>