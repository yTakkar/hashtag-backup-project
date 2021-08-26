<?php
  $str = "#hashtag and #hast_tag lerem ipsum! #_hashtag";
  $regex = "/#+([a-zA-Z0-9_]+)/";
  $str = preg_replace($regex, '<a class="link" href="hashtag.php?tag=$1">$0</a>', $str);
?>

<script type="text/javascript" src="jquery-3.1.1.min.js"></script>

<!-- <script type="text/javascript">
  $(function(){
    var link = $('.link');
    for (var i = 0; i < link.length; i++) {
      var src = link[i].innerHTML;
      console.log(link[i]);
      console.log(src);
      link.attr('href', 'hashtag.php?tag='+src);
    }
  });
</script> -->

<?php
  echo $str;
?>
