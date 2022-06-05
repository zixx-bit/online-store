 <?php
      require_once 'core/init.php';
      include 'includes/head.php';
      include 'includes/navigation.php';
      include 'includes/headerfull.php';
      include 'includes/leftsidebar.php';

      $sql= "SELECT * FROM products WHERE featured = 1";
      $featured = $db->query($sql);
      //
      // $results_per_page = 10;
      // $number_of_results = mysqli_num_row($featured);
      //
      // $number_of_pages = ceil($number_of_results/$results_per_page);
      //
      // // determining the page number visiitor currently on
      // if (!isset[$_GET['page']]) {
      //   // code...
      //   $page = 1;
      // }else{
      //   $page =$_GET['']
      // }

 ?>

     <!-- main body -->
     <div class="col-md-8" style="">
       <div class="row">
         <h2 class="text-center">Featured Product</h2>
        <?php while ($product = mysqli_fetch_assoc($featured)) :?>
         <div  class="col-sm-3 offset-sm-2 col-md-6 offset-md-0 text-center" style="margin-top: 20px; display: block;
  margin-left: auto;
  margin-right: auto;
  " id="product">
         <h4 ><?php echo $product['title']; ?></h4>
                 <div class="img-thumb" >
                  <img class="" id="img-thumb" src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" />
           </div><hr>
            <h4  style=""><?php
            // echo $product['title'];
            ?></h4>
           <p class="list-price text-danger" style="font-size: 13px;">List Price:  <s>Kes <?php echo $product['list_price']; ?></s></p>
           <p class="price " style="font-size: 15px; ">Our Price:<span class="text-primary"> Ksh <?php echo $product ['price']; ?></span> </p>
           <button id="" type="button" class="btn btn-sm btn-success" onclick= "detailsmodal(<?php echo $product['id']; ?>)" >Buy Now</button>
         </div>

       <?php endwhile; ?>


     </div>
   </div>



<?php
  // include 'includes/detailsmodal.php';
  include 'includes/rightsidebar.php';
  include 'includes/footer.php';
  // include 'includes/footer1.php';
 ?>
