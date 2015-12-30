<nav class="navbar navbar-ct-brand-dark-blue navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <div class="">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img class="" src="<?php bloginfo( 'template_directory' ); ?>/assets/images/pfit-logo-white.svg" alt="Path Forward IT">
          </a>
        </div>
      </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav nav-fullwidth navbar-nav navbar-right">
            <li class="active editable"><a href="<?php echo home_url(); ?>">Home</a></li>
            <li class="dropdown visible-md visible-lg">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/clinical-documentation">Clinical Documentation</a></li>
                <li><a href="/compliance-and-security">Compliance &amp; Security</a></li>
                <li><a href="/patient-contact-center">Patient Contact Center</a></li>
                <li><a href="/advisory">Advisory</a></li>
                <li><a href="/managed-it">Managed IT</a></li>
                <li><a href="/services">Overview</a></li>
              </ul>
            </li>
            <li class="dropdown visible-xs visible-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/services">Overview</a></li>
                <li><a href="/managed-it">Managed IT</a></li>
                <li><a href="/advisory">Advisory</a></li>
                <li><a href="/patient-contact-center">Patient Contact Center</a></li>
                <li><a href="/compliance-and-security">Compliance &amp; Security</a></li>
                <li><a href="/clinical-documentation">Clinical Documentation</a></li>
              </ul>
            </li>
            <li><a href="/company">Company</a></li>
            <li><a href="/careers">Careers</a></li>
            <li><a href="/contact-us" class="btn btn-round btn-default">Contact Us</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
