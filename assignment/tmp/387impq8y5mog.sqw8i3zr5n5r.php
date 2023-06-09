<html lang="en">

<head>
    <title>Coca-Cola Folk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app/view/css/bootstrap.css">
    <link rel="stylesheet" href="app/view/css/fontawesome.css">
    <link rel="stylesheet" href="app/view/css/style.css">
    <link rel="stylesheet" href="app/view/css/x3dom.css">
    <link href="app/view/css/jquery.fancybox.min.css" rel="stylesheet">

</head>

<body id="mainBackground">

    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola" id="headerBackground">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="./">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3> &nbsp;Folk</h3>
                    <p>Taste the feeling, Know the story</p>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);" onclick="changePro('index')">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="changePro('costa')" id="navbardrop" data-toggle="dropdown">
                            Model
                        </a>
                        <!-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);" onclick="changePro('costa')">Costa Coffee</a>
                            <a class="dropdown-item" href="javascript:void(0);" onclick="changePro('oasis')">Oasis</a>
                            <a class="dropdown-item" href="javascript:void(0);" onclick="changePro('smartwater')">Smartwater</a>
                          </div> -->
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="changePro('Gallery')">
                            Gallery
                        </a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="changePro('about')">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="changePro('reference')">
                            Reference
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="changePro('github')">
                            Github
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="changePro('statement')">
                            Original statement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                    </li>
					
                </ul>
            </div>
        </div>
    </nav>
		<?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
	<nav class="navbar navbar-expand-sm footer" id="footerBackground">
		<div class="container-fluid">
			<div class="copyright">
				<p>
					<span class="align-baseline">© 2023 Mobile Web 3D Applications </span>
					<button onclick="changeBackground()" style="margin-left:15px">Change Style</button>
					<button onclick="resetBackground()" style="margin-left:15px">Reset</button>
				</p>
				
			</div>

			<div class="social">
				<a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
				<a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
				<a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
				<a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
				</div>
			</div>
		</div>
	</nav>
	<!-- <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script> -->
	<!-- jquery -->
	<script src="app/view/js/jquery-3.4.1.js"></script>
	<script src="app/view/js/jquery.fancybox.min.js"></script>

	<script src="app/view/js/popper.min.js"></script>
	<!-- bootstrap -->
	<script src="app/view/js/bootstrap.js"></script>
	
	<!-- x3d -->
	<script src='app/view/js/x3dom.js'></script>
	
    

	<!-- SPA -->
	<script src="app/view/js/swap.js"></script>

	<!-- gallery -->
	<script src="app/view/js/gallery.js"></script>

	<!-- page data -->
	<script src="app/view/js/getPageData.js"></script>

    <script src="https://cdn.bootcdn.net/ajax/libs/webuploader/0.1.1/webuploader.js"></script>

    <!-- fileupload -->
    <script src="app/view/js/fileupload.js"></script>
    
	<!-- model -->
	<script src="app/view/js/model.js"></script>
		<!-- custome -->
    <script src="app/view/js/index.js"></script>
		<!-- fancybox -->
	<!-- <script src="app/view/js/jquery.fancybox.min.js"></script> -->
</body>

</html>
<script>

</script>
