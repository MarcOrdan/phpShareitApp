<div>
    <a href="<?php echo ROOT_URL; ?>shares/add" class="btn btn-success btn-share">Share Something</a>
    <?php foreach($viewModel as $item) : ?>
        <div class="card card-body bg-light">
            <h4><?php echo $item['title']; ?></h4>
            <?php echo $item['create_date']; ?>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <a href="<?php echo $item['link']; ?>" target="_blank" class="btn btn-primary" id="Gotowebsite">Go to Website</a>
        </div>
    <?php endforeach; ?>
</div>