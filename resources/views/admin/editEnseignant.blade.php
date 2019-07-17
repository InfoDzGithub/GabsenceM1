@extends('layout.master')

@section('title','LRI | details un enseignant')
@section('cssHeader')
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/select2.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap-editable.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-rtl.min.css" />
@endsection
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
@section('content')   
<div class="tab-content">
    <div class="row">
        <div class="col-lg-12">
            <div id="composemail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message active">
                <div class="clearfix">
                    <div class="hr dotted"></div>
                    <div >
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-18">
                                    <li >
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-user bigger-120"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li class="active">
                                        <a data-toggle="tab" href="#feed">
                                            <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                            Modifier
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#friends">
                                            <i class="blue ace-icon fa fa-users bigger-120"></i>
                                            Friends
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#pictures">
                                            <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                            Pictures
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset($membre->photo)}}" />
                                                </span>

                                                <div class="space space-4"></div>

                                                <a href="#" class="btn btn-sm btn-block btn-success">
                                                    <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                                                    <span class="bigger-110">Add as a friend</span>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-block btn-primary">
                                                    <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                                                    <span class="bigger-110">Send a message</span>
                                                </a>
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-9">
                                                <h4 class="blue">
                                                    <span class="middle">{{$membre->nom}} {{$membre->prenom}}</span>

                                                    <span class="label label-purple arrowed-in-right">
                                                        <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                        online
                                                    </span>
                                                </h4>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                         
                                                        <div class="profile-info-name">Date de naissance  </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$membre->date_N}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">

                                                        <div class="profile-info-name">Email </div>

                                                        <div class="profile-info-value">
                                                            
                                                            <span>{{$membre->email}}</span>
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Age </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$age}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Grade </div>

                                                        <div class="profile-info-value">
                                                            <span>{{$membre->grade}}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                    @if($membre->role== 'responsable' )
                                                                <div class="profile-info-name"> Responsable sur : </div>

                                                                <div class="profile-info-value">
                                                                @foreach($matieres as $matiere)
                                                                    <span>{{$matiere->nomMat}}</span><br>

                                                                @endforeach    
                                                                     
                                                                </div>
                                                    @endif
                                                    </div>
                                                    <div class="profile-info-row">
                                                    @if($membre->role== 'enseignant' )
                                                                <div class="profile-info-name"> Enseigne : </div>

                                                                <div class="profile-info-value">
                                                                @foreach($matieres as $matiere)
                                                                    <span>{{$matiere->nomMat}}</span><br>

                                                                @endforeach    
                                                                     
                                                                </div>
                                                    @endif
                                                    </div>
                                                </div>

                                                <div class="hr hr-8 dotted"></div>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Website </div>

                                                        <div class="profile-info-value">
                                                            <a href="#" target="_blank">www.alexdoe.com</a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">
                                                            <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                        </div>

                                                        <div class="profile-info-value">
                                                            <a href="#">Find me on Facebook</a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">
                                                            <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                        </div>

                                                        <div class="profile-info-value">
                                                            <a href="#">Follow me on Twitter</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->

                                        <div class="space-20"></div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header widget-header-small">
                                                        <h4 class="widget-title smaller">
                                                            <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                            Little About Me
                                                        </h4>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <p>
                                                                My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                            </p>
                                                            <p>
                                                                Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                            </p>
                                                            <p>
                                                                The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                            </p>
                                                            <p>
                                                                Thanks for visiting my profile.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div><!-- /#home -->

                                    <div id="feed" class="tab-pane in active">
                                       
                                        <!--debu-->
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    <img 
                                                    style="height: 250px; width: 190px;"
                                                    class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{asset($membre->photo)}}" />
                                                </span>

                                                <div class="space space-4"></div>

                                                
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-9">
       <!--/****************************/-->     
