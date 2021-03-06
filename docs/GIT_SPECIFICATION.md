##  Angular的提交规范
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



## <a name="commit"></a> 提交消息格式(Angular官方最新原版【已翻译】)

*本规范灵感来自于并取代 [AngularJS commit message format][commit-message-format].*

对于必须如何格式化Git提交消息，我们有非常精确的规则。这种格式导致 **易于阅读提交历史**.

每个提交消息都包含一个 **标头**, a **主体**, and a **尾部**.


```
<标头>
<空白行>
<主体>
<空白行>
<尾部>
```
`标头` 是强制性的，必须符合[提交消息标头](#commit-header)格式。
The `header` is mandatory and must conform to the [Commit Message Header](#commit-header) format.

除"docs"类型的提交外，所有提交均必须使用“ body”。
存在正文时，它必须至少20个字符长，并且必须符合[Commit Message Body]（提交正文）格式。

The `body` is mandatory for all commits except for those of type "docs".
When the body is present it must be at least 20 characters long and must conform to the [Commit Message Body](#commit-body) format.

The `footer` is optional. The [Commit Message Footer](#commit-footer) format describes what the footer is used for and the structure it must have.

Any line of the commit message cannot be longer than 100 characters.


#### <a name="commit-header"></a>提交消息头

```
<type>(<scope>): <short summary>
  │       │             │
  │       │             └─⫸ Summary in present tense. Not capitalized. No period at the end.
  │       │
  │       └─⫸ Commit Scope: animations|bazel|benchpress|common|compiler|compiler-cli|core|
  │                          elements|forms|http|language-service|localize|platform-browser|
  │                          platform-browser-dynamic|platform-server|router|service-worker|
  │                          upgrade|zone.js|packaging|changelog|dev-infra|docs-infra|migrations|
  │                          ngcc|ve
  │
  └─⫸ Commit Type: build|ci|docs|feat|fix|perf|refactor|test
```

The `<type>` and `<summary>` fields are mandatory, the `(<scope>)` field is optional.


##### 类型

必须为以下之一:

* **build**: 影响构建系统或外部依赖项的更改 (示例范围: gulp, broccoli, npm)
* **ci**: 对我们的CI配置文件和脚本的更改 (示例范围: Circle, BrowserStack, SauceLabs)
* **docs**: 仅文档更改
* **feat**: 新功能
* **fix**: 错误修复
* **perf**: A code change that improves performance
* **refactor**: A code change that neither fixes a bug nor adds a feature
* **test**: Adding missing tests or correcting existing tests





### 其他

- IDEA的git-commit-template插件

- 本地git提交规范检测的钩子脚本：[commit-msg](commit-msg)
```
 1、commit-msg文件放到: 当前工作目录/.git/hooks/下     
 2、设置commit-msg权限为可执行  执行命令:chmod u+x commit-msg  
 3、测试不规范的格式提交,提交失败并给出提示。 
```

[Angular#Commit Message Format](https://github.com/angular/angular/blob/master/CONTRIBUTING.md#commit)

[Note that this PR removes support for "chore" which was previously overused by everyone on the team.](https://github.com/angular/angular/commit/dff6ee32725197bdb81f3f63c5bd9805f2ed22bb#diff-6a3371457528722a734f3c51d9238c13)

[https://github.com/angular/angular/pull/38639/commits/afcf1b90e94472bf49479f8f1c9d55a451a370c0](https://github.com/angular/angular/pull/38639/commits/afcf1b90e94472bf49479f8f1c9d55a451a370c0)


## gitflow
- [关于GitFlow工作流一些总结](https://caihongtengxu.github.io/2018/20181205/index.html)

- [Git flow 规范](https://zhuanlan.zhihu.com/p/66048537)

- [如何看待 Git flow 发明人称其不适用于持续交付？](https://www.zhihu.com/question/379545619)

- [Gitflow 使用最强指北](https://juejin.cn/post/6844903917399048199)

## rebase
[git rebase有哪些用法？](https://www.zhihu.com/question/25072850)