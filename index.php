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

		
		<div v-if="showAddFileForm">
			<h3>Add New File</h3>
			<p class="description">Adding new file under "*Root Directory"</p>
			<div id="sharedrive-form-add-file-wrap">
				<form id="sharedrive-form-add-file">
					<!--Upload File-->
					<div class="input-group">
						<input name="file" type="file" />
					</div>
					<!--Sharing Options-->
					<div class="input-group">
						<h3>Sharing Options:</h3>
						<!--Private-->
						<div class="input-group">
							<label for="">
								<input id="sd-so-private" type="radio" />
								Private
							</label>
							<input id="sd-so-definite" type="radio">
						</div>
						<!--Public-->
						<div class="input-group">
							<input id="sd-so-public" type="radio">
						</div>
						<!--My Friends Only-->
						<div class="input-group">
							<input id="sd-so-friends" type="radio">
						</div>
						<!--Share to Group-->
						<div class="input-group">
							<input id="sd-so-group" type="radio">
						</div>
						<!--Definite-->
						<div class="input-group">
							<input id="sd-so-group" type="radio">
						</div>
						
					</div>
					<!--File Name-->
					<div class="input-group"></div>
					<!--Description-->
					<div class="input-group"></div>
					<!--Submit-->
					<div class="input-group"></div>
				</form>
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