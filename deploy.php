<?php
namespace Deployer;
require 'recipe/laravel.php';
// Configuration
set('application','Batoilogic-backoffice-g01');
set('repository', 'git@github.com:leshrike/batoilogic.git');
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);
// Hosts
host('3.87.71.72')
    ->user('batoilogic')
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/batoilogic/002-batoilogic-backoffice/batoilogic');
// Task
task('build',function(){
	run('cd {{release_path}} && build');
});
task('php-fpm:restart', function () {
    run('sudo /etc/init.d/php7.4-fpm restart');
});

after('deploy:symlink', 'php-fpm:restart');
task('artisan:optimize',function(){});
// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');

//desc('Ejecuta las migraciones en base a los seeders');
//task('artisan:migrate:fresh',function(){
//	run('{{bin/php}} {{release_path}}/artisan migrate:fresh --seed --force');
//});

//before('deploy:symlink','artisan:migrate:fresh');
