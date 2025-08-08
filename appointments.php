<?php
// صفحة إدارة المواعيد - نسخة عربية
echo "<!DOCTYPE html>";
echo "<html lang='ar' dir='rtl'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>إدارة المواعيد</title>";
echo "<style>
    body { font-family: Tahoma, sans-serif; background: #fefefe; padding: 20px; }
    h1 { color: #2b7a78; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background: #3aafa9; color: white; }
    a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #3aafa9; color: white; text-decoration: none; border-radius: 5px; }
    a:hover { background: #2b7a78; }
</style>";
echo "</head>";
echo "<body>";
echo "<h1>إدارة المواعيد</h1>";
echo "<table>";
echo "<tr><th>اسم المريض</th><th>اسم الطبيب</th><th>تاريخ الموعد</th></tr>";
echo "<tr><td>محمد علي</td><td>د. أحمد سالم</td><td>2025-08-12</td></tr>";
echo "<tr><td>فاطمة يوسف</td><td>د. منى الشريف</td><td>2025-08-15</td></tr>";
echo "</table>";
echo "<a href='index.php'>رجوع للرئيسية</a>";
echo "</body></html>";
?>
