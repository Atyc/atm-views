<div class="registerPage">
<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <br>
				<h2>Fill in the form below to register</h2>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"  data-toggle="tooltip"  title="Required field"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"  data-toggle="tooltip"  title="Required field"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"  data-toggle="tooltip"  title="Required field"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputPhone">Enter phone number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputPhone" id="InputPhone" placeholder="Enter phone">
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				<div class="form-group">
                    <label>Enter address</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="line1" id="line1" placeholder="Address line 1">
                        <input type="text" class="form-control" name="line2" id="line2" placeholder="Address line 2">
                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                        <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="Postal Code">
                        <input type="text" class="form-control" name="country" id="country" placeholder="Country">
                        <span class="input-group-addon"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label>Choose your subscription type</label>
                    <div class="input-group subform">
                        <label class="radio"><input class="radio_buttons" id="user_gender_male" name="subscriptionType" type="radio" value="Free">Free - get a month free!</label>
                        <label class="radio"><input class="radio_buttons" id="user_gender_male" name="subscriptionType" type="radio" value="Monthly">Monthly - pay &pound;10 each month + first month free</label>
                        <label class="radio"><input class="radio_buttons" id="user_gender_male" name="subscriptionType" type="radio" value="Quarterly" checked>Quarterly - pay &pound;30 each quarter + first month free</label>
                        <label class="radio"><input class="radio_buttons" id="user_gender_male" name="subscriptionType" type="radio" value="Yearly">Yearly - pay &pound;120 each year + first month free</label>
                    </div>
                </div>

<!--
                <div class="form-group">
                    <label for="InputMessage">Enter Message</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"></textarea>
                        <span class="input-group-addon"></span>
                    </div>
                </div>
				-->
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-lg-push-1 col-md-6 col-sm-6">
            <div class="col-md-12"><br><br><Br><br>
                <div class="alert alert-success">
<h4>Why register</h4><br>
                    <strong><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Get access to hundreds of articles.</strong><br><br>
                    <strong><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Follow your favourite journalists.</strong><br><br>
                    <strong><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Comment on any of the articles.</strong><br>
                </div>
<!--
				<div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
-->
            </div>
        </div>
    </div>
</div><br>
</div>