<div class="s-featured">
    <div class="row">
        <form class="" action="" method="post" enctype="multipart/form-data">
            <div class="imput-group">
                <input class="" placeholder="Title" type="text" name="title" id="title">
            </div>
            <div class="input-group">
                <input placeholder="Intro" type="text" name="intro" id="intro">
            </div>
            <textarea name="content" rows="8" cols="80"></textarea>
            <select class="" name="category">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
            <div class="input-group">
                <input placeholder="Tags" type="text" name="tags" id="tags">
            </div>
            <div class="input-group">
                <input type="file" name="banner" id="banner">
            </div>
            <div class="input-group">
                <button type="submit">Crear Post</button>
            </div>
        </form>
    </div>
</div>
