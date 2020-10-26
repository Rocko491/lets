<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li>
                    <a href="#" class="waves-effect"><i class="ti-dashboard"></i><span> Dashboard </span>
                    </a>
                </li>

                <?php /*if ($this->session->userdata['role'] == 'ADMIN') { */?><!--

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i
                            class="ti-layout-grid2"></i><span> Masters </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?/*= base_url('agencies') */?>">Add Agency Name</a></li>
                        <li><a href="<?/*= base_url('sites') */?>">Add Site Name</a></li>
                        <li><a href="<?/*= base_url('items') */?>">Add Item Name</a></li>
                        <li><a href="<?/*= base_url('customers') */?>">Add Customer</a></li>
                        <li><a href="<?/*= base_url('payments_by_to') */?>">Add Payment by/to</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i
                            class="fa fa-first-order"></i><span> Purchase </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?/*= base_url('purchases') */?>">Add Purchase</a></li>
                        <li><a href="<?/*= base_url('invoice') */?>">Invoice</a></li>

                    </ul>
                </li>

                <?php /*} */?>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-universal-access"></i><span> Payment </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="<?/*= base_url('agency_payment') */?>"> Agency Payment</a></li>
                        <li><a href="<?/*= base_url('client_payment') */?>"> Client Payment</a></li>
                        <li><a href="<?/*= base_url('payment_receipt') */?>">Payment Receipt</a></li>
                    </ul>
                </li>

                <?php /*if ($this->session->userdata['role'] == 'ADMIN') { */?>

                <li>
                    <a href="<?/*= base_url('pdf_data') */?>" class="waves-effect"><i
                            class="fa fa-file-pdf-o"></i><span> PDF </span> </a>
                </li>
                <li>
                    <a href="<?/*= base_url('export_db') */?>" class="waves-effect"><i
                            class="ion-ios7-cloud-download-outline"></i><span> Database </span> </a>
                </li>
                <?php /*} */?>
                <li>
                    <a href="<?/*= base_url('logout') */?>" class="waves-effect"><i
                            class="ion-log-out"></i><span> Logout </span></a>
                </li>-->


            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>


    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
