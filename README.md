webim-plugin-shopnc
===================

Webim Plugin for ShopNC

Require
=======

PHP > 5.3.10

Usage
=====

1. 上传webim到shopnc站点根目录;

2. 导入webim/install.sql表到shopnc数据库;

3. 配置webim/config.php; 

4. 编码webim/ShopNC_Plugin.php，集成站点用户、群组、通知等数据;

5. shopnc需要显示webim的页面，footer嵌入:

```javascript

<script type="text/javascript" src="webim/index.php?action=boot"></script>

```

ShopNC_Plugin.php
================

WebIM-for-ShoNC插件类, 参考示例代码，实现下述接口:

1. uid() 获取当前登录用户UID;

2. user($uid) 初始化WebIM当前的用户对象;

3. visitor() 如支持访客模式，初始化访客(Visitor)对象;

4. buddies($uid) 读取当前用户的在线好友列表,根据站点需求实现;

5. buddiesByIds($ids) 根据ids列表读取好友列表

6. rooms($uid) 读取当前用户所属的群组，以支持群聊

7. roomsByIds($ids) 根据id列表读取群组列表

8. room($id) 根据Id读取一个群组(persist)

9. members($room) 根据群组Id，读取群组成员信息

10. notifications($uid) 读取当前用户的通知信息


Router.php
==============================

WebIM请求分发类


Model.php
==============================

WebIM数据模型类


App.php
==============================

WebIM应用入口类


Install.sql
==============================


webim_settings
--------------

用户设置表，保存用户界面个性化设置


webim_histories
----------------

历史消息表，保存聊天历史消息


webim_rooms
----------------

临时讨论组表


webim_members
----------------

临时讨论组成员表


Author
======

http://nextalk.im

ery.lee at gmail.com

nextalk at qq.com


