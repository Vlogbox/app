https://github.com/cakephp/app/blob/master/README.md

#clone the repo
git clone https://github.com/Vlogbox/app
cd app

#install the plugins
composer require dereuromark/cakephp-tinyauth
bin/cake plugin load TinyAuth
composer require mobiledetect/mobiledetectlib
bin/cake plugin load mobiledetect/mobiledetectlib
composer require cakephp/plugin-installer  
bin/cake plugin load cakephp/plugin-installer  
composer require cakephp/migrations
bin/cake plugin load cakephp/migrations
composer require josegonzalez/cakephp-upload
bin/cake plugin load josegonzalez/cakephp-upload


#do the database migrations
bin/cake bake migration CreateVideos name:string  category_id:int description:string url:string created modified
bin/cake bake migration CreateCategories is_active:int rght:int lft:int parent_id:int name:string created modified
bin/cake bake migration CreateUsers user_role_id:int email:string password:string created modified
bin/cake migrations migrate
