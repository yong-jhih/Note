# Command Line (指令)
| 指令                    | 意義                                                            |
| ----------------------- | --------------------------------------------------------------- |
| shutdown                | 關機                                                            |
| shutdown -r now         | 重新啟動本機                                                    |
| sudo shutdown -r now    | 重新啟動本機(使用系統管理員權限)                                |
| sudo member_name        | 切換使用者                                                      |
| history                 | 查詢歷史指令(1000筆)                                            |
| history \| grep XXX     | 查詢含有XXX的歷史指令                                           |
| !id                     | 執行歷史指令編號id的項目                                        |
| ctrl+R                  | 搜尋指令                                                        |
| useradd                 |                                                                 |
| userdel                 |                                                                 |
| usermod                 |                                                                 |
| passwd                  |                                                                 |
| groupadd                |                                                                 |
| groupmod                |                                                                 |
| groupdel                |                                                                 |
| man 指令名稱            | 查詢指令詳細內容                                                |
| 指令名稱 --help         | 查詢指令簡易說明                                                |
| cd                      | 切換目錄                                                        |
| cd ~                    | 切換至使用者家目錄                                              |
| pwd                     | 確認當前目錄                                                    |
| pwd -L                  | 確認當前目錄(預設值同上)                                        |
| pwd -P                  | 確認當前軟連結目錄()                                            |
| ls                      | 顯示當前目錄內檔案                                              |
| ls -R 資料夾名稱        | 列出當前目錄下包含子目錄的所有檔案                              |
| ls -l                   | 逐行顯示當前目錄內檔案及其他資訊                                |
| ls -la                  | 逐行顯示當前目錄內檔案及其他資訊(包含隱藏檔)                    |
| ls -lh                  | 逐行顯示當前目錄內檔案及其他資訊(改變容量單位bytes為K)          |
| ls -ld                  | 只顯示當前目錄內資料夾                                          |
| ls -ld *x*              | 只顯示當前目錄內資料夾名稱包含x(*萬用字元 模糊比對用)           |
| x*                      | 列出開頭為x的所有檔案或資料夾            可列出 xml.xdg         |
| *x                      | 列出結尾為x的所有檔案或資料夾            可列出 firefox         |
| x??                     | 列出開頭為x且長度為3的所有檔案或資料夾    可列出 xml.xdg        |
| mkdir 路徑 目錄名稱     | 在路徑建立資料夾(未輸入路徑即為當前資料夾,如父目錄不存在則失敗) |
| mkdir -p 路徑 目錄名稱  | 在路徑建立資料夾(連同不存在之父目錄一起建立)                    |
| cp 來源檔案 目的路徑    | 複製檔案至目的路徑                                              |
| cp -v 來源檔案 目的路徑 | 複製檔案至目的路徑並顯示過程                                    |
| cp -r 來源檔案 目的路徑 | 複製資料夾至目的路徑                                            |
| rmdir 目錄名稱          | 僅能刪除空白目錄                                                |
| rm 檔案名稱             | 僅能刪除檔案                                                    |
| rm -r 目錄名稱          | 刪除目錄(包含子目錄及檔案)                                      |
| rm -f                   | 強制刪除檔案或目錄                                              |
| rm -d                   | 直接刪除目錄而不刪除目錄內檔案,可能需要fsck指令進行修復         |
| rm -i                   | 再刪除檔案或目錄前會先詢問使用者                                |
| rm -v                   | 顯示完整過程                                                    |
| rm --help               |                                                                 |
| rm --version            |                                                                 |
| mv 檔案或資料夾 路徑    | 搬移檔案或資料夾至路徑並更改檔名                                |

壓縮/解壓縮/打包 tar
| 指令                               | 意義                                    |
| ---------------------------------- | --------------------------------------- |
| tar 參數 備份檔案檔名 備份檔案來源 | 標準語法備份檔案                        |
| tar 參數 還原檔案檔名 參數         | 標準語法還原檔案                        |
| tar -c                             | 建立新的備份檔                          |
| tar -f                             | 指定檔案名稱與路徑                      |
| tar -r                             | 新增檔案至備份檔案結尾                  |
| tar --delete                       | 將.tar中的某個檔案刪除                  |
| tar -t                             | 列出備份檔內檔案清單                    |
| tar -u                             | 僅置換檔案更新部分                      |
| tar -v                             | 顯示指定執行過程                        |
| tar -z                             | 透過gzip處理備份檔案                    |
| tar -x                             | 還原備份檔                              |
| tar -C                             | 指定還原路徑                            |
| tar -A                             | 增加包裹檔於存在的目錄後面              |
| tar -b                             | 設定每一紀錄區塊數 一區塊為512bytes     |
| tar -d                             | 比對包裹檔案和檔案內容不同之處          |
| tar -h                             | 直接連結所指向的檔案                    |
| tar -i                             | 忽略包裹裡檔案大小為0的檔案             |
| tar -j                             | 處理使用bzip2格式壓縮的檔案             |
| tar -k                             | 打開包裹檔案時 不覆蓋原有的檔案         |
| tar -K                             | 從指定的檔案開始還原                    |
| tar -I                             | 新增包裹檔案時 必須位於相同的檔案系統裡 |
| tar -L                             | 設定儲存媒體之容量 以1024bytes為單位    |
| tar -m                             | 還原檔案時 檔案變更時間維持不變         |
| tar -M                             | 處理檔案內容時 採用多卷冊模式           |
| tar -N                             | 將指定日期更新檔案存到包裹中            |
| tar -O                             | 將包裹檔還原的檔案輸出至標準輸出設備    |
| tar -p                             | 用原來的檔案權限還原檔案                |
| tar -P                             | 讓檔案使用的名稱包含"/"                 |
| tar -s                             | 還原檔案的順序 與包裹檔裡的順序相同     |
| tar -W                             | 資料寫入包裹檔後 需確認是否有錯誤       |
| tar -X                             | 指定FILE 用tar排除符合條件之檔案        |
| tar -Z                             | 透過compress處理包裹檔案                |
| tar --exclude=FILE                 | 排除跟FILE相符的檔案                    |
| tar --remove-files                 | 移除加入包裹檔後的原始檔案              |
| tar --ignore-failed-read           | 不中斷程式執行 忽略錯誤                 |
| tar --atime-preserve               | 保留檔案的時間標記                      |

