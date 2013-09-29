<?php /* Smarty version Smarty-3.1.8, created on 2013-09-19 18:00:25
         compiled from "F:\zfdemo\module\Application\view\application\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1642523b1f9996adc5-27274674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124e66b14d470b2020316785087a8784e84604de' => 
    array (
      0 => 'F:\\zfdemo\\module\\Application\\view\\application\\index\\index.tpl',
      1 => 1379202839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1642523b1f9996adc5-27274674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'test' => 0,
    'albums' => 0,
    'album' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_523b1f999c3652_24587125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523b1f999c3652_24587125')) {function content_523b1f999c3652_24587125($_smarty_tpl) {?>  <div class="hero-unit">
    <h1>Welcome to <span class="zf-green"><?php echo $_smarty_tpl->tpl_vars['test']->value[0];?>
</span></h1>
    <p>Congratulations! You have successfully installed the <a href="https://github.com/zendframework/ZendSkeletonApplication">ZF2 Skeleton Application</a>. You are currently running Zend Framework version <<?php ?>?php echo \Zend\Version::VERSION ?<?php ?>>. This skeleton can serve as a simple starting point for you to begin building your application on ZF2.</p>
    <p><a class="btn btn-success btn-large" href="https://github.com/zendframework/zf2">Fork Zend Framework 2 on GitHub &raquo;</a></p>
  </div>

  <div class="row">
    <div class="span4">
      <h2>Follow Development</h2>      
    <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
        <p><?php echo $_smarty_tpl->tpl_vars['album']->value->title;?>
</p>
      <p><a class="btn btn-success" href="/application/album/detail?id=<?php echo $_smarty_tpl->tpl_vars['album']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value->artist;?>
 &raquo;</a></p>
    <?php } ?>
    </div>
    <div class="span4">
      <h2>Discover Modules</h2>
       <p>The community is working on developing a community site to serve as a repository and gallery for ZF2 modules. The project is available <a href="https://github.com/zendframework/modules.zendframework.com">on GitHub</a>. The site is currently live and currently contains a list of some of the modules already available for ZF2.</p>
      <p><a class="btn btn-success" href="/user">Explore ZF2 Modules &raquo;</a></p>
   </div>
   <div class="span4">

     <h2>Help &amp; Support</h2>
     <p>If you need any help or support while developing with ZF2, you may reach us via IRC: <a href="irc://irc.freenode.net/zftalk.2">#zftalk.2 on Freenode</a>. We'd love to hear any questions or feedback you may have regarding the beta releases. Alternatively, you may subscribe and post questions to the <a href="http://framework.zend.com/wiki/display/ZFDEV/Mailing+Lists">mailing lists</a>.</p>
     <p><a class="btn btn-success" href="http://webchat.freenode.net?channels=zftalk.2">Ping us on IRC &raquo;</a></p>
   </div>
  </div>
<?php }} ?>