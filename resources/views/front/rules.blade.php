@extends('front.layout')
@section('content')

<div class="container paddings-mini">
    <!-- Content Text-->
    <div class="panel-box padding-b">
        <div class="titles">
            <h4>Rules of game.</h4>
        </div>

        <div class="info-panel">
            <div class="row">
                <div class="col-md-12">
                    <p>1. User predict before 16h00 GMT +7 in the match day.</p>
                    <p>2. Predict Win/Draw/Lose will get <span class="text-danger">100 points</span> if correct.</p>
                    <p>3. Predict Correct Score will get <span class="text-danger">200 points</span> if correct.</p>
                    <p>4. Every user has ONLY <span class="text-danger">1 lucky start</span> (use for 1 match in Group Stage matches). It will <span class="text-danger">x2 point</span> if correct foreach Win/Draw/Lose and Correct Score.</p>
                    <p class="text-danger">- Cannot accumulate for next ROUND (from ROUND 1/16)</p>
                    <p class="text-danger">- Cannot rollback after used.</p>
                    <p>5. Every user has ONLY 1 lucky start (use for 1 match from ROUND 1/16). It will x2 point if correct foreach Win/Draw/Lose and Correct Score.</p>
                    <p class="text-danger">- Cannot rollback after used.</p>
                    <p class="text-danger">NOTE: EVERY CHEATING WILL BE PROHIBIT. If your account was found as fraudulent => It will be block forever.</p>
                </div>
            </div>
        </div>
        @if($isLogged)
        <hr>
        <div class="titles">
            <h4>Fee and prizes.</h4>
        </div>

        <div class="info-panel">
            <div class="row">
                <div class="col-md-12">
                    <h3>Fee: <span class="text-danger">200,000 VNĐ/account.</span></h3>
                    <h3>Total of players: <span class="text-danger">{{ $numberOfUsers }}.</span></h3>
                    <h1>Prize:</h1>
                    <p>- First prize:  <span class="text-danger">{{ number_format($numberOfUsers * 200000 * 0.5, 2) }} VNĐ</span> (The player has the highest point after FINAL MATCH).</p>
                    <p>- Second prize:  <span class="text-danger">{{ number_format($numberOfUsers * 200000 * 0.3, 2) }} VNĐ</span> (The player has the 2nd highest score point after FINAL MATCH).</p>
                    <p>- Third prize:  <span class="text-danger">{{ number_format($numberOfUsers * 200000 * 0.2, 2) }} VNĐ</span> (The player has the 3nd highest score point after FINAL MATCH).</p>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- End Content Text-->
</div>

<!-- End Gray Section - Players -->
@endsection
