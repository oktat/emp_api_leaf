<?php

class EmployeeController {
    public function __construct(){
        db()->connect([
            'dbtype' => 'sqlite',
            'dbname' => 'database.sqlite'
        ]);
    }
    public function index() {
        $emps = db()->select('employees')->all();
        response()->json($emps);
    }

    public function store() {
        $name = request()->get('name');
        $city = request()->get('city');
        $salary = request()->get('salary');
        db()->insert('employees')->params([
            'name' => $name,
            'city' => $city,
            'salary' => $salary
        ])->execute();
        
        response()->json($name);
    }
    public function update($id) {
        $name = request()->get('name');
        $city = request()->get('city');
        $salary = request()->get('salary');
        $res = db()
            ->update('employees')
            ->params([
                'name' => $name,
                'city' => $city,
                'salary' => $salary
            ])
            ->where('id', $id)
            ->execute()
            ->rowCount();
            
        response()->json($res);
    }
    public function delete($id) {
        $res = db()
            ->delete('employees')
            ->where('id', $id)
            ->execute()
            ->rowCount();
        response()->json($res);
    }
}