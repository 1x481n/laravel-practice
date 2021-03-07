# laravel-practice

日常Laravel相关实践、学习整理。目前使用PHP7.4（后续可能会不断更新）,语法糖一般不做旧版本的兼容。除了用到PHP官方PSR规范、Laravel约定以外，
还会引进其他语言、框架以及业界一些较为流行或认可的方案和设计规范。
  

## 项目

### laravel-ddd-example

 DDD(领域驱动设计)在laravel项目中的实践示例

- <a href="https://content-garden.com/domain-driven-design-ddd-principles-with-laravel" target="_blank">domain-driven-design-ddd-principles-with-laravel</a>

- <a href="https://laraveldaily.com/laravel-models-folder-not/" target="_blank">Laravel Models folder: To Be or Not To Be</a>


 初始化构建：

-  通过 Composer 创建项目

```bash
# 安装全局compoer,略
composer create-project --prefer-dist laravel/laravel laravel-ddd-example
```

-  通过 Laravel 安装器 

```bash
# 可选，如果之前已安装存在网络超时等问题，先卸载旧版本
composer global remove laravel/installer
composer global require laravel/installer
laravel new laravel-ddd-example
```
    
###  扩展

- [关于Laravel](docs/ABOUT_LARAVEL.md)

- [关于MVC](docs/ABOUT_MVC.md)

- [关于lumen](docs/ABOUT_LUMEN.md)

- [Laravel与Symfony、Ruby on rails、Spring](docs/COMPARE.md)

