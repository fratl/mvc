<?php

Route::set('index.php', function() {
	Index::CreateView('Index_view');
});

Route::set('about-us', function() {
	AboutUS::CreateView('AboutUs');
	AboutUS::test();
});

Route::set('contact-us', function() {
	ContactUS::CreateView('ContactUs');
});

?>