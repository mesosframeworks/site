module.exports = function(grunt) {
	
	grunt.initConfig({
		
		pkg: grunt.file.readJSON("package.json"),
		
		watch: {
			
			scriptsadmin : {
				files: ["js/admin.js"],
				tasks: ["uglify:admin"]
			},
			scriptssites : {
				files: ["js/sites.js"],
				tasks: ["uglify:sites"]
			},
			scriptsrepository : {
				files: ["js/*repository.js"],
				tasks: ["uglify:repository"]
			},
			scriptslogoGenerator : {
				files: ["js/logoGenerator.js"],
				tasks: ["uglify:logoGenerator"]
			},

			
			stylesadmin : {
				files: "**/*.scss",
			    tasks: ["sass:admin"]		
			},
			stylessites : {
				files: ["**/*.scss"],
			    tasks: ["sass:sites"]
			},
			stylesrepository : {
				files: ["**/*.scss"],
				tasks: ["sass:repository"]
			},
			styleslogoGenerator: {
				files: ["**/*.scss"],
				tasks: ["sass:logoGenerator"]	
			}		
		},
		
		sass : {
			admin : {
				options: {                      
					style: "compressed"
      			},
				files : {
					"../../public/css/admin.min.css" : "scss/admin/main.scss"
				}
			},
			sites : {
				options: {                      
					style: "compressed"
      			},
				files : {
					"../../public/css/sites.min.css" : "scss/sites/main.scss"
				}
			},
			repository : {
				options: {                      
					style: "compressed"
      			},
				files : {
					"../../public/css/repository.min.css" : "scss/repository/main.scss"
				}
			},
			logoGenerator : {
				options: {                      
					style: "compressed"
      			},
				files : {
					"../../public/css/logoGenerator.min.css" : "scss/logoGenerator.scss"
				}
			}
		},
		
		bower_concat : {
			
			admin : {
				dest : "js/temp/bundle-admin.js",
				exclude : ["modernizr"],
				include : ["jquery", "foundation", "dropzone", "prism"]
			},
			sites : {
				dest : "js/temp/bundle-sites.js",
				exclude : ["modernizr"],
				include : ["jquery", "foundation", "jquery.cycle2.min", "jquery.scrollTo"]
			},
			repository : {
				dest : "js/temp/bundle-repository.js",
				include : ["jquery"]
			},
			logoGenerator : {
				dest : "js/temp/bundle-logoGenerator.js",
				exclude : ["modernizr"],
				include : ["jquery", "foundation"]
			}
		},
		
		uglify : {
			admin : {
				options: {
					mangle : true,
					compress : true
    			},
				files : {
					"../../public/js/admin.min.js" : ["js/temp/bundle-admin.js", "js/admin.js"]
    			}	
			},
			sites : {
				options: {
					mangle : true,
					compress : true
    			},
				files : {
					"../../public/js/sites.min.js" : ["js/temp/bundle-sites.js", "js/sites.js"]
    			}
			},
			repository : {
				options: {
					mangle : true,
					compress : true
    			},
				files : {
					"../../public/js/repository.min.js" : ["js/temp/bundle-repository.js", "js/repository.js"]
    			}
			},
			logoGenerator : {
				options: {
					mangle : true,
					compress : true
    			},
				files : {
					"../../public/js/logoGenerator.min.js" : ["js/temp/bundle-logoGenerator.js", "js/logoGenerator.js"]
    			}
			}
		}
	});
	
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-bower-concat");
	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-watch");
	
	grunt.registerTask("build", ["bower_concat", "uglify", "sass"]);
	
	grunt.registerTask("buildadmin", ["bower_concat:admin", "uglify:admin"]);	
	grunt.registerTask("buildsites", ["bower_concat:sites", "uglify:sites"]);	
	grunt.registerTask("buildrepository", ["bower_concat:repository", "uglify:repository"]);	
	grunt.registerTask("buildlogoGenerator", ["bower_concat:logoGenerator", "uglify:logoGenerator"]);
};