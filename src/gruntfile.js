
module.exports = function(grunt) {

    grunt.initConfig({
        pkg           : grunt.file.readJSON('package.json'),
        styleDir      : '../dist/css',
        mainStyleFile : '<%= styleDir %>/<%= pkg.name %>.css',

        less: {

            // create a sourcemap for dev
            dev: {
                options: {
                    compress: false,
                    sourceMap: true
                },
                files: {
                    '<%= mainStyleFile %>': [
                        'less/site.less'
                    ]
                }
            },

            // no sourcemap live
            dist: {
                options: {
                    compress: false,
                    sourceMap: false
                },
                files: {
                    '<%= mainStyleFile %>': [
                        'less/site.less'
                    ]
                }
            }
        },

        // handles a boatload of optimizations and minification for live
        postcss: {
            dist: {
                options: {
                    map: false,
                    processors: [
                        require('autoprefixer')({
                            browsers: ['last 2 versions', 'ie 9', 'ie 10']
                        }),
                        require('cssnano')()
                    ]
                },
                src: '<%= styleDir %>/*.css'
            }
        },

        watch: {
            options: {
                livereload: true
            },
            styles: {
                files: [
                    'less/**/*.less',
                    'gruntfile.js'
                ],
                tasks: [
                    'less:dev'
                ]
            }
        }
    });

    grunt.registerTask('dev', ['less:dev']);
    grunt.registerTask('dist', ['less:dist', 'postcss:dist']);

    require('load-grunt-tasks')(grunt);
};
