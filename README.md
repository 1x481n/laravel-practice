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

## git提交规范

- angular的提交规范
```
<type>(<scope>): <subject>
// 空一行
<body>
// 空一行
<footer>
```

```
标题行：50个字符以内，描述主要变更内容

主体内容：更详细的说明文本，建议72个字符以内。 需要描述的信息包括: 
    - 为什么这个变更是必须的? 它可能是用来修复一个bug，增加一个feature，提升性能、可靠性、稳定性等等
    - 他如何解决这个问题? 具体描述解决问题的步骤
    - 是否存在副作用、风险? 

尾部：如果需要的化可以添加一个链接到issue地址或者其它文档，或者关闭某个issue。
```

- IDEA的git-commit-template插件

- 本地git提交规范检测的钩子脚本：[commit-msg](./commit-msg)
```
 1、commit-msg文件放到: 当前工作目录/.git/hooks/下     
 2、设置commit-msg权限为可执行  执行命令:chmod u+x commit-msg  
 3、测试不规范的格式提交,提交失败并给出提示。 
```

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

关于Laravel8，我觉得比较有意思地一点变化是重新引入了Models目录结构。
从Laravel5开始，被移除的模型目录又回归了。对于社区大部分开发者来说，肯定是令人兴奋的。
但Laravel作者从始至终并不觉得这是一个好的设计，其本人也在Twitter上承认这是一种妥协。"我个人觉得它是没有必要的，但是社区中的大多数人似乎都喜欢它。"
如果事先有阅读过作者早期的电子书[《从学徒到工匠》（译）](#from-apprentice-to-artisan)，也能从书中的第5章应用结构中找到原因。

> I personally like it's unnecessary but most of the community seems to prefer it.
> -Taylor Otwell

![](./Taylor%20Otwell%20Talk%20About%20Models.png)

[Laravel 8.x skeleton will include a "app/Models" directory by default.](https://twitter.com/taylorotwell/status/1296556354593792000)

对于Models模型文件，早期也是和社区大部分人的意见一致。近两年接触到DDD等设计思想，才渐渐体会到作者的设计意图。
为了方便查阅，以下就Laravel创作者泰勒·奥特威尔的一些观点进行了整理。


#### 关于MVC

> I really think the acronym "MVC" has become incredibly unhelpful in development, and instead we should just teach "separation of concerns".
> -Taylor Otwell

> But the point is I think limiting yourself to “MVC” as a pattern is not good. I wrote about this in my first ebook back in 2012ish
> -Taylor Otwell


![](./Taylor%20Otwell%20MVC0.png)

![](./Taylor%20Otwell%20MVC1.jpeg)

![](./Taylor%20Otwell%20MVC2.png)


Twitter出处:

<a href="https://twitter.com/Sileence/status/634390267966173184" target="_blank">Is Laravel a MVC framework?</a>

<a href="https://twitter.com/taylorotwell/status/262290285499936768" target="_blank">MVC has become incredibly unhelpful in development</a>

<a href="https://twitter.com/taylorotwell/status/1204882498230116353" target="_blank">I think limiting yourself to “MVC” as a pattern is not good</a>


<p id="from-apprentice-to-artisan">最后建议通读 Taylor Otwell 的电子书 《From Apprentice To Artisan》</p>

参考地址：[https://learnku.com/articles/6364/laravel-from-apprentice-to-artisan-by-taylor-otwell](https://learnku.com/articles/6364/laravel-from-apprentice-to-artisan-by-taylor-otwell)


---

#### 关于lumen

1. 除非项目一开始只做API，除非项目永远不会变大变复杂。否则不推荐使用lumen。
2. 使用完整版的Laravel，否则后续你还会把缺失的功能一项项加回去，开发体验也不好。
3. 项目初期，很微小的性能差异，起不了决定性作用。项目做大后的性能问题，不是框架本身能解决的。
4. 选择lumen更多的是心里因素，觉得它更快。实际效益一般。

同是Lumen创作者的Taylor Otwell也建议直接用Laravel。以下列举他和一些开发者讨论的观点。

<a href="https://twitter.com/taylorotwell/status/1306287663109091329" target="_blank">I think always use Laravel</a>

<a href="https://twitter.com/devgummibeer/status/1212731942455717888" target="_blank">Is it worth to switch to #Laravel for better developer experience with the downside of a decreased performance?</a>

<a href="https://twitter.com/taylorotwell/status/1212832185830510592" target="_blank">Most of the time people choose Lumen for psychological reasons not technical reasons</a>

---

#### 简单对比下Laravel与Symfony、Ruby on rails、Spring

- **Ruby on Rails**

Ruby on rails是优雅的代名词，约定优于配置、ActiveRecord和链式调用（方法链｜Method Chaining｜Fluent interface）的实践开创者。现在流行的其他语言的许多框架都借鉴了ROR的思想。包括Laravel、Spring、Swift On Sails等。（天下语言一大抄😊）

- **Symfony**

Symfony是一组可重用的PHP组件和一个用于Web项目的PHP框架。Laravel框架的构建也是了使用了Symfony的许多组件。（站在巨人肩膀上，不重复造轮子）

- **Spring**

Java最流行的开源框架， 拥有著名的设计思想：IOC容器、依赖注入、AOP等。Laravel吸收了其IOC容器思想 （博采众长）

##### 参考资料

[开源社区很多开源框架都有Rails的影子，为什么不用Rails呢？](https://www.zhihu.com/question/271846592)

[The Rails Doctrine - Rails 信条](https://ruby-china.org/wiki/the-rails-doctrine)

<a href="https://dev.to/itsmukulmishra/debate-symfony-vs-laravel-1bh9" target="_blank">Debate: Symfony VS Laravel</a>

<a href="https://laraveldaily.com/taylor-otwell-thin-controllers-fat-models-approach/" target="_blank">Taylor Otwell: “Thin” Controllers, “Fat” Models Approach</a>
  
<a href="https://github.com/alexeymezenin/laravel-best-practices/blob/master/chinese.md" target="_blank">laravel-best-practices(中文)</a>  
