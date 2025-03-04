function validateForm() {
    // استرجاع القيم من المدخلات
    var name = document.getElementById("name").value;
    var weight = parseFloat(document.getElementById("weight").value);
    var height = parseFloat(document.getElementById("height").value);

    // التحقق من أن جميع الحقول مملوءة وأن الوزن والطول أرقام صحيحة
    if (name === ""  isNaN(weight)  isNaN(height)) {
        alert("جميع الحقول مطلوبة، ويجب أن يكون الوزن والطول أرقامًا صحيحة.");
        return false;
    }

    // التحقق من أن القيم موجبة
    if (weight <= 0  height <= 0) {
        alert("يجب أن يكون الوزن والطول قيمًا موجبة.");
        return false;
    }

    // التحقق من أن الوزن ضمن النطاق المسموح به (25 - 150 (kg))
    if (weight < 25  weight > 150) {
        alert("(kg)يجب أن يكون الوزن بين 25 و 150 .");
        return false;
    }

    // التحقق من أن الطول ضمن النطاق المسموح به (1 - 2.5 متر)
    if (height < 1 || height > 2.5) {
        alert("يجب أن يكون الطول بين 1 و 2.5 متر.");
        return false;
    }

    // إذا اجتاز جميع الشروط، يتم قبول النموذج
    return true;
}
