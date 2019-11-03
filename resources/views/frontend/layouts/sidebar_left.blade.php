<aside id="colorlib-aside" role="complementary" class="js-fullheight">
    <nav id="colorlib-main-menu" role="navigation">
        <ul>
            <li class="{{ (\Request::route()->getName() == 'home') ? 'colorlib-active' : '' }}"><a href="{{route('home')}}">Home</a></li>
            <li class="{{ (\Request::route()->getName() == 'articles') ? 'colorlib-active' : '' }}"><a href="{{route('articles')}}">Articles</a></li>
        </ul>
    </nav>
    <div class="colorlib-footer">
        <h1  class="mb-4"><a href="{{route('home')}}">{{$globalConfigs->site_name}}</a></h1>

        <p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
</aside> <!-- END COLORLIB-ASIDE -->