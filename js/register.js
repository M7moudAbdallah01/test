document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("signupForm");
    const errorMsg = document.getElementById("error");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("username").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm_password").value;

        errorMsg.style.display = "none";

        if (!username) {
            showError("❌ يرجى إدخال اسم المستخدم");
            return;
        }
        if (!phone.match(/^[0-9]{11}$/)) {
            showError("❌ يرجى إدخال رقم هاتف صحيح مكون من 11 رقمًا");
            return;
        }
        if (!password) {
            showError("❌ يرجى إدخال كلمة المرور");
            return;
        }
        if (password !== confirmPassword) {
            showError("❌ يرجى التأكد من كلمة المرور التأكيدية");
            return;
        }

        alert("✅ تم إنشاء الحساب بنجاح");
        window.location.href = "index.html";
    });

    function showError(message) {
        errorMsg.textContent = message;
        errorMsg.style.display = "block";
    }
});