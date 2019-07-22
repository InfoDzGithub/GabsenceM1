@extends('layout.master')

@section('title','GBS | detaille d une Matiere')
@section('cssHeader')

    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/c3.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/responsive.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontEnd')}}/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/css/c3.min.css">
    <link rel="stylesheet" href="{{asset('frontEnd')}}/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />


        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="{{asset('frontEnd')}}/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{asset('frontEnd')}}/assets/js/ace-extra.min.js"></script>
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

    <?php
 try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gabsence;charset=utf8', 'root', '');

}
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        } 

$req1="SELECT nom, prenom,email from enseignants e,responsables r where e.id=r.enseignants_id and r.idResp=$matiere->responsables_id" ;

                    $reponse1 = $bdd->prepare($req1); 
                    $reponse1->execute();
                     $row1=$reponse1->fetch();
?>
<body class="materialdesign">


    <div class="wrapper-pro">
        <div class="project-details-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="project-details-wrap shadow-reset">
                                <div class="row">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <div class="project-details-title">
                                            <h2><span class="profile-details-name-nn">Detail du</span> module</h2>
                                        </div>
                                        <ul id="adminpro-demo2" class="comment-action-st collapse">
                                            <li><a href="#">Add</a>
                                            </li>
                                            <li><a href="#">Report</a>
                                            </li>
                                            <li><a href="#">Hide Profile</a>
                                            </li>
                                            <li><a href="#">Turn on Profile</a>
                                            </li>
                                            <li><a href="#">Turn off Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div class="admin-comment-month project-details-action">
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo2">...</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>nom:</strong></span>
                                                    </div>
                                                </div>
    
           
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="btn-group project-list-ad"><span class="label label-sm label-warning">{{$matiere->nomMat}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Responsable :</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><a href="#"> <?php echo $row1['nom']; ?> <?php echo $row1['prenom']; ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>seance cours:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->heurCour}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>seance TD:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                       {{$matiere->heurTD}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>seance TP:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->heurTP}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Coefition:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->cofficient}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Created:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span>{{$matiere->created_at}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Email:</strong></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-dt">
                                                        <span><?php echo $row1['email']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="project-details-mg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="project-details-st">
                                                        <span><strong>Enseignants:</strong></span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="project-details-img">
                                                      @foreach($listEns as $ens)
 
                       
                                                        <a href="{{ url('enseignant/'.$ens->id.'/details')}}"><img src="{{asset($ens-> photo)}}" alt="" title="{{$ens->nom}} {{$ens->prenom}}" />
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="project-pregress-details">
                                            <span><strong>Completed:</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="skill-content-3 project-details-progress">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 45%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>45%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-details-tab">
                                            <ul class="nav nav-tabs res-pd-less-sm">
                                                <li class="active"><a data-toggle="tab" href="#home">Les Groupes</a>
                                                </li>
                                                <li><a data-toggle="tab" href="#menu1">Les Examans</a>
                                                </li>
                                                <li><a data-toggle="tab" href="#menu2">Les Exclusion</a>
                                                </li>
                                            </ul>
        <div class="tab-content res-tab-content-project">
            <div id="home" class="tab-pane fade in active animated zoomInLeft">
                     <div class="project-details-completeness">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                                                    <th>ID</th>
                                                                    <th>NOM</th>
                                                                    <th>COUR</th>
                                                                    <th>TD</th>
                                                                    <th>TP</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span class="label label-primary"><i class="fa fa-check"></i> 1</span>
                                                                    </td>
                                                                    <td>
                                                                        G5
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat COUR
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat TD
                                                                    </td>
                                                                    <td>
                                                                       Enseiganat TP
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="label label-primary"><i class="fa fa-check"></i> 1</span>
                                                                    </td>
                                                                    <td>
                                                                        G5
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat COUR
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat TD
                                                                    </td>
                                                                    <td>
                                                                       Enseiganat TP
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="label label-primary"><i class="fa fa-check"></i> 1</span>
                                                                    </td>
                                                                    <td>
                                                                        G5
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat COUR
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat TD
                                                                    </td>
                                                                    <td>
                                                                       Enseiganat TP
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="label label-primary"><i class="fa fa-check"></i> 1</span>
                                                                    </td>
                                                                    <td>
                                                                        G5
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat COUR
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat TD
                                                                    </td>
                                                                    <td>
                                                                       Enseiganat TP
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="label label-primary"><i class="fa fa-check"></i> 1</span>
                                                                    </td>
                                                                    <td>
                                                                        G5
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat COUR
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat TD
                                                                    </td>
                                                                    <td>
                                                                       Enseiganat TP
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="label label-primary"><i class="fa fa-check"></i> 1</span>
                                                                    </td>
                                                                    <td>
                                                                        G5
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat COUR
                                                                    </td>
                                                                    <td>
                                                                        Enseiganat TD
                                                                    </td>
                                                                    <td>
                                                                       Enseiganat TP
                                                                    </td>
                                                                </tr>
                            </tbody>
                        </table>
                     </div>
            </div>
            <div id="menu1" class="tab-pane fade animated bounceInUp">
                <div class="project-details-completeness">
                    <form action="{{url('examen/'.$matiere->id.'/create')}}"> {{csrf_field()}}
              {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-custon-four btn-success">Creer Un Examan</button>
                    </form> 
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>TYPE</th>
                            <th>TITRE</th>
                            <th>Lien de sujet</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($examens as $examen)
                        <tr>
                            <td>
                            <span class="label label-primary"><i class="fa fa-check"></i> {{$examen->type}}</span>
                            </td>
                            <td>{{$examen->titre}}</td>
                            <td><a href="download/{{$examen->sujet}}" class="btn btn-primary" download="">download</a></td>
<td>
 <!--a href="{{ url('examen/'.$examen->id.'/edit')}}" >
                          <i class="fa fa-edit"></i>
 </a>
 <a href="{{ url('examen/'.$examen->id)}}" role="button"  data-toggle="modal"><i class="fa fa-trash-o"></i>
 </a-->@method('DELETE')
     @csrf
        <div class="hidden-sm hidden-xs action-buttons">
                                        
                                         <a class="green" href="{{ url('examen/'.$examen->id.'/edit')}}">
                                         <i class="ace-icon fa fa-pencil bigger-130"></i>   </a><a class="red" href="{{ url('examen/'.$examen->id)}}">
                                         <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                         </a>
                                         </div>
                                         <div class="hidden-md hidden-lg">
                                         <div class="inline pos-rel">
                                         <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                         <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                         <li><a href="{{ url('examen/'.$examen->id.'/edit')}}" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green">
                                         <i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a>
                                         </li>
                                         <li> <a href="{{ url('examen/'.$examen->id)}}" class="tooltip-error" data-rel="tooltip" title="Delete">
                                         <span class="red">
                                         <i class="ace-icon fa fa-trash-o bigger-120"></i></span></a>
                                         @method('DELETE')
                                         @csrf
                                         </li> 
                                         </ul>
                                         </div>
                                         </div>
                                         </td>          
</td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade animated bounceInUp">
                <div class="project-details-completeness">
                    <div class="project-details-tab">
                        <ul class="nav nav-tabs res-pd-less-sm">
                            <li class="active"><a data-toggle="tab" href="#menu3">TD</a>
                            </li>
                            <li><a data-toggle="tab" href="#menu4">TP</a>
                            </li>
                                                
                        </ul>
                         <div class="tab-content res-tab-content-project">
                        <div id="menu3" class="tab-pane fade in active animated zoomInLeft">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="clearfix">
                                            <div class="pull-right tableTools-container">
                                            </div>
                                        </div>
                                        <div class="table-header">
                                                                Results for "Latest Registered Domains"
                                        </div>

                                                            <!-- div.table-responsive -->

                                                            <!-- div.dataTables_borderWrap -->
                                        <div>
                                            <table id="dynamic-table" class="table table-striped table-bordered table-hover"><thead>
                                            <tr><th class="center">
                                            <label class="pos-rel">
                                            <input type="checkbox" class="ace" /><span class="lbl"></span>
                                            </label></th>
                                            <th>matricule</th>
                                            <th>nom</th>
                                            <th class="hidden-480">prenom</th>
                                            <th> <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                            date naissance
                                            </th>
                                            <th class="hidden-480">etat</th>
                                            <th>exclure</th>
                                            </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                         <td class="center">
                                         <label class="pos-rel"> 
                                         <input type="checkbox" class="ace" /><span class="lbl"></span>
                                         </label>
                                         </td>
                                         <td>
                                         <a href="#">app.com</a>
                                         </td>
                                         <td>$45</td>
                                         <td class="hidden-480">3,330</td>
                                         <td>Feb 12</td>
                                         <td class="hidden-480">
                                         <span class="label label-sm label-warning">Expiring</span></td>
                                         <td>                          <div class="hidden-sm hidden-xs action-buttons">
                                         <a class="blue" href="#">
                                         <i class="ace-icon fa fa-search-plus bigger-130"></i></a>
                                         <a class="green" href="#">
                                         <i class="ace-icon fa fa-pencil bigger-130"></i>   </a><a class="red" href="#">
                                         <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                         </a>
                                         </div>
                                         <div class="hidden-md hidden-lg">
                                         <div class="inline pos-rel">
                                         <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                         <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                         </button>
                                         <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close"><li><a href="#" class="tooltip-info" data-rel="tooltip" title="View"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>                           <li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit"><span class="green">
                                         <i class="ace-icon fa fa-pencil-square-o bigger-120"></i></span></a>
                                         </li>
                                         <li> <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                         <span class="red">
                                         <i class="ace-icon fa fa-trash-o bigger-120"></i></span></a>
                                         </li> 
                                         </ul>
                                         </div>
                                         </div>
                                         </td>
                                          </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">base.com</a>
                                                                            </td>
                                                                            <td>$35</td>
                                                                            <td class="hidden-480">2,595</td>
                                                                            <td>Feb 18</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">max.com</a>
                                                                            </td>
                                                                            <td>$60</td>
                                                                            <td class="hidden-480">4,400</td>
                                                                            <td>Mar 11</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">best.com</a>
                                                                            </td>
                                                                            <td>$75</td>
                                                                            <td class="hidden-480">6,500</td>
                                                                            <td>Apr 03</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">pro.com</a>
                                                                            </td>
                                                                            <td>$55</td>
                                                                            <td class="hidden-480">4,250</td>
                                                                            <td>Jan 21</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">team.com</a>
                                                                            </td>
                                                                            <td>$40</td>
                                                                            <td class="hidden-480">3,200</td>
                                                                            <td>Feb 09</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">up.com</a>
                                                                            </td>
                                                                            <td>$95</td>
                                                                            <td class="hidden-480">8,520</td>
                                                                            <td>Feb 22</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">view.com</a>
                                                                            </td>
                                                                            <td>$45</td>
                                                                            <td class="hidden-480">4,100</td>
                                                                            <td>Mar 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">nice.com</a>
                                                                            </td>
                                                                            <td>$38</td>
                                                                            <td class="hidden-480">3,940</td>
                                                                            <td>Feb 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">fine.com</a>
                                                                            </td>
                                                                            <td>$25</td>
                                                                            <td class="hidden-480">2,983</td>
                                                                            <td>Apr 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">good.com</a>
                                                                            </td>
                                                                            <td>$50</td>
                                                                            <td class="hidden-480">6,500</td>
                                                                            <td>Feb 02</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">great.com</a>
                                                                            </td>
                                                                            <td>$55</td>
                                                                            <td class="hidden-480">6,400</td>
                                                                            <td>Feb 24</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">shine.com</a>
                                                                            </td>
                                                                            <td>$25</td>
                                                                            <td class="hidden-480">2,200</td>
                                                                            <td>Apr 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">rise.com</a>
                                                                            </td>
                                                                            <td>$42</td>
                                                                            <td class="hidden-480">3,900</td>
                                                                            <td>Feb 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">above.com</a>
                                                                            </td>
                                                                            <td>$35</td>
                                                                            <td class="hidden-480">3,420</td>
                                                                            <td>Mar 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">share.com</a>
                                                                            </td>
                                                                            <td>$30</td>
                                                                            <td class="hidden-480">3,200</td>
                                                                            <td>Feb 11</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">fair.com</a>
                                                                            </td>
                                                                            <td>$35</td>
                                                                            <td class="hidden-480">3,900</td>
                                                                            <td>Mar 26</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">year.com</a>
                                                                            </td>
                                                                            <td>$48</td>
                                                                            <td class="hidden-480">3,990</td>
                                                                            <td>Feb 15</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">day.com</a>
                                                                            </td>
                                                                            <td>$55</td>
                                                                            <td class="hidden-480">5,600</td>
                                                                            <td>Jan 29</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">light.com</a>
                                                                            </td>
                                                                            <td>$40</td>
                                                                            <td class="hidden-480">3,100</td>
                                                                            <td>Feb 17</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">sight.com</a>
                                                                            </td>
                                                                            <td>$58</td>
                                                                            <td class="hidden-480">6,100</td>
                                                                            <td>Feb 19</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">right.com</a>
                                                                            </td>
                                                                            <td>$50</td>
                                                                            <td class="hidden-480">4,400</td>
                                                                            <td>Apr 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">once.com</a>
                                                                            </td>
                                                                            <td>$20</td>
                                                                            <td class="hidden-480">1,400</td>
                                                                            <td>Apr 04</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                            </table>
                                        </div>
                                     </div>
                                </div>
                                <div class="project-details-completeness">
                                </div>
                        </div>
                        <div id="menu4" class="tab-pane fade animated bounceInUp">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results for "Latest Registered Domains"
                                                            </div>

                                                            <!-- div.table-responsive -->

                                                            <!-- div.dataTables_borderWrap -->
                                                            <div>
                                                                <table id="dynamic-table1" class="table table-striped table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </th>
                                                                            <th>matricule</th>
                                                                            <th>nom</th>
                                                                            <th class="hidden-480">prenom</th>

                                                                            <th>
                                                                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                                date naissance
                                                                            </th>
                                                                            <th class="hidden-480">etat</th>

                                                                            <th>exclure</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">app.com</a>
                                                                            </td>
                                                                            <td>$45</td>
                                                                            <td class="hidden-480">3,330</td>
                                                                            <td>Feb 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">base.com</a>
                                                                            </td>
                                                                            <td>$35</td>
                                                                            <td class="hidden-480">2,595</td>
                                                                            <td>Feb 18</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">max.com</a>
                                                                            </td>
                                                                            <td>$60</td>
                                                                            <td class="hidden-480">4,400</td>
                                                                            <td>Mar 11</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">best.com</a>
                                                                            </td>
                                                                            <td>$75</td>
                                                                            <td class="hidden-480">6,500</td>
                                                                            <td>Apr 03</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">pro.com</a>
                                                                            </td>
                                                                            <td>$55</td>
                                                                            <td class="hidden-480">4,250</td>
                                                                            <td>Jan 21</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">team.com</a>
                                                                            </td>
                                                                            <td>$40</td>
                                                                            <td class="hidden-480">3,200</td>
                                                                            <td>Feb 09</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">up.com</a>
                                                                            </td>
                                                                            <td>$95</td>
                                                                            <td class="hidden-480">8,520</td>
                                                                            <td>Feb 22</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">view.com</a>
                                                                            </td>
                                                                            <td>$45</td>
                                                                            <td class="hidden-480">4,100</td>
                                                                            <td>Mar 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">nice.com</a>
                                                                            </td>
                                                                            <td>$38</td>
                                                                            <td class="hidden-480">3,940</td>
                                                                            <td>Feb 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">fine.com</a>
                                                                            </td>
                                                                            <td>$25</td>
                                                                            <td class="hidden-480">2,983</td>
                                                                            <td>Apr 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">good.com</a>
                                                                            </td>
                                                                            <td>$50</td>
                                                                            <td class="hidden-480">6,500</td>
                                                                            <td>Feb 02</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">great.com</a>
                                                                            </td>
                                                                            <td>$55</td>
                                                                            <td class="hidden-480">6,400</td>
                                                                            <td>Feb 24</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">shine.com</a>
                                                                            </td>
                                                                            <td>$25</td>
                                                                            <td class="hidden-480">2,200</td>
                                                                            <td>Apr 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">rise.com</a>
                                                                            </td>
                                                                            <td>$42</td>
                                                                            <td class="hidden-480">3,900</td>
                                                                            <td>Feb 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">above.com</a>
                                                                            </td>
                                                                            <td>$35</td>
                                                                            <td class="hidden-480">3,420</td>
                                                                            <td>Mar 12</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">share.com</a>
                                                                            </td>
                                                                            <td>$30</td>
                                                                            <td class="hidden-480">3,200</td>
                                                                            <td>Feb 11</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">fair.com</a>
                                                                            </td>
                                                                            <td>$35</td>
                                                                            <td class="hidden-480">3,900</td>
                                                                            <td>Mar 26</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">year.com</a>
                                                                            </td>
                                                                            <td>$48</td>
                                                                            <td class="hidden-480">3,990</td>
                                                                            <td>Feb 15</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">day.com</a>
                                                                            </td>
                                                                            <td>$55</td>
                                                                            <td class="hidden-480">5,600</td>
                                                                            <td>Jan 29</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">light.com</a>
                                                                            </td>
                                                                            <td>$40</td>
                                                                            <td class="hidden-480">3,100</td>
                                                                            <td>Feb 17</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-success">Registered</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">sight.com</a>
                                                                            </td>
                                                                            <td>$58</td>
                                                                            <td class="hidden-480">6,100</td>
                                                                            <td>Feb 19</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">right.com</a>
                                                                            </td>
                                                                            <td>$50</td>
                                                                            <td class="hidden-480">4,400</td>
                                                                            <td>Apr 01</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-warning">Expiring</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="center">
                                                                                <label class="pos-rel">
                                                                                    <input type="checkbox" class="ace" />
                                                                                    <span class="lbl"></span>
                                                                                </label>
                                                                            </td>

                                                                            <td>
                                                                                <a href="#">once.com</a>
                                                                            </td>
                                                                            <td>$20</td>
                                                                            <td class="hidden-480">1,400</td>
                                                                            <td>Apr 04</td>

                                                                            <td class="hidden-480">
                                                                                <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="hidden-sm hidden-xs action-buttons">
                                                                                    <a class="blue" href="#">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="green" href="#">
                                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                    </a>

                                                                                    <a class="red" href="#">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="hidden-md hidden-lg">
                                                                                    <div class="inline pos-rel">
                                                                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                        </button>

                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                            <li>
                                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                    <span class="blue">
                                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                    <span class="green">
                                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                    <span class="red">
                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="project-details-completeness">
                                                        
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
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="project-details-descri project-details-mg-t-30 shadow-reset">
                                <h2>Project Description</h2>
                                <p>There are many variations of the passages of Lorem on the Ipsum available, but the majority have suffered alteration in some form, by injected humour, or one of randomised words.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
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
    <script src="{{asset('frontEnd')}}/js/detailsModule.js"></script>
    <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="{{asset('frontEnd')}}/assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="{{asset('frontEnd')}}/assets/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.flash.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.html5.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.print.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/buttons.colVis.min.js"></script>
        <script src="{{asset('frontEnd')}}/assets/js/dataTables.select.min.js"></script>
     @endsection
