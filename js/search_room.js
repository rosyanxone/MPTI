function goToPage() {
    var kodeRuang = document.getElementById("kode-ruang").value;
    // location.href = "lecture/ruang#" + kodeRuang.toUpperCase();
    location.href = "lecture/ruang.php#" + kodeRuang.toUpperCase();
}
const input = document.getElementById("kode-ruang");
input.addEventListener("keydown", (e) => {
    if (e.key.toLowerCase() === "enter") goToPage();
});