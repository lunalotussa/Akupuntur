  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->