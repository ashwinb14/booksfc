# Accounting System - WordPress Plugin

A complete financial accounting web application similar to Zoho Books, built for WordPress.

## Features

### Authentication
- Phone-based authentication (no email, no OTP)
- Registration with phone number + password
- Login with phone number + password
- Phone number as primary unique identifier

### User Roles
- **Admin** - Full access to all modules
- **Accountant** - Access to all accounting modules
- **Customer** - Customer portal access only
- **Vendor** - Vendor portal access only

### Core Modules

1. **Dashboard**
   - Total sales and expenses
   - Receivables and payables
   - Profit & Loss snapshot
   - Cashflow overview
   - Recent transactions

2. **Invoices**
   - Create and manage invoices
   - Recurring invoices
   - Add payments
   - UPI payment links (GPay, BHIM)
   - GST calculation (CGST, SGST, IGST)
   - PDF generation
   - Editable invoice templates

3. **Estimates/Quotations**
   - Create estimates
   - Convert to invoice
   - Accept/reject functionality
   - PDF export

4. **Customers**
   - Customer management
   - Customer ledger
   - Outstanding balance tracking
   - Phone number as primary ID

5. **Vendors**
   - Vendor management
   - Vendor bills
   - Purchase orders
   - Vendor payments
   - Phone number as primary ID

6. **Expenses**
   - Expense tracking
   - Categories
   - GST input credit
   - Receipt attachments

7. **Inventory**
   - Product management
   - SKU and HSN codes
   - Stock tracking
   - Low stock alerts

8. **Banking**
   - Manual bank entries
   - Bank reconciliation
   - CSV import for statements

9. **Reports**
   - Profit & Loss
   - Balance Sheet
   - Cash Flow Statement
   - Tax Summary (GST)
   - Sales/Expense reports
   - Customer/Vendor statements
   - PDF/Excel export

### Payment Integration
- UPI payments (GPay, BHIM)
- QR code generation
- Cash payment option
- Payment tracking

### Customer Portal
- Dashboard with outstanding balance
- View invoices
- Pay invoices
- Download invoice PDFs
- View estimates
- Payment history
- Account statements
- Profile management

### Vendor Portal
- Dashboard
- View purchase orders
- View bills
- Upload bill documents
- Payment history
- Vendor statements
- Profile management
- Messaging with admin

## Installation

1. Upload the plugin to `/wp-content/plugins/accounting-system/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. The plugin will automatically create database tables and default roles

## Database Schema

The plugin creates the following custom tables:
- `wp_accounting_transactions`
- `wp_accounting_ledger`
- `wp_accounting_invoice_items`
- `wp_accounting_payments`
- `wp_accounting_bank_reconciliation`
- `wp_accounting_inventory_stock`
- `wp_accounting_customer_balance`
- `wp_accounting_vendor_balance`
- `wp_accounting_invoice_templates`

## Requirements

- WordPress 5.0+
- PHP 7.4+
- MySQL 5.6+

## License

GPL v2 or later

