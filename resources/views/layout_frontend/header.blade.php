<header class="fixed-top main-header header-white transparent with-side-panel-ico" id="waituk-main-header">
    <div id="nav-section">
        <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
                <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                    <div class="form-group no-margin">
                        <input class="form-control no-border" id="search_term" name="search_term" placeholder="Type & Press Enter" type="text">
                    </div>
                </form>
                <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto m-sm-auto" href="index.html"> <img src="public/images/logo_white1.png" alt="roxine" width="255"> <img src="public/images/logo_majutokoku.png" width="255" alt="roxine"> </a>
                <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                    @include('layout_frontend.menu')
                </div>
                <div class="navbar-pos-search with-side-panel">
                    <a href="#" class="x-search x-search-trigger navbar-link"><i class="custom-icon-search"></i></a>
                    <a href="#" class="x-search icon-close-round navbar-link"><i class="icon-line-cross"></i></a>
                </div>
                <div class="nav-trigger navbar-pos-search overlay-trigger">
                    <a href="#" class="navbar-link"><i class="icon-sort-1"></i></a>
                </div>
            </nav>
        </div>
    </div>
</header>