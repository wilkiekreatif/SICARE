<!DOCTYPE html>
<html lang="en">
<?php
	include('../config.php');
	//include('../notif.php');
	//agar tidak bisa diakses apabila tidak login
	session_start();
	if (empty($_SESSION['username'])) {
	    header('location:../login/');
        return false;
	}
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="wilkie Creative Studio">
    <script type="text/javascript" src="tools/datatables/media/js/jquery.js"></script>
	<script type="text/javascript" src="tools/datatables/media/js/jquery.dataTables.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="tools/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="tools/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="tools/datatables/media/css/dataTables.bootstrap.css">
    <title>SICARE RSIH</title>

    <!-- Bootstrap Core CSS -->
    <link href="tools/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="tools/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="tools/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="beranda.php"><Strong>SICARE</strong> RSIH</a>
            </div>
            <!-- Top Menu Items -->
            <?php
                include('navbar.php');
            ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php
                $_SESSION['menu']='index';
                include('menu.php');
            ?>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                            <small>Statistik pelamar RSIH</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
                	<div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Jumlah Pelamar</div>
                                        <div class="huge"><?php
                                        $q = mysqli_query($connect,"SELECT COUNT(*) as total FROM applicants WHERE ((status='0' OR status='1') OR status='2')");
										$data = mysqli_fetch_array($q);
										echo($data['total']);
										
										?></div>
                                        <div>Pelamar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Pelamar Baru</div>
                                        <div class="huge"><?php
                                        $q = mysqli_query($connect,"SELECT COUNT(*) as total FROM applicants WHERE status='0'");
										$data = mysqli_fetch_array($q);
										echo($data['total']);
										?></div>
                                        <div>Pelamar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-warning fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Pelamar Suspended</div>
                                        <div class="huge"><?php
                                        $q = mysqli_query($connect,"SELECT COUNT(*) as total FROM applicants WHERE status='1'");
										$data = mysqli_fetch_array($q);
										echo($data['total']);
										
										?></div>
                                        <div>Pelamar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Pelamar Approved</div>
                                        <div class="huge"><?php
                                        $q = mysqli_query($connect,"SELECT COUNT(*) as total FROM applicants WHERE status='2'");
										$data = mysqli_fetch_array($q);
										echo($data['total']);
										
										?></div>
                                        <div>Pelamar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              	<!-- /.Row End -->
            	<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Pelamar Baru</h3>
                            </div>
                            <div class="panel-body">
                        			<div class="table-responsive">
                            			<table id="example" class="table table-hover table-striped table-bordered">
                                			<thead>
                                    			<tr>
                                        			<th>No</th>
                                                    <th>BAGIAN YANG DILAMAR</th>
                                                    <th>NIK</th>
                                        			<th>NAMA</th>
                                                    <th>EMAIL</th>
                                                    <th>NO. TELP</th>
                                                    <th>#</th>
                                    			</tr>
                                			</thead>
                                            <tbody>
                                    			<?php
													//membuat query membaca record dari tabel User      
													$query="SELECT * FROM applicants WHERE status='0' ORDER BY id DESC";
													//menjalankan query      
													if (mysqli_query($connect,$query)) {      
														$result=mysqli_query($connect,$query);     
													} else die ("Error menjalankan query". mysql_error());
													//mengecek record kosong     
													if (mysqli_num_rows($result) > 0) {
														$no='1';
														//menampilkan hasil query      
                                                        while($row = mysqli_fetch_array($result)) {      
     														echo "<tr>";
                                                            echo "	<td>".$no."</td>";    
                                                            echo "	<td>".$row["bagian"]."</td>";
                                                            echo "	<td>".$row["nik"]."</td>";      
    														echo "	<td>".$row["nama"]."</td>";
                                                            echo "	<td>".$row["email"]."</td>";
                                                            echo "	<td>".$row["tlp"]."</td>";
                                                            echo "<td width='14%' align='center'> <a href='../$row[files]' class='btn btn-sm btn-primary'> <i class='glyphicon glyphicon-floppy-save'></i></a>";
                                                            echo " <a href='#accModal' class='btn btn-sm btn-success' id='CustId' data-toggle='modal' data-id=".$row['id']."><i class='glyphicon glyphicon-ok'></i> </a> ";
                                                            echo " <a href='control/deletefile.php?file=../../$row[files]&id=".$row['id']."' class='btn btn-sm btn-danger' id='CustId' data-toggle='modal' data-id=".$row['id']."><i class='glyphicon glyphicon-remove'></i> </a></td>";  
															echo "</tr>";   
															$no++;
                                                        }    
                                                    }
												?>
                                			</tbody>
                            			</table>
                        			</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kenapa dia di suspend? :'(</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="accModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Silahkan isi keterangan dibawah ini? :)</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->    
    <!-- jQuery 
    <script src="js/jquery.js"></script> -->
    <!-- jQuery (necessary for Bootstrap’s JavaScript plugins) -->
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js”></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js” integrity=”sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa” crossorigin=”anonymous”></script>
    <script src=”https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js”></script>
    <script src=”https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js”></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'modal/alasan.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });

    $(document).ready(function(){
        $('#accModal').on('show.bs.modal', function (e) {
            var rowid1 = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'modal/keterangan.php',
                data :  'rowid1='+ rowid1,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="tools/js/bootstrap.min.js"></script>
</body>
</html>
