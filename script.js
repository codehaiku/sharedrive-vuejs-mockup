var shareDriveApp = new Vue({
	el: '#sharedrive-file-table',
	data: {
		jasper: 'Jasper had long hair',
		files: sdMockData.files,
		directories: sdMockData.directories,
		rootClassName: 'hidden',
		show: false,

		showAddFileForm: false,
		addDirectoryFormShow: false,
		copyFormShow: false,
		moveFormShow: false,
		renameFormShow: false,

		showFileTable: true,

		stageFiles: [],

		moveActionSelectedDir: 'ROOT',
		copyActionSelectedDir: 'ROOT'

	},
	created: function() {
		console.log('Instance is created.');
	},
	methods: {
		sdAppDelete: function( key, event ) {
			
			event.preventDefault();

			var confirmed = confirm('Are you sure? Really sure?');
			var model = this;

			if ( confirmed ) {
				// fake blurrr
				setTimeout(function(){
					model.files.splice( key, 1 );
				}, 50);
			}

			return;	

		},
		sdAddNewFile: function( event ) {
			event.preventDefault();
			this.showAddFileForm = true;

			/**this.files.unshift({ 
				author:'Joseph', 
				name: 'dassdasd', 
				date: '11/24/2016 4:24 PM', 
				scope: 'Public', 
				avatar: '<img class="avatar" src="avatars/1.jpg" alt="Joseph Gabito" />'
			});**/
		},
		load: function() {
			this.rootClassName = 'show';
		}
	}
});

shareDriveApp.load();

jQuery(document).ready(function(e){

	var shareDriveHidePrompt = function() {

		shareDriveApp.showAddFileForm = false;
		shareDriveApp.addDirectoryFormShow = false;
		shareDriveApp.copyFormShow = false;
		shareDriveApp.moveFormShow = false;
		shareDriveApp.renameFormShow = false;

		return;
	}

	$('body').on( 'click', '.sd-directory-prompt', function(e){
     	//Do nothing if .header was not directly clicked
     	
	    if ( e.target !== e.currentTarget ) {
	    	return;
	    }

	    shareDriveHidePrompt();
		
	});

	$(document).keyup(function(e) {
	    if (e.keyCode == 27) {
	       shareDriveHidePrompt();
	    }
	});

	return;

});