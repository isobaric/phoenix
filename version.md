# 版本日志

## v1.1.1
1. 移除error_log和error_trace_log配置项
2. 不再主动记录错误日志和日志追踪信息

## v1.1.0
1. 新增command命令，用于执行命令行脚本。命令：php command commandName
2. 新增定时任务功能，用于执行定时任务。命令：php crontab

## v1.0.1
1. 请求日志记录内容可配置
2. 辅助函数补充注释
3. 重命名配置项字段名
4. 优化响应header 移除 response_content_type
5. 新增日志切割存储

## v1.0.0
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
13. 辅助函数改由phalanx加载
14. 优化拦截器类文件命名
