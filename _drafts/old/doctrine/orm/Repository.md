# Repository

> 前言

对于数据库资源进行管理为业务提供支持

数据库资源的管理主要集中在如果快捷方便的查询目标数据

结合doctrine orm 定义提供的资源，我们可以在Repository层中更智能更广泛的利用其资源，以达到更好的资源利用

> Repository Rules 执行流程

1. 资源初始化

2. 执行 SELECT JOIN WHERE ORDER_BY 及 假删除等基础规则

3. 进行规则自动联动补充试运行 (1)表外字段需要跳用的规则 (2)sql中包含实体必要的规则

4. 执行规则进行规则拼接

5. sql分析对*字段进行自动关联字段

6. 移除字段

7. 补充查询主键盘； 补充外键关联键的字段

8. 补入最终排序

9. 字段与实体绑定

10. 字段变更为查询sql (只支持表外字段)

// 字段属性和字段名是通用的
// 如果没有主动查询外键盘的话 则采用延迟初始化