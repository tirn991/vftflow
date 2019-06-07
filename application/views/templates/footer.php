<footer class="cm-footer"><span class="pull-left">Connected as John Smith</span><span class="pull-right">&copy; VISION FUND TANZANIA</span></footer>
        </div>
        
        <!-- <script src="<?php echo base_url(); ?>assets/js/jquery.3.2.1.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.cookie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/clearmin.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/lib/d3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/lib/c3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/demo/dashboard.js"></script>

        <!-- 00 -->
        <!-- <script src = "https://code.jquery.com/jquery-3.3.1.js" ></script> -->
        <!-- <script src = "https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script> -->

        


        <script type="text/javascript">
            // $(document).ready(function() {
            //     $('#example').DataTable();
            // } );

            $('#radioBtn a').on('click', function(){
                var sel = $(this).data('title');
                var tog = $(this).data('toggle');
                $('#'+tog).prop('value', sel);
                
                $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
                $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
            });

        $(document).ready(function() {
            var table = $('#example').DataTable( {
                responsive: true
            } );
         
            new $.fn.dataTable.FixedHeader( table );
        } );

        $(document).ready(function () {
            $('#datepicker').datepicker({
              uiLibrary: 'bootstrap'
            });
            $('#datepicker1').datepicker({
              uiLibrary: 'bootstrap'
            });
        });

        </script>

        <script type="text/javascript">
            $(document).ready(function(){
            $('#datepicker').datepicker(); 
            });
        </script>
    </body>
</html>