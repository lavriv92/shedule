<!doctype html5>
<html>
  <head>
    <title>Test</title>
  </head>
  <body>
    <ul>
    <?php require_once('./controllers/IndexController.php'); 
      $index = new IndexController();
      $data = $index->displayData(); ?>

     <? foreach($data as $res) { ?>
        <li><?php echo $res['group_name']; ?></li>
     <?php } ?>
     </ul>
  </body>
</html>
