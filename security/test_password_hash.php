<?php
    /**
     * 我们想要使用默认算法哈希密码
     * 当前是 BCRYPT，并会产生 60 个字符的结果。
     *
     * 请注意，随时间推移，默认算法可能会有变化，
     * 所以需要储存的空间能够超过 60 字（255字不错）
     */
   // echo password_hash();
    echo $password_hash =  password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."\n";
    
    /**
     * 在这个案例里，我们为 BCRYPT 增加 cost 到 12。
     * 注意，我们已经切换到了，将始终产生 60 个字符。
     */
    $options = [
        
	'cost' => 12,

    ]; 
    echo "<br >";
    echo $password_hash2 =  password_hash("rasmuslerdorf",PASSWORD_BCRYPT)."\n";
    echo "<br >"; 
    echo $password_hash3 = password_hash("rasmuslerdorf",PASSWORD_DEFAULT)."\n";
    echo '<br >';

    $hash = '$2y$10$A.WL3CPnlbnWtM9KaIWR6.4dcpImI9lkOzVe9mLZDxIKyOCr1RsRa';
    $hash2 = '$2y$10$N77eJExh9U29mR1OTIwliulmKfAuR6WLKnhJi86BWgB8nsg/3MyWW';
    if (password_verify('rasmuslerdorf',$hash2)) {
    
        echo "passsword is valid";
    } else {
        echo "Invalid password";
    }

?>
