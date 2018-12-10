<section class="widget widget-time aquamarine">
    <header class="widget-header-dark with-btn">
        Time 
        <!-- <button type="button" class="widget-header-btn">
            <i class="font-icon font-icon-plus"></i>
        </button> -->
    </header>
    <div class="widget-time-content">
        <?php 
            date_default_timezone_set("Asia/Jakarta");
            $tanggal = mktime(date('m'), date("d"), date('Y'));
            $jam = date ("H : i");
            $a = date ("H");
            if (($a>=6) && ($a<=10)) {
                echo " <b> Selamat Pagi !! </b>";
            }else if(($a>=10) && ($a<=12)){
                echo "<b> Selamat  Siang!! </b>";
            }elseif(($a>12) && ($a<=12)){
                echo "<b> Lunch Break !!</b>";
            }elseif(($a>12) && ($a<=15)){
                echo "<b> Selamat Siang !!</b>";
            }elseif(($a>15) && ($a<=18)){
                echo "<b> Selamat Sore !!</b>";
            }else{
                echo " <b> Selamat Malam </b>";
            }
         ?>
         <div class="count-item-number">
            <?php echo " <b> " . $jam . " " ." </b> "; ?>
         </div>
        <div class="count-item">
            <?php
                $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
                $bulan = $array_bulan[date('n')];

                echo  "$bulan";
            ?>
            <div class="count-item-caption">
                <?php echo "<b> " . date("l, d M Y", $tanggal ) . "</b>"; ?>
            </div>
        </div>
    </div>
</section><!--.widget-time-->