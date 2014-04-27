</body>
<footer>
<?php if ( is_single($post) ) { echo '
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
                '; } ?>
</footer>
</html>