<?php
$path='/Users/nahid/webapps';
$escape=array('..','.', 'appxpo');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Appxpo</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="__projectexplorer/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="__projectexplorer/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="__projectexplorer/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="__projectexplorer/css/creative.css" type="text/css">
    <link rel="stylesheet" href="__projectexplorer/css/style.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="icon" type="image/png" sizes="128x128" href="http://localhost/__projectexplorer/favicon.png">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Appxpo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="http://localhost:8000">Laravel App</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost/phpmyadmin">phpmyadmin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <section class="container-fluid" id="contact">
    <?php
        
        $dirs=scandir($path);
        $dirArr=[];
         //var_dump($dirs);
          $total=0;
          $sl=&$total; 
            /* fetch all directory and files from root folder */
          
            //echo"<h3>Total Projects: ".$sl."</h3>";
            natcasesort($dirs);
         
            foreach($dirs as $dir){
                 if(is_dir($dir)){
                    if(!in_array($dir, $escape)){
                        $createDate=filectime($dir);
                            echo '<div class="file-box">
                                <div class="file">
                                    <a href="http://localhost/'.$dir.'" class="text-ellipsis" data-toggle="tooltip" title="'. $dir .'">
                                        <span class="corner"></span>

                                        <div class="icon">
                                            <i class="fa fa-folder text-warning "></i>
                                        </div>
                                        <div class="file-name text-ellipsis"><span>'.
                                            $dir
                                            .'</span><br>
                                            <small>Created at: '.date('M d, Y', $createDate).'</small>
                                        </div>
                                    </a>
                                </div>

                            </div>';
                    }
                }
            
                $total++;
                        
            }
        
        
?>


    </section>

    <footer style="padding:10px; border-top:1px solid #556;">
        <div class="container-fluid text-right">
            <span>Developed by <a href="http://nahid.co">NAH!D</a></span>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="__projectexplorer/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="__projectexplorer/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="__projectexplorer/js/jquery.easing.min.js"></script>
    <script src="__projectexplorer/js/jquery.fittext.js"></script>
    <script src="__projectexplorer/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="__projectexplorer/js/creative.js"></script>

    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>

</html>
