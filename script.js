var shareDriveApp = new Vue({
	el: '#sharedrive-file-table',
	data: {
		jasper: 'Jasper had long hair',
		files: sdMockData.files,
		rootClassName: 'hidden',
		show: false,
		showAddFileForm: true,
		showFileTable: true
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
			
			this.files.unshift({ 
				author:'Joseph', 
				name: 'dassdasd', 
				date: '11/24/2016 4:24 PM', 
				scope: 'Public', 
				avatar: '<img class="avatar" src="avatars/1.jpg" alt="Joseph Gabito" />'
			});
		},
		load: function() {
			this.rootClassName = 'show';
		}
	}
});

shareDriveApp.load();