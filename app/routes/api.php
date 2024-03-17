<?php

require 'app/controllers/EmployeeController.php';

app()->get('/employees', 'EmployeeController@index');
app()->post('/employees', 'EmployeeController@store');
app()->put('/employees/{id}', 'EmployeeController@update');
app()->delete('/employees/{id}', 'EmployeeController@delete');
