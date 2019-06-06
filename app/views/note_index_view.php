<?php foreach ($this->note as $note): ?>
    <div>
        <dl>
            <dt><?= $note['author_name'] ?></dt>
            <dd id="<?= $note['id'] ?>" class="content"><?= $note['content'] ?></dd>
            <dd><?= $note['created_at'] ?></dd>
        </dl>
    </div>
<?php endforeach; ?>


