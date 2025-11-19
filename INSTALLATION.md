# WordPress Installation Guide

## Prerequisites

- WordPress 5.0 or higher
- PHP 7.4 or higher
- MySQL 5.6 or higher
- Apache/Nginx web server

## Installation Steps

### 1. Upload Plugin Files

**Option A: Via WordPress Admin**
1. Zip the entire `accounting-system` folder
2. Go to WordPress Admin → Plugins → Add New
3. Click "Upload Plugin"
4. Choose the zip file and click "Install Now"
5. Click "Activate Plugin"

**Option B: Via FTP/cPanel**
1. Upload the `accounting-system` folder to `/wp-content/plugins/`
2. Go to WordPress Admin → Plugins
3. Find "Accounting System" and click "Activate"

### 2. Activate the Plugin

1. After activation, the plugin will automatically:
   - Create all database tables
   - Create custom user roles (Accountant, Customer, Vendor)
   - Set default options
   - Flush rewrite rules

### 3. Configure Permalinks

1. Go to Settings → Permalinks
2. Click "Save Changes" (this ensures rewrite rules are flushed)

### 4. Set Up First User

1. Go to Users → Add New
2. Register a new user with phone number
3. Assign role: Administrator or Accountant

### 5. Access the System

- **Admin Dashboard**: Go to WordPress Admin → Accounting → Dashboard
- **Customer Portal**: Visit `/customer-portal/` (after login as customer)
- **Vendor Portal**: Visit `/vendor-portal/` (after login as vendor)

## WordPress-Specific Configuration

### Theme Compatibility

The plugin works with any WordPress theme. For best results:
- Use the included `accounting-theme` or
- Ensure your theme supports custom post types
- Theme should have proper header/footer for portal pages

### Permalink Structure

The plugin uses custom rewrite rules for:
- `/customer-portal/` - Customer portal
- `/vendor-portal/` - Vendor portal

Make sure permalinks are enabled (not "Plain").

### User Registration

The plugin overrides WordPress default registration:
- Phone number is required instead of email
- Password must be at least 6 characters
- Email is auto-generated (hidden from user)

### Database Tables

The plugin creates these custom tables:
- `wp_accounting_transactions`
- `wp_accounting_ledger`
- `wp_accounting_invoice_items`
- `wp_accounting_payments`
- `wp_accounting_bank_reconciliation`
- `wp_accounting_inventory_stock`
- `wp_accounting_customer_balance`
- `wp_accounting_vendor_balance`
- `wp_accounting_invoice_templates`

All tables use WordPress database prefix.

### Custom Post Types

The plugin registers these post types:
- `invoice`
- `estimate`
- `customer`
- `vendor`
- `product`
- `expense`
- `bill`
- `purchase_order`
- `payment`
- `invoice_template`

### User Roles

Custom roles created:
- **Accountant**: Full access to accounting modules
- **Customer**: Access to customer portal only
- **Vendor**: Access to vendor portal only

### REST API

The plugin adds REST API endpoints:
- `/wp-json/accounting/v1/dashboard`
- `/wp-json/accounting/v1/invoices`
- `/wp-json/accounting/v1/customers`
- `/wp-json/accounting/v1/vendors`
- `/wp-json/accounting/v1/reports`

## Troubleshooting

### Plugin Not Activating

1. Check PHP version (must be 7.4+)
2. Check WordPress version (must be 5.0+)
3. Check file permissions
4. Check error logs

### Database Tables Not Created

1. Deactivate and reactivate the plugin
2. Check database user permissions
3. Check WordPress database prefix

### Rewrite Rules Not Working

1. Go to Settings → Permalinks
2. Click "Save Changes"
3. Check `.htaccess` file permissions

### Phone Login Not Working

1. Clear browser cache
2. Check if another plugin is interfering
3. Verify user has phone number in user meta

## WordPress Hooks Used

The plugin uses these WordPress hooks:
- `plugins_loaded` - Initialize plugin
- `init` - Register post types, taxonomies
- `admin_menu` - Add admin menus
- `wp_ajax_*` - AJAX handlers
- `rest_api_init` - REST API registration
- `authenticate` - Custom authentication
- `template_include` - Custom templates

## Security

- All forms use WordPress nonces
- All database queries use prepared statements
- All output is sanitized/escaped
- Role-based access control
- Data isolation for portals

## Support

For issues or questions:
1. Check WordPress error logs
2. Enable WordPress debug mode
3. Check plugin error messages

