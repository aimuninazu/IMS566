<?php
include 'db.php'; 
?>

<h1>MOBILE APPLICATION REVIEW</h1>  

<h1>Application List</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" >
<style>
body {
  background-image: url('https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.eze1NJ1p2yTkU_buyXSAXgHaEK%3Fr%3D0%26pid%3DApi&sp=1751969159Tfc6a0d969c8c4f3532bfcc466583f0cb5f9f23f9f504b6b8c84e719e01b1512e');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<a href="create.php">Review Application</a>
<table border="10" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Application Title</th>
        <th>Review</th>
        <th>Post Date</th>
        <th>Author Name</th>
        <th>Application Status</th>
        <th>Application Created</th>
        <th>Application Modified</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM applications");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['title']; ?></td>
        <td><?= $row['review']; ?></td>
        <td><?= $row['posteddate']; ?></td>
        <td><?= $row['author']; ?></td>
        <td><?= $row['status']; ?></td>
        <td><?= $row['created']; ?></td>
        <td><?= $row['modified']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this review?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
