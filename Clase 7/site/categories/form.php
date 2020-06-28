<form method="POST">
    <label>Animal</label>
    <input type="text" name="name" value="<?= $category['name'] ?? '' ?>">
    <input type="text" name="description" value="<?= $category['description'] ?? '' ?>">
    <button>Save</button>
</form>