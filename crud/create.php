<?php
include '../config/database.php';
include '../includes/header.php';
include '../includes/navbar.php';
?>

<h2>➕ Add New User</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    if (!empty($name) && !empty($email)) {
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql)) {
            echo '<div style="background: #d4edda; color: #155724; padding: 12px; border-radius: 6px; margin-bottom: 20px;">✅ Data berhasil ditambahkan!</div>';
        } else {
            echo '<div style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 6px; margin-bottom: 20px;">❌ Error: ' . $conn->error . '</div>';
        }
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <button type="submit" class="btn">💾 Save Data</button>
    <a href="read.php" class="btn" style="background: #6c757d;">↩️ Cancel</a>
</form>

<?php include '../includes/footer.php'; ?>
