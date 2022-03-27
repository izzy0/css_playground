<?php 

add_action( 'wp_head', function () { ?>
    <style>
        .aff-banner {
			font-family: Almarai, sans-serif;
			color: #353535;
            padding: 10px;
            text-align: center;
            background-color: #fcfcfc;
            font-size:16px;
            width: 100%;
            height: fit-content;
			border:1px solid #efefef;
			border-radius: 5px; 
        }
    </style>
<?php } );



add_action( 'wp_footer', function () { ?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	
        $(document).ready(function () {
console.log('inserted');
           if($('.affiliate').length){
               $('#masthead').append(
                   '<div class="aff-banner">' +
                   'We pride ourselves on sharing only the best products. If you love them too and choose to click on some of the links below, we may be compensated. Pricing and availability is subject to change.'+
                   '</div>');
           }

        });
</script>
<?php } );  