<?php
    // $my_name = $_POST['my_name'];
    // $sex = $_POST['sex'];
    $my_number = $_POST['my_number'];
    date_default_timezone_set('Asia/Tokyo');
    // echo date("Y-m-d H:i:s")
    $hairetu = str_split($my_number);
    $key = array_rand($hairetu);
    $number = $hairetu[$key];
    ?>
    
    <p><?php echo date("Y/m/d"); ?>の運勢は</p>

    <?php
    if($number === 0){
       echo '選ばれた数字は', $number, '<br>';
       echo '凶';
    }else if($number <= 3){
        echo '選ばれた数字は', $number, '<br>';
        echo '小吉';
    }else if($number <= 6){
        echo '選ばれた数字は', $number, '<br>';
        echo '中吉';
    }else if($number <= 8){
        echo '選ばれた数字は', $number, '<br>';
        echo '吉';
    }else if($number <= 9){
        echo '選ばれた数字は', $number, '<br>';
        echo '大吉';
    }