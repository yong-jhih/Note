# 打包JS程式碼為可執行檔案
1. 安裝pkg套件
```
    $ npm install -g pkg
```

2. 編譯已完成node可執行程式
```
    $ pkg api.js           // 將 api.js 編譯成 api.exe 可執行程式
    $ pkg -t win api.js    // 上面的命令會同時編譯出 linux 、windows 、mac 的 exe，加 -t win 就可以只編譯 windows
```