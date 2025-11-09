<?php
require_once __DIR__ . '/../includes/courses-functions.php';
include 'page-top.php';

$area = $_GET['area'] ?? null;
$courses = $area ? getCoursesByArea($area) : getAllCourses();
?>

<h1><?= $area ? ucfirst($area) : 'Todos os cursos' ?></h1>

<section class="courses">
    <?php if (!empty($courses)): ?>
        <?php foreach ($courses as $course): ?>
            <div class="card">
                <img src="img/<?= $course['image'] ?>" alt="<?= $course['title'] ?>">
                <h2>
                    <a href="curso-detalhe.php?id=<?= $course['id'] ?>">
                        <?= $course['title'] ?>
                    </a>
                </h2>
                <p><?= $course['short_description'] ?></p>
                <p><strong>Instrutor:</strong> <?= $course['instructor'] ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhum curso encontrado nessa área.</p>
    <?php endif; ?>
</section>

<?php include 'page-bottom.php'; ?>
