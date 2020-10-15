<div class="row">
    <?php $msg = ($data instanceof GuzzleHttp\Exception\ClientException) ? $data->getMessage() : $data->Error ; ?>
    <div class="jumbotron jumbotron-fluid w-100">
    <div class="container">
        <h2 class="display-4"><?php echo $msg; ?></h2>
    </div>
    </div>
</div>

