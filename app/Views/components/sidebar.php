<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <?php
        if (session()->get('role') == 'admin') {
        ?>
        <?php
        }
        ?>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'FAQ') ? "" : "collapsed" ?>" href="FAQ">
                <i class="bi bi-question-circle"></i>
                <span>FAQ</span>
            </a>
            <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'Contact') ? "" : "collapsed" ?>" href="Contact">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
    </ul>

</aside><!-- End Sidebar-->