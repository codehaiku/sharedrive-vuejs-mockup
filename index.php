<!DOCTYPE html>
<html>
<head>
	<title>Dunhakdis: Vue JS 101</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="container">
	<div id="sharedrive-file-table">

		 <div>
			<a class="sd-button button" href="#" v-on:click="sdAddNewFile($event)">
				Add New File
			</a>
		</div>

		<div id="sd-section-form-add-backdrop">
			<div id="sd-section-form-add" v-if="showAddFileForm">
				
				<?php require_once 'templates/form-add.php'; ?>
				
			</div>
		</div>
	
		<div v-if="showFileTable" class="hidden" v-bind:class="rootClassName">

			<div id="sharedrive-file-table-table" v-if="files.length >= 1">

				<div class="sharedrive-headings">
					<h3 class="sharedrive-title sharedrive-headings-th">Name</h3>
					<h3 class="sharedrive-item sharedrive-date sd-date sharedrive-headings-th">Date</h3>
					<h3 class="sharedrive-item sharedrive-scope sd-scope sharedrive-headings-th">Scope</h3>
					<h3 class="sharedrive-item sharedrive-owner sd-ower sharedrive-headings-th">Owner</h3>
				</div>

				<transition-group name="fade">
					<div class="sharedrive-node-items" v-bind:key="file" v-for="(file, key) in files">
						<ul>
							<li class="sharedrive-title">
								<a class="sd-file-archive-title" href="#">
									{{file.name}}
								</a>
								<div class="sd-archive-actions">
									<ul class="sd-archive-actions-list">
										<li class="sd-archive-actions-list-item"><a href="#">Move</a></li>
										<li class="sd-archive-actions-list-item"><a href="#">Copy</a></li>
										<li class="sd-archive-actions-list-item"><a href="#">Rename</a></li>
										<li class="sd-archive-actions-list-item">
											<a href="#" v-on:click="sdAppDelete(key, $event)">
												<span class="sd-archive-trash">Trash</span></a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sharedrive-item sharedrive-date">{{file.date}}</li>
							<li class="sharedrive-item">{{file.scope}}</li>
							<li class="sharedrive-item sharedrive-owner" v-html="file.avatar"></li>
						</ul>
					</div>
				</transition>

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