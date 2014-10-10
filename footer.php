<footer><div class="container-fluid"> <!-- 2 2 3 5 -->
 <div class="row footer">
	<div class="col-xs-4 col-sm-2 col-md-3 col-lg-2">
	<h3>SOCIAL MEDIA</h3>
		<ul class="list-unstyled">
		<li><a href="#">LinkedIn</a></li>
		<li><a href="#">Twitter</a></li>
		<li><a href="#">Youtube</a></li>
		</ul>
	</div>
	<div class="col-xs-4 col-sm-2 col-md-3 col-lg-2">
	<h3>ABOUT US</h3>
		<ul class="list-unstyled">
		<li><a href="#">AtTheMatch</a></li>
		<li><a href="#">Our mission</a></li>
		<li><a href="#">Careers</a></li>
		<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
	<h3>OUR NETWORK</h3>
		<ul class="list-unstyled">
		<li><a href="#">The Stadium</a></li>
		<li><a href="#">The Magazine</a></li>
		<li><a href="#">Creating Moments</a></li>
		</ul>	
	</div>
	<div class="col-xs-12 col-sm-5 col-md-3 col-lg-5">
		<img src="images/bottom_logo.jpg" class="img-responsive bottomlogo">
	</div>
	

 </div>
</div></footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="bootstrap-3.2.0-dist/assets/js/ie10-viewport-bug-workaround.js"></script>-->
	<script>
	$(function () { $("[data-toggle='tooltip']").tooltip(); });

	$(document).ready(function(){

    var theImg = $('#container img');
    var theContainer = $('#container');
    if(theImg.width() > theContainer.width()){
        theImg.css({
            position: 'relative',
            left: (theContainer.width() - theImg.width()) / 2
        })
    }
})
	</script>

<script>

jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>


  </body>
</html>