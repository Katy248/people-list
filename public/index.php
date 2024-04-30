<?php include ('header.php'); ?>
<?php include ('database.php'); ?>

<h1>Peoples</h1>

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
    </thead>
    <tbody>
        <?php
        $query = 'SELECT * FROM `people`';
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo $connection;
            echo "<th>" . HOSTNAME . "</th>";
            echo DB_PASSWORD;
            // die('Query error');
        } else {
            echo "<th>1</th><th>Me</th><th>1</th>";
            print_r($result);
        }
        ?>
    </tbody>
</table>

<?php include ('footer.php'); ?>

