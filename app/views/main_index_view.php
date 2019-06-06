<?php foreach ($this->notes as $note): ?>
    <div>
        <dl>
            <dt><?= $note['author_name'] ?></dt>
            <dd><p class="content"><?= $note['content'] ?></p></dd>
            <dd><?= $note['created_at'] ?></dd>
            <dd><a href="/notes/<?=$note['id']?>"><i class="fas fa-comments"></i></a></dd>
        </dl>
    </div>
<?php endforeach; ?>
<form method="POST" action="/notes/add" id="createNote" style="width: 30%; margin-left: auto; margin-right: auto;" >
    <div class="form-group" style="margin-top: 50px;">
        <label for="exampleFormControlInput1">Enter your name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required maxlength="50">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Enter your note content:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" required></textarea>
    </div>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>

