<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $review = $_POST["review"];
    $posteddate = $_POST["posteddate"];
    $author = $_POST["author"];
    $status = $_POST["status"];
    $created = $_POST["created"];
    $modified = $_POST["modified"];

    $sql = "INSERT INTO applications (title, review, posteddate, author, status, created, 
    modified) VALUES ('$title', '$review', '$posteddate', '$author', '$status', '$created', '$modified')";
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
    }
    .review-card {
        max-width: 600px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }
    .review-card h2 {
        font-size: 1.75rem;
        margin-bottom: 20px;
    }
    .form-label {
        font-weight: 500;
    }
    .form-control {
        border-radius: 8px;
    }
    .btn-primary {
        width: 100%;
        border-radius: 8px;
    }
    .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #6c757d;
    }
</style>

<div class="review-card">
    <h2 class="text-center">LEAVE A REVIEW</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Application Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Your Review</label>
            <textarea name="review" class="form-control" rows="4" placeholder="Write your review..." required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="posteddate" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text" name="author" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Application Status</label>
            <select name="status" class="form-control" required>
                <option value="Approved">Approved</option>
                <option value="Pending">Pending</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Application Created</label>
            <input type="date" name="created" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Application Modified</label>
            <input type="date" name="modified" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
        <a href="index.php" class="back-link">← Back to Application List</a>
    </form>
</div>