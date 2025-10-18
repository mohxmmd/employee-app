import 'package:flutter/material.dart';
import '../data/employee_data.dart';
import '../widgets/employee_card.dart';
import '../models/employee.dart';

class EmployeeListScreen extends StatefulWidget {
  const EmployeeListScreen({super.key});

  @override
  State<EmployeeListScreen> createState() => _EmployeeListScreenState();
}

class _EmployeeListScreenState extends State<EmployeeListScreen> {
  String filter = 'All';

  bool isLongTermEmployee(Employee employee) {
    final yearsInOrg = DateTime.now().year - employee.joinedDate.year;
    return employee.isActive && yearsInOrg > 5;
  }

  List<Employee> get filteredEmployees {
    return filter == '5+ Years Active'
        ? mockEmployees.where(isLongTermEmployee).toList()
        : mockEmployees;
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey.shade100,
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 2,
        title: const Text(
          'Employee List',
          style: TextStyle(
            color: Colors.black,
            fontWeight: FontWeight.w700,
            fontSize: 20,
          ),
        ),
        actions: [
          PopupMenuButton<String>(
            icon: const Icon(Icons.filter_list, color: Colors.black),
            onSelected: (value) => setState(() => filter = value),
            itemBuilder: (context) => const [
              PopupMenuItem(value: 'All', child: Text('All Employees')),
              PopupMenuItem(
                value: '5+ Years Active',
                child: Text('5+ Years Active'),
              ),
            ],
          ),
        ],
      ),
      body: Column(
        children: [
          // Total count
          Padding(
            padding: const EdgeInsets.symmetric(vertical: 12, horizontal: 16),
            child: Align(
              alignment: Alignment.centerLeft,
              child: Text(
                'Total Employees: ${filteredEmployees.length}',
                style: const TextStyle(
                  fontSize: 16,
                  fontWeight: FontWeight.w600,
                  color: Colors.black87,
                ),
              ),
            ),
          ),
          // Employee list
          Expanded(
            child: ListView.builder(
              itemCount: filteredEmployees.length,
              padding: const EdgeInsets.symmetric(horizontal: 12),
              itemBuilder: (context, index) {
                return EmployeeCard(employee: filteredEmployees[index]);
              },
            ),
          ),
        ],
      ),
    );
  }
}
