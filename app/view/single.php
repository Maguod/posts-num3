<?php $this->layout('template',['title' => 'Single Posts View']);
?>
<section id="v-1">
  <!-- Section: Magazine v.1 -->
  <section class="magazine-section my-5">
    
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo $post['title'] ?></h2>
    <!-- Section description -->
    <div class="container single">
    <!-- Grid row -->
      <div class="row">
        <div class="col-xs-12">
          <?php
          echo flash() ; ?>
        </div>
        
        <!-- Grid column -->
        <div class="col-lg-10 offset-lg-1">
          
          <!-- Featured news -->
          <div class="single-news mb-4">
            
            <!-- Image -->
            <div class="view overlay rounded z-depth-1-half mb-4">
              <img class="img-fluid" src="/upload/images/<?php echo $post['image'];  ?>" alt="Sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            
            <!-- Data -->
            <div class="news-data d-flex justify-content-between">
              <a href="#!" class="light-blue-text">
                <h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i><?php echo $post['cat_id']   ?></h6>
              </a>
              <p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i><?php echo $post['date']
                ?></p>
            </div>
            
            <!-- Excerpt -->
            <p class="dark-grey-text"><?php echo $post['text'] ?></p>
          
          </div>
          <!-- Featured news -->
          
          <!-- Small news -->
          
          
        </div>
            <!-- Grid row -->
          
      </div>
    </div>

    </section>

  
  </section>
  <!-- Section: Magazine v.1 -->
