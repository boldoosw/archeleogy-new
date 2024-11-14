<?php defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('templates/_parts/admin_master_header_view');
?>
<style>
    /* Style the sidebar - fixed full height */
    .sidebar {
        height: 100%;
        width: 200px;
        position: relative;
        z-index: 1;
        top: 0;
        left: 0;
        overflow-x: hidden;
        padding-top: 20px;
        padding-bottom: 60px;
    }

    /* Style sidebar links */
    .sidebar a {
        padding: 0px 8px 6px 16px;
        text-decoration: none;
        color: black;
        font-size: 15px;
        display: block;
    }

    /* Style links on mouse-over */
    .sidebar a:hover {
        color: gray;
    }

    /* Style the main content */
    .main {
        margin-left: 160px;
        /* Same as the width of the sidenav */
        padding: 0px 10px;
    }

    /* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 14px;
        }
    }
</style>


<div class="wrap">
    <div class="fixed top-0 left-0 z-40 w-64 h-screen pt-40 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <!-- The sidebar -->
        <div class="sidebar">
            <a href="<?php echo base_url(); ?>admin/menus"><i class="fa fa-fw fa-bars"></i> Menus</a>
            <a href=" <?php echo base_url(); ?>admin/menu"><i class="fa fa-fw fa-bars"></i>
                Old
                Menu</a>
            <a href=" <?php echo base_url(); ?>admin/contents/index/page"><i class="fa fa-fw fa-book"></i>
                Pages</a>
            <a href="<?php echo base_url(); ?>admin/news"><i class="fa fa-fw fa-book"></i>
                News Pages</a>
            <a href="<?php echo base_url(); ?>admin/contents/index/category"><i class="fa fa-fw fa-user"></i>
                Categories</a>
            <a href="<?php echo base_url(); ?>admin/contents/index/post"><i class="fa fa-fw fa-envelope"></i>
                Posts</a>
            <!-- <a href="<?php echo base_url(); ?>admin/rake"><i class="fa fa-fw fa-envelope"></i> RAKE Tool</a> -->
        </div>
    </div>
    <div class="col-9 col-lg-10 ">
        <?php echo $the_view_content; ?>
    </div>
</div>



<?php $this->load->view('templates/_parts/admin_master_footer_view'); ?>