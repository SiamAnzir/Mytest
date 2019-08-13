<?php
    include('TaskModel.php');

    $task= new Task();
    $task-> create("Boss","Complete");
    $task-> create("Siam","");

    $task-> view();

    $task-> update("1","name","Mohammed Siam Anzir");
    $task-> update("1","status","Complete");
    $task-> update("0","status","");

    $task-> view();

    $task-> delete("1");

    $task-> view();

    $task-> create("Code Done","Complete");
    $task-> create("Good Night","Complete");

    $task-> view();

?>