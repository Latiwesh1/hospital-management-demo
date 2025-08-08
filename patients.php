<?php
// صفحة إدارة المرضى - نسخة عربية
echo "<!DOCTYPE html>";
echo "<html lang='ar' dir='rtl'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>إدارة المرضى</title>";
echo "<style>
    body { font-family: Tahoma, sans-serif; background: #f9f9f9; padding: 20px; }
    h1 { color: #2b7a78; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background: #3aafa9; color: white; }
    a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #3aafa9; color: white; text-decoration: none; border-radius: 5px; }
    a:hover { background: #2b7a78; }
</style>";
echo "</head>";
echo "<body>";
echo "<h1>إدارة المرضى</h1>";
echo "<table>";
echo "<tr><th>الاسم</th><th>العمر</th><th>التشخيص</th></tr>";
echo "<tr><td>محمد علي</td><td>35</td><td>ارتفاع ضغط الدم</td></tr>";
echo "<tr><td>فاطمة يوسف</td><td>29</td><td>أنفلونزا</td></tr>";
echo "</table>";
echo "<a href='index.php'>رجوع للرئيسية</a>";
echo "</body></html>";
?>
