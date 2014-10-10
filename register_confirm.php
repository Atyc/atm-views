<div class="registerPage">
<div class="container">
    
        <div class="col-lg-7 col-lg-push-2">
<div class="row"><h1>Confirm your information</h1><br>
                <div class="alert alert-success">

                    <strong>Name: Nice Reader Name</strong><br><br>
                    <strong>Email: username@domain.com</strong><br><br>
                    <strong>Telephone: 07785963258</strong><br><br>
                    <strong>Address: Address line 1, address line2, city, postcode, country</strong><br><br>
                    <strong>Subscription type: Monthly - pay &pound;10 each month + first month free</strong><br><br>


<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="paypal@atthematch.com">
<input type="hidden" name="currency_code" value="GBP">
<input type="hidden" name="no_shipping" value="1">


<input  class="pull-right" type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_subscribe_SM.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<input type="hidden" name="item_name" value="AtTheMatch Subscription">
<input type="hidden" name="a3" value="30"> <!-- Value per period 10=1 month, 30=1 quarter, 120=1 year-->
<input type="hidden" name="p3" value="3"> <!-- Recurency: 1=monthly, 3=quarterly, 12=yearly-->
<input type="hidden" name="t3" value="M"> <!-- Period: D=days, W=weeks, M=months, Y=years-->

<input type="hidden" name="a1" value="0"> <!-- Trial period 1 price. For a free trial period, specify 0-->
<input type="hidden" name="p1" value="1"> <!-- Trial period 1 duration. Required if you specify a1. Specify an integer value in the allowable range for the units of duration that you specify with t1-->
<input type="hidden" name="t1" value="M"> <!-- Trial Period: D=days, W=weeks, M=months, Y=years-->

<input type="hidden" name="src" value="1"><!-- 1 – subscription payments recur -->
<input type="hidden" name="sra" value="1"><!-- 1 – reattempt failed recurring payments before canceling PayPal attempts to collect the payment two more times before canceling the subscription.-->


	<!--<a href="#"><span class="btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-ok"></i>&nbsp;&nbsp;Pay with Paypal</span></a>-->






<a href="#"><span class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;&nbsp;Modify information</span></a>
<!-- At this point the user is already created and all info saved in DB. The above button will take the user to modify info in his user area-->

<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">

</form>

                </div>

            </div>
        </div>
    </div>
</div>