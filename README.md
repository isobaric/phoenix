# <center>Horseloft API Framework</center>

A simple php API framework

# 版本说明
1. 版本号第一位数字为大版本号，版本变更不向下兼容，用于整体功能升级和框架结构升级
2. 版本号第二位数字为中版本号，版本变更向下兼容，用于新增功能
3. 版本号第三位数字为小版本号，版本变更向下兼容，用于BUG修复
4. v1.x.x依赖PHP需>=7.1
5. v2.x.x依赖PHP需>=8.1

# 基础功能说明

## 目录结构
> Application   项目代码主目录
>
> > Controllers	    控制器目录，路由指向的代码目录
> >
> > Interceptor	    拦截器目录，路由可选参数 interceptor 代码目录
> >
> > Models		    模型目录，数据库模型代码目录（非必要目录）
> >
> > Runtime		    异常处理目录，用于异常捕获的处理
>
> Config	框架配置文件目录
>
> Core		框架基础加载目录
>
> Log		框架默认日志目录
>
> Public    框架项目入口目录
>
> Route		框架路由文件目录

## 项目安装
1. 重命名 env.ini.example 为 env.ini

   ```shell
   mv env.ini.example env.ini
   ```

2. 安装项目依赖

   ```shell
   composer install
   ```

## 路由
1. 目录**Route**中的文件将被自动加载

2. 路由仅支持**GET**和**POST**请求

3. 路由指向的类方法必须是**静态方法**

4. 支持三种路由声明方式

   ```php
   use Horseloft\Phalanx\Builder\Route;
   
   // 1 路由组
   Route::group([], function () {
   		// 2 POST请求路由
       Route::post('index', 'IndexController::index');
   });
   // 3 GET请求路由
   Route::get('/', 'IndexController::index');
   ```

5. 配置路由命名空间（路由基础命名空间 **Application\Controllers**）

   ```php
   // 路由指向 Application\Controllers\Home\IndexController 下的index方法
   Route::group(['namespace' => 'Home'], function () {
       Route::post('index', 'IndexController::index');
   });
   
   // 路由指向 Application\Controllers\Home\IndexController 下的index方法
   Route::get('index', 'IndexController::index', 'Home');
   ```

6. 配置路由拦截器

   ```php
   // 拦截器名称default，对应目录Interceptor下的DefaultInterceptor.php
   Route::group(['interceptor' => ['default']], function () {
       Route::post('index', 'IndexController::index');
   });
   
   // 拦截器名称default，对应目录Interceptor下的DefaultInterceptor.php
   Route::get('index', 'IndexController::index', null, 'default');
   ```

7. 配置路由前缀（仅路由组支持）

   ```php
   // 完整路由为：home/index
   Route::group(['prefix' => 'home'], function () {
       Route::post('index', 'IndexController::index');
   });
   ```







**[v1.0.0]**
1. 新增异常处理机制
2. 新增基础functions
3. 新增对于plodder的支持
4. 新增请求日志记录
5. 新增自定义异常处理
6. 新增全局异常处理
7. 新增header输出类型为json
8. 新增CORS处理
9. 新增request记录可配置
10. 配置响应头可修改
11. composer.json更新
12. 编写框架使用文档
