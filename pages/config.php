<?php
auth_reauthenticate();
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );
layout_page_header( 'Clone Project' );
layout_page_begin(  );
print_manage_menu();
?>
<div class="col-md-12 col-xs-12">
	<div class="space-10"></div>
		<div class="form-container" > 
			<div class="widget-box widget-color-blue2">
				<div class="widget-header widget-header-small">
					<h4 class="widget-title lighter"><i class="ace-icon fa fa-clone"></i>Clone Project Configuration</h4>
				</div>
				<div class="widget-body">
					<div class="widget-main no-padding">
						<div class="table-responsive"> 
							<table class="table table-bordered table-condensed table-striped"> 
								<form action="<?php echo plugin_page( 'config_edit' ) ?>" method="post">
								<?php echo form_security_field( 'plugin_Cloneproject_config_edit' ) ?>
									<tr>
										<td class="category" width="30%"><div align="center">
											Copy Hierarchy
										</td>
										<td class="center" width="70%"><div align="center">
											<label><input type="radio" class="ace" name='clone_hierarchy' value="1" <?php echo( ON == plugin_config_get( 'clone_hierarchy'  ) ) ? 'checked="checked" ' : ''?>/>
												 <span class="lbl"> <?php echo plugin_lang_get( 'enabled' )?></span></label>
											<label><input type="radio" class="ace" name='clone_hierarchy' value="0" <?php echo( OFF == plugin_config_get( 'clone_hierarchy' ) ) ? 'checked="checked" ' : ''?>/>
												 <span class="lbl"> <?php echo plugin_lang_get( 'disabled' )?></span></label>
										</td>
									</tr> 
									<tr>
										<td class="category" width="30%"><div align="center">
											Copy Subprojects
										</td>
										<td class="center" width="70%"><div align="center">
											<label><input type="radio" class="ace" name='clone_subprojects' value="1" <?php echo( ON == plugin_config_get( 'clone_subprojects'  ) ) ? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'enabled' )?></span></label>
											<label><input type="radio" class="ace" name='clone_subprojects' value="0" <?php echo( OFF == plugin_config_get( 'clone_subprojects' ) )? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'disabled' )?></span></label>
										</td>
									</tr> 
									<tr>
										<td class="category" width="30%"><div align="center">
											Copy Categories
										</td>
										<td class="center" width="70%"><div align="center">
											<label><input type="radio" class="ace" name='clone_categories' value="1" <?php echo( ON == plugin_config_get( 'clone_categories'  ) ) ? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'enabled' )?></span></label>
											<label><input type="radio" class="ace" name='clone_categories' value="0" <?php echo( OFF == plugin_config_get( 'clone_categories' ) )? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'disabled' )?></span></label>
										</td>
									</tr> 
									<tr>
										<td class="category" width="30%"><div align="center">
											Copy Versions
										</td>
										<td class="center" width="70%"><div align="center">
											<label><input type="radio" class="ace" name='clone_versions' value="1" <?php echo( ON == plugin_config_get( 'clone_versions'  ) ) ? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'enabled' )?></span></label>
											<label><input type="radio" class="ace" name='clone_versions' value="0" <?php echo( OFF == plugin_config_get( 'clone_versions' ) )? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'disabled' )?></span></label>
										</td>
									</tr> 
									<tr>
										<td class="category" width="30%"><div align="center">
											Copy Custom Fields
										</td>
										<td class="center" width="70%"><div align="center">
											<label><input type="radio" class="ace" name='clone_customfields' value="1" <?php echo( ON == plugin_config_get( 'clone_customfields'  ) ) ? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'enabled' )?></span></label>
											<label><input type="radio" class="ace" name='clone_customfields' value="0" <?php echo( OFF == plugin_config_get( 'clone_customfields' ) )? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'disabled' )?></span></label>
										</td>
									</tr> 
									<tr>
										<td class="category" width="30%"><div align="center">
											Copy Users
										</td>
										<td class="center" width="70%"><div align="center">
											<label><input type="radio" class="ace" name='clone_users' value="1" <?php echo( ON == plugin_config_get( 'clone_users'  ) ) ? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'enabled' )?></span></label>
											<label><input type="radio" class="ace" name='clone_users' value="0" <?php echo( OFF == plugin_config_get( 'clone_users' ) )? 'checked="checked" ' : ''?>/>
												<span class="lbl"> <?php echo plugin_lang_get( 'disabled' )?></span></label>
										</td>
									</tr> 
								<form>
							</table>
							<div class="widget-toolbox padding-8 clearfix">
                						<input type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo plugin_lang_get( 'update' )?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<?php
layout_page_end();
