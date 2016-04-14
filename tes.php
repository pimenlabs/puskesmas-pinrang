 <input type="text" id="kota" placeholder="Masukkan Nama Kota" size="35" />
        <input type="submit" onclick="checkLetter()" value="Submit" />
    <script type="text/javascript">
    
function checkLetter()
        {
            var validasiHuruf = /^[a-zA-Z ]+$/;
            var namaKota = document.getElementById("kota");
            
            if (namaKota.value.match(validasiHuruf)) {
                alert("Nama Kota Kamu Adalah " + namaKota.value);
            } else {
                alert("Nama Kota Wajib Huruf!");
                
            }
        }</script>