<a href="home.php">Home</a> | <a href="show_cart.php">Show_cart</a> | <a href="xoacart.php">Delete_cart</a></p>
<?php
session_start();
$id= $_GET['Code'];
        if($id != "") //  Nếu có ID truyền vào
        {
            if(isset($_SESSION['giohang'][$id]))
                            {
                                    // Tăng số lượng nó lên
                                    $_SESSION['giohang'][$id]++;
                             }
                            else // Chưa có trong giỏ hàng (mới chọn)
                            {
                                    $_SESSION['giohang'][$id] = 1; // Số lượng mức định là 1
                            }
        }        
        else
        {
        
        } 
        
        header('Location: cartbt.php');
?>
