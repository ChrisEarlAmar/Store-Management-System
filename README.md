# Store Management System

This web application is built using Laravel and MySQL to manage stores and employees. It allows users to perform various operations related to store and employee management.

## Features

### Store Management

-   **Create**: Add new stores with names, addresses, and contact details.
-   **List**: View all existing stores with their details, view a specific employee details.
-   **Edit**: Modify store information.
-   **Delete**: Remove a store and its associated employees.

### Employee Management

-   **Create**: Add new employees with names, positions, and contact details.
-   **Assign**: Link employees to specific stores.
-   **List**: View all employees with their details, view a specific employee details.
-   **Edit**: Modify employee information.
-   **Delete**: Remove an employee and disassociate them from any store.

### Position Management

-   **Create**: Define new positions to be used across stores.
-   **List**: View all positions including seeded positions.
-   **Delete**: Remove a position from the system.

---

### Navigation

-   **Navigation Menu**: The application includes a navigation menu that allows users to switch between store management and employee management. The employee positions is in the employee menu where users can add new or delete positions.

## Installation

To run this application locally:

1. Clone the repository.
2. Install dependencies using `composer install`.
3. Create a new MySQL database.
4. Copy the `.env.example` file to `.env` and configure the database connection.
5. Run database migrations using `php artisan migrate`.
6. Seed the database with initial data (Positions such as Cashier, Salesperson, and Manager) using `php artisan db:seed --class=DatabaseSeeder`.
7. Start the Laravel development server using `php artisan serve`.
