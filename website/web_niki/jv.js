// kotak Dialog --> alert
// HTML DOM --> akses halaman html
// HTML Event
// validasi form dengan JavaScript

// window.alert("Selamat Datang bubub")
// window.prompt("Masukan nama :", "cinta aku :")
// window.confirm("Apakah kamu siap?")
// document.write(nama)
// document.forms.namalengkap.value
// document.getElementsByid("namasingkat").value


function submit (){
    if (document.getElementById("namasingkat").value == "")(
        alert("gagal")
        return false
        )
    alert("success")
    return true
}