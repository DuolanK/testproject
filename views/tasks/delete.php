<?php
use yii\helpers\Url;

// Assuming you are looping through tasks
foreach ($tasks as $task) {
    echo Html::a('Delete', Url::to(['tasks/delete', 'id' => $task->id]), [
        'data-method' => 'post',
        'data-confirm' => 'Are you sure you want to delete this task?',
    ]);
}