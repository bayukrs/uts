<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo ucfirst($this->session->userdata('username')) ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
                <a href="<?php echo base_url()?>admin" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>All Product</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
          </li>
          <li class="nav-item has-treeview">
                <a href="<?php echo base_url()?>admin/kategori" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Kategori</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
          </li>
          <li class="nav-item has-treeview">
                <a href="<?php echo base_url()?>admin/freelancer" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Freelancer</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
          </li>
          <li class="nav-item has-treeview">
                <a href="<?php echo base_url()?>admin/order" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Order</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
          </li>
        </ul>
    </nav>