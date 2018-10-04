<h1>Укажите ваши данные</h1>

<form action="set-cookie.php" method="POST" class="mb-30">

    <div class="form-group">
        <label class="label">Ваше имя<input class="input" type="text" placeholder="" name="user-name"/></label>
    </div>

    <div class="form-group">
        <label class="label">Ваш город<input class="input" type="text" placeholder="" name="user-сity"/></label>
    </div>

    <input class="button" type="submit" name="user-submit" value="Сохранить" />
    
</form>

<form action="unset-cookie.php" method="POST">

    <input class="button" type="submit" name="user-unset" value="Удалить данные" />
    
</form>