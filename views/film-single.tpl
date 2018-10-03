<div class="title-1">Информация о фильме</div>
<div class="card mb-20">
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col">
            <img src="<?=HOST?>data/films/full/<?=$film['photo']?>" alt="<?=$film['title']?>">
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="col">

            <div class="card__header">

                <h4 class="title-4">
                    <?=$film['title']?>
                </h4>

                <div class="buttons">
                    <a href="edit.php?id=<?=$film['id']?>" class="button button--editsmall mr-20">Редактировать</a>
                    <a href="index.php?action=delete&id=<?=$film['id']?>" class="button button--removesmall">Удалить</a>
                </div>
                
            </div>
            
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
    <div class="badge">
        <?=$film['genre']?>
    </div>
    <div class="badge">
        <?=$film['year']?>
    </div>
    <div class="user-content">
        <p>
            <?=$film['description']?>
        </p>
    </div>
