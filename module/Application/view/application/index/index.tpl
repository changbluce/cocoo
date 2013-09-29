  <div class="hero-unit">
    <h1>Welcome to <span class="zf-green">{$test.0}</span></h1>
    <p>Congratulations! You have successfully installed the <a href="https://github.com/zendframework/ZendSkeletonApplication">ZF2 Skeleton Application</a>. You are currently running Zend Framework version <?php echo \Zend\Version::VERSION ?>. This skeleton can serve as a simple starting point for you to begin building your application on ZF2.</p>
    <p><a class="btn btn-success btn-large" href="https://github.com/zendframework/zf2">Fork Zend Framework 2 on GitHub &raquo;</a></p>
  </div>

  <div class="row">
    <div class="span4">
      <h2>Follow Development</h2>      
    {foreach from=$albums item=album}
        <p>{$album->title}</p>
      <p><a class="btn btn-success" href="/application/album/detail?id={$album->id}">{$album->artist} &raquo;</a></p>
    {/foreach}
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
