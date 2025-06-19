	<div class="container">
	  <ul>

	    <?php

      $open1 = "";
      $open2 = "";
      $open3 = "";

      if ($page == "prod-1" || $page == "prod-2" || $page == "prod-3" || $page == "prod-4" || $page == "prod-5" || $page == "prod-6" || $page == "prod-7" || $page == "prod-8" || $page == "prod-9" || $page == "prod-10") {
        $open1 = 'class="open"';
      }

      if ($page == "mach-1" || $page == "mach-2" || $page == "mach-3" || $page == "mach-4") {
        $open2 = 'class="open"';
      }


      if ($page == "vehicle-1" || $page == "vehicle-2" || $page == "vehicle-3" || $page == "vehicle-4" || $page == "vehicle-5" || $page == "vehicle-6") {
        $open3 = 'class="open"';
      }


      ?>
	    <li <?php echo $open1; ?>>
	      <h1>
	        Fabrication
	      </h1>
	      <div class="arrow"></div>
	      <div class="content">
	        <a <?php if ($page == "prod-1") { ?>class="acti" <?php } ?> href="transformer-tanks-&-components.php">Transformer Tanks & Components</a>
	        <a <?php if ($page == "prod-2") { ?>class="acti" <?php } ?> href="metal-enclosures.php"> Metal Enclosures & Fire Cabinets</a>
	        <a <?php if ($page == "prod-3") { ?>class="acti" <?php } ?> href="steel-structures.php">Steel Structures</a>
	        <a <?php if ($page == "prod-4") { ?>class="acti" <?php } ?> href="industrial-products.php"> Industrial Products Fabrication </a>
	        <a <?php if ($page == "prod-5") { ?>class="acti" <?php } ?> href="sheet-metal-parts.php">Sheet Metal Parts</a>
	        <a <?php if ($page == "prod-6") { ?>class="acti" <?php } ?> href="solar-panel-structures.php">Solar Panel Structures Assemblies</a>
	        <a <?php if ($page == "prod-7") { ?>class="acti" <?php } ?> href="pump-saddles-&-base-assemblies.php">Pump Saddles & Base Assemblies</a>
	        <!-- <a <?php if ($page == "prod-8") { ?>class="acti" <?php } ?> href="bakery-equipments.php">Bakery equipment</a>
        <a <?php if ($page == "prod-9") { ?>class="acti" <?php } ?> href="industrial-conveyors.php">Industrial Conveyors</a>
        <a <?php if ($page == "prod-10") { ?>class="acti" <?php } ?> href="custom-built-equipment.php">Custom Built Equipment</a> -->
	      </div>
	    </li>
	    <li <?php echo $open2; ?>>
	      <h1>
	        Machining
	      </h1>
	      <div class="arrow"></div>
	      <div class="content">
	        <a <?php if ($page == "mach-1") { ?>class="acti" <?php } ?> href="cnc-machined-components.php">CNC Machined Components </a>
	        <a <?php if ($page == "mach-2") { ?>class="acti" <?php } ?> href="5-axis-cnc-machining.php"> 5 Axis CNC Machined Components </a>
	        <a <?php if ($page == "mach-3") { ?>class="acti" <?php } ?> href="machined-valve-bodies.php">Machined Valve Bodies</a>
	        <!-- <a <?php if ($page == "mach-4") { ?>class="acti" <?php } ?> href="exotic-material-machined-parts.php" >Exotic Material Machined Parts </a> -->
	      </div>
	    </li>
	    <li <?php echo $open3; ?>>
	      <h1>
	        Vehicle Armoring
	      </h1>
	      <div class="arrow"></div>
	      <div class="content">
	        <a <?php if ($page == "vehicle-1") { ?>class="acti" <?php } ?> href="armoured-steel-solutions.php">Armor Steel Solutions</a>
	        <a <?php if ($page == "vehicle-2") { ?>class="acti" <?php } ?> href="precision-bending-solutions-for-ballistic-and-high-strength-steels.php"> Precision Bending Solutions for Ballistic & High Strength Steels </a>
	        <!-- <a <?php if ($page == "vehicle-2") { ?>class="acti" <?php } ?> href="blast-protection-kits.php">Blast Protection Kits</a>
      <a <?php if ($page == "vehicle-3") { ?>class="acti" <?php } ?> href="brackets-&-hinges.php">Brackets & Hinges</a>
      <a <?php if ($page == "vehicle-4") { ?>class="acti" <?php } ?> href="turret-bearing-assemblies.php">Turret Bearing Assemblies</a>
      <a <?php if ($page == "vehicle-5") { ?>class="acti" <?php } ?>s href="armoured-hatch-components.php">Armoured Hatch Components</a>
      <a <?php if ($page == "vehicle-6") { ?>class="acti" <?php } ?> href="vehicle-integration-kits.php">Vehicle Integration Kits</a> -->

	      </div>
	    </li>
	  </ul>
	</div>