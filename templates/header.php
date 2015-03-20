  <div class="navbar-fixed menu hide">
    <nav>
      <div class="nav-wrapper blue-grey darken-2">
          <a href="#!" class="brand-logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/youtube/">Youtube</a></li>
          <li><a href="/twitch/">Twitch</a></li>
          <li><a href="/facebook/">Facebook</a></li>
          <li><a href="/twitter/">Twitter</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="navbar-fixed header">
    <nav>
      <div class="nav-wrapper blue-grey">
        <a data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <a href="#!" class="brand-logo center"><img class="logo" /></a>
        <ul class="right hide-on-med-and-down">
            <li><a onclick="$('.menu').toggleClass('hide'); $('header').toggleClass('show');" >Menu</a></li>
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