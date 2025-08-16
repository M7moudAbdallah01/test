// js/app.js
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // يمنع الريلوود

        // هنا تتحقق من البيانات أو تعمل أي شرط
        const phone = document.getElementById("phone").value.trim();
        const password = document.getElementById("password").value.trim();

        if (phone === "01234567890" && password === "123456") {
            window.location.href = "index.html"; // الصفحة اللي هتروح لها
        } else {
            alert("❌ رقم الهاتف أو كلمة المرور غير صحيحة");
        }
    });
});
