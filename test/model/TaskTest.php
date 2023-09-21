<?php
namespace App\modeL;

use PHPUnit\Framework\TestCase;

final class TaskTest extends TestCase{

    public function testConstructor(){
        $task = new Task("Tarefa1");
        $this->assertSame('Tarefa1', $task->title);
    }
}
?>