<transition name="fade">
<div>
<div id="sharedrive-form-add-directory-heading">
	<h3 id="sd-form-title">Add New Directory</h3>
	<p class="description">Adding new directory under "*Root Directory"</p>
</div>

<div id="sharedrive-form-add-directory-wrap">
	<form id="sharedrive-form-add-directory" method="POST">
		<!--Directory Name-->
		<div class="input-group">
			<label for="sd-directory-name">Directory Name (Optional)</label>
			<input id="sd-directory-name" type="text" name="name" />
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
					<p>You will be the only person that will be allowed to see, edit, and download the directorys.</p>
				</div>
			</div>
			<!--Public-->
			<div class="input-group">
				<label for="sd-so-public">
					<input name="sharing" value="public" id="sd-so-public" type="radio">
					Public
				</label>
				<div class="description">
					<p>Every members of this site will have access to this directory. They cannot however, edit and delete the directory. .</p>
				</div>
			</div>
			<!--My Friends Only-->
			<div class="input-group">
				<label for="sd-so-friends">
					<input name="sharing" value="friends" id="sd-so-friends" type="radio">
					My Friends Only
				</label>
				<div class="description">
					<p>Only your friends will be able to see and download the directory. No edit, and delete access.</p>
				</div>
			</div>
			<!--Share to Group-->
			<div class="input-group">
				<label for="sd-so-group">
					<input name="sharing" value="group" id="sd-so-group" type="radio">
					Share to Groups
				</label>
				<div class="description">
					<p>Share this directory to a specific group</p>
				</div>
			</div>
			<!--Definite-->
			<div class="input-group">
				<label for="sd-so-definite">
					<input name="sharing" value="definite" id="sd-so-definite" type="radio">
					Definite
				</label>
				<div class="description">
					<p>Every selected members of this site will have access to this directory. They cannot however, edit and delete the directory.</p>
				</div>
			</div>
			
		</div>
		
		<!--Submit-->
		<div class="input-group">
			<input v-on:click="" class="sd-button" type="submit" value="Submit" />
			<input class="sd-button" type="reset" value="Reset" />
			<input v-on:click="addDirectoryFormShow=false" class="sd-button" type="reset" value="Cancel" />
		</div>
	</form>
</div>
</div>