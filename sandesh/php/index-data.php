<?php
    include_once 'connect.php';
    $output = '';
    $count = 0;
    $sql = mysqli_query($conn, "SELECT * FROM dishes");
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            if($count > 1){
                $output .= '<div class="box sajan">
                                <div class="box-header"> 
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                    <img src="php/dishes/'.$row['image'].'" alt="">
                                    <h3>'.$row['title'].'</h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="food">
                                    <span>'.$row['price'].'$</span>
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
                            </div>';
            }else{
                $output .= '<div class="box">
                                <div class="box-header"> 
                                    <a href="#" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-eye"></a>
                                    <img src="php/dishes/'.$row['image'].'" alt="">
                                    <h3>'.$row['title'].'</h3>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                                <div class="food">
                                    <span>'.$row['price'].'$</span>
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
                            </div>';
            }
            $count = $count + 1;
        }
        echo $output;
    }else{
        echo 'no data to display';
    }

?>