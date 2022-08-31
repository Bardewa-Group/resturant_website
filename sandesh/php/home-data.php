<?php
    include_once 'connect.php';
    $output = '';
    $sql = mysqli_query($conn, "SELECT * FROM home");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
                $output .= '<div class="swiper-slide slide ">
                                <div class="content">
                                    <span>'.$row['heading'].'</span>
                                    <h3>'.$row['title'].'</h3>
                                    <p>'.$row['description'].'</p>
                                    <form action="https://www.sandbox.paypal.com/cgi-bin/websrc" method="post" target="blank">
                                        <input type="hidden" name="cmd" value="_xclick" />
                                        <input type="hidden" name="business" value="sb-ulkaw18064044@business.example.com" />
                                        <input type="hidden" name="item_name" value="laptop" />
                                        <input type="hidden" name="item_number" value="1" />
                                        <input type="hidden" name="amount" value="'.$row['price'].'"/>
                                        <input type="hidden" name="no_shipping" value="0" />
                                        <input type="hidden" name="no_note" value="1" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="lc" value="AU" />
                                        <input type="hidden" name="rm" value="2" />
                                        <input type="hidden" name="return" value="http://localhost/sandesh/message.php" />
                                        <input type="hidden" name="notify_url" value="http://localhost/sandesh/message.php" />
                                        <button class="btn">Order now</button>
                                    </form>
                                </div>
                                <div class="image">
                                    <img src="php/dishes/'.$row['image'].'" alt="pic">
                                </div>
                            </div>'; 
        }
        echo $output;
    }else{
        echo 'no data to display';
    }

?>