<div class="wrap">
	<h1>Set status message</h1>

	<form method="post" action="options.php">
		<?php
		settings_fields( 'wpsm-options' );
		do_settings_sections( 'wpsm-options' );
		?>
		<table class="form-table" role="presentation">
			<tbody>
			<tr>
				<th scope="row"><label for="wpsm_enabled">Status message enabled?</label></th>
				<td>
					<fieldset>
						<label for="wpsm_enabled">
							<input name="wpsm_enabled" type="checkbox" id="wpsm_enabled" value="1">Yes</label>
						<p class="description">If yes - the message will be displayed for all users. If no - everything will be like the plugin is disabled.</p>
					</fieldset>
				</td>
			</tr>
			<tr>
				<th scope="row"><label for="wpsm_enabled">Override the message?</label></th>
				<td><fieldset>
						<label for="wpsm_enabled">
							<input name="wpsm_override" type="checkbox" id="wpsm_override" value="1">Yes</label>
						<p class="description">If yes - the message will be overridden in all subsites.</p>
					</fieldset></td>
			</tr>

			</tbody></table>



		<h2 class="title">Update status message</h2>


		<p><label for="ping_sites">
			This message will be appeared in WordPress Admin Dashboard.
			</label></p>

		<textarea name="wpsm_text" id="wpsm_text" class="large-text code" rows="3" spellcheck="false"></textarea>
		<?php submit_button(); ?>
</div>