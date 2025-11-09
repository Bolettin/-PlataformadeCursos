<?php
require_once __DIR__ . '/../includes/courses-functions.php';
include 'page-top.php';

$courseId = $_GET['id'] ?? null;
$course = $courseId ? getCourseById($courseId) : null;
?>

<?php if ($course): ?>
    <h1><?= $course['title'] ?></h1>
    <h4>Instrutor: <?= $course['instructor'] ?></h4>
    <p><?= $course['short_description'] ?></p>

    <h3>Módulos do curso:</h3>
    <ul>
        <?php foreach ($course['modules'] as $module): ?>
            <li><?= $module ?></li>
        <?php endforeach; ?>
    </ul>

<?php else: ?>
    <h2>Curso não encontrado 😕</h2>
<?php endif; ?>

<?php include 'page-bottom.php'; ?>
