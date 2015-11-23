module.exports = function(grunt) {
	
	grunt.initConfig({
		
		pkg: grunt.file.readJSON("package.json"),
		
		sass : {
			dist : {
				options: {                      
					style: "compressed"
      			},
				files : {
					"../../public/css/style.min.css" : "scss/main.scss"
				}
			}
		},
		
		watch : {
			css: {
				files : "**/*.scss",
				tasks : ["sass"],
				livereload: true // TODO: Make this work
			}
		},
		
		bower_concat : {
			
			all : {
				dest : "js/bundle.js",
				exclude : ["modernizr"],
				include : ["jquery"]
			}
		},
		
		uglify : {
			bower : {
				options: {
					mangle : true,
					compress : true
    			},
				files : {
					"../../public/js/bundle.min.js" : ["js/bundle.js", "js/main.js"]
    			}
  			}
		}
	});
	
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-bower-concat");
	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-watch");
	
	grunt.registerTask("buildstyles",["watch"]);
	grunt.registerTask("buildscripts", ["bower_concat", "uglify:bower"]);
};