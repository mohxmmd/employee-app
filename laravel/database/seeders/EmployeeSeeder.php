<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $employees = [
            ['name' => 'Alice Johnson', 'role' => 'Senior Manager', 'joining_date' => '2017-03-12', 'is_active' => true],
            ['name' => 'Bob Smith', 'role' => 'Junior Developer', 'joining_date' => '2022-07-05', 'is_active' => true],
            ['name' => 'Grace Lee', 'role' => 'Senior Designer', 'joining_date' => '2016-08-30', 'is_active' => false],
            ['name' => 'David Wilson', 'role' => 'Junior Tester', 'joining_date' => '2021-11-10', 'is_active' => false],
            ['name' => 'Catherine Brown', 'role' => 'Lead Designer', 'joining_date' => '2015-09-01', 'is_active' => true],
            ['name' => 'Emma Thompson', 'role' => 'Product Manager', 'joining_date' => '2019-10-15', 'is_active' => true],
            ['name' => 'Frank Miller', 'role' => 'Flutter Developer', 'joining_date' => '2021-02-18', 'is_active' => true],
            ['name' => 'Robert King', 'role' => 'Project Manager', 'joining_date' => '2012-04-15', 'is_active' => false],
            ['name' => 'Eva Green', 'role' => 'HR Director', 'joining_date' => '2014-06-25', 'is_active' => true],
            ['name' => 'Jack Wilson', 'role' => 'Intern Developer', 'joining_date' => '2023-09-01', 'is_active' => false],
            ['name' => 'Daniel Kim', 'role' => 'UX Researcher', 'joining_date' => '2018-12-31', 'is_active' => true],
            ['name' => 'Henry Davis', 'role' => 'Support Specialist', 'joining_date' => '2023-05-12', 'is_active' => true],
            ['name' => 'Ivy Thomas', 'role' => 'QA Lead', 'joining_date' => '2013-01-20', 'is_active' => true],
            ['name' => 'Maria Garcia', 'role' => 'System Architect', 'joining_date' => '2011-07-22', 'is_active' => false],
            ['name' => 'Lisa Wang', 'role' => 'Marketing Executive', 'joining_date' => '2022-01-10', 'is_active' => true],
            ['name' => 'Olivia Brown', 'role' => 'Backend Developer', 'joining_date' => '2020-01-01', 'is_active' => true],
            ['name' => 'Michael Chen', 'role' => 'CTO', 'joining_date' => '2010-11-15', 'is_active' => true],
            ['name' => 'Sophia Martinez', 'role' => 'Content Writer', 'joining_date' => '2022-06-15', 'is_active' => false],
            ['name' => 'James Wilson', 'role' => 'Security Analyst', 'joining_date' => '2017-02-28', 'is_active' => true],
            ['name' => 'Tom Baker', 'role' => 'Data Analyst', 'joining_date' => '2024-03-01', 'is_active' => true],
            ['name' => 'Kevin Patel', 'role' => 'DevOps Engineer', 'joining_date' => '2015-03-08', 'is_active' => false],
            ['name' => 'Sarah Wilson', 'role' => 'Finance Head', 'joining_date' => '2016-12-01', 'is_active' => true],
            ['name' => 'Alex Turner', 'role' => 'Sales Executive', 'joining_date' => '2024-01-30', 'is_active' => false],
            ['name' => 'Rachel Adams', 'role' => 'Database Admin', 'joining_date' => '2014-12-24', 'is_active' => true],
        ];

        foreach ($employees as $emp) {
            Employee::create($emp);
        }
    }
}
