<div class="container my-5">
    <h1>Новая точка</h1>
    <form class="form-add mx-auto" action="add.php" method="post">
        <?= $formError ?>
        <div class="mb-3">
            <label for="pointName" class="form-label">Название</label>
            <input type="text" name="pointName" class="form-control" id="pointName">
        </div>
        <div class="mb-3">
            <label for="pointType" class="form-label">Тип точки</label>
            <select name="pointType" id="pointType" class="form-select">
            <?= $pointTypeOptions ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="pointDescription" class="form-label">Описание</label>
            <textarea name="pointDescription" id="pointDescription" cols="30" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="pointPhoto" class="form-label">Фотография</label>
            <input type="file" name="pointPhoto" class="form-control" id="pointPhoto">
        </div>
        <div class="mb-3">
            <label for="pointAddress" class="form-label">Адрес</label>
            <input type="text" name="pointAddress" class="form-control" id="pointAddress">
        </div>
        <div class="mb-3">
            <label for="pointHoursOpen" class="form-label">Часы работы</label>
            <br>
            <select name="pointHoursOpen" id="pointHoursOpen" class="form-select w-25 d-inline-block">
            <?= $pointHoursOptions ?>
            </select>
            <span> - </span>
            <select name="pointHoursClose" id="pointHoursClose" class="form-select w-25 d-inline-block">
            <?= $pointHoursOptions ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="pointInstagram" class="form-label">Instagram</label>
            <input type="text" name="pointInstagram" class="form-control" id="pointInstagram">
        </div>
        <input type="hidden" name="pointLocation" class="form-control" id="pointLocation">
        <button type="submit" name="addSubmit" class="btn btn-success">Добавить</button>
    </form>
</div>