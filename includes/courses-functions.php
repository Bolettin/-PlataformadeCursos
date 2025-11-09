<?php

function getAllCourses(): array {
    $filePath = __DIR__ . '/../assets/courses.json';
    $json = file_get_contents($filePath);

    if ($json === false) {
        return []; 
    }

    $courses = json_decode($json, true);

    return $courses ?? []; 
}

function getCoursesByArea(string $area): array {
    $allCourses = getAllCourses();
    $filtered = [];

    foreach ($allCourses as $course) {
        if (strtolower($course['area']) === strtolower($area)) {
            $filtered[] = $course;
        }
    }

    return $filtered;
}

function getCourseById(string $id): ?array {
    $allCourses = getAllCourses();

    foreach ($allCourses as $course) {
        if ($course['id'] === $id) {
            return $course;
        }
    }

    return null; 
}
