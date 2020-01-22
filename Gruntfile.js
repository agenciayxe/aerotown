module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {    
        	owl:{
                src: [
                    'assets/owl-carousel/owl.carousel.min.css',
                    'assets/owl-carousel/owl.theme.default.min.css',
                    'assets/owl-carousel/animate.css'
                ],
                dest: 'assets/owl-carousel/owl.css',
            },    	
            js: {
                src: [
                    'js/jquery.js', 
                    'assets/bootstrap/bootstrap.js'
                ],
                dest: 'js/vendor.js',
            }
        },
        uglify: {
            dist: {
                files: {
                    'js/vendor.min.js': ['js/vendor.js'],
                    'js/main.js': ['js/functions.js', 'js/ready.js']
                }
            }
        },
        sass: {
            dist: {
                files: {                    
                    'css/main.css': ['css/main.scss'],
                }
            }
        },
        watch: {
            css: {
                files: 'css/*.scss',
                tasks: ['sass'],
            },
            js: {
                files: ['js/ready.js', 'js/functions.js'],
                tasks: ['concat', 'uglify'],
            },
        }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat','uglify','sass']);
};