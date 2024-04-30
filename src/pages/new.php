<?php include ('header.php'); ?>
<h1>New people</h1>

<form>
    <fieldset>
        <label for="first-name">First name</label>
        <input name="first-name" type="text" placeholder="Anton" autocomplete="given-name">
        <label for="surname">Surname</label>
        <input name="surname" type="text" placeholder="Petrov" autocomplete="">
        <label for="phone">Mobile phone</label>
        <input name="phone" type="text" placeholder="+7 XXX XXX XX XX" autocomplete="tel">

        <input type="date" value="<?php echo date("Y-m-d") ?>" name="creation" hidden>
        <input type="date" value="<?php echo date("Y-m-d") ?>" name="last-edit" hidden>
    </fieldset>
    <input value="Create" type="submit" />
</form>
<?php include ('footer.php'); ?>

