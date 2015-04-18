# Studies micro-framework Lumen by Laravel
## View the Lumen project
- [Lumen website](http://lumen.laravel.com/)

### Serve Requirements
- PHP >= 5.4
- Mcrypt PHP Extension
- OpenSSL PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

### Create a diretory
	/lumiemExemple (Or create the name of your preference).

###Configure your project

The vhost configuration

    <VirtualHost *:80>
        ServerName yourdomain.dev
        DocumentRoot PATH_TO_PROJECT/public
        SetEnv APPLICATION_ENV "development"
        SetEnv PROJECT_ROOT "PATH_TO_PROJECT" 
        <Directory PATH_TO_PROJECT/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

Register your new vhost
    127.0.0.1 domain.dev

    Obs
        Restart your PHP, after finishing the settings.

###In your browser
    Insert
        yourdomain.dev

Ready, now just have fun.

###Routes of application
    Home
        '/'
    Select
        '/alunos/pesquisar'



