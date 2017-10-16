<?php
$tableau = ["Jean-Basptise","Alexis","Raphaëlle"];
 ?>

 <html>
  <head></head>

  <body>
    
      <ul>
        <?php foreach ($tableau as $var) :?>
              <li> <?php echo $var; ?> </li>
          <?php endforeach; ?>

      </ul>
  </body>

  </html>
