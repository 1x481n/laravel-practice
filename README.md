# 说明

  日常工作实践、学习整理。目前使用PHP7.4（后续可能会不断更新）,语法糖一般不做旧版本的兼容。除了用到PHP官方PSR规范、Laravel约定以外，
  还会引进其他语言、框架以及业界一些较为流行或认可的方案和设计规范。
  
## 感悟  
  
  有人说PHP越来越Java化，开始迷失了方向。其实不只PHP，诸如Javascript作为前端语言，从ES5便加入了严格模式，来规避弱类型语言不严谨的问题。
  
  现今企业的项目日趋复杂，早期弱类型的优点，放到特定的项目领域背景下可能是个灾难。Java这么多年能作为企业级大型应用的首选，就是得益于他的
  完全的OOP、类型检查、语义明确等规范，由此建立起了可靠的生态。所以各语言要在市场保持竞争力，改变是不可避免的。同样，JAVA在发展中也逐渐
  意识到自身冗长复杂、欠缺灵活性、开发效率低等缺点，开始接受并借鉴弱类型语言中的各种优点，加入新的特性。
  甚至业界推出了Scala和Kotlin这种基于JVM平台、对Java改良的语言。
  
  所以未来趋势基本是这样的，弱类型语言强类型化，强类型语言弱类型化；动态语言静态化，静态语言动态化。
  世界总是在不停的变化，我们要学会拥抱变化，不要为了逃避学习而找各种借口。
  最后，辩证地看待各种技术，学习归学习，追求极致还是不求甚解完全看个人兴趣。一旦投入生产，请记住软件工程中是“没有银弹”的。
  不要一味去套用流行的技术，在实践中多思考，提出合理质疑、做好取舍，探索出适合的方案。

## Git规范

- [Git规范](docs/GIT_SPECIFICATION.md)

## 更新日志

- <a href="https://keepachangelog.com/zh-CN/0.3.0/" target="_blank">什么是更新日志</a>

- [CHANGELOG](./CHANGELOG.md)


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

