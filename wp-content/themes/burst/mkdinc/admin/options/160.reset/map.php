<?php

$resetPage = new BurstMikadoAdminPage(
	"21",
	esc_html__( "Reset", 'burst' ),
	"icon_refresh"
);
$burst_mikado_Framework->mkdOptions->addAdminPage(
	esc_html__( "Reset", 'burst' ),
	$resetPage
);

//Reset

$panel1 = new BurstMikadoPanel(
	esc_html__( "Reset to Defaults", 'burst' ),
	"reset_panel"
);
$resetPage->addChild(
	"panel1",
	$panel1
);

$reset_to_defaults = new BurstMikadoField(
	"yesno",
	"reset_to_defaults",
	"no",
	esc_html__( "Reset to Defaults", 'burst' ),
	esc_html__( "This option will reset all Mikado Settings values to defaults", 'burst' )
);
$panel1->addChild(
	"reset_to_defaults",
	$reset_to_defaults
);