module.exports = function(grunt) {
	grunt.initConfig({
		uglify: {
			files: { 
	            src: [
	            	'vendor/js/jquery-2.1.1.js',
	            	//'vendor/js/bootstrap/affix.js',
	            	//'vendor/js/bootstrap/alert.js',
	            	//'vendor/js/bootstrap/button.js',
	            	//'vendor/js/bootstrap/carousel.js',
	            	//'vendor/js/bootstrap/collapse.js',
	            	//'vendor/js/bootstrap/dropdown.js',
	            	//'vendor/js/bootstrap/modal.js',
	            	//'vendor/js/bootstrap/popover.js',
	            	//'vendor/js/bootstrap/scrollspy.js',
	            	//'vendor/js/bootstrap/tab.js',
	            	//'vendor/js/bootstrap/tooltip.js',
	            	//'vendor/js/bootstrap/transition.js',
	            	'vendor/js/script.js'
	            	],  // source files mask
	            dest: 'js/script.js',    // destination folder
	            //expand: true,    // allow dynamic building
	            flatten: true,   // remove all unnecessary nesting
	            //ext: '.min.js'   // replace .js to .min.js
	        }
	    },
	    watch: {
	        js:  { files: 'vendor/js/*.js', tasks: [ 'uglify' ] },
	    }
	});

	// carrega plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Tarefas que serão executadas
  	grunt.registerTask( 'default', [ 'uglify' ] );

  	// Tarefa para Watch
  	grunt.registerTask( 'w', [ 'watch' ] );
};