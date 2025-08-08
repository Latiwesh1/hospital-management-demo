<?php
// صفحة إدارة الأطباء - نسخة عربية
echo "<!DOCTYPE html>";
echo "<html lang='ar' dir='rtl'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>إدارة الأطباء</title>";
echo "<style>
    body { font-family: Tahoma, sans-serif; background: #f4f4f4; padding: 20px; }
    h1 { color: #2b7a78; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background: #3aafa9; color: white; }
    a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #3aafa9; color: white; text-decoration: none; border-radius: 5px; }
    a:hover { background: #2b7a78; }
</style>";
echo "</head>";
echo "<body>";
echo "<h1>إدارة الأطباء</h1>";
echo "<table>";
echo "<tr><th>الاسم</th><th>التخصص</th><th>رقم الهاتف</th></tr>";
echo "<tr><td>د. أحمد سالم</td><td>طب عام</td><td>091-1234567</td></tr>";
echo "<tr><td>د. منى الشريف</td><td>طب أطفال</td><td>092-7654321</td></tr>";
echo "</table>";
echo "<a href='index.php'>رجوع للرئيسية</a>";
echo "</body></html>";
?>
