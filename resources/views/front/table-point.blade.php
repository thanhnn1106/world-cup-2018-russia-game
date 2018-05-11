@extends('front.layout')
@section('content')

<div class="container paddings-mini">
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
                    <tr>
                        <td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/colombia.png') }}" alt="Colombia"><span>Colombia</span>
                        </td>
                        <td>38</td>
                        <td>26</td>
                        <td>9</td>
                        <td>3</td>
                        <td>73</td>
                        <td>32</td>
                        <td>+41</td>
                        <td>87</td>
                    </tr>

                    <tr>
                        <td class="text-left number">2 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/bra.png') }}" alt="Brazil"><span>Brazil</span>
                        </td>
                        <td>38</td>
                        <td>24</td>
                        <td>7</td>
                        <td>7</td>
                        <td>83</td>
                        <td>38</td>
                        <td>+45</td>
                        <td>79</td>
                    </tr>

                    <tr>
                        <td class="text-left number">3 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/arg.png') }}" alt="Argentina"><span>Argentina</span>
                        </td>
                        <td>38</td>
                        <td>22</td>
                        <td>9</td>
                        <td>7</td>
                        <td>71</td>
                        <td>36</td>
                        <td>+35</td>
                        <td>75</td>
                    </tr>

                    <tr>
                        <td class="text-left number">4<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/japan.png') }}" alt="Japan"><span>Japan</span>
                        </td>
                        <td>38</td>
                        <td>20</td>
                        <td>10</td>
                        <td>8</td>
                        <td>62</td>
                        <td>37</td>
                        <td>+25</td>
                        <td>70</td>
                    </tr>

                    <tr>
                        <td class="text-left number">5  <i class="fa fa-caret-up" aria-hidden="true"></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/sen.png') }}" alt="Senegal"><span>Senegal</span>
                        </td>
                        <td>38</td>
                        <td>19</td>
                        <td>7</td>
                        <td>12</td>
                        <td>58</td>
                        <td>53</td>
                        <td>+5</td>
                        <td>64</td>
                    </tr>

                    <tr>
                        <td class="text-left number">6<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/pol.png') }}" alt="Poland"><span>Poland</span>
                        </td>
                        <td>38</td>
                        <td>18</td>
                        <td>8</td>
                        <td>12</td>
                        <td>52</td>
                        <td>48</td>
                        <td>+4</td>
                        <td>62</td>
                    </tr>

                    <tr>
                        <td class="text-left number">7<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img  src="{{ asset_front('img/clubs-logos/rusia.png') }}" alt="Russia"><span>Russia</span>
                        </td>
                        <td>38</td>
                        <td>18</td>
                        <td>6</td>
                        <td>14</td>
                        <td>54</td>
                        <td>33</td>
                        <td>+21</td>
                        <td>60</td>
                    </tr>

                    <tr>
                        <td class="text-left number">8<i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/irn.png') }}" alt="Iran"><span>Iran</span>
                        </td>
                        <td>38</td>
                        <td>12</td>
                        <td>11</td>
                        <td>15</td>
                        <td>48</td>
                        <td>50</td>
                        <td>-2</td>
                        <td>47</td>
                    </tr>

                    <tr>
                        <td class="text-left number">9 <i class="fa fa-circle" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/esp.png') }}" alt="Spain"><span>Spain</span>
                        </td>
                        <td>38</td>
                        <td>26</td>
                        <td>9</td>
                        <td>3</td>
                        <td>73</td>
                        <td>32</td>
                        <td>+41</td>
                        <td>87</td>
                    </tr>

                    <tr>
                        <td class="text-left number">10<i class="fa fa-circle" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/fra.png') }}" alt="France"><span>France</span>
                        </td>
                        <td>38</td>
                        <td>24</td>
                        <td>7</td>
                        <td>7</td>
                        <td>83</td>
                        <td>38</td>
                        <td>+45</td>
                        <td>79</td>
                    </tr>

                    <tr>
                        <td class="text-left number">11<i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/aus.png') }}" alt="Australia"><span>Australia</span>
                        </td>
                        <td>38</td>
                        <td>22</td>
                        <td>9</td>
                        <td>7</td>
                        <td>71</td>
                        <td>36</td>
                        <td>+35</td>
                        <td>75</td>
                    </tr>

                    <tr>
                        <td class="text-left number">12<i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/mex.png') }}" alt="Mexico"><span>Mexico</span>
                        </td>
                        <td>38</td>
                        <td>20</td>
                        <td>10</td>
                        <td>8</td>
                        <td>62</td>
                        <td>37</td>
                        <td>+25</td>
                        <td>70</td>
                    </tr>

                    <tr>
                        <td class="text-left number">13 <i class="fa fa-circle" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/pan.png') }}" alt="Panama"><span>Panama</span>
                        </td>
                        <td>38</td>
                        <td>19</td>
                        <td>7</td>
                        <td>12</td>
                        <td>58</td>
                        <td>53</td>
                        <td>+5</td>
                        <td>64</td>
                    </tr>

                    <tr>
                        <td class="text-left number">14<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/bel.png') }}" alt="Belgium"><span>Belgium</span>
                        </td>
                        <td>38</td>
                        <td>18</td>
                        <td>8</td>
                        <td>12</td>
                        <td>52</td>
                        <td>48</td>
                        <td>+4</td>
                        <td>62</td>
                    </tr>

                    <tr>
                        <td class="text-left number">15<i class="fa fa-caret-up" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img  src="{{ asset_front('img/clubs-logos/eng.png') }}" alt="England"><span>England</span>
                        </td>
                        <td>38</td>
                        <td>18</td>
                        <td>6</td>
                        <td>14</td>
                        <td>54</td>
                        <td>33</td>
                        <td>+21</td>
                        <td>60</td>
                    </tr>

                    <tr>
                        <td class="text-left number">16<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                        <td class="text-left">
                            <img src="{{ asset_front('img/clubs-logos/srb.png') }}" alt="Serbia"><span>Serbia</span>
                        </td>
                        <td>38</td>
                        <td>12</td>
                        <td>11</td>
                        <td>15</td>
                        <td>48</td>
                        <td>50</td>
                        <td>-2</td>
                        <td>47</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
