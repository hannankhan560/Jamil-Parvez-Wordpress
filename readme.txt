OPTIONAL - rename big_city theme to your own them name
1- change bigcity folder theme name to your project
2- inside of style.css, change big city to your project name
3- find and replace “bigcity” with your project name in functions.php
4- activate your new theme name


USING THEME
1- add a menu called "primary" in the admin
2- add a new page called home and set it to default front page in reading settings
3- create a style guide page in admin to view the default style guide. you'll want to add on to this.


NO WOOCOMMERCE?
1- remove the woocommerce folder
2- remove woocommerce code in wp.css
3- remove includes/func_woocommerce.php


NPM
- remove package-gulp.json
- change CHANGE.local.com to your url in package.json
- terminal to your theme folder
- type "npm install" in terminal to install all dependencies required
- type "npm run dev" 

GIT
- terminal to your theme folder
- git init
- create .gitignore file and add "node_modules", ".DS_Store", "css/main.css"
- git add .
- git commit -m "first"
- create repo at https://bitbucket.org/
- git remote add origin https://YOUR_USERNAME@bitbucket.org/primax/PROJECT.git
- git pull origin master --allow-unrelated-histories
- go to .gitignore and fix merge conflict
- git push --set-upstream origin master


SLACK with GIT
- go to project channel
- @bitbucket and invite them
- /bitbucket connect <your-repository-url> - which is the clone URL
	- /bitbucket connect https://name@bitbucket.org/company/project-name.git
- create subscription
- git push to test it works


SECURITY
1- disable Appearance > Editor, add this to config file: 
define('DISALLOW_FILE_EDIT', true);

2- delete readme.html

3- HARDEN FOLDERS (what Sucuri does)
——————————————————————
wp-content/.htaccess
AND
uploads/.htaccess

<FilesMatch "\.(?i:php)$">
  <IfModule !mod_authz_core.c>
    Order allow,deny
    Deny from all
  </IfModule>
  <IfModule mod_authz_core.c>
    Require all denied
  </IfModule>
</FilesMatch>
——————————————————————

——————————————————————
wp-includes/.htaccess

<FilesMatch "\.(?i:php)$">
  <IfModule !mod_authz_core.c>
    Order allow,deny
    Deny from all
  </IfModule>
  <IfModule mod_authz_core.c>
    Require all denied
  </IfModule>
</FilesMatch>
<Files wp-tinymce.php>
  <IfModule !mod_authz_core.c>
    Allow from all
  </IfModule>
  <IfModule mod_authz_core.c>
    Require all granted
  </IfModule>
</Files>
<Files ms-files.php>
  <IfModule !mod_authz_core.c>
    Allow from all
  </IfModule>
  <IfModule mod_authz_core.c>
    Require all granted
  </IfModule>
</Files>
——————————————————————