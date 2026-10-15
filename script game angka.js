let angkaRahasia = Math.floor(Math.random() * 10) + 1;

const btnTebak = document.getElementById("btnTebak");
const btnReset = document.getElementById("btnReset");

btnTebak.addEventListener("click", function () {
  const input = document.getElementById("inputTebakan");
  const pesan = document.getElementById("pesan");
  const tebakan = parseInt(input.value);

  if (isNaN(tebakan) || tebakan < 1 || tebakan > 10) {
    pesan.innerText = "Harap masukkan angka bulat antara 1 sampai 10!";
    pesan.className = "error";
    return;
  }

  if (tebakan === angkaRahasia) {
    pesan.innerText = "Selamat! Tebakan Anda BENAR!";
    pesan.className = "benar";
  } else if (tebakan > angkaRahasia) {
    pesan.innerText = "Tebakan Anda Terlalu TINGGI!";
    pesan.className = "terlalu-tinggi";
  } else {
    pesan.innerText = "Tebakan Anda Terlalu RENDAH!";
    pesan.className = "terlalu-rendah";
  }
});

btnReset.addEventListener("click", function () {
  angkaRahasia = Math.floor(Math.random() * 10) + 1;
  document.getElementById("inputTebakan").value = "";
  const pesan = document.getElementById("pesan");
  pesan.innerText = "Game direset. Silakan tebak lagi!";
  pesan.className = "";
});