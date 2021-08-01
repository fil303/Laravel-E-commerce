<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
<button id="go"> upload </button>
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>


$(document).ready(function(){

  $('#go').click(function(){

	  	axios.get('https://fakestoreapi.com/products')
	  .then(function (response) {
	    // handle success
	    //
	    axios.post('/upload',{ data : response.data});
	  })
	  .catch(function (error) {
	    // handle error
	    console.log(error);
	  })
	  .then(function () {
	    // always executed
	  });
  });

});


</script>
</body>
</html>