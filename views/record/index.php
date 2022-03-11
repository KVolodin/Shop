<div class="form-group">
    <form enctype="multipart/form-data" class="form-signin" method="POST" role="form" action="<?php echo URL ?>record/run">
        <p><h2 class="form-signin-heading">Введите данные</h2></p>

        <label for="exampleInputEmail1">Название</label>
        <p><input type="text" name = "name" class="form-control" placeholder="Название товара" required autofocus id="name"></p>
            <label for="exampleInputEmail1">Категория</label>
            <p>
            <select name="categories" class="form-control">
            <?php foreach ($this->get_categories as $val) { ?>
                <option value="<?php echo $val ['id_categories']; ?>"><?php echo $val ['categories_name']; ?></option>
            <?php }; ?>
            </select>
            </p>
        <label for="exampleInputEmail1">Цена</label>
        <p><input type="text" name = "price" class="form-control" placeholder="Цена товара" required id="email"></p>
        <button class="btn btn-primary" type="submit">Создать</button>
    </form>
</div>