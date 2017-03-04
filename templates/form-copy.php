<h3>Copy File</h3>
<form method="POST" action="">
	<div class="input-group">
		<label for="sdCopyDirectory">Select a directory</label>
		<select v-model="copyActionSelectedDir" name="directory" id="sdCopyDirectory">
			<option v-for="directory in directories">{{directory.name}}</option>
		</select>
	</div>
	<div class="stageFilesList" v-if="stageFiles.length!=0">
		The following files will be copied to {{copyActionSelectedDir}}
		<ul class="stageFilesListUl">
			<li class="stageFilesListItem" v-for="stageFile in stageFiles">
				{{stageFile.name}}
			</li>
		</ul>
	</div>
	<div class="input-group">
		<input v-on:click.prevent="" type="submit" value="Copy File" />
	</div>
</form>