# Start your project
Create a new [composer](https://github.com/concretecms/composer) project

```bash
composer create-project -n core77/composer-bedrock <mysite>
```

## Set your site name in specific files
Replace <mysite> in
- public/application/config/site.php
- public/htaccess.txt
- docker-compose.yml
- webpack.mix.js

## To Do
Create the application/files directory
```bash
mkdir public/application/files
```

Install Concrete CMS
```bash
./vendor/bin/concrete c5:install -i
```

Install Node dependencies
```bash
npm install
```

# Deployment

## Files and folders
Deploy these 3 folders and 3 files:
- public (folder)
- src (folder)
- vendor (folder)
- .env
- composer.json
- composer.lock
