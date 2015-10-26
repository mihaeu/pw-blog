module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        phpunit: {
            classes: {
                dir: 'tests/'
            },
            options: {
                bin: 'phpdbg -qrr vendor/bin/phpunit',
                configuration: 'phpunit.xml.dist',
                colors: true
            }
        },
        watch: {
            test: {
                files: ['src/**/*.php', 'tests/**/*.php'],
                tasks: ['phpunit']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-phpunit');
    grunt.loadNpmTasks('grunt-notify');

    grunt.registerTask('default', ['watch']);

};