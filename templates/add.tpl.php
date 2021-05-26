<div class="container my-5">
    <h1>Новая точка</h1>
    <form class="form-add mx-auto" action="add.php" method="post">
        <?= $formError ?>
        <div class="mb-3">
            <label for="pointName" class="form-label">Название</label>
            <input type="text" name="pointName" class="form-control" id="pointName">
        </div>
        <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
    </form>
</div>