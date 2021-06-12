 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to <?php echo $_SESSION['setting_name']; ?></h3>
                        <hr class="divider my-4" />
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#menu">Order Now</a>

                    </div>
                    
                </div>
            </div>
        </header>

       

	<section class="page-section" id="menu">
        <div id="menu-field" class="card-deck justify-content-center">

          <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ALL</a>
     <?php 
                    include'admin/db_connect.php';
                    $qry1 = $conn->query("SELECT * FROM `category_list` ORDER BY id ASC");
                    while($row1 = $qry1->fetch_assoc()):
                    ?>
    <a class="nav-item nav-link" id="p<?php echo $row1['id']?>2" data-toggle="tab" href="#n<?php echo $row1['id']?>1" role="tab" aria-controls="n<?php echo $row1['id']?>1" aria-selected="false"><?php echo $row1['name'] ?></a><?php endwhile; ?>
    
  </div>
</nav>


        

        
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

          <div class="row" style="justify-content: center; padding: 50px;">
              
           
            <?php 
           
               $qry0 = $conn->query("SELECT * FROM  product_list ORDER BY rand() ");
                    while($row0 = $qry0->fetch_array()){ ?>
                      
                      <div class="col-12 col-md-3 col-lg-3 p-2">
                     <div class="card menu-item ">
        
                        <div class="card-img" style='background: url("assets/img/<?php echo $row0['img_path'] ?>"); height:200px; width: 100%;'>  </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row0['name'] ?> <span class="float-right"><?php echo $row0['price'] ?>TK</span></h5>
                          <p class="card-text truncate"><?php echo $row0['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row0['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>

                      <?php } 


            ?></div>

        </div>

           <?php 
                    include'admin/db_connect.php';
                    $qry2 = $conn->query("SELECT * FROM `category_list` ORDER BY id ASC");
                    while($row2 = $qry2->fetch_assoc()):
                    ?>
          <div class="tab-pane fade" id="n<?php echo $row2['id']?>1" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row" style="justify-content: center; padding: 50px;">
              
           
            <?php $cat = $row2['id'] ;
           
               $qry3 = $conn->query("SELECT * FROM  product_list where `category_id` = '$cat' ORDER BY rand() ");
                    while($row3 = $qry3->fetch_array()){ ?>
                      
                      <div class="col-12 col-md-3 col-lg-3 p-2">
                     <div class="card menu-item ">
        
                        <div class="card-img" style='background: url("assets/img/<?php echo $row3['img_path'] ?>"); height:200px; width: 100%;'>  </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row3['name'] ?> <span class="float-right"><?php echo $row3['price'] ?>TK</span></h5>
                          <p class="card-text truncate"><?php echo $row3['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row3['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>

                      <?php } 


            ?></div>
          </div>

        <?php endwhile; ?>
        </div>
              <!--   -->
        </div>
    </section>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
	
  <!--  <?php 
                   
                    $qry = $conn->query("SELECT * FROM  product_list order by rand() ");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <div class="col-lg-3">
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?> <span class="float-right"><?php echo $row['price'] ?>TK</span></h5>
                          <p class="card-text truncate"><?php echo $row['description'] ?></p>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    <?php endwhile; ?> -->
