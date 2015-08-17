#Blog Laravel学习项目

##安装及环境配置
- Composer安装Laravel

    安装：https://getcomposer.org/download/

    文档：https://getcomposer.org/doc/

    安装命令：`composer create-project laravel/laravel blog`

    Composer究竟有哪些包，你可以直接到这里来看看：

        https://packagist.org/explore/
- 开启服务器
    - php -S localhost:8999 -t public
    - php artisan serve
    - 服务器
- 使用Homestead
- VirtualBox ： https://www.virtualbox.org/wiki/Downloads

- Vagrant ： https://www.vagrantup.com/downloads.html

- vagrant box add laravel/homestead

##路由,视图,控制器工作流程

- 通常我们需要实现某个功能(或者说新创建一个页面)都是这样的：
```
1. 在routes.php中注册路由 ---> 2. 创建对于的控制器 ---> 3. 在控制器中得对于方法加载视图
```
- 对应得实际操作大概是这样的：
```

1. Route::get('/','ArticleController@index');

2. php artisan make:controller ArticleController

3. public function index()
   {
        return view('articles.lists');
   }
```