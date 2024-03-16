function hitung() {
    var angka1 = parseFloat(document.getElementById("angka1").value);
    var operator = document.getElementById("operator").value;
    var angka2 = parseFloat(document.getElementById("angka2").value);
    var hasil;

    if (operator == "1") {
        hasil = angka1 + angka2;
    } else if (operator == "2") {
        hasil = angka1 - angka2;
    } else if (operator == "3") {
        hasil = angka1 * angka2;
    } else if (operator == "4") {
        if (angka2 != 0) {
            hasil = angka1 / angka2;
        } else {
            alert("Tidak dapat membagi dengan nol.");
            return;
        }
    } else {
        alert("Operator yang Anda masukkan tidak valid.");
        return;
    }

    document.getElementById("hasil").innerHTML = "Hasil: " + hasil;
}