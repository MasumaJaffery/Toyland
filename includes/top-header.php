<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Username is:    <?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>User Account</a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="http://localhost/toyland/admin/"><i class="icon fa fa-sign-in"></i>Admin Login</a></li>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>User Registration</a></li>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>User Login</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->


			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->