<?php include ('components/header.php'); ?>
<?php include ('database.php'); ?>

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
        $query = 'SELECT * FROM `people`';
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query error');
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                                                <th>
                                                    <?php echo $row['id'] ?>
                                                </th>
                                                <th>
                                                    <?php echo $row['first_name'] ?>
                                                </th>
                                                <th>
                                                    <?php echo $row['phone'] ?>
                                                </th>
                                                <th>
                                                    <?php echo $row['creation'] ?>
                                                </th>
                                                <th>
                                                    <?php echo $row['last_edit'] ?>
                                                </th>
                                                <?php
            }
        }
        ?>
    </tbody>
</table>

<?php include ('components/footer.php'); ?>

