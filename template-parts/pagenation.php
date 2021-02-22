<?php if (paginate_links()) : ?>
         <!-- pagenation -->
         <div class="pagenation">
            <?php
            echo
            paginate_links(
               array(
                  'end_size' => 1,
                  'mid_size' => 2,
                  'prev_next' => false,
               )
            );
            ?>
         </div><!-- /.pagenation -->
      <?php endif; ?>