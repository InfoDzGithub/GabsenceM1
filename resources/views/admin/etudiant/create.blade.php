@extends('layout.master')

@section('title','GBS | Ajouter Liste des etudiants')

@section('asidebar')


                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> </a>
                           
                        </li>
                        <li class="nav-item"><a href="profil.html" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Profil</span> </a>
                           
                        </li>
                        
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pencil-square-o"></i> <span class="mini-dn">Compte utilisateur</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="listeRCodage.html" class="dropdown-item">Responsables de codage</a>
                                <a href="listeadmin.html" class="dropdown-item">Admin</a>
                                <a href="listeEnseignant.html" class="dropdown-item">Enseignants</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pencil-square-o"></i> <span class="mini-dn">Promo</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="promo.html" class="dropdown-item">Etudiants</a>
                                <a href="promo.html" class="dropdown-item">Modules</a>
                                <a href="promo.html" class="dropdown-item">Examens</a>
                                <a href="promo.html" class="dropdown-item">Ecclusion</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="paramtre.html" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon  fa-wrench"></i> <span class="mini-dn">paramtre</span> </a>
                            
                        </li>
                    </ul>
     @endsection
@section('cssHeader')
<link rel="stylesheet" href="{{asset('frontEnd')}}/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/dropzone.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/vendor/modernizr-2.8.3.min.js"></script>
@endsection
     @section('content')

   
       
            
            
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Ajouter De Nouveaux Etudiants</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    <form action="#">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <img src="{{asset('frontEnd')}}/img/bddexcel.png" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <hr width="75%" size="3">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                                                    
                                                                </div>

                                                               <div class="multi-uploaded-area mg-b-15">
               
                        
                                    <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                        
                                    </form>
                                
                        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                            <div class="dropzone-pro shadow-reset">
                                <div id="dropzone">
                                    <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo-upload">
                                        <div class="dz-message needsclick download-custom">
                                            <span class="adminpro-icon adminpro-down-arrow-in-a-circle download-icon"></span>
                                            <h2>Drop files here or click to upload.</h2>
                                            <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </p>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <button type="submit" class="btn btn-custon-four btn-success">Validé</button>
                                                                <hr width="75%" size="3">
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        




   
    <!-- Chat Box Start-->
    <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

  @endsection

 @section('scriptHeader')
 <script src="{{asset('frontEnd')}}/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jquery.scrollUp.min.js"></script>
    <!--  dropzone JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/dropzone.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/main.js"></script>
    @endsection