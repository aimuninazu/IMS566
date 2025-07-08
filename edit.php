<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM applications WHERE id=$id");
$applications = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $review = $_POST["review"];
    $posteddate = $_POST["posteddate"];
    $author = $_POST["author"];
    $status = $_POST["status"];
    $created = $_POST["created"];
    $modified = $_POST["modified"];

    $sql = "UPDATE applications SET title='$title', review='$review', posteddate='$posteddate', 
    author='$author', review='$review', status='$status', created='$created', 
    modified='$modified' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-image: url('https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Ftse3.mm.bing.net%2Fth%2Fid%2FOIP.eze1NJ1p2yTkU_buyXSAXgHaEK%3Fr%3D0%26pid%3DApi&sp=1751969159Tfc6a0d969c8c4f3532bfcc466583f0cb5f9f23f9f504b6b8c84e719e01b1512e');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        padding-top: 60px;
    }
    .form-container {
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        border-radius: 12px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 4px 16px rgba(0,0,0,0.15);
    }
    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        font-weight: 600;
    }
</style>

<div class="form-container">
    <h2>Edit Application</h2>
    <form method="POST">
        <div class="mb-3">
            <input type="text" name="title" value="<?= $applications['title'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="review" value="<?= $applications['review'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="posteddate" value="<?= $applications['posteddate'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="author" value="<?= $applications['author'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="status" value="<?= $applications['status'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="created" value="<?= $applications['created'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="text" name="modified" value="<?= $applications['modified'] ?>" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>
        <a href="index.php" class="btn btn-link d-block mt-2 text-center">← Back to List</a>
    </form>
</div>
