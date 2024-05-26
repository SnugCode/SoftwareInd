<?php
include 'connect.php';

$search = $_GET['search'];

$sql = "SELECT * FROM Archer WHERE FirstName LIKE '%$search%' OR LastName LIKE '%$search%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ArcherID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>

            <?php while($row = $result->fetch_assoc()): ?>

                <tr>
                    <td><?php echo $row['ArcherID']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['DOB']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td>
                        <form action="archer_options.php" method="POST">
                            <input type="hidden" name="archer_id" value="<?php echo $row['ArcherID']; ?>">
                            <input type="submit" value="Select">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>

    <p>No results found</p>

    <?php endif; ?>

</body>
</html>
<?php $conn->close(); ?>
