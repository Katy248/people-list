<?php include ('components/header.php'); ?>
<h1>New people</h1>

<form action="create_new_people.php" method="post">
    <fieldset>
        <label for="first_name">First name</label>
        <input name="first_name" type="text" placeholder="Anton" autocomplete="given-name" aria-describedby="first_name_helper" >
        <small id="first_name_helper">
            
        </small>

        <label for="last_name">Last name</label>
        <input name="last_name" type="text" placeholder="Petrov" autocomplete="given-name" aria-describedby="last_name_helper" >
        <small id="last_name_helper">
            
        </small>

        <label for="phone">Mobile phone</label>
        <input name="phone" type="text" placeholder="+7 XXX XXX XX XX" autocomplete="tel" >

        <!-- <input type="date" value="<?php echo date("Y-m-d") ?>" name="creation" hidden>
        <input type="date" value="<?php echo date("Y-m-d") ?>" name="last-edit" hidden> -->
    </fieldset>
    <input value="Create" type="submit" />
</form>
<?php include ('components/footer.php'); ?>

