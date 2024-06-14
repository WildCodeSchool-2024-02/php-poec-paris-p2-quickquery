<?php

return [
    '' => ['DashboardController', 'index'],
    'question/add' => ['QuestionController', 'addQuestion'],
    'question/participate' => ['QuestionController', 'participate'],
    'question/alert' => ['QuestionController', 'alert'],
    'register' => ['UserController', 'register'],
    'login' => ['UserController', 'login'],
    'logout' => ['UserController', 'logout'],
    'contact' => ['ContactController', 'index'],
    'search' => ['DashboardController', 'index'],
    'info' => ['UserController', 'show',],
    'edit' => ['UserController', 'edit',],
];
