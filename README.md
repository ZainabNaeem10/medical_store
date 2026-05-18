# Medical Store Management System 💊

A web-based pharmacy management application designed to automate the daily operations of a medical store — covering inventory, billing, supplier and customer management, and report generation.

---

## Features

### Admin Module
- Secure login with role-based access control
- User management (add, update, delete staff accounts)
- System configuration

### Medicine Management
- Add, update, and delete medicines
- Track batch numbers and expiry dates
- Real-time stock level monitoring
- Low stock and near-expiry alerts

### Supplier Management
- Maintain supplier records and contact details
- Track supplier transactions and purchase history

### Customer Management
- Store customer profiles and purchase history
- Quick lookup during billing

### Sales & Billing
- Generate itemised bills with tax and discount calculation
- Print invoices for customers
- Automatic stock deduction after each sale

### Purchase Management
- Record medicine purchases from suppliers
- Automatic stock update after purchases
- Manage purchase invoices

### Reports Module
- Daily and monthly sales reports
- Current stock report
- Expiry report for near-expiry medicines

---

## Tech Stack

| Layer | Technology |
|---|---|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP |
| Database | MySQL |
| Server | Apache (XAMPP / WAMP) |

---

## Getting Started

### Prerequisites
- XAMPP or WAMP (Apache + MySQL + PHP)
- A modern web browser

### Installation

```bash
# Clone the repository
git clone https://github.com/ZainabNaeem10/medical_store.git
```

1. Move the project folder into your server's root directory:
   - XAMPP: `C:/xampp/htdocs/medical_store`
   - WAMP: `C:/wamp64/www/medical_store`

2. Start **Apache** and **MySQL** from your XAMPP/WAMP control panel.

3. Open **phpMyAdmin** at `http://localhost/phpmyadmin`.

4. Create a new database named `medical_store`.

5. Import the provided SQL file:
   - Go to **Import** → select `medical_store.sql` from the project root → click **Go**.

6. Configure the database connection in `config.php`:

```php
<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "medical_store";
?>
```

7. Open the app at `http://localhost/medical_store`.

---

## Database Schema (Key Tables)

```sql
Users        — user_id, username, password, role
Medicines    — medicine_id, name, category, batch_number, expiry_date, price, quantity
Suppliers    — supplier_id, name, contact, address
Customers    — customer_id, name, contact, purchase_history
Sales        — sale_id, customer_name, date, total_amount
Purchases    — purchase_id, supplier_id, medicine_id, quantity, date
```

---

## System Modules Overview

```
Admin
 ├── User Management
 └── System Config

Inventory
 ├── Add / Edit / Delete Medicines
 ├── Stock Monitoring
 └── Expiry & Low Stock Alerts

Billing
 ├── Generate Bills
 ├── Apply Tax & Discounts
 └── Print Invoices

Suppliers & Customers
 ├── Supplier Records
 └── Customer Profiles

Reports
 ├── Daily Sales Report
 ├── Monthly Sales Report
 ├── Stock Report
 └── Expiry Report
```

---

## Key Implementation Details

- **Auto Stock Updates**: Every sale and purchase automatically adjusts stock quantities in the database — no manual entry needed.
- **Expiry Alerts**: The system flags medicines within a configurable number of days of expiry, preventing dispensing of expired stock.
- **Invoice Printing**: Bills are formatted for direct browser printing, suitable for standard receipt or A4 paper.
- **Role-Based Access**: Admin and staff roles have separate permissions, ensuring sensitive operations are restricted.

---

## Project Structure

```
medical_store/
├── config.php
├── index.php
├── login.php
├── dashboard.php
├── medicines/
│   ├── add.php
│   ├── edit.php
│   └── list.php
├── sales/
│   ├── billing.php
│   └── invoice.php
├── suppliers/
├── customers/
├── reports/
├── css/
├── js/
└── medical_store.sql
```

---

## Author

**Zainab Naeem**  
[GitHub](https://github.com/ZainabNaeem10) · [LinkedIn](https://linkedin.com/in/zainab-naeem-699a38309)
