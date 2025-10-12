function selectAnswer(button, isCorrect) {
    const options = document.querySelectorAll(".quiz-option");
    options.forEach((btn) => {
        btn.classList.remove("bg-green-500", "bg-red-500");
    });

    if (isCorrect) {
        button.classList.add("bg-green-500");
        alert("Jawaban benar! 🎉");
    } else {
        button.classList.add("bg-red-500");
        alert("Jawaban salah ❌");
    }
}
