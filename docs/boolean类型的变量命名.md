## 布尔类型变量命名的思考

boolean类型的变量命名 只有  true/false两种值

### 修饰前缀：

* is： 是否什么状态,是否某个对象｜ 名字、形容词、正在进行的动词  是否正在/是否什么状态｜ isPerson、isExist、  isOpen、isActive、isEnabled、isReadOnly

* allow：是否允许 

* can：是否能够   canWrite canRead canEvaluate

* should：是否应该   shouldAbort

* has：是否拥有/是否包含  hasNext、 hasLicense

* if：语法问题  ifSendSms
* will：是否将要做
* want：是否想要  wantSendSms
* do：是否做
* must：是否必须
* need：是否需要

Is, are, has, was, did, has been, will, should, must, can, wants

固定搭配：readonly、hidden

### 修饰后缀：

* able：能够   writable=canWrite 
* switch：开关 



isXXXEnabled

isXXXRequired

isXXXActive


### 对比枚举类型：

* status：状态 可以拥有多个枚举值的状态 （good）
* flag：标志  可以做枚举也可用做boolean类型。（bad）

### 感悟

**最后，实在无法选取适合的前后缀，也无需过于介怀。强类型有类型声明保证，弱类型也可以注释可以声明类型。
变量的命名的好坏最终是要让其本身语义明确，更具有变现力。过度追求很容易陷入匈牙利符号的陷阱中**



## 参考链接

https://softwareengineering.stackexchange.com/questions/232213/should-i-always-use-is-as-prefix-for-boolean-variables

https://www.samanthaming.com/tidbits/34-better-boolean-variable-names/

https://stackoverflow.com/questions/11054192/what-are-some-good-variable-name-suffixes-for-a-boolean-for-an-option-that-is-a

https://segmentfault.com/a/1190000021599924

https://www.bookstack.cn/read/go-code-convention/zh-CN-naming_rules.md

https://www.comp.nus.edu.sg/~cs2103/AY1617S1/contents/coding-standards-java.html#:~:text=Boolean%20variables%20should%20be%20prefixed%20with%20'is'&text=This%20is%20the%20naming%20convention,names%20like%20status%20or%20flag.

https://dev.to/michi/tips-on-naming-boolean-variables-cleaner-code-35ig

https://segmentfault.com/a/1190000020039039

https://www.zhihu.com/question/20809118

https://js.plainenglish.io/naming-boolean-variables-prefixes-df973d7d7ec3?gi=7d6bf5fd8380




