<?php
$hier		= plugin_config_get( 'clone_hierarchy'  );
$sub		= plugin_config_get( 'clone_subprojects'  );
$cat		= plugin_config_get( 'clone_categories'  );
$versions	= plugin_config_get( 'clone_versions'  );
$custom 	= plugin_config_get( 'clone_customfields'  );
$users 		= plugin_config_get( 'clone_users'  );
$f_project_id	= helper_get_current_project();;
?>
<div class="col-md-12 col-xs-12">
	<div class="space-10"></div>
	<div id="clone_project-div" class="form-container">
		<form id="manage-project-clone" method="post" action="manage_proj_clone.php">
			<div class="widget-box widget-color-blue2">
				<div class="widget-header widget-header-small">
					<h4 class="widget-title lighter">
				        	<?php print_icon( 'fa-clone', 'ace-icon' ); ?>
				        	<?php echo lang_get('Clone Current Project') ?>
					</h4>
				</div>
				<div class="widget-body">
					<div class="widget-main no-padding">
						<div class="table-responsive">
							<fieldset>
								<?php echo form_security_field( 'manage_proj_clone' ) ?>
								<input type='hidden' name='project_id' value='<?php echo $f_project_id ?>'  />
							</fieldset>
							<table class="table table-bordered table-condensed table-striped">
								<tbody>
									<tr>
										<td class="category">
											<label for="clone-project-name">
											<span class="required">*</span>
											<?php  echo lang_get( 'project_name' )?></label>
										</td>
										<td>
											<input type="text" id="clone-project-name" name="new_name" class="input-sm" size="60" maxlength="128" />
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="clone-project-description"><?php   echo  lang_get( 'description' )?></label>
										</td>
										<td>
											<textarea id="clone-project-description" name="description" class="form-control" cols="70" rows="5"></textarea>
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="hier">Copy Hierarchy</label>
										</td>
										<td>
											<input type="checkbox" id="hier" name="hier" <?php check_checked( (int)$hier, ON ); ?>>			
											<span class="lbl"></span>
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="sub">Copy Sub-Projects</label>
										</td>
										<td>
											<input type="checkbox" id="sub" name="sub" <?php check_checked( (int)$sub, ON ); ?>>
											<span class="lbl"></span>
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="cat">Copy Categories</label>
										</td>
										<td>
											<input type="checkbox" id="cat" name="cat" <?php check_checked( (int)$cat, ON ); ?>>
											<span class="lbl"></span>
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="ver">Copy Versions</label>
										</td>
										<td>
											<input type="checkbox" id="ver" name="ver" <?php check_checked( (int)$versions, ON ); ?>>
											<span class="lbl"></span>
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="custom">Copy Custom Fields</label>
										</td>
										<td>
											<input type="checkbox" id="custom" name="custom" <?php check_checked( (int)$custom, ON ); ?>>
											<span class="lbl"></span>
										</td>
									</tr>
									<tr>
										<td class="category">
											<label for="users">Copy Users</label>
										</td>
										<td>
											<input type="checkbox" id="users" name="users" <?php check_checked( (int)$users, ON ); ?>>
											<span class="lbl"></span>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="widget-toolbox padding-8 clearfix">
							<span class="required pull-right"> * required</span>
							<span class=form-inline></span> 
							<input type="submit" name="copy_from" class="btn btn-sm btn-primary btn-white btn-round" value="<?php  echo  'Clone Project'  ?>"/>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
