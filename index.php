<?php $activePage = "index.php"; ?>
<?php include 'head.phtml'; ?>
        <div class="w3-container w3-blue w3-center w3-card">
            <h1>Velkommen til fysikklab!</h1>
	    <div class="crop_frame">
	        <img src="assets/sample_image.jpg" class="w3-card" style="margin-top: -135px;">
	    </div>
        </div>
        <div id="content-wrapper">

        <section class="w3-container narrow w3-panel w3-margin-top w3-sand w3-leftbar w3-padding-32">
                 <h2>Fysikklab i IFYKJG1000/IFYKJG1001</h2>
                 <p>
                      På denne siden finner du alt av praktisk informasjon og ressurser som du trenger til fysikklab.
Her kan man ha en velkomsttekst.
</p>
                                                                                                                    <i class="material-icons w3-xxlarge">announcement</i> Gjør alle forberedelsene før du kommer på lab!
        </section>

	<?php
	$resources = array(
    		"Før" => ["Før lab må du laste ned programmet Tracker.", "forberedelser.phtml"],
    		"Under" => ["Du <i>må</i> møte opp på lab!", "lab.phtml"],
    		"Etter" => ["Etter labben skal du skrive en rapport.", "rapport.phtml"]
	);
	include('resources.php');
	?>
</div>  <!-- #content-wrapper -->
<?php include 'footer.phtml'; ?>
