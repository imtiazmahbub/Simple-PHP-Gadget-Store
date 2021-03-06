
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
	$(document).ready(function() {
	
		var url = window.location;
		// Will only work if string in href matches with location
		$('ul.nav a[href="'+ url +'"]').parent().addClass('active');
		$('div#header div.b-content td.header a[href="'+ url +'"]').parent().addClass('active');

		// Will also work for relative and absolute hrefs
		$('ul.nav a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');
		$('div#header div.b-content td.header a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');
		
	});
	</script>