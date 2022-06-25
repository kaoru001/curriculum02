<?php
    // $my_name = $_POST['my_name'];
    // $sex = $_POST['sex'];
    $my_number = $_POST['my_number'];
    date_default_timezone_set('Asia/Tokyo');
    // echo date("Y-m-d H:i:s")
    ?>
    
    <p><?php echo date("Y/m/d"); ?>の運勢は</p>

    <?php
    if($my_number === 0){
       echo '選ばれた数字は', $my_number, '<br>';
       echo '凶';
    }else if($my_number <= 3){
        echo '選ばれた数字は', $my_number, '<br>';
        echo '小吉';
    }else if($my_number <= 6){
        echo '選ばれた数字は', $my_number, '<br>';
        echo '中吉';
    }else if($my_number <= 8){
        echo '選ばれた数字は', $my_number, '<br>';
        echo '吉';
    }else if($my_number <= 9){
        echo '選ばれた数字は', $my_number, '<br>';
        echo '大吉';
    }