# Linux 程序管理 ( ps -l / ps aux / ps axjf )
* 首先，本章一開始就談到的，我們在操作系統時的各項工作其實都是經過某個 PID 來達成的 (包括你的 bash 環境)， 因此，能不能進行某項工作，就與該程序的權限有關了。
* 再來，如果您的 Linux 系統是個很忙碌的系統，那麼當整個系統資源快要被使用光時， 您是否能夠找出最耗系統的那個程序，然後刪除該程序，讓系統恢復正常呢？
* 此外，如果由於某個程式寫的不好，導致產生一個有問題的程序在記憶體當中，您又該如何找出他，然後將他移除呢？
* 如果同時有五六項工作在您的系統當中運作，但其中有一項工作才是最重要的， 該如何讓那一項重要的工作被最優先執行呢？
<hr>

1. ps (Process Status)：將某個時間點的程序運作情況擷取下來
    * [root@www ~]# ps aux <==觀察系統所有的程序資料 
    * [root@www ~]# ps -lA <==也是能夠觀察所有系統的資料
    * [root@www ~]# ps axjf <==連同部分程序樹狀態
2. 選項與參數：
    * -A ：所有的 process 均顯示出來，與 -e 具有同樣的效用；
    * -a ：不與 terminal 有關的所有 process ；
    * -u ：有效使用者 (effective user) 相關的 process ；
    * x ：通常與 a 這個參數一起使用，可列出較完整資訊。
3. 輸出格式規劃：
    * l ：較長、較詳細的將該 PID 的的資訊列出；
    * j ：工作的格式 (jobs format)
    * -f ：做一個更為完整的輸出。
<hr>

範例一：將目前屬於您自己這次登入的 PID 與相關資訊列示出來(只與自己的 bash 有關) 
```
tw-johnklee4:~ # ps -l
F S UID PID PPID C PRI NI ADDR SZ WCHAN TTY TIME CMD 
4 S 0 14999 14997 0 75 0 - 1036 wait pts/1 00:00:00 bash 
0 R 0 15046 14999 1 77 0 - 545 - pts/1 00:00:00 ps 
```
使用 ps -l 僅列出與你的操作環境 (bash) 有關的程序而已，亦即最上層的父程序會是你自己的 bash 而沒有延伸到 init 這支程序去！那麼 ps -l 秀出來的資料 
有哪些呢？我們就來觀察看看：
* F：代表這個程序旗標 (process flags)，說明這個程序的總結權限，常見號碼有：
    * 若為 4 表示此程序的權限為 root ；
    * 若為 1 則表示此子程序僅進行複製(fork)而沒有實際執行(exec)。

* S：代表這個程序的狀態 (STAT)，主要的狀態有：
    * R (Running)：該程式正在運作中；
    * S (Sleep)：開程式目前正在睡眠狀態(idle)，但可以被喚醒(signal)。
    * D ：不可被喚醒的睡眠狀態，通常這支程式可能在等待 I/O 的情況(ex>列印)
    * T ：停止狀態(stop)，可能是在工作控制(背景暫停)或除錯 (traced) 狀態；
    * Z (Zombie)：僵屍狀態，程序已經終止但卻無法被移除至記憶體外。

* UID/PID/PPID：代表『此程序被該 UID 所擁有/程序的 PID 號碼/此程序的父程序 PID 號碼』

* C：代表 CPU 使用率，單位為百分比；

* PRI/NI：Priority/Nice 的縮寫，代表此程序被 CPU 所執行的優先順序，數值越小代表該程序越快被 CPU 執行。詳細的 PRI 與 NI 將在下一小節說明。

* ADDR/SZ/WCHAN：都與記憶體有關，ADDR 是 kernel function，指出該程序在記憶體的哪個部分，如果是個 running 的程序，一般就會顯示『 - 』 / SZ 代表此程序用掉多少記憶體 / WCHAN 表示目前程序是否運作中，同樣的， 若為 - 表示正在運作中。

* TTY：登入者的終端機位置，若為遠端登入則使用動態終端介面 (pts/n)；

* TIME：使用掉的 CPU 時間，注意，是此程序實際花費 CPU 運作的時間，而不是系統時間；

* CMD：就是 command 的縮寫，造成此程序的觸發程式之指令為何。
    * ps                      僅顯示使用者當次登入資訊
    * ps aux | more           顯示系統行程
    * ps aux | less           顯示系統行程
    * ps aux | grep           顯示所有系統行程
    * ps aux | egrep XXX      顯示所有類似名稱之系統行程
<hr>

範例二：列出目前所有的正在記憶體當中的程序：
```
tw-johnklee4:~ # ps aux
USER PID %CPU %MEM VSZ RSS TTY STAT START TIME COMMAND 
root 1 0.0 0.0 716 284 ? S 07:51 0:00 init [5] 
root 2 0.0 0.0 0 0 ? SN 07:51 0:00 [ksoftirqd/0] 
root 3 0.0 0.0 0 0 ? S< 07:51 0:00 [events/0] 
...(省略) 
postfix 14919 0.0 0.3 5376 1640 ? S 19:04 0:00 pickup -l -t fi 
root 14997 0.0 0.4 8516 2568 ? Ss 19:28 0:00 sshd: root@pts/ 
root 14999 0.0 0.3 4144 1912 pts/1 Ss 19:29 0:00 -bash 
root 15048 0.0 0.1 2388 844 pts/1 R+ 19:39 0:00 ps aux
```
ps -l 與 ps aux 顯示的項目並不相同！在 ps aux 顯示的項目中，各欄位的意義為： 
| 欄位名稱 | 意義                                                                                                                                                    |
| -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| USER     | 該 process 屬於那個使用者帳號的？                                                                                                                       |
| PID      | 該 process 的程序識別碼。                                                                                                                               |
| %CPU     | 該 process 使用掉的 CPU 資源百分比；                                                                                                                    |
| %MEM     | 該 process 所佔用的實體記憶體百分比；                                                                                                                   |
| VSZ      | 該 process 使用掉的虛擬記憶體量 (Kbytes)                                                                                                                |
| RSS      | 該 process 佔用的固定的記憶體量 (Kbytes)                                                                                                                |
| TTY      | 該 process 是在那個終端機上面運作，若與終端機無關則顯示 ?，另外， tty1-tty6 是本機上面的登入者程序，若為 pts/0 等等的，則表示為由網路連接進主機的程序。 |
| STAT     | 該 process 目前的狀態，狀態顯示與 ps -l 的 S 旗標相同 (R/S/T/Z)                                                                                         |
| START    | 該 process 被觸發啟動的時間；                                                                                                                           |
| TIME     | 該 process 實際使用 CPU 運作的時間。                                                                                                                    |
| COMMAND  | 該 process 的實際指令為何？                                                                                                                             |

kill PID                刪除該行程(kill -9 PID 強制刪除該行程)<br>
killall name            刪除相同名稱之行程