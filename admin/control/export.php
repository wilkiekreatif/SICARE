<?php
    include('../../config.php');
    $pesan = $_GET['id'];
    if($pesan==='approved'){
        //$query = mysqli_query($connect,"UPDATE applicants SET status='4'");
        // if ($query) {
        //     header('location:detailpelamar.php?message=hideapproved');
        // }
    }else if($pesan==='suspended'){
        //$query = mysqli_query($connect,"UPDATE applicants SET status='3'");
        // if ($query) {
        //     header('location:detailpelamar.php?message=hidesuspended');
        // }
    }
    // fungsi header dengan mengirimkan raw data excel
	header("Content-type: application/vnd-ms-excel");
	 
	// membuat nama file ekspor "export-to-excel.xls"
	header("Content-Disposition: attachment; filename=Data-Pelamar-$pesan.xls");
?>
<html>
    <body>
    	<table border="1" style="width: 100%">
    		<tr>
    			<th width="2%">No</th>
    			<th width="20%">Bagian</th>
    			<th width="30%">Nama</th>
    			<th width="10%">No Telepon</th>
    			<th>Keterangan</th>
    		</tr>
    		<?php 
            $no = 1;
            if($pesan==='approved'){
                $sql = mysqli_query($connect,"SELECT * FROM applicants WHERE status='2'");
            }else if($pesan==='suspended'){
                $sql = mysqli_query($connect,"SELECT * FROM applicants WHERE status='1'");
            }
    		
    		while($data = mysqli_fetch_array($sql)){
    		?>
    		<tr>
    			<td><?php echo $no++; ?></td>
    			<td><?php echo $data['bagian']; ?></td>
    			<td><?php echo $data['nama']; ?></td>
    			<td><?php echo $data['tlp']; ?></td>
    			<td><?php echo $data['alasan']; ?></td>
    		</tr>
    		<?php 
    		}
    		?>
    	</table>
    </body>
</html>