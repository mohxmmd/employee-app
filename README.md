# Employee App - Zylu Assignment

I've completed the coding assignment by building the Employee App in both Flutter and Laravel.

Both apps display all employees and flag any employee who has been more than 5 years and is active with the organization in green color. I've also added a filter feature to show only these employees.

---

## Flutter App

- Built using Flutter's native state management and routing
- Shows all employees with green flag for active employees with >5 years
- Includes filter to view only active employees with more than 5 years
- Fully responsive design works on all phone sizes
- Download APK: https://github.com/mohxmmd/emplyee-app/releases/download/v1.0/app-release.apk
- Screenshot: `/demo/flutter-employee-list-ss.png`

---

## Laravel App

- Displays all employees with green highlighting for active employees with >5 years
- Includes the same filter functionality
- Responsive design works on desktop and mobile
- Uses SQLite database for easy setup
- Run locally with:

```bash
cd laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```
