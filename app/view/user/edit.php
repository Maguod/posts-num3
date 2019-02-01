<?php $this->layout('userTemplate');
?>
<main id="v-1" class="pt-5 mx-lg-5">
  <!-- Section: Magazine v.1 -->
  <section class="magazine-section my-5">
    
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5"><?php echo $post['title'] ?></h2>
    <!-- Section description -->
     <div class="container-fluid">
    <!-- Grid row -->
      <div class="row">
        <div class="col-12">
          <div class="alert alert-primary" role="alert">
            <?php echo flash();  ?>
          </div>
        </div>
        <!-- Grid column -->
        <div class="col-lg-10 offset-lg-1 col-md-12">
          
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
                ?>></p>
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
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="/user/edit/<?php echo $post['id'] ?>" class="auth_form" method="post"
              enctype="multipart/form-data">
<!--          <input type="hidden" name="id" id="id" value="--><?php //echo $post['id']  ?><!--">-->
          <div class="form-group">
            <!--          <label for="title">Title</label>-->
          <input type="text" name="title" id="title" placeholder="title" class="form-control">
          </div>
          <div class="form-group">
            <!--          <label for="text">Content</label>-->
            <textarea name="text" id="text" placeholder="text" class="form-control"></textarea>
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" id="inputGroupFile01"
                     aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
<!--          <div class="form-group">-->
<!--            <input type="file" name="image" id="image">-->
<!--          </div>-->
          <div class="link-group">
            <button type="submit" class="btn btn-warning">Править</button>
          </div>
  
        </form>
      </div>
    </div>
  </div>
  

</main>
<!-- Section: Magazine v.1 -->
