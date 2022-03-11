<div class="form-group">
    <form enctype="multipart/form-data" class="form-signin" method="POST" role="form" action="<?php echo URL ?>categories/run">
        <p><h2 class="form-signin-heading">Введите данные</h2></p>

            <label for="exampleInputEmail1">Категория</label>
            <p><input type="text" name = "categories_name" class="form-control" placeholder="Категория" required></p>
        <button class="btn btn-primary" type="submit">Создать</button>
    </form>
</div>