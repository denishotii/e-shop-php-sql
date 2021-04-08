<div class="container">
        <div class="title__container">
          <div class="section__titles">
            <div class="section__title active">
              <span class="dot"></span>
              <h1 class="primary__title">Phone News</h1>
            </div>
          </div>
        </div>
        <div class="news__container">
          <div class="glide" id="glide_5">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <?php 
                  include "./db/db.php";
                  $select = "SELECT * FROM shopnews order by nId DESC LIMIT 0,5";

                  $query = mysqli_query($connect, $select);
                  while( $row = mysqli_fetch_array($query))
                  {
                    $nId = $row['nId'];
                    $nName = $row['nName'];
                    $nImage = $row['nImage'];
                    $nBy = $row['nBy'];
                    $nText = substr($row['nText'],0,100);
                ?>
                <li class="glide__slide">
                  <div class="new__card">
                    <div class="card__header">
                      <img src="./file/<?php echo $nImage ?>" alt="Image">
                    </div>
                    <div class="card__footer">
                      <h3><?php echo $nName ?></h3>
                      <span>By <?php echo $nBy ?></span>
                      <p><?php echo $nText."..." ?></p>
                      <a href="#"><button>Read More</button></a>
                    </div>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>

        </div>
      </div>