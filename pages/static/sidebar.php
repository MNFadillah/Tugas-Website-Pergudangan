  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if (isset($dasboardMenu)) echo 'active'; ?> treeview">
          <a href="http://localhost/pergudangan">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if (isset($barangMenu)) echo 'active'; ?> treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>barang"><i class="fa fa-circle-o"></i> List Barang</a></li>
            <li><a href="<?php echo base_url();?>barang/add"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
          </ul>
        </li>

        <li class="<?php if (isset($barangInMenu)) echo 'active'; ?> treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Barang Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>barang-masuk"><i class="fa fa-circle-o"></i> List Barang Masuk</a></li>
            <li><a href="<?php echo base_url();?>barang-masuk/add"><i class="fa fa-circle-o"></i> Add Barang Masuk</a></li>
          </ul>
        </li>

        <li class="<?php if (isset($barangOutMenu)) echo 'active'; ?> treeview">
          <a href="#">
            <i class="fa fa-cart-arrow-down "></i> <span>Barang Keluar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>barang-keluar"><i class="fa fa-circle-o"></i> List Barang Keluar</a></li>
            <li><a href="<?php echo base_url();?>barang-keluar/add"><i class="fa fa-circle-o"></i> Add Barang Keluar</a></li>
          </ul>
        </li>

        <li class="<?php if (isset($userMenu)) echo 'active'; ?> treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>user"><i class="fa fa-circle-o"></i> List Users</a></li>
            <li><a href="<?php echo base_url();?>user/add"><i class="fa fa-circle-o"></i> Add Users</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>