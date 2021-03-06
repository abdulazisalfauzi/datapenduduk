<?php
include "header.php";

$sambung = mysql_connect("localhost","root","") or die ("gagal konek ke server.");
mysql_select_db("penduduk") or die ("gagal membuka database.");
?>

<div id="main-content">
  <div class="container-fluid">
    <ul class="breadcrumb">
      <li><a href="#">Home</a><span class="divider">&raquo;</span></li>
      <li><a href="#">Library</a><span class="divider">&raquo;</span></li>
      <li class="active">Data</li>
    </ul>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-block">
          <div class="widget-head">
            <h5>Data Table boxy</h5>
            <div class="widget-control pull-right">
              <a href="#" data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-plus"></i> Add New</a></li>
                <li><a href="#"><i class="icon-ok"></i> Bulk Approved</a></li>
                <li><a href="#"><i class="icon-minus-sign"></i> Bulk Remove</a></li>
              </ul>
            </div>
          </div>
          <div class="widget-content">
            <div class="widget-box">
              <table class="data-tbl-boxy table">
              <thead>
              <tr>
                <th>No KK</th>
                <th>NIK</th>
                <th>Nama Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Alasan Pindah</th>
                <th>Alamat Tujuan Pinda</th>
                <th>Klasifikasi Pindah</th>
                <th>Jenis Kepindahan</th>
                <th>Status No KK Bagi Yang Tidak Pindah</th>
                <th>Status No KK Bagi Yang Pindah</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>

<?php
$query = "select*from daerah_asal d, penduduk p where d.nik= p.nik";
$result = mysql_query($query,$sambung);
//$no=0;
while($buff = mysql_fetch_array($result)){
//$no++;
?>

        <tr>
        <td ><?php echo $buff['no_kk'];?></td>
        <td ><?php echo $buff['nik'];?></td>
        <td ><?php echo $buff['nama'];?></td>
        <td ><?php echo $buff['kp'];?>, <?php echo $buff['rt'];?>/<?php echo $buff['rw'];?>, <?php echo $buff['desa'];?>, <?php echo $buff['kecamatan'];?>, <?php echo $buff['kabupaten'];?>, <?php echo $buff['provinsi'];?>, <?php echo $buff['kd_pos'];?></td>
        <td ><a  title="Lihat Keterangaan" href="table-alasan-pindah.php?no_ap=<?php echo $buff['no_ap'];?>"><?php echo $buff['no_ap'];?></td>
        <td ><?php echo $buff['t_kp'];?>, <?php echo $buff['t_rt'];?>/<?php echo $buff['t_rw'];?>, <?php echo $buff['t_desa'];?>, <?php echo $buff['t_kecamatan'];?>, <?php echo $buff['t_kabupaten'];?>, <?php echo $buff['t_provinsi'];?>, <?php echo $buff['t_kd_pos'];?>, <?php echo $buff['t_telpon'];?></td>
        <td ><a  title="Lihat Keterangaan" href="table-klasifikasi-pindah.php?no_kp=<?php echo $buff['no_kp'];?>"><?php echo $buff['no_kp'];?></td>
        <td ><a  title="Lihat Keterangaan" href="table-jenis-pindah.php?no_jp=<?php echo $buff['no_jp'];?>"><?php echo $buff['no_jp'];?></td>
        <td ><a  title="Lihat Keterangaan" href="table-stat-kk-tidak-pindah.php?no_sktp=<?php echo $buff['no_sktp'];?>"><?php echo $buff['no_sktp'];?></td>
        <td ><a  title="Lihat Keterangaan" href="table-stat-kk-pindah.php?no_skp=<?php echo $buff['no_skp'];?>"><?php echo $buff['no_skp'];?></td>
        <td>
          <div>
            <a  title="Ubah" href="edit-pindah-penduduk.php?no_kk=<?php echo $buff['no_kk'];?>"><span class="black-icons pencil"></span></a> 
            <a  title="Hapus" href="hapus-pindah-penduduk.php?no_kk=<?php echo $buff['no_kk'];?>"><span class="black-icons trashcan"></span></a>
            
           </div>
<?php
}
mysql_close($sambung);
?>
              </tr>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
       
  </div>
</div>
<!-- javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/prettify.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/accordion.jquery.js"></script>
<script src="js/smart-wizard.jquery.js"></script>
<script src="js/vaidation.jquery.js"></script>
<script src="js/jquery-dynamic-form.js"></script>
<script src="js/fullcalendar.js"></script>
<script src="js/raty.jquery.js"></script>
<script src="js/jquery.noty.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/data-table.jquery.js"></script>
<script src="js/TableTools.min.js"></script>
<script src="js/ColVis.min.js"></script>
<script src="js/plupload.full.js"></script>
<script src="js/elfinder/elfinder.min.js"></script>
<script src="js/chosen.jquery.js"></script>
<script src="js/uniform.jquery.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/check-all.jquery.js"></script>
<script src="js/inputmask.jquery.js"></script>
<script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script src="js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/jquery.jqplot.min.js"></script>
<script src="js/chart/jqplot.highlighter.min.js"></script>
<script src="js/chart/jqplot.cursor.min.js"></script>
<script src="js/chart/jqplot.dateAxisRenderer.min.js"></script>
<script src="js/custom-script.js"></script>
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
<script src="js/ios-orientationchange-fix.js"></script>
</body>
</html>