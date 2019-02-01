<?php $this->layout('createTemplate'); ?>
<main class="pt-5 mx-lg-5">
  <div class="alert alert-danger" role="alert">
    <?php echo flash(); ?>
  </div>
  <div class="card create col-sm-8 offset-sm-2 col-md-6 offset-md-3">
    
    <h5 class="card-header info-color white-text text-center py-4">
      <strong>Создать пост</strong>
    </h5>
    
    <div class="card-body px-lg-5 pt-3">
      
      <form class="md-form" style="color: #757575;" action="/user/createPost/" method="POST"
            enctype="multipart/form-data">
        <div class="input-group">
          <input type="text" id="title" class="form-control" name="title" placeholder="Название поста">
        </div>
        <div class="input-group">
          <label for="textarea"></label>
          <textarea class="form-control md-textarea"  name="text" id="text" placeholder="Текст поста"></textarea>
        </div>
        <div class="file-field">
          <div class="btn btn-primary btn-sm float-left ">
            <span>Choose file</span>
            <input type="file" id="image" name="image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Выберите картинку">
          </div>
        </div>
  
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                type="submit">Создать пост</button>
      </form>
    </div>
  </div>

</main>
<!-- Section: Blog v.2 -->

