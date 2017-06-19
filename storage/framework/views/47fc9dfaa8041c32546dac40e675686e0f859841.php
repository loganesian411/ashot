<?php $__env->startSection('header'); ?>
<div class="header-content">
  <div class="header-content-inner">
      <h1>Composer | Pianist | Educator</h1>
      <hr>
      <h2>Ashot Kartalyan</h2>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<section>
  <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-4">
          <h1 align='left'>Who am I?</h1>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-8">
            <p align="left">I am a graduate of <a href="http://www.larkmusicalsociety.com/education/conservatory/">Lark Conservatory</a> with diplo­mas in piano performance and composition. At the age of 12, I began studying at Lark under the tutelage of my father, composer and jazz pianist, Artashes Kartalyan. I became the first composition graduate at Lark. In 2009, I received a Bachelors in Music in <a href="http://www.csun.edu/mike-curb-arts-media-communication/music/bm-composition">Composition at the Cali­fornia State University of Northridge (CSUN)</a>. I have traveled to Europe, Asia, North America, and various other places, performing with my fa­ther at different venues. I am credited with a number of compo­si­tions written for vari­ous instrumental ensembles. I also devote my time to Lark Con­ser­vatory, leading ensemble classes and teaching future musicians Music Theory and Harmony.</p>
        </div>
      </div>
    <hr>
  </div>
</section>

<section>
<div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <h1 align='left'>Skills and Interests</h1>
      </div>

      <div class="col-md-8 col-xs-12 col-sm-8">
        <p align='left'>I am interested in music education. <a href='https://goo.gl/RJBB8g'>My artistic resume.</a></p>

        <br>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe height="315" src="https://www.youtube.com/embed/s0osfgJiw7k" frameborder="0" class="col-md-12"></iframe>
        </div>

      </div>
    </div>

  <hr>

</div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <h1 align="left">Contact Me</h1>
      </div>
      <div class="col-md-8 col-xs-12 col-sm-8">
        <form action="/contact_us" method="post">
          <?php echo e(csrf_field()); ?>

          <div class="row">
            <div class="col-md-4">
              <div class="fieldWrapper form-group">
                <label class="control-label" for="name">Your name:</label>
                <input type="name" class="form-control" id="contact-name" name="name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group fieldWrapper">
                <label class="control-label" for="contact-email">Your email:</label>
                <input type="email" class="form-control" id="contact-email" name="email">
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group fieldWrapper">
                <label class="control-label" for="">Message body:</label>
                <textarea class="form-control" id="contact-message" name="body" rows="15"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mobile-center">
              <button type="submit" class="btn btn-default outline">Contact</button>
            </div>
          </div>

          <br>

          <div class="row">
            <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>