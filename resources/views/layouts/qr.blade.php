
<script>
    function generateQRCode(){
        this.qrImage.style.display ='none';
        this.qrImage.src="https://chart.googleapis.com/chart?cht=qr&choe=UTF-8&chs=150x150&chl="
            +encodeURIComponent(QRCode.value.trim());
        this.qrImage.style.display ='inline';
    }
</script>