<?php 

//add short code to embedd tags
add_action( 'wp_head', function () { ?>
	<style>
			.table-of-contents {
				font-family: "DM Serif Display", sans-serif;
				font-size: 35px;
			}
			.my-tags {
				max-width: 350px;
				margin: 0 auto;
				padding: 20px;
				border:1px solid #efefef;
				border-radius: 10px;
				background: #fcfcfc;
			}
			.my-tags a {
				transition: all 0.4s ease;
				text-decoration: underline #A3F868;
				color: #000;
			}
			.my-tags a:hover {
				color: #A3F868;
			}
			.my-tags ul li {
			  position: relative;
				padding-bottom: 10px;
			}
			.my-tags ul {
			  list-style: none;
			}
			.my-tags ul li:before{
			   content: "";
			   position: absolute;
			   border-right:2px solid black;
			   border-bottom:2px solid black;
			   width:10px;
			   height:10px;
			   top: calc(50% - 4px);
			   left: -20px;
			   transform: translateY(-50%) rotate(-45deg);
			}
    	</style>
<?php } );

add_action( 'wp_footer', function () { ?>
		<script>
			$(document).ready(function () {

				const preTagId = 'tag-';
				let menuList = '';
				let link = "";
				let tagNum = 0;
				let tagID;
				let url = window.location.toString();
				url = url.split('#')[0];

				let arr = $(".site-content h3").map(function () {
					tagID = preTagId + tagNum;
					$(this).addClass('tag-links');
					$(this).attr('id', tagID);
					link = '<a id= "'+ tagNum + '" class="nav-link" href="' + url + '#' + tagID + '">' + this.textContent + '</a>';
					tagNum ++;
					return link;
				});

				$.each(arr, function (i, item) {
					menuList = menuList.concat('<li class="nav-item">' + item + '</li>');
				});

				$('.my-tags ul').prepend(menuList);

				$('.my-tags a').on('click', function (event) {
					$('.my-tags').find('a').parent().removeClass('tag-active');
					$(this).parent().addClass('tag-active');
				});

				$(window).on('scroll', function () {
					$('.tag-link').each(function () {
						if ($(window).scrollTop() + 350 >= $(this).offset().top) {
							var id = $(this).attr('id');
							$('.my-tags a').parent().removeClass('tag-active');
							$('.my-tags a[id="' + id + '"]').parent().addClass('tag-active');
						}
					});
				});

			});

		</script>
	<?php } );

add_shortcode( 'tableofcontents', function () {
	
	return '<div class="my-tags"><div class="table-of-contents">Table of Contents</div><ul></ul></div>';
});

