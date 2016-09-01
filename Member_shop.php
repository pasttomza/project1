<?php 
ob_start();
session_start();
include_once 'Config.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Open Shop Tumbon</title>
<link href="css/bootstrap1.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component1.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>




  <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
	<!-- header-section-starts -->
	<?php 
	$member_id = $_SESSION['member_id'];
	$sql = "
		SELECT *  
		FROM member
		WHERE member_id = '".$member_id."' 
		
	";
	$query = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	?>
	<div class="user-desc">
		<div class="container">
			<ul>
				<!--<li><a href="#"><?php echo $row['shop_name']; ?></a></li>-->
				</ul>
				<ul>
			<?php //i//f($_SESSION['member_id'] !==""): ?>
			
			<li><a href="#">สวัสดีคุณ : <?php echo $row['member_name']; ?></a></li>
    		<?php //endif ?>
			<li><a href="member_logout.php"> ออกจากระบบ</a></li>
	

  
		</div>
		</div>



		<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html"><img src="images/logo01.png" alt="" /></a>

				</div>
				<div class="top-menu">
				 <span class="menu"> </span>
					<ul class="cl-effect-15">
					<li><a><i class="glyphicon glyphicon-home "></i></a></li>
					<li><a href="Member_shop.php" data-hover="หน้าหลัก">หน้าหลัก</a></li>
						<li><a><i class="glyphicon glyphicon-pencil "></i></a></li>
						<li><a href="Show_member.php" data-hover="แก้ไขประวัติส่วนตัว">แก้ไขประวัติส่วนตัว</a></li>
						<li><a><i class="glyphicon glyphicon-home "></i></a></li>
						<li><a href="member_choose_shop.php" data-hover="รายชื่อร้านค้าที่สมัครไว้แล้ว">รายชื่อร้านค้าที่สมัครไว้แล้ว</a></li>
					
					</ul>
				</div>
				</div>
			
				<!--script-nav-->
				<script>
				$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
				});
				</script>
				<!--script-nav-->
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
<!-- header-section-ends -->
<!-- content-section-starts -->

	<div class="container">	 
	   <div class="products-page">
			<div class="product">
				<div class="product-listy">
				<div class="latest-bis">
				
					<div class="offer">
						
					</div>
				</div>
				<?php 
				$id = $_SESSION['owner_id'];
				$sql = "SELECT * FROM product_type as a LEFT JOIN owner as b ON b.owner_id = a.owner_id WHERE a.owner_id = '$id'";
				$query = mysqli_query($connection,$sql);
				?>
				
					
					
				</div>
				
			</div>

			<div class="new-product2">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">สามารถเข้าไปกด สมัครสมาชิกแต่ละร้านได้นะคะ</span>&nbsp;</li>
					</ul>
				
					<div class="clearfix"></div>
				</div>
				<div class="mens-toolbar">
                 <div class="sort">
               	  
	    		     </div>
		    	        <ul class="women_pagenation dc_paginationA dc_paginationA06">
					     <li><a href="#" class="previous">Page:</a></li>
					     <li class="active"><a href="#">1</a></li>
					     <li><a href="#">2</a></li>
				  	    </ul>
	               		 <div class="clearfix"></div>		
			        </div>
			        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					
				
					<div class="clearfix"></div>

 				<?php 
                  $sql = "SELECT 
                  	a.shop_picture,
                  	a.shop_name,
                  	b.owner_name,
                  	a.shop_id,
                  	b.owner_id
                  
                  	

                  	FROM shop as a 
                  	LEFT JOIN owner as b ON b.owner_id = a.owner_id
                  	


                  ";
                  $query = mysqli_query($connection, $sql);

                  ?>
 
					<ul>
					<?php while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {  ?>
					  <li>
							<a class="cbp-vm-image" href="viewproduct.php?p_id=<?php echo $row['p_id']; ?>">
							 <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<img src="images/<?php echo $row['shop_picture']; ?>" width = '180px' height ='250px' class="img-responsive" alt=""/>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <div class="cart-left">
										<p class="title">รายละเอียดคลิ๊กที่รูปภาพ :<?php echo $row['shop_name']; ?></p>
									   </div>
									  
									
									

									   <div class="clearfix"></div>
								     </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
		                    

							<a class="cbp-vm-icon cbp-vm-add" 
							href="my_shop.php?owner_id=<?php echo $row['owner_id']; ?>&shop_id=<?php echo $row['shop_id']; ?>">
								เข้าดูร้านค้า
							</a>
						</li>
						<?php } ?>
						
						</li>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
   </div>
   <!-- content-section-ends -->	
   <!-- contact-section-starts -->
	<div class="content-section">
		<div class="container">
			
			
			
	<!-- contact-section-ends -->
	<!-- footer-section-starts -->
	
			
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer-section-ends -->
</body>
</html>