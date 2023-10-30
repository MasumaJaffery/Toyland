<div class="span3">
					<div class="sidebar">
								<ul class="widget widget-menu unstyled">
								<li>
										<a href="todays-orders.php">
											<i class="icon-tasks"></i>
											Today's Orders
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysql_query("SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysql_num_rows($result);
{
?>
											<b class="label orange pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-orders.php">
											<i class="icon-tasks"></i>
											Pending Orders
										<?php	
	$status='Delivered';									 
$ret = mysql_query("SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysql_num_rows($ret);
{?><b class="label orange pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
								<li><a href="category.php"><i class="menu-icon icon-tasks"></i>Manage Categories</a></li>
								<li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Manage Sub Categories</a></li>
								<li><a href="insert-product.php"><i class="menu-icon icon-tasks"></i>Add Products</a></li>
								<li><a href="manage-products.php"><i class="menu-icon icon-tasks"></i>Manage Products</a></li>
							<li><a href="ordersreport.php"><i class="menu-icon icon-tasks"></i>Orders Report</a></li>
									<li><a href="productsreport.php"><i class="menu-icon icon-tasks"></i>Products Report</a></li>
									<li><a href="usersreport.php"><i class="menu-icon icon-tasks"></i>Users Report</a></li>
									</li>
									<li><a href="logout.php"><i class="menu-icon icon-tasks"></i>Logout</a></li>
								</ul>
							</li>
							
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
