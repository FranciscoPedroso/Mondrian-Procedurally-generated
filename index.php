<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Mondrian</title>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="favicon/lightmode/favicon.png">
    <link rel="stylesheet" href="build/css/styles.min.css" type="text/css" media="all" />
  </head>
  <body>
    <?php
      $red    = 'not-attr';
      $blue   = 'not-attr';
      $yellow = 'not-attr';
      $go_color = ' ';
      $colors = ['red', 'blue', 'yellow'];

      $to_color_or_not_to_color = ['no', 'no', 'no', 'yes'];

      $anim_type = ['top', 'bottom', 'right', 'left'];

      $nr_rows = random_int(2, 5);

      $number_of_rows_groups   = $nr_rows;
      $rows_sum_to             = 100;
      $rows_groups             = array();
      $rows_group              = 0;

      while(array_sum($rows_groups) != $rows_sum_to)
      {
        $rows_groups[$rows_group] = mt_rand(6, $rows_sum_to/mt_rand(1,5));

        if(++$rows_group == $number_of_rows_groups)
        {
          $rows_group  = 0;
        }
      }
    ?>
    <div id="container">
      <?php
        for($row=0; $row<$nr_rows; $row++):
          $nr_cols = random_int(2, 5);

          $number_of_cols_groups   = $nr_cols;
          $cols_sum_to             = 100;
          $cols_groups             = array();
          $cols_group              = 0;

          while(array_sum($cols_groups) != $cols_sum_to)
          {
            $cols_groups[$cols_group] = mt_rand(6, $cols_sum_to/mt_rand(1,5));

            if(++$cols_group == $number_of_cols_groups)
            {
              $cols_group  = 0;
            }
          }

          $rnd_anim_row = random_int(0, 1);
          ?>
            <div class="each-row anim-<?php echo $rnd_anim_row; ?> invert-<?php echo $rnd_anim_row; ?>" style="height: <?php echo $rows_groups[$row]; ?>%;">
              <?php
                for($col=0; $col<$nr_cols; $col++):
                  $rnd_value = random_int(0, 3);
                  $color_it = $to_color_or_not_to_color[$rnd_value];


                  if($color_it == 'yes'):
                    $rnd_color    = random_int(0, 2);
                    $chosen_color = $colors[$rnd_color];

                    if(${$chosen_color} == 'attr'):
                      $chosen_color = ' ';
                    endif;
                  endif;

                  $rnd_anim = random_int(0, 3);

                  ?>
                    <div class="each-col anim-from-<?php echo $anim_type[$rnd_anim]; ?> color-<?php echo $chosen_color; ?>" style="width: <?php echo $cols_groups[$col]; ?>%;">

                    </div>
                  <?php
                  ${$chosen_color} = 'attr';
                  $chosen_color = ' ';
                endfor;
              ?>
            </div>
          <?php


        endfor;
      ?>
    </div>
    <script type="text/javascript" src="build/js/scripts.min.js"></script>
  </body>
</html>