檔案壓縮指令 gzip
| 指令         | 意義                                                |
| ------------ | --------------------------------------------------- |
| gzip -c      | 將壓縮的資料輸出至螢幕上 可透過資料流重新導向來處理 |
| gzip -d      | 將壓縮的檔案進行解壓縮作業                          |
| gzip -t      | 用來檢驗一個壓縮檔的一致性 查看有無錯誤             |
| gzip -[數值] | 壓縮等級,-1最快壓縮比差-9最慢壓縮比好 預設-6        |
| gzip -base   | 壓縮率最大                                          |
| gzip -fast   | 壓縮率最小                                          |
| gzip -V      | 顯示版本資訊                                        |
| gzip -v      | 顯示指令執行過程                                    |
| gzip -S字串  | 更改壓縮字尾字串                                    |
| gzip -a      | 使用ACSII文字模式                                   |
| gzip -f      | 強制壓縮檔案                                        |
| gzip -h      | 顯示說明畫面                                        |
| gzip -l      | 顯示壓縮檔相關訊息                                  |
| gzip -L      | 顯示版本及版權問題                                  |
| gzip -n      | 壓縮檔案時 不儲存原檔案的檔案名稱及修改時間         |
| gzip -N      | 壓縮檔案時 儲存原檔案的檔案名稱及修改時間           |
| gzip -q      | 不顯示警告訊息                                      |
| gzip -r      | 指定目錄下的所有檔案及其子目錄一併壓縮              |

cat
| 指令   | 意義                                     |
| ------ | ---------------------------------------- |
| cat -A | 顯示全部內容 同等於 cat -vET指令         |
| cat -b | 在所有非空白的列上顯示列編號             |
| cat -e | 其指令等同於-vE                          |
| cat -E | 在每一列的最後加上$符號表示結尾          |
| cat -n | 在每個列前顯示列號 包含空白列            |
| cat -s | 當連續出現2列空白時 僅顯示一列空白       |
| cat -t | 其指令等同於 -vT                         |
| cat -T | 將tab鍵以^來顯示                         |
| cat -v | 除LFD與tab字元外 其他控制字元皆以^來顯示 |

head / tail
| 指令           | 意義                                                                                        |
| -------------- | ------------------------------------------------------------------------------------------- |
| head           | 顯示檔案前端內容(預設10行)                                                                  |
| head -c        | 顯示數量                                                                                    |
| head -n        | 顯示列數                                                                                    |
| head -q        | 不顯示檔案名稱                                                                              |
| head -v        | 顯示檔案名稱                                                                                |
| head --help    | 顯示說明畫面                                                                                |
| head -n[數值]  | 輸出指定行數                                                                                |
| head -n3 dmesg | 輸出檔案dmesg前3行內容                                                                      |
| tail           | 顯示檔案尾端內容(預設10行)                                                                  |
| -c n           | 顯示最後N個位元的資料                                                                       |
| -f             | 持續更新讀取檔案末端資料 通常用於監控系統紀錄檔案使用                                       |
| -n 列數        | 顯示指定列數內容                                                                            |
| --pid==PID     | 必須跟著-f參數使用 當指定的程式碼結束時 則停止tail的指令 用以檢視指定程序編號相關的紀錄內容 |
| -q             | 不顯示檔案名稱                                                                              |
| -s 秒數        | 必須跟著-f參數使用 每次更新過程所間格的秒數                                                 |
| -v             | 顯示檔案名稱                                                                                |
| --help         | 顯示說明資訊                                                                                |
| --version      | 顯示版本資訊                                                                                |

ls -l                                 顯示當前目錄內檔案及資料夾基本資訊
十碼字串
-rw-r--r--
drw-rw-rwx
第一位              檔案類型 資料夾為d 一般檔案為-
第二位至第四位      檔案擁有者權限
第五位至第七位      檔案所屬群組權限
第八位至第十位      其他成員權限

檔案及目錄擁有者
u                  檔案或目錄擁有者
g                  檔案或目錄的所屬群組
o                  其他的使用者
a                  全部的使用者

檔案及目錄權限
r                  讀取權限 4
w                  寫入權限 2
x                  執行權限 1
-                  無權限 0
t                  Sticky bit 數值為1 非檔案擁有者不得刪除
s                  一般使用者執行該檔案時 會以檔案擁有者身分執行 設為SUID數值為4 設為GUID數值為2

權限數值組合
| 值  | 讀  | 寫  | 執  |
| --- | --- | --- | --- |
| 7   | 可  | 可  | 可  |
| 6   | 可  | 可  | 否  |
| 5   | 可  | 否  | 可  |
| 4   | 可  | 否  | 否  |
| 3   | 否  | 可  | 可  |
| 2   | 否  | 可  | 否  |
| 1   | 否  | 否  | 可  |
| 0   | 否  | 否  | 否  |

檔案或資料夾擁有者的變更 chown