<div class="testimonial__container">
        <div class="glide" id="glide_4">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <?php 
               include "./db/db.php";
               $select = "SELECT * FROM quotes order by qId DESC LIMIT 0,4";

               $query = mysqli_query($connect, $select);
               while( $row = mysqli_fetch_array($query)){
                 $qImage = $row['qImage'];
                 $qMessage = $row['qMessage'];
                 $qFrom  = $row['qFrom'];
                 $qProffesion = $row['qProffesion'];
              ?>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img src="./file/<?php echo $qImage ?>" alt="profile">
                  </div>
                  <p><?php echo $qMessage ?></p>
                  <div class="client__info">
                    <h3><?php echo $qFrom ?></h3>
                    <span><?php echo $qProffesion ?></span>
                  </div>
                </div>
              </li>

              <?php } ?>
            </ul>
          </div>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
          </div>
        </div>
      </div>