function goToPage() {
    var kodeRuang = document.getElementById("input").value;
    // location.href = "lecture/ruang#" + kodeRuang.toUpperCase();
    location.href = "lecture/ruang.php#" + kodeRuang.toUpperCase();
}
const input = document.getElementById("input");
input.addEventListener("keydown", (e) => {
    if (e.key.toLowerCase() === "enter") goToPage();
});