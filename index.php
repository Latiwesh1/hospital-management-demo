<?php
// صفحة رئيسية بسيطة لإدارة المستشفى - نسخة عربية
echo "<!DOCTYPE html>";
echo "<html lang='ar' dir='rtl'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>منظومة إدارة المستشفى</title>";
echo "<style>
    body { font-family: Tahoma, sans-serif; background: #f0f0f0; text-align: center; }
    h1 { color: #2b7a78; margin-top: 50px; }
    a { display: inline-block; margin: 20px; padding: 10px 20px; background: #3aafa9; color: white; text-decoration: none; border-radius: 5px; }
    a:hover { background: #2b7a78; }
</style>";
echo "</head>";
echo "<body>";
echo "<h1>مرحبا بك في منظومة إدارة المستشفى</h1>";
echo "<a href='patients.php'>إدارة المرضى</a>";
echo "<a href='appointments.php'>إدارة المواعيد</a>";
echo "<a href='doctors.php'>إدارة الأطباء</a>";
echo "</body></html>";
?>
