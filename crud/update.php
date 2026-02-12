<?php
include '../config/database.php';
include '../includes/header.php';
include '../includes/navbar.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
    if ($conn->query($sql)) {
        header('Location: read.php?update=success');
    } else {
        echo '<div style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 6px;">❌ Error: ' . $conn->error . '</div>';
    }
}
?>

<h2>✏️ Edit User</h2>

<form method="POST">
  <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
  <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
  <button type="submit" class="btn btn-edit">💾 Update</button>
  <a href="read.php" class="btn" style="background: #6c757d;">↩️ Cancel</a>
</form>

<?php include '../includes/footer.php'; ?>