<table class="table table-striped" style="table-layout:fixed" id="shop">
    <tr>
            <th>ID  </th>
            <th>Наименование товара </th>
            <th>Категория товара</th>
            <th>Стоимость</th>
            <th>Редактировать</th>
            <th>Удалить</th>
    </tr>
        <?php
        foreach ($this->all_task as $val) {
        ?>
    <tr>
        <td style=vertical-align:middle><?php echo $val ['id_shop'] ?></td>
        <td class="edit name <?php echo $val ['id_shop'] ?>" style=vertical-align:middle><?php echo $val ['name'] ?></td>
        <td style=vertical-align:middle>
        <select  class="form-control" name="mySelectId" id = "<?php echo $val ['id_shop'] ?>">
            <?php foreach ($this->get_categories as $key) { ?>
            <option <?php if ($val ['categories'] == $key ['id_categories']) echo 'selected'; ?> value="<?php echo $key ['id_categories']; ?>"><?php echo $key ['categories_name']; ?></option>
        <?php
        };
        ?>
        </select>

        </td>
        <td class="edit price <?php echo $val ['id_shop'] ?>" style=vertical-align:middle><?php echo $val ['price'] ?></td>
        <td style=vertical-align:middle><a class="btn btn-primary btn" href="<?php echo URL."edit/run/".$val ['id_shop'] ?>" class="edit">Редактировать</a></td>
        <td style=vertical-align:middle><button class="btn btn-danger btn" data-del=<?php echo $val ['id_shop'] ?>>Удалить</button></td>
    <?php
    };
    ?>
    </tr>
</table>

<script src="<?php echo URL; ?>/libs/js/ajax_sel.js"></script>

<div class="text-center">
    <ul class="pagination">
    <?php
        if ($this->p==0) {
        echo '<li class="disabled"><a> В начало </a></li>';
        } else
        echo  '<li><a href="'.URL.'tasks/index/0"> В начало </a></li>';
        for ($i=0;$i < $this->page_count;$i++) {
            if ($i==$this->p) {
                echo '<li class="active"><a href="'.URL.'tasks/index/'.$i.'">'.($i+1).'</a></li>';
            }
            else {
                echo '<li><a href="'.URL.'tasks/index/'.$i.'">'.($i+1).'</a></li>';
            }
        }
        if ($this->p==$this->page_count-1 || $this->page_count == 0) {

            echo '<li class="disabled"><a> В конец </a></li>';
        }
        else{
            echo '<li><a href="'.URL.'tasks/index/'.($this->page_count-1).'"> В конец </a></li>';
        }
    ?>
    </ul>
</div>

