<?php
// authenticate
form_security_validate( 'plugin_Cloneproject_config_edit' );
auth_reauthenticate();
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

// Read results
$f_hierarchy 		= gpc_get_int( 'clone_hierarchy', ON );
$f_sub			    = gpc_get_int( 'clone_subprojects', ON );
$f_cat			    = gpc_get_int( 'clone_categories', ON );
$f_versions		  = gpc_get_int( 'clone_versions', OFF );
$f_custom		    = gpc_get_int( 'clone_customfields', ON );
$f_users		    = gpc_get_int( 'clone_users', ON );

// update results
if( plugin_config_get( 'clone_hierarchy' ) != $f_hierarchy ) {
	plugin_config_set( 'clone_hierarchy', $f_hierarchy );
}
if( plugin_config_get( 'clone_subprojects' ) != $f_sub ) {
	plugin_config_set( 'clone_subprojects', $f_sub );
}
if ( plugin_config_get( 'clone_categories' ) != $f_cat ) {
	plugin_config_set( 'clone_categories', $f_cat );
}
if ( plugin_config_get( 'clone_versions' ) != $f_versions ) {
	plugin_config_set( 'clone_versions', $f_versions );
}
if ( plugin_config_get( 'clone_customfields' ) != $f_custom ) {
	plugin_config_set( 'clone_customfields', $f_custom );
}
if ( plugin_config_get( 'clone_users' ) != $f_users ) {
	plugin_config_set( 'clone_users', $f_users );
}

// redirect
form_security_purge( 'plugin_Cloneproject_config_edit' );
print_header_redirect( plugin_page( 'config', TRUE ) );
