<div class="sharedrive-menu">
	<ul>
		<li class="sharedrive-menu-item"><a href="#">All Files</a></li>
		<li class="sharedrive-menu-item"><a href="#">My Files</a></li>
		<li class="sharedrive-menu-item"><a href="#">Deleted Files</a></li>
	</ul>
</div>
<div class="sharedrive-headings">
	<h3 class="sharedrive-item sd-checkbox"></h3>
	<h3 class="sharedrive-title sharedrive-headings-th">Name</h3>
	<h3 class="sharedrive-item sharedrive-date sd-date sharedrive-headings-th">Date</h3>
	<h3 class="sharedrive-item sharedrive-scope sd-scope sharedrive-headings-th">Scope</h3>
	<h3 class="sharedrive-item sharedrive-owner sd-ower sharedrive-headings-th">Owner</h3>
</div>

<transition-group name="fade">
	<div class="sharedrive-node-items" v-bind:key="file" v-for="(file, key) in files">
		<ul>
			<li class="sharedrive-item sd-checkbox">
				<input v-model="stageFiles" v-bind:value="file" type="checkbox" />
			</li>
			<li class="sharedrive-title">
				<a v-bind:class="file.type" class="sd-file-archive-title" href="#">
					{{file.name}}
				</a>
			</li>
			<li class="sharedrive-item sharedrive-date">{{file.date}}</li>
			<li class="sharedrive-item">{{file.scope}}</li>
			<li class="sharedrive-item sharedrive-owner" v-html="file.avatar"></li>
		</ul>
	</div>
</transition>