<fieldset>
                        <!--nom-->
                    <div class="form-group ">
                        <label class="col-md-3 control-label">Nom</label>  
                        <div class="col-md-9 inputGroupContainer @if($errors->get('name')) has-error @endif">
                          <div class="input-group"  style="width: 40%">
                            <input  name="name" class="form-control" value="bouchekif" type="text">
                            
                          </div>
                        </div>
                    </div>
                    <!--prenom-->
                     <br><br>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Prénom</label>  
                        <div class="col-md-9 inputGroupContainer @if($errors->get('prenom')) has-error @endif">
                          <div class="input-group"  style="width: 40%">
                            <input  name="prenom" value="bouchekif" class="form-control"  type="text">
                            
                          </div>
                        </div>
                    </div>
                    <br><br>
                    <!--dateN-->
                    <div class="row">
                      <div class="col-md-7">
                      <div class="form-group">
                            <label class="col-md-6 control-label">Date_Naissance</label>  
                            <div class="col-md-6 inputGroupContainer input-group Date">
                              <input name="date_naissance" type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker" value="14/55/89">
                            </div>
                      </div>
                      </div>
                    </div>
                    <br><br>
                    <!--sexe-->
                    <div class="row">
                      <div class="col-md-7">
                      <div class="form-group">
                              <label class="col-md-6 control-label">Sexe</label>  
                                <div class="col-md-6 input-group">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                       <label>
                                       <input type="radio" value="Femme" name="sexe"> <i></i> femme 
                                       </label>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                       <label>
                                       <input type="radio" checked="" value="Homme" name="sexe"> <i></i> homme 
                                       </label>
                                    </div>
                                </div>
                                </div>
                              </div>
                        </div>
                      </div>
                      
                    </div>
                    <!--grade-->
                    <br><br>
                    <div class="form-group"> 
                          <label class="col-md-3 control-label">Grade</label>
                            <div class="col-md-9 selectContainer @if($errors->get('grade')) has-error @endif">
                              <div class="input-group" style="width: 40%">
                                  <select name="grade" class="form-control selectpicker">
                                    <option>88</option>
                                    <option>MAA</option>
                                    <option>MAB</option>
                                    <option >MCA</option>
                                    <option >MCB</option>
                                    <option>Doctorant</option>
                                    <option >Professeur</option>
                                  </select>
                                  
                              </div>
                            </div>
                    </div>
                    <br><br>
                    

                      
                     <!--email-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail</label>  
                          <div class="col-md-9 inputGroupContainer @if($errors->get('email')) has-error @endif">
                            <div class="input-group"  style="width: 40%">
                                <input name="email" type="email" class="form-control" value="bouche@gmail.com">
                                
                            </div>
                          </div>
                    </div>
                    
                    <br><br>
                    

                      
                     <!--numTel-->
                    <div class="form-group">
                        <label class="col-md-3 control-label">N° Téléphone</label>  
                          <div class="col-md-9 inputGroupContainer">
                            <div class="col-md-6 input-group" style="width: 40%">
                                <input name="num_tel" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask value="0444444444">
                              </div>
                          </div>
                    </div>
                     <br><br>
                     
                    <!--role-->
                    <div class="row">
                      <div class="col-md-7">
                      <div class="form-group">
                              <label class="col-md-6 control-label">Role</label>  
                                <div class="col-md-6 input-group">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                       <label>
                                             <input type="radio"  value="responsable" name="role"> <i></i> Enseignant Normal</label>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="i-checks pull-left">
                                      <label>
                                             <input type="radio" checked="" value="responsable" name="role"> <i></i> Enseignant Responsable</label>
                                    </div>
                                </div>
                                </div>
                              </div>
                        </div>
                      </div>
                      
                    </div>
              </fieldset>






        <!--******************************-->
                                            </div><!-- /.col -->
                                        </div>
                                        <!--fin-->

                                        <div class="space-12"></div>

                                        
                                    </div><!-- /#feed -->

                                    <div id="friends" class="tab-pane">
                                        <div class="profile-users clearfix">
                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar4.png" alt="Bob Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-online"></span>
                                                                Bob Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Content Editor</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                <span class="green"> 20 mins ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar1.png" alt="Rose Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-offline"></span>
                                                                Rose Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Graphic Designer</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                                <span class="grey"> 30 min ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar.png" alt="Jim Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-busy"></span>
                                                                Jim Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">SEO &amp; Advertising</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                                                <span class="grey"> 1 hour ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar5.png" alt="Alex Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-idle"></span>
                                                                Alex Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Marketing</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                <span class=""> 40 minutes idle </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar2.png" alt="Phil Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-online"></span>
                                                                Phil Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Public Relations</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                <span class="green"> 2 hours ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar3.png" alt="Susan Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-online"></span>
                                                                Susan Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">HR Management</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                <span class="green"> 20 mins ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar1.png" alt="Jennifer Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-offline"></span>
                                                                Jennifer Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Graphic Designer</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                                <span class="grey"> 2 hours ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{asset('frontEnd')}}/assets/images/avatars/avatar3.png" alt="Alexa Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-offline"></span>
                                                                Alexa Doe
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Accounting</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                                                <span class="grey"> 4 hours ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr10 hr-double"></div>

                                        <ul class="pager pull-right">
                                            <li class="previous disabled">
                                                <a href="#">&larr; Prev</a>
                                            </li>

                                            <li class="next">
                                                <a href="#">Next &rarr;</a>
                                            </li>
                                        </ul>
                                    </div><!-- /#friends -->

                                    <div id="pictures" class="tab-pane">
                                        <ul class="ace-thumbnails">
                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-1.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-2.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-3.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-4.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-5.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-6.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-1.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img alt="150x150" src="{{asset('frontEnd')}}/assets/images/gallery/thumb-2.jpg" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- /#pictures -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page-content ENDS -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

     


