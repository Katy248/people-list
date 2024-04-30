<?php include ('header.php'); ?>
<h1>New people</h1>

<form>
    <fieldset>
        <label for="first-name">First name</label>
        <input id="first-name" type="text" placeholder="Anton" autocomplete="given-name">
        <label for="surname">Surname</label>
        <input id="surname" type="text" placeholder="Petrov" autocomplete="">
        <label for="phone">Mobile phone</label>
        <input id="phone" type="text" placeholder="+7 XXX XXX XX XX" autocomplete="tel">

        <input type="date" name="creation" hidden>
    </fieldset>
    <input value="Create" type="submit" />
</form>
<?php include ('footer.php'); ?>

