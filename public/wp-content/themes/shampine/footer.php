  <footer>
    <nav>
      <div class="container">
        <div class="col-sm-6">
          <p class="copy">&copy; <?php echo date('Y'); ?> <a href="/">Patrick Shampine</a></p>
        </div>
        <div class="col-sm-6">
          <ul class="social">
            <li><a href="https://github.com/patrickshampine" target="_blank"><i class="fa fa-github-square"></i></a></li>
            <li><a href="https://twitter.com/patrickshampine" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="https://plus.google.com/+PatrickShampine/" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="https://www.linkedin.com/in/patrickshampine" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </footer><?php 
  if (is_single($post)) { 
    echo '
      <!-- Social Scripts -->
      <script type="text/javascript">
      (function() {
        var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
        po.src = \'https://apis.google.com/js/plusone.js\';
          var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
      })();
      </script>

      <script type="text/javascript">
      !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';
        if(!d.getElementById(id)){js=d.createElement(s);
        js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';
        fjs.parentNode.insertBefore(js,fjs);
        }}
      (document, \'script\', \'twitter-wjs\');
      </script>
      <script type="text/javascript">
      (function(d){
        var f = d.getElementsByTagName(\'SCRIPT\')[0], p = d.createElement(\'SCRIPT\');
        p.type = \'text/javascript\';
        p.setAttribute(\'data-pin-hover\', true);
        p.async = true;
        p.src = \'//assets.pinterest.com/js/pinit.js\';
        f.parentNode.insertBefore(p, f);
      }(document));
      </script>
    '; 
  } 

  wp_footer(); ?>
</body>
</html>