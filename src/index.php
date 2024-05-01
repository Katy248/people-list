<?php include ('components/header.php'); ?>
<?php include ('database.php'); ?>
<?php include ('people.php'); ?>

<h1>People</h1>
<table>
    <thead>
        <th>
            ID
        </th>
        <th>
            First name
        </th>
        <th>
            Last name
        </th>
        <th>
            Phone
        </th>
        <th>
            Creation
        </th>
        <th>
            Last edit
        </th>
    </thead>
    <tbody>
        <?php

        foreach (get_people($connection) as $human) {
            ?>
                                <th>
                                    <?php echo $human->id ?>
                                </th>
                                <th>
                                    <?php echo $human->first_name ?>
                                </th>
                                <th>
                                    <?php echo $human->last_name ?>
                                </th>
                                <th>
                                    <?php echo $human->phone ?>
                                </th>
                                <th>
                                    <?php echo $human->creation ?>
                                </th>
                                <th>
                                    <?php echo $human->last_edit ?>
                                </th>
                                <?php
        }

        ?>
    </tbody>
</table>

<?php include ('components/footer.php'); ?>

