<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Посты</div>
            <div class="card-body">
                <div class="row">
                    <?php if (empty($list)): ?>
                        <p>Список постов пуст</p>
                    <?php else: ?>
                    <div class="col-sm-4"><?php foreach ($list as $val): ?>
                    <h1><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></h1>
                    <span class="subheading"><?php echo htmlspecialchars($val['number'], ENT_QUOTES); ?></span>
                    <p><?php echo htmlspecialchars($val['message'], ENT_QUOTES); ?></p>
                        <?php endforeach; ?>
                    </div>
                        <?php echo $pagination; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
