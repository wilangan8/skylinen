        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>" target="_blank">
                            Skylinen.co.id
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    Copyright  &copy; <?= date('Y') ?> SkyLinen. All Rights Reserved
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url('sky_main/assets/js/core/jquery.min.js') ?>"></script>
<script src="<?= base_url('sky_main/assets/js/core/popper.min.js') ?>"></script>
<script src="<?= base_url('sky_main/assets/js/core/bootstrap-material-design.min.js') ?>"></script>
<script src="<?= base_url('sky_main/assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
<!-- Plugin for the momentJs  -->
<script src="<?= base_url('sky_main/assets/js/plugins/moment.min.js') ?>"></script>
<!--  Plugin for Sweet Alert -->
<script src="<?= base_url('sky_main/assets/js/plugins/sweetalert2.js"') ?>"></script>
<!-- Forms Validations Plugin -->
<script src="<?= base_url('sky_main/assets/js/plugins/jquery.validate.min.js') ?>"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?= base_url('sky_main/assets/js/plugins/jquery.bootstrap-wizard.js') ?>"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?= base_url('sky_main/assets/js/plugins/bootstrap-selectpicker.js') ?>"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?= base_url('sky_main/assets/js/plugins/bootstrap-datetimepicker.min.js') ?>"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.semanticui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?= base_url('sky_main/assets/js/plugins/bootstrap-tagsinput.js') ?>"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url('sky_main/assets/js/plugins/jasny-bootstrap.min.js') ?>"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?= base_url('sky_main/assets/js/plugins/fullcalendar.min.js') ?>"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?= base_url('sky_main/assets/js/plugins/jquery-jvectormap.js') ?>"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?= base_url('sky_main/assets/js/plugins/nouislider.min.js') ?>"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?= base_url('sky_main/assets/js/plugins/arrive.min.js') ?>"></script>
<!-- Chartist JS -->
<script src="<?= base_url('sky_main/assets/js/plugins/chartist.min.js') ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('sky_main/assets/js/plugins/bootstrap-notify.js') ?>"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url('sky_main/assets/js/material-dashboard.js?v=2.1.2') ?>" type="text/javascript"></script>
<script>
$(document).ready(function() {
// Javascript method's body can be found in assets/js/demos.js
md.initDashboardPageCharts();

});
$(document).ready(function() {
    <?php if($this->uri->segment(3) == "bedlinen"){ ?>
        $('#sheeting-table').DataTable();
        $('#flatsheet-table').DataTable();
        $('#fittedsheet-table').DataTable();
        $('#pillowcase-table').DataTable();
        $('#balstercase-table').DataTable();
        $('#duvetcover-table').DataTable();
    <?php }else if($this->uri->segment(3) == "bedding"){ ?>
        $('#innerduvet-table').DataTable();
        $('#mattressprotector-table').DataTable();
        $('#pillow-table').DataTable();
        $('#balster-table').DataTable();
        $('#cushion-table').DataTable();
    <?php }else if($this->uri->segment(3) == "bathroom"){ ?>
        $('#bathtowel-table').DataTable();
        $('#handtowel-table').DataTable();
        $('#facetowel-table').DataTable();
        $('#bathmat-table').DataTable();
    <?php }else{ ?>
        $('#kitchenanddining-table').DataTable();
    <?php } ?>
} );

$(document).ready(function(){
    $(".delete").click(function(e){
        e.preventDefault(); 
            $.ajax({
                type: "POST",
                url: "<?= base_url('sky-admin/products/'. $this->uri->segment(3) .'/delete') ?>",
                cache: false,
                data: {id:$(this).attr("id")},
                success: function(reaksi) {
                if (reaksi){
                alert("Success");
                } else {
                alert("ERROR");
                }
            }
        });
    });
});
</script>
</body>

</html>