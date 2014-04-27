'use strict';

module.exports = function (grunt) {

  // load all grunt tasks
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),
 
    uglify: {
      min: {
        files: {
          'public/wp-content/themes/shampine/js/main.js': ['public/wp-content/themes/shampine/js/src/libs/*.js','public/wp-content/themes/shampine/js/src/*.js']
        }
      }
    },
 
    compass: {
      dist: {
        options: {
          config: 'public/wp-content/themes/shampine/css/config.rb',
          sassDir: 'public/wp-content/themes/shampine/css/sass',
          imagesDir: 'public/wp-content/themes/shampine/img',
          cssDir: 'public/wp-content/themes/shampine/css',
          environment: 'production',
          outputStyle: 'compressed',
          force: true
        }
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'public/wp-content/themes/shampine/img/src',
          src: ['*.{png,jpg,gif}'],
          dest: 'public/wp-content/themes/shampine/img/'
        }]
      }
    },

    browser_sync: {
      files: {
        src: 'public/wp-content/themes/shampine/css/screen.css'
      },
      options: {
          host: "localhost",
          watchTask: true
      }
    },

    watch: {
      options: {
        livereload: true
      },
      scripts: {
        files: ['public/wp-content/themes/shampine/js/src/*.js','public/wp-content/themes/shampine/js/src/libs/*.js'],
        tasks: ['uglify']
      },
      styles: {
        files: ['public/wp-content/themes/shampine/css/**/*.{sass,scss}','public/wp-content/themes/shampine/img/ui/*.png'],
        tasks: ['compass']
      },
      images: {
        files: ['public/wp-content/themes/shampine/img/src/*.{png,jpg,gif}'],
        tasks: ['imagemin']
      }
    },
  });
 
  // Development task checks and concatenates JS, compiles SASS preserving comments and nesting, runs dev server, and starts watch
  grunt.registerTask('default', ['compass', 'uglify', 'imagemin', 'browser_sync', 'watch']);
 
 }
