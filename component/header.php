
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>OAK Home</title>
    <link rel="stylesheet" href="./vendor/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/font-awesome.min.css">
    <link rel="stylesheet" href="./vendor/sidebar.css" >
    <link rel="stylesheet" href="./vendor/sidebar-bootstrap.css" >
    <link rel="stylesheet" href="css/custome.css">
  </head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-static-top lightBlue">
    <div class="container-fluid">        
            <div class="logo"></div>
    </div>
</nav>

<!-- SIDEBAR -->
<div data-sidebar="true" class="sidebar-trigger sidebar-togglable" style="-webkit-user-select: none; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    <a class="sidebar-toggle" href="#">
        <span class="sr-only">Sidebar toggle</span>
        <i class="fa fa-sidebar-toggle"></i>
    </a>

    <div class="sidebar-wrapper sidebar-default sidebar-ready">
        <div class="sidebar-scroller">
            <ul class="sidebar-menu">
                
                    <ul class="sidebar-group-menu">
                        <li class="sidebar-item"><a href="#">DEBIT CARDS</a></li>
                        <li class="sidebar-item"><a href="#" >CREDIT CARD</a></li>
                        <li class="sidebar-item"><a href="#" class="active">BORROWING</a></li>
                        <li class="sidebar-item"><a href="#">OTHER PRODUCTS</a></li>
                    </ul>
                
               <!--  <li class="sidebar-group"><span>CREDIT CARDS</span>
                    <ul class="sidebar-group-menu">
                        <li class="sidebar-item"><a href="#">Item 5</a></li>
                        <li class="sidebar-item"><a href="#">Item 6</a></li>
                        <li class="sidebar-item"><a href="#">Item 7</a></li>
                        <li class="sidebar-item"><a href="#">Item 8</a></li>
                        <li class="sidebar-item"><a href="#">Item 9</a></li>
                        <li class="sidebar-item"><a href="#">Item 10</a></li>
                    </ul>
                </li>
                <li class="sidebar-item"><a href="#">BORROWING</a></li>
                <li class="sidebar-item"><a href="#">OTHER PRODUCTS</a></li> -->
            </ul>
        </div>
    </div>
<div id="sidebar-swipe3" class="sidebar-swipe"></div></div>

<!-- CONTENT -->

  <!-- Nav tabs -->
  <div class="">
      <div class="custome-nav-container">
      <ul class="nav nav-tabs customeNav" role="tablist">
        <li role="presentation" class=""><a href="#debitCard" aria-controls="debitCard" role="tab" data-toggle="tab">DEBIT CARD</a></li>
        <li role="presentation"><a href="#creditCard" aria-controls="creditCard" role="tab" data-toggle="tab">CREDIT CARD</a></li>
        <li role="presentation" class="active"><a href="#borrowing" aria-controls="borrowing" role="tab" data-toggle="tab">BORROWING</a></li>
        <li role="presentation"><a href="#otherproduct" aria-controls="otherproduct" role="tab" data-toggle="tab">OTHER PRODUC</a></li>
      </ul>
      </div>
      <!-- Tab panes -->
      <div class="tab-content custom-tab">
        <div role="tabpanel" class="tab-pane active" id="debitCard"></div>
        <div role="tabpanel" class="tab-pane" id="creditCard">2</div>
        <div role="tabpanel" class="tab-pane" id="borrowing"><?php include 'component/step1.php' ?></div>
        <div role="tabpanel" class="tab-pane" id="otherproduct">4</div>
      </div>
  </div>

