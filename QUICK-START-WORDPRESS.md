# Quick Start Guide for WordPress

## Step 1: Install the Plugin

1. **Upload the plugin** to `/wp-content/plugins/accounting-system/`
2. **Activate** the plugin from WordPress Admin → Plugins
3. The plugin will automatically create:
   - Database tables
   - User roles (Accountant, Customer, Vendor)
   - Default settings

## Step 2: Configure Permalinks

1. Go to **Settings → Permalinks**
2. Click **"Save Changes"** (this enables custom URLs)

## Step 3: Create Your First User

### Option A: Register via WordPress
1. Go to **Users → Add New**
2. Fill in:
   - **Name**: Your full name
   - **Phone Number**: Your 10-digit phone (e.g., 9876543210)
   - **Password**: At least 6 characters
3. **Role**: Select "Administrator" or "Accountant"
4. Click **"Add New User"**

### Option B: Register via Frontend
1. Visit your site's registration page
2. Use phone number instead of email
3. Complete registration

## Step 4: Access the System

### Admin/Accountant Access
- Go to **WordPress Admin → Accounting → Dashboard**
- You'll see:
  - Financial overview
  - Recent transactions
  - Quick links to all modules

### Customer Portal
- Visit: `yoursite.com/customer-portal/`
- Login with phone number + password
- View invoices, make payments, download statements

### Vendor Portal
- Visit: `yoursite.com/vendor-portal/`
- Login with phone number + password
- View purchase orders, bills, upload documents

## Step 5: Create Your First Customer

1. Go to **Accounting → Customers → Add New**
2. Fill in:
   - **Name**: Customer name
   - **Phone**: 10-digit phone number (required, unique)
   - **Address**: Customer address
   - **GSTIN**: If applicable
3. Click **"Create Customer"**

## Step 6: Create Your First Product

1. Go to **Accounting → Inventory → Add New**
2. Fill in:
   - **Name**: Product name
   - **SKU**: Unique product code
   - **HSN Code**: For GST
   - **Price**: Selling price
   - **Stock Quantity**: Initial stock
3. Click **"Create Product"**

## Step 7: Create Your First Invoice

1. Go to **Accounting → Invoices → Add New**
2. Select **Customer**
3. Add **Items**:
   - Select product or enter manually
   - Enter quantity and price
   - GST is calculated automatically
4. Set **Invoice Date** and **Due Date**
5. Click **"Create Invoice"**

## Key Features

### Phone-Based Login
- **No email required**
- Login with phone number + password
- Phone number is unique identifier

### Invoice Templates
- Go to **Accounting → Templates**
- Create custom invoice layouts
- Edit colors, logo, fields
- Multiple templates supported

### Payment Methods
- **UPI**: Generate QR codes for GPay/BHIM
- **Cash**: Record cash payments
- Payment links on invoices

### Reports
- **Profit & Loss**: View income vs expenses
- **Balance Sheet**: Assets, liabilities, equity
- **Cash Flow**: Money in/out
- **Tax Summary**: GST collected/paid
- All reports exportable as PDF/Excel

## WordPress Integration

### Custom Post Types
All accounting data uses WordPress post types:
- Invoices, Estimates, Customers, Vendors, Products, etc.
- Appear in WordPress admin
- Can be queried with WP_Query

### User Roles
- **Administrator**: Full access
- **Accountant**: All accounting modules
- **Customer**: Customer portal only
- **Vendor**: Vendor portal only

### REST API
Access data via WordPress REST API:
- `/wp-json/accounting/v1/dashboard`
- `/wp-json/accounting/v1/invoices`
- `/wp-json/accounting/v1/customers`
- `/wp-json/accounting/v1/vendors`
- `/wp-json/accounting/v1/reports`

## Troubleshooting

### Plugin Won't Activate
- Check PHP version (need 7.4+)
- Check WordPress version (need 5.0+)
- Check file permissions

### Can't Login with Phone
- Clear browser cache
- Check user has phone number in profile
- Verify phone format (10 digits)

### Portal Pages Not Working
- Go to Settings → Permalinks → Save Changes
- Check .htaccess file permissions
- Verify rewrite rules are enabled

### Database Errors
- Check database user has CREATE TABLE permission
- Verify WordPress database prefix is correct
- Check error logs

## Next Steps

1. **Add Company Info**: Set your company name, address, GSTIN
2. **Create Invoice Template**: Customize invoice design
3. **Add Products**: Build your product catalog
4. **Add Customers**: Import or create customer list
5. **Start Invoicing**: Create and send invoices
6. **Track Payments**: Record payments received
7. **Generate Reports**: View financial reports

## Support

For WordPress-specific issues:
1. Check WordPress error logs
2. Enable WordPress debug mode
3. Check plugin error messages
4. Review INSTALLATION.md for detailed setup

---

**The system is now ready to use!** Start by creating customers and products, then create your first invoice.

