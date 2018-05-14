@extends('front.layout')
@section('content')

<style>
    .paddings-mini {
        padding-top: 0px !important;
    }
</style>

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
        @if (count($groupA) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupA as $team)
        <!-- Item Team Group A-->
        <div class="col-md-6 col-lg-4 col-xl-3 group-a">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group A
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-a">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupA) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupA as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group A-->

        <!-- Item Team Group B-->
        @if (count($groupB) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupB as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-b">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group B
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-b">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupB) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupB as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group B-->

        <!-- Item Team Group C-->
        @if (count($groupC) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupC as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-c">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group C
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-c">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupC) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupC as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group C-->

        <!-- Item Team Group D-->
        @if (count($groupD) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupD as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-d">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group D
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-d">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupD) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupD as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group D-->

        <!-- Item Team Group E-->
        @if (count($groupE) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupE as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-e">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group E
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-e">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupE) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupE as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group E-->

        <!-- Item Team Group F-->
        @if (count($groupF) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupF as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-f">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group F
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-f">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupF) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupF as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group F-->

        <!-- Item Team Group G-->
        @if (count($groupG) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupG as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-g">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group G
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-g">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupG) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupG as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group G-->

        <!-- Item Team Group H-->
        @if (count($groupH) <= 0)
        <tr><td colspan="10" align="center">Data not found</td></tr>
        @else
        @foreach($groupH as $team)
        <!-- Item Team Group B -->
        <div class="col-md-6 col-lg-4 col-xl-3 group-h">
            <div class="item-team">
                <div class="head-team">
                    <img src="{{ asset_front('img/clubs-teams') }}/{{ $team->getFlagJpg($team->name) }}" alt="location-team">
                    <div class="overlay"><a target="_blank" href="{{ $team->link_profile }}">+</a></div>
                </div>
                <div class="info-team">
                    <span class="logo-team">
                        <img src="{{ asset_front('img/clubs-logos') }}//{{ $team->getFlag($team->name) }}" alt="logo-team">
                    </span>
                    <h4>{{ $team->name }}</h4>
                    <span class="location-team">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{ $team->fifa_position }}
                    </span>
                    <span class="group-team">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        Group H
                    </span>
                </div>
                <a target="_blank" href="{{ $team->link_profile }}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
        @endforeach
        @endif
        <div class="container paddings-mini group-h">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table-striped table-responsive table-hover result-point">
                        <thead class="point-table-head">
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">TEAM</th>
                                <th class="text-center">P</th>
                                <th class="text-center">W</th>
                                <th class="text-center">D</th>
                                <th class="text-center">L</th>
                                <th class="text-center">GS</th>
                                <th class="text-center">GA</th>
                                <th class="text-center">+/-</th>
                                <th class="text-center">PTS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($groupH) <= 0)
                            <tr><td colspan="10" align="center">Data not found</td></tr>
                            @else
                            <?php $i = 1; ?>
                            @foreach($groupH as $team)
                            <tr>
                                <td class="text-left number">{{ $i }}</td>
                                <td class="text-left">
                                    <img src="{{ asset_front('img/clubs-logos') }}/{{ $team->getFlag($team->name) }}" alt="{{ $team->name }}">
                                    <span>{{ $team->name }}</span>
                                </td>
                                <td>{{ $team->play }}</td>
                                <td>{{ $team->win }}</td>
                                <td>{{ $team->draw }}</td>
                                <td>{{ $team->lose }}</td>
                                <td>{{ $team->goal_for }}</td>
                                <td>{{ $team->goal_again }}</td>
                                <td>{{ (int)$team->goal_for - (int)$team->goal_again }} </td>
                                <td>{{ $team->point }}</td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Item Team Group H-->

    </div>
</div>

@endsection
