<?php $__env->startSection('body'); ?>
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#photos" role="tab">Videos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
  </li>
</ul>

<section>
  <div class="tab-content">
    <div class="tab-pane active" id="photos" role="tabpanel">...</div>
    <div class="tab-pane" id="videos" role="tabpanel">test</div>
  </div>

  <div class="container">
    <form class="form-inline">
      <div class="form-group">
          <button id="video-gallery-button" type="button" class="btn btn-success btn-lg">
              <i class="fa fa-video-camera fa-fw"></i>
              Launch Video Gallery
          </button>
      </div>
      <div class="form-group">
          <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg">
              <i class="fa fa-picture-o fa-fw"></i>
              Launch Image Gallery
          </button>
      </div>
    </form>

    <br>
    <div id="links"></div>
    <br>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>