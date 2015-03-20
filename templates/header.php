  <div class="navbar-fixed menu">
    <nav>
      <div class="nav-wrapper light-green darken-2">
          <a href="#!" class="brand-logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="components.html">Components</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="navbar-fixed header">
    <nav>
      <div class="nav-wrapper light-green">
        <a data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <a href="#!" class="brand-logo center"><img class="logo" /></a>
        <ul class="right hide-on-med-and-down">
          <li><a >Menu</a></li>
        </ul>
      </div>
    </nav>
  </div>

<ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="components.html">Components</a></li>
        <li><a href="javascript.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>

<script>

    $(".button-collapse").sideNav();

</script>