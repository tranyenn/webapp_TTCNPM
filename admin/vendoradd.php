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
                <h2>Add New Vendor</h2>
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
                                <input type="text" name ="vendorName" placeholder="Enter Vendor Name..." class="medium" />
                            </td>
                        </tr>
						             <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>