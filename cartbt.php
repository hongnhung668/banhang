<?php 
session_start();
include'connect.php';
if(!$_SESSION['giohang'])
{header('location:index.php');}
else
{
$giohang = $_SESSION['giohang'];
/*Xu ly cap nhat gio hang*/ 
if((isset($_POST['capnhat']))&&(count($_SESSION['giohang']) != ""))
{ 
       
                $soluong_cn = $_POST['soluong'];
        
                foreach($soluong_cn as $id => $sl)
                {
                        
                        // Neu nhu nguoi dùng dat lai so luong  = 0  ==> thi ta huy luôn san pham do ($id_sp) trong gio hàng ($_SESSION['giohang']) 
                        if($sl == 0)
                        {
                                unset($_SESSION['giohang'][$id]);
                        }
                        // Nguoc lai so luong sp phai là so ta cap nhat lai so luong gio hàng
                        
                        else if($sl > 0 && is_numeric($sl))
                        {
                                $_SESSION['giohang'][$id] = $sl;
                        }
                        // Nguoc lai co the xuat thong bao so luong khong hop le (so luong = char)
                        // refresh lại giỏ hàng
                        header("Location: cartbt.php");
                }
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
    .table&amp;amp;gt;tbody&amp;amp;gt;tr&amp;amp;gt;td, 
    .table&amp;amp;gt;tfoot&amp;amp;gt;tr&amp;amp;gt;td {  
vertical-align: middle;
}
 
@media screen and (max-width: 600px) { 
table#cart tbody td .form-control { 
width:20%; 
display: inline !important;
} 
 
.actions .btn { 
width:36%; 
margin:1.5em 0;
} 
 
.actions .btn-info { 
float:left;
} 
 
.actions .btn-danger { 
float:right;
} 
 
table#cart thead {
display: none;
} 
 
table#cart tbody td {
display: block;
padding: .6rem;
min-width:320px;
} 
 
table#cart tbody tr td:first-child {
background: #333;
color: #fff;
} 
 
table#cart tbody td:before { 
content: attr(data-th);
font-weight: bold; 
display: inline-block;
width: 8rem;
} 
 
table#cart tfoot td {
display:block;
} 
table#cart tfoot td .btn {
display:block;
}
}</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<h2 class="text-center">Giỏ hàng</h2>
<div class="container"> 
	<form method="POST">
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
  	<?php
   echo '<tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> '
   ?>
  </thead> 
  <tbody>
    
     <?php 
/* show gio hang */
$tongtien=0;
foreach($giohang as $id => $ls)
{
$sql = "SELECT * FROM themmoi WHERE Code in ('$id')";
$run = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($run);
$thanhtien=$row['Money'] * $ls;
$tongtien += $thanhtien;
echo '<tr>';
echo '<td data-th="Product">'
		.'<div class="row">'
		.' <div class="col-sm-3 hidden-xs"><img src="img/'. $row['Picture'] .'"width="80px" height="80px">'
     		.'</div>'
		.' <div class="col-sm-9">'
		.'Name: '.$row['Name'].'<br>'.'Code: '.$row['Code']
		.'</div>'.'</div>'.'</td>';
echo '<td data-th="Price" >'.$row['Money'].'</td>';
echo '<td data-th="Quantity"><input class="form-control text-center" type="number" value="'.$ls.'" name="soluong['.$id.']"/></td>';
echo '<td data-th="Subtotal" class="text-center">' .$thanhtien. ' VNĐ </a></td>';
echo '</tr>';
}
?>
	
<tr>
	<td class="actions" data-th="">
    <button class="btn btn-info btn-sm" type="submit" name="capnhat">Cập nhật
    </button> 
    <button class="btn btn-danger btn-sm"><a href="xoa_cart.php" style="text-decoration: none; color: #FFFFFFFF">Delete_cart</a>
    </button>
   </td> 

    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td>
    
    <td  class="hidden-xs"></td> 
    <td class="hidden-xs text-center">
        <strong> Tổng tiền: <?php echo number_format($tongtien,0,",","."); ?>VNĐ </strong>
    </td> 
    
    <td><a href="" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
 </form>
</div>

</body>
</html>