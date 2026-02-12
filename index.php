<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<h1>📁 PHP MySQL CRUD Application</h1>
<p style="font-size: 18px; margin-bottom: 30px;">
  A professional and clean CRUD (Create, Read, Update, Delete) system built with PHP & MySQL.
</p>

<div style="display: flex; gap: 20px;">
  <div style="flex: 1; background: #e9ecef; padding: 20px; border-radius: 8px;">
    <h3>📌 Features</h3>
    <ul style="margin-left: 20px; margin-top: 10px;">
      <li>✅ Create new user data</li>
      <li>✅ Read/display user list</li>
      <li>✅ Update existing data</li>
      <li>✅ Delete user data</li>
      <li>✅ Responsive design</li>
    </ul>
  </div>

  <div style="flex: 1; background: #e9ecef; padding: 20px; border-radius: 8px;">
    <h3>⚙️ Quick Actions</h3>
    <a href="crud/create.php" class="btn" style="margin: 5px;">➕ Add User</a>
    <a href="crud/read.php" class="btn" style="margin: 5px; background: #17a2b8;">📋 View All</a>
  </div>
</div>

<?php include 'includes/footer.php'; ?>