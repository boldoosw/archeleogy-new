<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/_parts/admin_master_header_view');
?>



<div class="row">
    <div class="col-3 col-lg-2  ">
        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen pt-40 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Sidebar">
            <!-- The sidebar -->
            <div class="h-full px-3 pb-4 overflow-y-auto  bg-white dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href=" <?php echo base_url(); ?>admin/menus"><i class="fa fa-fw fa-home"></i> Menus</a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>admin/contents/index/page"><i class="fa fa-fw fa-wrench"></i>
                            Pages</a></li>
                    <li> <a href="<?php echo base_url(); ?>admin/contents/index/category"><i
                                class="fa fa-fw fa-user"></i>
                            Categories</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/contents/index/post"><i
                                class="fa fa-fw fa-envelope"></i>
                            Posts</a></li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/rake"><i class="fa fa-fw fa-envelope"></i> RAKE Tool</a>
                    </li>
                </ul>
            </div>
        </aside>


    </div>
    <div class="col-9 col-lg-10">
        <?php echo $the_view_content; ?>
    </div>
</div>



<?php $this->load->view('templates/_parts/admin_master_footer_view'); ?>