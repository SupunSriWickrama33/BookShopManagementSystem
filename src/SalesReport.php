<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb62EQH1SOiJV0wZr2iA1dHLWUBK8IVb5zMw&s"
        type="image/x-icon">

    <title>Sales Report</title>
    <link rel="stylesheet" href="Sales.css">
</head>
<body>

    <!-- Side Navigation Bar -->
    <div class="sidebar">
        <h2>CHANDREASEKARA BOOK SHOP</h2>
        <nav>
            <ul>
                <li><a href="Inventoryy.php">Inventory</a></li>
                <li><a href="Stock.php">Stock update</a></li>
                <li><a href="Bill.html">Bill Calculator</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </nav>

        <!-- Back Button -->
        <a href="Home&Login.html" class="back-btn">← Back</a>
    </div>

    <!-- Main Sales Report Section -->
    <div class="main-container">
        <!-- Sales Report Table -->
        <div class="sales-report">
            <h2>Sales Report</h2>
            <?php include 'sales_report_DB.php'; ?>
        </div>

        <!-- Footer Section -->
        <div class="footer-section">
            <div class="footer-info">
                <label>Date:</label>
                <span>_____________</span>
            </div>
            <div class="footer-info">
                <label>Total Sales:</label>
                <span>Rs: ___________</span>
            </div>
            <button class="print-btn">Print</button>
        </div>
    </div>

</body>
</html>