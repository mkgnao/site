<!-- BEGIN LAYOUTS/PARTIALS/MAINCONTENT -->

<main class="HolyGrail-body opaque">
    <article class="HolyGrail-content" class="u-textCenter">
        <div class="Container">
            <div class="Grid Grid--guttersLg Grid--full med-Grid--fit">
                <div class="Grid-cell">
                    <!-- should be in motherfucking md file -->
                    <div class="center-title">THE CATEGORY</div>
                    <div id="center-tagline" class="center-tagline">
                        <div class="center-tagline-company" >The writing company.</div>
                        <div class="center-tagline-company" >We write like motherfuckers.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrollable">
            @yield('content')
        </div>
    </article>
    <nav class="HolyGrail-nav u-textCenter">
    </nav>
    <aside class="HolyGrail-ads u-textCenter">
    </aside>
</main>

<!-- END LAYOUTS/PARTIALS/MAINCONTENT -->