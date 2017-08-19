<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Home </a>
    <a href="#">My Book </a>
    <a href="#">Travel</a>
    <a href="#">Fitness</a>
    <a href="#">Fashion</a>
    <a href="#">Music</a>
    <a href="#"> Insight</a>
    <a href="#">Sign Out</a>
</div>
<!-- Fixed navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!--    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                
                </button> -->
            <a  class="hidden-lg hideen-md hidden-sm pull-right" href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
            <?= $this->Html->link(__('Vlog Box'),'/',['class' => 'navbar-brand']) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <?= $this->Html->link(__('Home'),'/') ?>
                </li>
                <li><a href="#">My Box</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control"  placeholder="Find what you looking for" >
                            <span class="input-group-addon">
                            <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                            </button>  
                            </span>
                        </div>
                    </div>
                </li>
                <li><a href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>