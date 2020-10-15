<div class="row">
    <?php foreach($data as $film): ?>
            <?php $img = ($film->Poster == 'N/A') ? $_ENV['IMAGES'].'default.png' : $film->Poster ; ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="img-fluid" alt="<?php echo $film->Poster; ?>" src="<?php echo $img; ?>" data-holder-rendered="true">
                <div class="card-body">
                  <h2 class="card-text"><?php echo $film->Title; ?></h2>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted"><?php echo $film->Year; ?></small>
                  </div>
                </div>
              </div>
            </div>
    <?php endforeach; ?>
</div>

