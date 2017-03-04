<transition name="fade">
<div>
<div id="sharedrive-form-add-file-heading">
	<h3 id="sd-form-title">Add New File</h3>
	<p class="description">Adding new file under "*Root Directory"</p>
</div>

<div id="sharedrive-form-add-file-wrap">
	<form id="sharedrive-form-add-file" method="POST">
		<!--Upload File-->
		<div class="input-group">
			<input name="file" type="file" />
		</div>
		<!--Sharing Options-->
		<div class="input-group">
			<h3>Sharing Options:</h3>
			<!--Private-->
			<div class="input-group">
				<label for="sd-so-private">
					<input checked name="sharing" value="private" id="sd-so-private" type="radio" />
					Private
				</label>
				<div class="description">
					<p>You will be the only person that will be allowed to see, edit, and download the files.</p>
				</div>
			</div>
			<!--Public-->
			<div class="input-group">
				<label for="sd-so-public">
					<input name="sharing" value="public" id="sd-so-public" type="radio">
					Public
				</label>
				<div class="description">
					<p>Every members of this site will have access to this file. They cannot however, edit and delete the file. .</p>
				</div>
			</div>
			<!--My Friends Only-->
			<div class="input-group">
				<label for="sd-so-friends">
					<input name="sharing" value="friends" id="sd-so-friends" type="radio">
					My Friends Only
				</label>
				<div class="description">
					<p>Only your friends will be able to see and download the file. No edit, and delete access.</p>
				</div>
			</div>
			<!--Share to Group-->
			<div class="input-group">
				<label for="sd-so-group">
					<input name="sharing" value="group" id="sd-so-group" type="radio">
					Share to Groups
				</label>
				<div class="description">
					<p>Share this file to a specific group</p>
				</div>
			</div>
			<!--Definite-->
			<div class="input-group">
				<label for="sd-so-definite">
					<input name="sharing" value="definite" id="sd-so-definite" type="radio">
					Definite
				</label>
				<div class="description">
					<p>Every selected members of this site will have access to this file. They cannot however, edit and delete the file.</p>
				</div>
			</div>
			
		</div>
		<!--File Name-->
		<div class="input-group">
			<label for="sd-file-name">File Name (Optional)</label>
			<input id="sd-file-name" type="text" name="name" />
		</div>
		<!--Description-->
		<div class="input-group">
			<div class="input-group">
				<label for="sd-file-description">Description (Optional)</label>
				<textarea id="sd-file-description" name="description"></textarea>
			</div>
		</div>
		<!--Submit-->
		<div class="input-group">
			<input v-on:click="sdAddNewFile" class="sd-button" type="submit" value="Submit" />
			<input class="sd-button" type="reset" value="Reset" />
			<input v-on:click="showAddFileForm=false" class="sd-button" type="reset" value="Cancel" />
		</div>
	</form>
</div>
</div>