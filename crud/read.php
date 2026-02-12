<?php
include '../config/database.php';
include '../includes/header.php';
include '../includes/navbar.php';
?>

<h2>📋 User List</h2>
<a href="create.php" class="btn" style="margin-bottom: 15px;">➕ Add New User</a>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Created At</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $result = $conn->query("SELECT * FROM users ORDER BY created_at DESC");
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td>
                        <a href='update.php?id=" . $row['id'] . "' class='btn btn-edit'>✏️ Edit</a>
                        <a href='delete.php?id=" . $row['id'] . "' class='btn btn-delete'>🗑️ Delete</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='text-align: center;'>Belum ada data.</td></tr>";
        }
        ?>
  </tbody>
</table>

<?php include '../includes/footer.php'; ?>