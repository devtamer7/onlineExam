<?php if (basename($_SERVER['PHP_SELF']) != 'login.php' && basename($_SERVER['PHP_SELF']) != 'register.php'): ?>
<nav class="d-flex flex-column bg-dark text-white p-3" id="sidebar" style="width:250px; height:100vh; position:fixed;">
  <h4 class="text-center mb-4"><i class="fas fa-school"></i> ExamSys</h4>
  <ul class="nav flex-column">
    <li class="nav-item"><a href="dashboard.php" class="nav-link text-white"><i class="fas fa-home me-2"></i> Dashboard</a></li>
    <li class="nav-item"><a href="departments.php" class="nav-link text-white"><i class="fas fa-building me-2"></i> Departments</a></li>
    <li class="nav-item"><a href="classes.php" class="nav-link text-white"><i class="fas fa-layer-group me-2"></i> Classes</a></li>
    <li class="nav-item"><a href="students.php" class="nav-link text-white"><i class="fas fa-user-graduate me-2"></i> Students</a></li>
    <li class="nav-item"><a href="exams.php" class="nav-link text-white"><i class="fas fa-file-alt me-2"></i> Exams</a></li>
    <li class="nav-item"><a href="questions.php" class="nav-link text-white"><i class="fas fa-question-circle me-2"></i> Questions</a></li>
    <li class="nav-item"><a href="results.php" class="nav-link text-white"><i class="fas fa-chart-bar me-2"></i> Results</a></li>
    <li class="nav-item"><a href="profile.php" class="nav-link text-white"><i class="fas fa-user me-2"></i> Profile</a></li>
    <li class="nav-item"><a href="settings.php" class="nav-link text-white"><i class="fas fa-cog me-2"></i> Settings</a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link text-danger"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
  </ul>
</nav>
<?php endif; ?>
