<!-- Include this file with the variable resources defined -->

<!-- The array resoures should be on the form 'Name' => (description, link) -->

<section class="w3-center">
    <h2>Ressurser:</h2>
    <div class="flex-container flex-center">
<?php
foreach ($resources as $key => $value) {
        print('
	<div class="badge">
            <a href="'.$value[1].'" class="badge__circle shadow">
		'.$key.'
            </a>
	    '.$value[0].'
        </div>
	');
} 
?>
    </div>
</section>
