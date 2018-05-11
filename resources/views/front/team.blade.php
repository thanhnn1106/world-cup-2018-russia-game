@extends('front.layout')
@section('content')

<!-- Nav Filters -->
<div class="portfolioFilter">
    <div class="container">
        <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5>
        <a target="_blank" href="#" data-filter="*" class="current">Show All</a>
        <a target="_blank" href="#" data-filter=".group-a">Group A</a>
        <a target="_blank" href="#" data-filter=".group-b">Group B</a>
        <a target="_blank" href="#" data-filter=".group-c">Group C</a>
        <a target="_blank" href="#" data-filter=".group-d">Group D</a>
        <a target="_blank" href="#" data-filter=".group-e">Group E</a>
        <a target="_blank" href="#" data-filter=".group-f">Group F</a>
        <a target="_blank" href="#" data-filter=".group-g">Group G</a>
        <a target="_blank" href="#" data-filter=".group-h">Group H</a>
    </div>
</div>
<!-- End Nav Filters -->

<div class="container padding-top">
    <div class="row portfolioContainer">

        <!-- Item Team Group A-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-a">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/rusia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43965/topstories.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/rusia.png') }}" alt="logo-team">
                    </span>
                    <h4>Rusia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group A
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43965/topstories.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group A-->

        <!-- Item Team Group A-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-a">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/arabia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43835/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/arabia.png') }}" alt="logo-team">
                    </span>
                    <h4>Saudi Arabia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group A
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43835/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group A-->

        <!-- Item Team Group A-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-a">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/egypt.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43855/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/egy.png') }}" alt="logo-team">
                    </span>
                    <h4>Egypt</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group A
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43855/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group A-->

        <!-- Item Team Group A-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-a">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/uruguay.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43930/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/uru.png') }}" alt="logo-team">
                    </span>
                    <h4>Uruguay</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group A
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43930/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group A-->

        <!-- Item Team Group B-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-b">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/portugal.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43963/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/por.png') }}" alt="logo-team">
                    </span>
                    <h4>Portugal</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group B
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43963/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group B-->

        <!-- Item Team Group B-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-b">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/spain.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43969/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/esp.png') }}" alt="logo-team">
                    </span>
                    <h4>Spain</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group B
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43969/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group B-->

        <!-- Item Team Group B-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-b">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/morocco.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43872/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/mar.png') }}" alt="logo-team">
                    </span>
                    <h4>Morocco</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group B
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43872/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group B-->

        <!-- Item Team Group B-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-b">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/iran.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43817/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/irn.png') }}" alt="logo-team">
                    </span>
                    <h4>Ir Iran</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group B
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43817/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group B-->

        <!-- Item Team Group C-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-c">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/france.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43946/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/fra.png') }}" alt="logo-team">
                    </span>
                    <h4>France</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group C
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43946/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group C-->

        <!-- Item Team Group C-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-c">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/australia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43976/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/aus.png') }}" alt="logo-team">
                    </span>
                    <h4>Australia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group C
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43976/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group C-->

        <!-- Item Team Group C-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-c">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/peru.jpeg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43929/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/per.png') }}" alt="logo-team">
                    </span>
                    <h4>Peru</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group C
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43929/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group C-->

        <!-- Item Team Group C-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-c">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/denmark.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43941/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/den.png') }}" alt="logo-team">
                    </span>
                    <h4>Denmark</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group C
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43941/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group C-->

        <!-- Item Team Group D-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-d">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/argentina.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43922/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/arg.png') }}" alt="logo-team">
                    </span>
                    <h4>Argentina</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group D
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43922/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group D-->

        <!-- Item Team Group D-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-d">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/iceland.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43922/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/isl.png') }}" alt="logo-team">
                    </span>
                    <h4>Iceland</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group D
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43922/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group D-->

        <!-- Item Team Group D-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-d">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/croatia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43922/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/cro.png') }}" alt="logo-team">
                    </span>
                    <h4>Croatia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group D
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43922/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group D-->

        <!-- Item Team Group D-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-d">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/nigeria.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/nga.png') }}" alt="logo-team">
                    </span>
                    <h4>Nigeria</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group D
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group D-->

        <!-- Item Team Group E-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-e">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/brazil.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/bra.png') }}" alt="logo-team">
                    </span>
                    <h4>Brazil</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group E
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group E-->

        <!-- Item Team Group E-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-e">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/switzerland.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/sui.png') }}" alt="logo-team">
                    </span>
                    <h4>Switzerland</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group E
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group E-->

        <!-- Item Team Group E-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-e">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/costa-rica.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/costa-rica.png') }}" alt="logo-team">
                    </span>
                    <h4>Costa Rica</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group E
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43876/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group E-->

        <!-- Item Team Group E-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-e">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/serbia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=1902465/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/sen.png') }}" alt="logo-team">
                    </span>
                    <h4>Serbia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group E
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=1902465/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group E-->

        <!-- Item Team Group F-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-f">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/germany.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=1902465/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/ger.png') }}" alt="logo-team">
                    </span>
                    <h4>Germany</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group F
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=1902465/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group F-->

        <!-- Item Team Group F-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-f">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/mexico.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/mex.png') }}" alt="logo-team">
                    </span>
                    <h4>Mexico</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group F
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group F-->

        <!-- Item Team Group F-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-f">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/sweden.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/swe.png') }}" alt="logo-team">
                    </span>
                    <h4>Sweden</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group F
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group F-->

        <!-- Item Team Group F-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-f">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/corea.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/kor.png') }}" alt="logo-team">
                    </span>
                    <h4>Korea Rep</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group F
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group F-->

        <!-- Item Team Group G-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-g">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/belgium.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/bel.png') }}" alt="logo-team">
                    </span>
                    <h4>Belgium</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group G
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43911/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group G-->

        <!-- Item Team Group G-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-g">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/panama.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/pan.png') }}" alt="logo-team">
                    </span>
                    <h4>Panama</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group G
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group G-->

        <!-- Item Team Group G-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-g">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/tunisia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/tun.png') }}" alt="logo-team">
                    </span>
                    <h4>Tunisia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group G
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group G-->

        <!-- Item Team Group G-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-g">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/england.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/eng.png') }}" alt="logo-team">
                    </span>
                    <h4>England</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group G
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group G-->

        <!-- Item Team Group H-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-h">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/poland.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/pol.png') }}" alt="logo-team">
                    </span>
                    <h4>Poland</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group H
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43914/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group H-->

        <!-- Item Team Group H-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-h">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/senegal.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43879/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/sen.png') }}" alt="logo-team">
                    </span>
                    <h4>Senegal</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group H
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43879/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group H-->

        <!-- Item Team Group H-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-h">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/colombia.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43879/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/colombia.png') }}" alt="logo-team">
                    </span>
                    <h4>Colombia</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group H
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43879/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group H-->

        <!-- Item Team Group H-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-h">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams/japan.jpg') }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43819/index.html">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos/japan.png') }}" alt="logo-team">
                    </span>
                    <h4>Japan</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Stadium
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group H
                    </span>
                </div>
                <a target="_blank" href="http://www.fifa.com/worldcup/teams/team=43819/index.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <!-- End Item Team Group H-->

    </div>
</div>

@endsection
