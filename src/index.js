function countChars(textarea) {
    const count = textarea.value.length;
    document.getElementById("charCount").textContent = `${count}/500`;
}

document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const submitButton = document.getElementById("submitButton");
    const submitButtonSpinIcon = document.getElementById("submitButtonSpinIcon");
    const submitButtonMessage = document.getElementById("submitButtonMessage");
    const responseMessage = document.getElementById("responseMessage");
    const firstNameField = document.getElementById("firstName");
    const lastNameField = document.getElementById("lastName");
    const emailField = document.getElementById("email");
    const phoneNumberField = document.getElementById("phone");
    const messageField = document.getElementById("message");
    const originalText = submitButtonMessage.textContent;

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
             
        try {
            const formData = new FormData(form);
            console.log(formData);

            responseMessage.textContent = "";
            submitButton.disabled = true;
            firstNameField.disabled = true;
            lastNameField.disabled = true;
            emailField.disabled = true;
            phoneNumberField.disabled = true;
            messageField.disabled = true;
            submitButton.classList.remove("bg-cyan-600", "hover:bg-cyan-700", "hover:scale-105", "hover:-translate-y-0.5", "transition", "cursor-pointer");
            submitButton.classList.add("bg-gray-400", "cursor-not-allowed");
            firstNameField.classList.add("bg-blue-50", "cursor-not-allowed", "opacity-70");
            lastNameField.classList.add("bg-blue-50", "cursor-not-allowed", "opacity-70");
            emailField.classList.add("bg-blue-50", "cursor-not-allowed", "opacity-70");
            phoneNumberField.classList.add("bg-blue-50", "cursor-not-allowed", "opacity-70");
            messageField.classList.add("bg-blue-50", "cursor-not-allowed", "opacity-70");
            submitButtonSpinIcon.classList.remove("hidden");
            submitButtonMessage.textContent = "Sending...";

            const response = await fetch("https://script.google.com/macros/s/AKfycbwsZ2V73bGEnAZiBe2XCQ41hz5Tw9or232bJfDWD1IHU7yRosgCC5eOygtCIGFOH6VlDg/exec", {
                method: "POST",
                body: formData
            });

            if (!response.ok) {
                throw new Error(`Response status: ${response.status}`)
            }

            const result = await response.text();
            console.log(result)
            form.reset();
            responseMessage.textContent = "Thanks! Message sent.";
        } catch (error) {
            console.error(error.message);
        } finally {
            submitButton.disabled = false;
            firstNameField.disabled = false;
            lastNameField.disabled = false;
            emailField.disabled = false;
            phoneNumberField.disabled = false;
            messageField.disabled = false;
            firstNameField.classList.remove("bg-blue-50", "cursor-not-allowed", "opacity-70");
            lastNameField.classList.remove("bg-blue-50", "cursor-not-allowed", "opacity-70");
            emailField.classList.remove("bg-blue-50", "cursor-not-allowed", "opacity-70");
            phoneNumberField.classList.remove("bg-blue-50", "cursor-not-allowed", "opacity-70");
            messageField.classList.remove("bg-blue-50", "cursor-not-allowed", "opacity-70");
            submitButton.classList.remove("bg-gray-400", "cursor-not-allowed");
            submitButton.classList.add("bg-cyan-600", "hover:bg-cyan-700", "hover:scale-105", "hover:-translate-y-0.5", "transition", "cursor-pointer");
            submitButtonSpinIcon.classList.add("hidden");
            document.getElementById("charCount").textContent = `0/500`;
            submitButtonMessage.textContent = originalText;
        }
    })
})