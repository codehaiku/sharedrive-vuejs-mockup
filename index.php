<!DOCTYPE html>
<html>
<head>
	<title>Dunhakdis: Vue JS 101</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="container">
	<div id="sharedrive-file-table">

		<div id="sharedrive-global-actions">

			<div id="shareDriveNewObjectActions">
				<a class="sd-button button" href="#" v-on:click="sdAddNewFile($event)">
					 New File
				</a>
				<a class="sd-button button" href="#" v-on:click.prevent="addDirectoryFormShow=true">
					 New Directory
				</a>
			</div>

			<div id="shareDriveObjectActions">
				<transition name="fade">
					<a v-if="stageFiles.length>=1" class="sd-button button" href="#" v-on:click.prevent="copyFormShow=true">
						Copy
					</a>
				</transition>
				<transition name="fade">
					<a v-if="stageFiles.length>=1" class="sd-button button" href="#" v-on:click.prevent="moveFormShow=true">
						Move
					</a>
				</transition>
				<transition name="fade">
					<a v-if="stageFiles.length>=1" class="sd-button button" href="#" v-on:click.prevent="">
						Trash
					</a>
				</transition>
			</div>

			<div class="clearfix"></div>
			
		</div>

		<div id="sd-section-form-add-backdrop" v-if="showAddFileForm" class="sd-directory-prompt">
			<div id="sd-section-form-add" class="sd-directory-prompt-wrap">
				<?php require_once 'templates/form-add.php'; ?>
			</div>
		</div>

		<div id="sd-section-form-add-directory-backdrop" v-if="addDirectoryFormShow" class="sd-directory-prompt">
			<div id="sd-section-form-directory-add" class="sd-directory-prompt-wrap">
				<?php require_once 'templates/form-add-directory.php'; ?>
			</div>
		</div>
		
		<div id="sd-section-form-copy-backdrop" v-if="copyFormShow" class="sd-directory-prompt">
			<div id="sd-section-form-copy-add" class="sd-directory-prompt-wrap">
				<?php require_once 'templates/form-copy.php'; ?>
			</div>
		</div>

		<div id="sd-section-form-move-backdrop" v-if="moveFormShow" class="sd-directory-prompt">
			<div id="sd-section-form-move" class="sd-directory-prompt-wrap">
				<?php require_once 'templates/form-move.php'; ?>
			</div>
		</div>

		<div id="sd-section-form-rename-backdrop" v-if="renameFormShow" class="sd-directory-prompt">
			<div id="sd-section-form-rename" class="sd-directory-prompt-wrap">
				<?php require_once 'templates/form-rename.php'; ?>
			</div>
		</div>

		<div v-if="showFileTable" class="hidden" v-bind:class="rootClassName">

			<div id="sharedrive-file-table-table" v-if="files.length >= 1">
				<?php require_once 'templates/file-listing.php'; ?>
			</div>
			<div v-if="files.length === 0">
				There are no files
			</div>

		</div>
	
	</div>
</div><!--#container-->
</body>
<script src="vue.js"></script>
<script src="jquery.js"></script>
<script src="mock.js"></script>
<script src="script.js"></script>
</html>