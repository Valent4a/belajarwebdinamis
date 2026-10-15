function hitungKarakter() {
  let teks = document.getElementById("pesan").value;
  let totalKarakter = teks.length;
  let batasMaksimal = 150;
  let sisa = batasMaksimal - totalKarakter;
  let elemenSisa = document.getElementById("sisa-karakter");
  let elemenTextarea = document.getElementById("pesan");
  let elemenPeringatan = document.getElementById("peringatan");
  
  elemenSisa.innerText = sisa;
  
  if (totalKarakter >= batasMaksimal) {
    elemenSisa.classList.add("teks-merah");
    elemenTextarea.classList.add("bahaya");
    elemenPeringatan.style.display = "block";
  } else {
    elemenSisa.classList.remove("teks-merah");
    elemenTextarea.classList.remove("bahaya");
    elemenPeringatan.style.display = "none";
  }
}