<form class="" action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" id="title">
    <input type="text" name="intro" id="intro">
    <textarea name="content" rows="8" cols="80"></textarea>
    <select class="" name="category">
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="text" name="tags" id="tags">
    <input type="file" name="banner" id="banner">
    <button type="submit">Crear Post</button>
</form>
