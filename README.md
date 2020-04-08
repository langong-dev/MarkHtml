# MarkHTML

这个工具可以让Markdown转换为HTML。

# 使用方法

1. 将解压好的文件夹命名为```Markhtml```
2. 请将你需要转换的Markdown内容放到```$mark```这个变量中。
3. 在PHP文件中添加以下内容

```php
include "markhtml/markhtml.php"; //Head include

$html = markhtml($mark);
```

4. 此时的```$html```变量中就存储这转好的HTML代码。

Made by LanGongINC
