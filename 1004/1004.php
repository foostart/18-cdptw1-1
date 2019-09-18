<html>
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1.less', 'css/1.css');
    ?>
    <link href="css/1.css" rel="stylesheet" type="text/css" />

</head>

<body>


<h2 class="tach"><b>BEST SELLERS</h2>
<hr  width="15%" align="left" color="red"/> 
<div class="module-8">
<div class="slider-nav">
      <a class="slider-prev best_selling_products-prev"><i class="fa fa-chevron-left"></i></a>
      <span class="nav-divider"></span>
      <a class="slider-next best_selling_products-next"><i class="fa fa-chevron-right"></i></a>
  </div>

      <div class="section group">


        <div class="grid_1_of_4 images_1_of_4">
           <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/81lZPI2hmoL._SX522_-470x450.jpg" alt=""></a>
           <div class="overlay">
               <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/815gN9Ip-mL._SX522_-470x450.jpg"></a>
            </div>

           <h2> <b>BLU VIVO 5 SMARTPHONE</b> </h2>
               <p><span class="price">$875.00</span></p>


               <div class="clear"></div>
        </div>

        <div class="grid_1_of_4 images_1_of_4">
          <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/815gN9Ip-mL._SX522_56-1-470x450.jpg" alt=""></a>         
          <div class="overlay">
    <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/815gN9Ip-mL._SX522_-470x450.jpg"></a>
 </div>    
              <h2> <b>APPLE IPHONE 6S PLUS</b> </h2>
               <p><span class="g">$600.00</span><span class="price">$560.00</span></p>

               <div class="clear"></div>
          </div>

         <div class="grid_1_of_4 images_1_of_4">
          <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/61QfYbX8lwL._SX522_-470x450.jpg" alt=""></a>
                <div class="overlay">
    <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/815gN9Ip-mL._SX522_-470x450.jpg"></a>
 </div>
                <h2> <b>HUAWEI NEXUS 6P</b> </h2>
               <p><span class="price">$865.00</span></p>
           </div> 

               <div class="clear"></div>
      
        
           
        
            
        <div class="grid_1_of_4 images_1_of_4">
          <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/61i0BmiRATL._SX522_-470x450.jpg" alt=""></a>

              <div class="overlay">
    <a href="preview.html"><img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/12/815gN9Ip-mL._SX522_-470x450.jpg"></a>
 </div>
              <h2> <b>ORBIC SLIM</b> </h2>
               <p><span class="g">$600.00</span><span class="price">$456.00</span></p>
        </div>

               <div class="clear"></div>

       
                     
  </div>



</body>
</html>

