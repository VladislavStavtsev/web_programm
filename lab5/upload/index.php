<?php
declare(strict_types=1);

echo '<h1>Список загруженных файлов</h1>';

echo '<ul>';

foreach (scandir(__DIR__) as $file) {

    if ($file === '.' || $file === '..' || $file === 'index.php') {
        continue;
    }

    echo '<li>' . htmlspecialchars($file) . '</li>';
}

echo '</ul>';
