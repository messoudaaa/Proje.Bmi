<?php
// 1. التحقق من وجود البيانات المرسلة عبر POST
if (isset($_POST['name'], $_POST['weight'], $_POST['height'])) {
    // 2. تنظيف البيانات والتحقق من صحتها
    $name = htmlspecialchars(trim($_POST['name'])); // استخدم trim لإزالة المسافات الزائدة
    $weight = filter_var($_POST['weight'], FILTER_VALIDATE_FLOAT);
    $height = filter_var($_POST['height'], FILTER_VALIDATE_FLOAT);

    // 3. التحقق من أن الوزن والطول قيم صحيحة
    if ($weight === false  $weight <= 0  $height === false || $height <= 0) {
        echo "الرجاء إدخال قيم صحيحة للوزن والطول.";
        exit;
    }

    // 4. حساب مؤشر كتلة الجسم (BMI)
    $bmi = $weight / ($height * $height);

    // 5. تحديد تصنيف مؤشر كتلة الجسم
    if ($bmi < 18.5) {
        $interpretation = "نقص في الوزن";
    } elseif ($bmi < 25) {
        $interpretation = "وزن طبيعي";
    } elseif ($bmi < 30) {
        $interpretation = "وزن زائد";
    } else {
        $interpretation = "سمنة";
    }

    // 6. عرض النتيجة
    echo "مرحباً، " . $name . ". مؤشر كتلة الجسم الخاص بك هو " . number_format($bmi, 2) . " (" . $interpretation . ").";
} else {
    // 7. عرض رسالة إذا لم يتم إرسال البيانات
    echo "لم يتم استقبال البيانات.";
}
?>