@section('ChatBox')

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
 
        <script type="text/javascript">
            jQuery(function($) {
            
                //editables on first profile page
                $.fn.editable.defaults.mode = 'inline';
                $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
                $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
                                            '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
                
                //editables 
                
                //text editable
                $('#username')
                .editable({
                    type: 'text',
                    name: 'username'        
                });
            
            
                
                //select2 editable
                var countries = [];
                $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
                    countries.push({id: k, text: v});
                });
            
                var cities = [];
                cities["CA"] = [];
                $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
                    cities["CA"].push({id: v, text: v});
                });
                cities["IN"] = [];
                $.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
                    cities["IN"].push({id: v, text: v});
                });
                cities["NL"] = [];
                $.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
                    cities["NL"].push({id: v, text: v});
                });
                cities["TR"] = [];
                $.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
                    cities["TR"].push({id: v, text: v});
                });
                cities["US"] = [];
                $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
                    cities["US"].push({id: v, text: v});
                });
                
                var currentValue = "NL";
                $('#country').editable({
                    type: 'select2',
                    value : 'NL',
                    //onblur:'ignore',
                    source: countries,
                    select2: {
                        'width': 140
                    },      
                    success: function(response, newValue) {
                        if(currentValue == newValue) return;
                        currentValue = newValue;
                        
                        var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
                        
                        //the destroy method is causing errors in x-editable v1.4.6+
                        //it worked fine in v1.4.5
                        /**         
                        $('#city').editable('destroy').editable({
                            type: 'select2',
                            source: new_source
                        }).editable('setValue', null);
                        */
                        
                        //so we remove it altogether and create a new element
                        var city = $('#city').removeAttr('id').get(0);
                        $(city).clone().attr('id', 'city').text('Select City').editable({
                            type: 'select2',
                            value : null,
                            //onblur:'ignore',
                            source: new_source,
                            select2: {
                                'width': 140
                            }
                        }).insertAfter(city);//insert it after previous instance
                        $(city).remove();//remove previous instance
                        
                    }
                });
            
                $('#city').editable({
                    type: 'select2',
                    value : 'Amsterdam',
                    //onblur:'ignore',
                    source: cities[currentValue],
                    select2: {
                        'width': 140
                    }
                });
            
            
                
                //custom date editable
                $('#signup').editable({
                    type: 'adate',
                    date: {
                        //datepicker plugin options
                            format: 'yyyy/mm/dd',
                        viewformat: 'yyyy/mm/dd',
                         weekStart: 1
                         
                        //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                        //,format: 'yyyy-mm-dd',
                        //viewformat: 'yyyy-mm-dd'
                    }
                })
            
                $('#age').editable({
                    type: 'spinner',
                    name : 'age',
                    spinner : {
                        min : 16,
                        max : 99,
                        step: 1,
                        on_sides: true
                        //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                    }
                });
                
            
                $('#login').editable({
                    type: 'slider',
                    name : 'login',
                    
                    slider : {
                         min : 1,
                          max: 50,
                        width: 100
                        //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                    },
                    success: function(response, newValue) {
                        if(parseInt(newValue) == 1)
                            $(this).html(newValue + " hour ago");
                        else $(this).html(newValue + " hours ago");
                    }
                });
            
                $('#about').editable({
                    mode: 'inline',
                    type: 'wysiwyg',
                    name : 'about',
            
                    wysiwyg : {
                        //css : {'max-width':'300px'}
                    },
                    success: function(response, newValue) {
                    }
                });
                
                
                
                // *** editable avatar *** //
                try {//ie8 throws some harmless exceptions, so let's catch'em
            
                    //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                    //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                    try {
                        document.createElement('IMG').appendChild(document.createElement('B'));
                    } catch(e) {
                        Image.prototype.appendChild = function(el){}
                    }
            
                    var last_gritter
                    $('#avatar').editable({
                        type: 'image',
                        name: 'avatar',
                        value: null,
                        //onblur: 'ignore',  //don't reset or hide editable onblur?!
                        image: {
                            //specify ace file input plugin's options here
                            btn_choose: 'Change Avatar',
                            droppable: true,
                            maxSize: 110000,//~100Kb
            
                            //and a few extra ones here
                            name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                            on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                                if(last_gritter) $.gritter.remove(last_gritter);
                                if(error_type == 1) {//file format error
                                    last_gritter = $.gritter.add({
                                        title: 'File is not an image!',
                                        text: 'Please choose a jpg|gif|png image!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                } else if(error_type == 2) {//file size rror
                                    last_gritter = $.gritter.add({
                                        title: 'File too big!',
                                        text: 'Image size should not exceed 100Kb!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                }
                                else {//other error
                                }
                            },
                            on_success : function() {
                                $.gritter.removeAll();
                            }
                        },
                        url: function(params) {
                            // ***UPDATE AVATAR HERE*** //
                            //for a working upload example you can replace the contents of this function with 
                            //examples/profile-avatar-update.js
            
                            var deferred = new $.Deferred
            
                            var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                            if(!value || value.length == 0) {
                                deferred.resolve();
                                return deferred.promise();
                            }
            
            
                            //dummy upload
                            setTimeout(function(){
                                if("FileReader" in window) {
                                    //for browsers that have a thumbnail of selected image
                                    var thumb = $('#avatar').next().find('img').data('thumb');
                                    if(thumb) $('#avatar').get(0).src = thumb;
                                }
                                
                                deferred.resolve({'status':'OK'});
            
                                if(last_gritter) $.gritter.remove(last_gritter);
                                last_gritter = $.gritter.add({
                                    title: 'Avatar Updated!',
                                    text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                    class_name: 'gritter-info gritter-center'
                                });
                                
                             } , parseInt(Math.random() * 800 + 800))
            
                            return deferred.promise();
                            
                            // ***END OF UPDATE AVATAR HERE*** //
                        },
                        
                        success: function(response, newValue) {
                        }
                    })
                }catch(e) {}
                
                /**
                //let's display edit mode by default?
                var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                if(blank_image) {
                    $('#avatar').editable('show').on('hidden', function(e, reason) {
                        if(reason == 'onblur') {
                            $('#avatar').editable('show');
                            return;
                        }
                        $('#avatar').off('hidden');
                    })
                }
                */
            
                //another option is using modals
                $('#avatar2').on('click', function(){
                    var modal = 
                    '<div class="modal fade">\
                      <div class="modal-dialog">\
                       <div class="modal-content">\
                        <div class="modal-header">\
                            <button type="button" class="close" data-dismiss="modal">&times;</button>\
                            <h4 class="blue">Change Avatar</h4>\
                        </div>\
                        \
                        <form class="no-margin">\
                         <div class="modal-body">\
                            <div class="space-4"></div>\
                            <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                         </div>\
                        \
                         <div class="modal-footer center">\
                            <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                            <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                         </div>\
                        </form>\
                      </div>\
                     </div>\
                    </div>';
                    
                    
                    var modal = $(modal);
                    modal.modal("show").on("hidden", function(){
                        modal.remove();
                    });
            
                    var working = false;
            
                    var form = modal.find('form:eq(0)');
                    var file = form.find('input[type=file]').eq(0);
                    file.ace_file_input({
                        style:'well',
                        btn_choose:'Click to choose new avatar',
                        btn_change:null,
                        no_icon:'ace-icon fa fa-picture-o',
                        thumbnail:'small',
                        before_remove: function() {
                            //don't remove/reset files while being uploaded
                            return !working;
                        },
                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                    });
            
                    form.on('submit', function(){
                        if(!file.data('ace_input_files')) return false;
                        
                        file.ace_file_input('disable');
                        form.find('button').attr('disabled', 'disabled');
                        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
                        
                        var deferred = new $.Deferred;
                        working = true;
                        deferred.done(function() {
                            form.find('button').removeAttr('disabled');
                            form.find('input[type=file]').ace_file_input('enable');
                            form.find('.modal-body > :last-child').remove();
                            
                            modal.modal("hide");
            
                            var thumb = file.next().find('img').data('thumb');
                            if(thumb) $('#avatar2').get(0).src = thumb;
            
                            working = false;
                        });
                        
                        
                        setTimeout(function(){
                            deferred.resolve();
                        } , parseInt(Math.random() * 800 + 800));
            
                        return false;
                    });
                            
                });
            
                
            
                //////////////////////////////
                $('#profile-feed-1').ace_scroll({
                    height: '250px',
                    mouseWheelLock: true,
                    alwaysVisible : true
                });
            
                $('a[ data-original-title]').tooltip();
            
                $('.easy-pie-chart.percentage').each(function(){
                var barColor = $(this).data('color') || '#555';
                var trackColor = '#E2E2E2';
                var size = parseInt($(this).data('size')) || 72;
                $(this).easyPieChart({
                    barColor: barColor,
                    trackColor: trackColor,
                    scaleColor: false,
                    lineCap: 'butt',
                    lineWidth: parseInt(size/10),
                    animate:false,
                    size: size
                }).css('color', barColor);
                });
              
                ///////////////////////////////////////////
            
                //right & left position
                //show the user info on right or left depending on its position
                $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
                    var $this = $(this);
                    var $parent = $this.closest('.tab-pane');
            
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $this.offset();
                    var w2 = $this.width();
            
                    var place = 'left';
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
                    
                    $this.find('.popover').removeClass('right left').addClass(place);
                }).on('click', function(e) {
                    e.preventDefault();
                });
            
            
                ///////////////////////////////////////////
                $('#user-profile-3')
                .find('input[type=file]').ace_file_input({
                    style:'well',
                    btn_choose:'Change avatar',
                    btn_change:null,
                    no_icon:'ace-icon fa fa-picture-o',
                    thumbnail:'large',
                    droppable:true,
                    
                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                })
                .end().find('button[type=reset]').on(ace.click_event, function(){
                    $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                })
                .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
                    $(this).prev().focus();
                })
                $('.input-mask-phone').mask('(999) 999-9999');
            
                $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
            
            
                ////////////////////
                //change profile
                $('[data-toggle="buttons"] .btn').on('click', function(e){
                    var target = $(this).find('input[type=radio]');
                    var which = parseInt(target.val());
                    $('.user-profile').parent().addClass('hide');
                    $('#user-profile-'+which).parent().removeClass('hide');
                });
                
                
                
                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function(e) {
                    //in ajax mode, remove remaining elements before leaving page
                    try {
                        $('.editable').editable('destroy');
                    } catch(e) {}
                    $('[class*=select2]').remove();
                });
            });
        </script>

<!--user profil 1 scripte -->





    <!-- Chat Box End-->

    <!-- jquery
        ============================================ -->
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
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('frontEnd')}}/js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/peity/jquery.peity.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/flot/Chart.min.js"></script>
    <script src="{{asset('frontEnd')}}/js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/tableExport.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/data-table-active.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table-editable.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-editable.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/colResizable-1.5.source.js"></script>
    <script src="{{asset('frontEnd')}}/js/data-table/bootstrap-table-export.js"></script>
@endsection