function prosesDiskon() {
    const inputNominal = document.getElementById('nominal');
    const divHasil = document.getElementById('hasil');
    const totalBelanja = Number(inputNominal.value);
    if (inputNominal.value.trim() === '' || isNaN(totalBelanja) || totalBelanja < 0) {
        divHasil.className = 'diskon-error';
        divHasil.style.display = 'block';
        divHasil.innerHTML = '<div class="pesan-utama">Mohon masukkan nominal belanja yang valid!</div>';
        return;
    }
    divHasil.style.display = 'block';
    if (totalBelanja >= 100000) {
        const potonganDiskon = totalBelanja * 0.10;
        const totalBayar = totalBelanja - potonganDiskon;

        divHasil.className = 'diskon-sukses';
        divHasil.innerHTML = `
            <div class="pesan-utama">Selamat! Anda Mendapatkan Diskon 10%</div>
            <div class="detail-pembayaran">
                Total Belanja: <strong>Rp ${totalBelanja.toLocaleString('id-ID')}</strong><br>
                Potongan Diskon (10%): <strong style="color: #e74c3c;">-Rp ${potonganDiskon.toLocaleString('id-ID')}</strong><br>
                Total Pembayaran Akhir: <strong>Rp ${totalBayar.toLocaleString('id-ID')}</strong>
            </div>
        `;
    } else {
        const kekurangBelanja = 100000 - totalBelanja;

        divHasil.className = 'diskon-normal';
        divHasil.innerHTML = `
            <div class="pesan-utama">Maaf, Anda Belum Mendapat Diskon</div>
            <p>Minimal belanja untuk mendapatkan diskon 10% adalah <strong>Rp 100.000</strong>.</p>
            <p>Tambah belanja <strong>Rp ${kekurangBelanja.toLocaleString('id-ID')}</strong> lagi untuk mendapatkan diskon!</p>
            <div class="detail-pembayaran">
                Total Pembayaran Akhir: <strong>Rp ${totalBelanja.toLocaleString('id-ID')}</strong>
            </div>
        `;
    }
}x