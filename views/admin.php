<!DOCTYPE html>
<html>
<head>

    <title><?=ucwords(strtolower(Setting::get("site_name"))) ?></title>

  
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 4</title>

    <!-- Fontfaces CSS-->
    <link href="/assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/admin/css/theme.css" rel="stylesheet" media="all">
    
    <link rel="/assets/js/sweetalert2/sweetalert2.css" rel="stylesheet">
    <script src="/assets/js/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Jquery JS-->
    <script src="/assets/admin/vendor/jquery-3.2.1.min.js"></script>

</head>
<body class="animsition">
<div class="page-wrapper">

<?php if (App::getRouter()->getController() != null && App::getRouter()->getController() == 'login') { ?>

    <?php echo $content['content_html']; ?>

<?php } else { ?>

        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <h1>MedPro</h1>
                        </a>
                    </div>
                    <div class="header__tool">
                        <div id="noti_indicator" class="header-button-item js-item-menu noti_indicator">
                            <i class="zmdi zmdi-notifications"></i>
                            <div id="notifications" class="notifi-dropdown js-dropdown">
                                <!--ajax content here-->
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="/uploads/users/<?=Session::get('avatar')?>" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?=Session::get('fname').' '.Session::get('lname')?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="/uploads/users/<?=Session::get('avatar')?>" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?=Session::get('fname').' '.Session::get('lname')?></a>
                                            </h5>
                                            <span class="email"><?=Session::get('email')?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="/admin/users/logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item"><?=ucwords(App::getRouter()->getController())?></li>
                                    <?php if( App::getRouter()->getAction() != 'index') { ?>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>                                   
                                    <li class="list-inline-item"><?=ucwords(App::getRouter()->getAction())?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <span><?=Session::get('fname')?></span>, Welcome back</h1>
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->



          <!-- PAGE CONTENT-->
          <div class="page-container3">
            <section class="alert-wrap p-t-50 p-b-70">
                <div class="container">
                    <!-- ALERT-->
                    <?php if ( Session::hasFlash() != null ) { ?>
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">You successfully read this important alert message.</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                    <?php } ?>
                    <!-- END ALERT-->
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3" >
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list" style="border-top: 5px solid #4272d7;">
                                        <li class="<?=App::getRouter()->getController() == 'home' ? 'active' : '' ?>">
                                            <a class="js-arrow" href="/admin/">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard                                               
                                            </a>
                                        </li>
                                        <li class="<?=App::getRouter()->getController() == 'messages' ? 'active' : '' ?>">
                                            <a href="/admin/messages/">
                                                <i class="fas fa-chart-bar"></i>Inbox</a>
                                        </li>
                                        <li class="has-sub <?=App::getRouter()->getController() == 'members' ? 'active' : '' ?>">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-shopping-basket"></i>Members
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="/admin/members/suppliers/">
                                                        <i class="fa fa-truck"></i>Suppliers</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/members/buyers/">
                                                        <i class="fas fa-shopping-basket"></i>Buyers</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="<?=App::getRouter()->getController() == 'products' ? 'active' : '' ?>" >
                                            <a href="/admin/products/">
                                                <i class="fas fa-medkit"></i>Products
                                            </a>
                                        </li>
                                        <li class="<?=App::getRouter()->getController() == 'ratings' ? 'active' : '' ?>">
                                            <a class="js-arrow" href="/admin/ratings/">
                                                <i class="fas fa-trophy"></i>Ratings
                                              
                                            </a>                                          
                                        </li>                                       
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    
                                        <?php echo $content['content_html']; ?>

                                </div>
                                <div class="row">
                                    <div class="col-md-12  p-t-50">
                                        <div class="copyright">
                                            <p>Copyright © 2018 MedPro. All rights reserved. </a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->
    </div>       

    <?php } ?>
             
   
    <!-- Bootstrap JS-->
    <script src="/assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/admin/vendor/wow/wow.min.js"></script>
    <script src="/assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assets/admin/js/main.js"></script>


          
    <!-- Main JS-->
    <script src="/assets/admin/js/main.js"></script>
    <?php 
		
		if ( Session::get('userid') != null ) {			
	?>
	<script>
		/**
		 * if logged-in fetch for customer's order or pending order
		 */
		function getNotifications(){
			
			return $.ajax({
				type: 'POST',
				url: '/ajax/messages/get_admin_notifications/',
				data: { id: "<?=Session::get('userid')?>" },
				dataType: 'json',
				crossDomain: true,
				headers: {'X-Requested-With': 'XMLHttpRequest'},
				success: function (response) {
					if (response) {    
					}
				}
			});
		}

		/**
		 * fetch order's every second and display to cart
		 */
		setInterval(() => {
			getNotifications().done(function($data) {
				$data = JSON.parse($data);
                
                $('#notifications').html('');

                var $count = 0;
                var noti_content = '';
                
                $.each( $data, function(index, value){
                    $count += (value.is_read == '0') ? 1 : 0;

                    var $date = new Date(Date.parse(value.date));
                    var today = new Date();                   
                    var time_diff = Math.abs($date.getTime() - today.getTime());

                    //play sound 
                    if(value.is_read == '0' && (time_diff < 1000 && time_diff > -1000)){
                        $('audio#pop')[0].play();
                    }
                    noti_content += '<div class="notifi__item">' +
                                    '<div class="bg-c1 img-cir img-40">' +
                                        '<i class="zmdi zmdi-email-open"></i>' +
                                    '</div>' +
                                    '<div class="content">' +
                                        '<p>' + value.message + '</p>' +
                                        '<span class="date">' + $date.toLocaleDateString() + ' ' + $date.toLocaleTimeString() + '</span>' +
                                    '</div>' +
                                '</div>';
                             
                });

                var s = $count > 1 ? 's' : '';
                var noti_title ='<div class="notifi__title">' + 
                                    '<p>You have ' +$count + ' unread notification' + s + '</p>' +
                                '</div>';
                var noti_footer = '<div class="notifi__footer">' +
                                    '<a href="#">All notifications</a>' +
                                '</div>';
                
                if ($count > 0 ) {
                    $('#noti_indicator').addClass('has-noti');
                } else {
                    $('#noti_indicator').removeClass('has-noti');
                }

				$('#notifications').append(noti_title);
                $('#notifications').append(noti_content);
                $('#notifications').append(noti_footer);

			});
		}, 1000);

        /** Notification button is click */
        $('#noti_indicator').on('click', function(e){
            setTimeout(() => {
                readNotification();
            }, 5000);
            
        });

        /**
		 * mark all notifications as read
		 */
		function readNotification(){
			
			return $.ajax({
				type: 'POST',
				url: '/ajax/messages/read_admin_notifications/',
				data: { id: "<?=Session::get('userid')?>" },
				dataType: 'json',
				crossDomain: true,
				headers: {'X-Requested-With': 'XMLHttpRequest'},
				success: function (response) {
					if (response) {    
					}
				}
			});
		}

	</script>

	<?php } ?>
</body>
</html>
