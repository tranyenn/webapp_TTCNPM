<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
   include '../classes/vendor.php'
?>
<?php 
   $vendor = new vendor();  
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $vendorName = $_POST['vendorName'];
      $check_insert_vendor= $vendor->insert_vendor($vendorName);
   }
 ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Thêm nhà cung cấp mới</h2>
               <span> <?php 
                   if(isset($check_insert_vendor)==true){
                      echo $check_insert_vendor; 
                   }
                ?></span>
               <div class="block copyblock"> 
                 <form action="vendoradd.php" method ="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name ="vendorName" placeholder="Nhập tên nhà cung cấp..." class="medium" />
                            </td>
                        </tr>
						             <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Thêm" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>