# covidapi

一套PHP脚本用于查询人民接种疫苗信息，死亡数，确诊等数据。

覆盖率: ![coverage](https://img.shields.io/badge/coverage-42%25-green)


## 开发

### 脚本结构
```
./
├── index.php
├── LICENSE
├── README.md
├── epidemic
│   ├── case
│   │   ├── age
│   │   │   └── index.php
│   │   └── malaysia
│   │       └──index.php
│   ├── cluster
│   │   └── index.php
│   ├── death
│   |   ├── age
│   |   │   └── index.php
│   |   └── malaysia
│   |       └── index.php
│   ├── hospital
│   │   └── index.php
│   ├── icu
│   │   └── index.php
│   ├── pkrc
│   │   └── index.php
│   └── test
│       └── index.php
├── mysejahtera
│   ├── checkin
│   │   ├── malaysia
│   │   │   └── index.php
|   |   ├── state
│   │   │   └── index.php
|   |   └──time
│   │       └── index.php
│   └── trace
│       └── index.php
├── path
│   └── path.php
├── registration
|   ├── state
|   │   └── index.php
|   └── vax
|       └── index.php
├── static
|   └── index.php
├── vax
|   ├── malaysia
|   │   └── index.php
|   ├── school
|   │   └── index.php
|   └── state
|       └── index.php
└── docs
    ├── index.html
    ├── README.md
    
```

### 需求
- PHP 环境已安装
- PHP 环境于7.4及以上
- 可访问网络

### 克隆本项目到本地

```bash
$ git clone https://github.com/manho30/covidapi.git
$ cd covidapi
```

### 在本地启动PHP服务器

``` bash
$ php -S 127.0.0.1:8084
```


### 部署

您可以将本项目部署到Heroku，并将其设置为公开访问。


如果您想要部署到Heroku，请满足以下所有条件：
- Heroku 账号
- Node.js 环境与NPM已安装
- Git 已安装
- Heroku CLI 已安装
- 创建了一个新的 Heroku 应用



如果你不知道如何安装Git， 请访问 [这里](https://help.github.com/en/articles/set-up-git-on-windows-mac-and-linux-with-git-for-windows).


#### 安装 Heroku CLI
如果你已经安装，请跳过本环境。

打开你的终端，输入以下命令。

```bash
$ npm install -g heroku-cli
```

检验安装是否成功

```bash
$ heroku --versiom
```
您的终端将会返回`heroku/7.60.2 win32-x64 node-v16.14.2` 如果安装成功。


你现在可以尝试登陆，在终端输入以下命令


```bash
$ heroku login
```


#### 推送到Heroku

``` bash
$ git add .
$ git commit -am "initial commit"
$ git push heroku
```
现在所有工作就完成了。



## 使用

以下教程将演示如何获取各州的疫苗接种数据，



根据路径结构， 您必须访问正确的路径，否则将会返回404错误。

``` text
├── vax
|   ├── malaysia
|   │   └── index.php
|   ├── school
|   │   └── index.php
|   └── state
|       └── index.php
```
因此， 您需要访问的链接是；
``` text
http://127.0.0.1:8084/vax/state
```



如果你是使用我托管的API接口，则访问如以下链接：
``` text
http://mycovidapi2/vax/state
```

## 数据来源
公共数据库: 马来西亚卫生局，马来西亚冠状病毒免疫工作组
