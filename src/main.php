<?php
    echo "Arquivo main.php rodou";

    include_once __DIR__ . "/../vendor/autoload.php";

    use App\modeL\Task;

    $taskEstProv = new Task("<br>" . "Estudar pra prova");
    echo $taskEstProv->title;