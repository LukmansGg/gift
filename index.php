<?php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "Stiker1.gif",
    ucapan: "Halooww yang lagi ulang tahunn",
  },
  {
    gambar: " Stiker2.gif", 
    ucapan: "Selamat ulang tahunn yaaa", 
  }, 
  {
    gambar: "Stiker3.gif", 
    ucapan: "Semoga panjang umur Dan sehat selaluuu", 
  }, 
  {
    gambar: "Stiker4.gif", 
    ucapan: " Semangat ya menggapai cita-cita kamuu, aku bakal selalu dukung kamu🫶🏻🫶🏻",
  }
];

musik = "lagu.mp3";
noWhatsapp = "6281xxx";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>
