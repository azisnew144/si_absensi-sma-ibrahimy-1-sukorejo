<?php

if (!isset($_GET['target'])) {
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Halaman wali kelas</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Selamat Datang di halaman wali kelas<br>
                Aplikasi ini dibuat dengan dasar-dasar sehingga membuat aplikasi website yang dinamis
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                Ip Adress Anda: <?php echo $_SERVER['REMOTE_ADDR']; ?>
                <br>
                Tanggal: <?php echo date("d/m/y"); ?>
                
                <body>
    <?php
        date_default_timezone_set("Asia/jakarta");
    ?>
        
     <p>Waktu: <b><span id="jam" style="font: size 11px;"></span></b></p>
    
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</body>
            </div>
        </div>
    </div>
    <?php
} else {
    $target = $_GET['target'];
    if (empty($target)){
        ?>
        <script>
            window.location.href = 'admin.php';
        </script>
        <?php
    }

    if (!isset($_GET['action'])){
        getContentAdmin(base_url(), $target);
    } else {
        getContentAdmin(base_url(), $target, $_GET['action']);
    }
}
?>