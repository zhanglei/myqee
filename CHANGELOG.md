V2.0.2
--------------------------
* 完善数据库的MongoDB驱动，修复remove方法，group的sql语句Debug输出完善，增加对count_records()的支持


V2.0.1
--------------------------
* 修复2.0中发现的已知bug，比如：
* HttpClient中错别字导致执行失败
* 文件缓存保存数据错误，文件处理类完善
* 完善了MySQL类库对编码的转换处理
* 完善了MongoDB的查询功能，完善了debug的显示
* 优化了Bootstrap中对debug的处理
* 完善了内部调用


V2.0 release
--------------------------
* 修复RC3中已知BUG
* 修复数据库类库连接、关闭连接等功能
* 将Request修改为HttpIO常量，并且将部分参数进行调整，具体为：
   Request::$is_ajax    => HttpIO::IS_AJAX
   Request::$client_ip  => HttpIO::IP
   Request::$method     => HttpIO::METHOD
   Request::$user_agent => HttpIO::USER_AGENT
   Request::$protocol   => HttpIO::PROTOCOL
   Request::$referrer   => HttpIO::REFERRER
* 将HttpGet重命名为HttpClient，并完善HttpClient的Fscok驱动，移除Fscok对Snoopy的依赖
* 增加HttpCall系统Http请求类库
* Core::import_library()修改，例如：Core::import_library('com.myqee.test'); 将加载myqee的test类库
* ORM的原有Http模式Finder更换为REST（仍为BETA版本）
* 数据库驱动增加MongoDB，SQLite
* 缓存驱动增加Apc，WinCache，SQLite，Redis，原有的Database驱动升级完善
* 增加Ftp类库
* 增加Email类库
* Session类库修复destroy()销毁数据时Member数据无法销毁的bug
* Session默认驱动中config支持save_handler和save_path关键字设置
* 完善系统内部通信同步方法
* 实现MongoDB数据库selete中as方法
* QueryBuilder相关类库移动到Database下，并且增加mod和or_mod方法
* 核心MyQEE类库改为全小写，Develop_Tool类库改为develop，请注意config.new.php中的$config['libraries']例子的变更



V2.0 RC3
--------------------------
* 修正window下大小写问题导致获取base_url错误
* ORM 完善，优化ORM Data数据的序列化功，getArrayCopy()方法返回全数组数据，配置参数解析功能完善
* ORM 优化主键查询SQL Curl并发请求优化
* Bootstrap升级
* MyQEE Core类库完善，修复Session，Cache，Database等BUG
* Core类库支持系统内部调用
* 更新后台类库，升级后台类库用户管理功能并优化后台页面输出
* IP库更新到Discuz 2011-11-2日数据库
* 手册完善
* 语言包更新


V2.0 RC2
--------------------------
* 手册更新
* 服务器配置完善
* RC2默认加入后台管理类库
* 修正数据库事务bug
* 后台类库增加tooltip显示功能
* 修复数据库主从连接复用问题
* 完善Core异常抛错头部输出
* 后台类库左侧菜单支持下拉收缩
* 修复ORM获取数据时当已经设置了null或false数据时不能够正确获取数据的bug
* 修复数据类在长时间使用情况下有可能连接丢失导致程序死循环
* 完善数据库事务功能，修复子事务不能开启的bug
* bootstrap 升级到1.8
* 数据库类库修复当同一个链接的不同的库采用不同编码时导致的错误
* 完善IP来源类库
* 增加安装程序类库
* 数据库增加create_database方法
* 核心类库在非调试情况下捕获错误的bug修正
* 其它一些细节修改
