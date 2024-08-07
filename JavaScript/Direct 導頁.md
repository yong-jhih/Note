# Direct 導頁
> 在 JavaScript 中若要撰寫網頁轉址程式非常容易，有寫過的人都知道要用 location.href 或 location.replace，功能差不多，但在實務上應用是有差異的。

location 物件的 href 是個屬性，屬性需要直接指定其值，例如：
```
    location.href = 'http://blog.miniasp.com/';
```
location 物件的 replace 是個方法(method)或函式(function)，需要加上刮號傳入參數，例如：
```
    location.replace('http://blog.miniasp.com/');
``` 
接著，用一個簡單的例子說明這兩個用法與直接下連結的差別：
```
    <a href="a.htm">a.htm</a>
    <a href="#" onclick="location.href='a.htm'">location.href='a.htm';</a>
    <a href="#" onclick="location.replace('a.htm')">location.replace('a.htm')</a>
```
1. 直接用連結的作法
    瀏覽器會送出 Referer 這個 HTTP Header
    瀏覽器會紀錄連結的歷史紀錄 ( 好讓瀏覽器的 上一頁 、 下一頁 按鈕可以運作 )

2. 透過 JavaScript 的 location.href 指派網址
    瀏覽器不會送出 Referer 這個 HTTP Header
    瀏覽器會紀錄連結的歷史紀錄 ( 好讓瀏覽器的 上一頁 、 下一頁 按鈕可以運作 )

3. 透過 JavaScript 的 location.replace 傳入網址
    瀏覽器不會送出 Referer 這個 HTTP Header
    瀏覽器不會紀錄連結的歷史紀錄! ( 瀏覽器將無瀏覽歷史紀錄 )
<hr>

> 瞭解差異後，再介紹一個實務的應用，會有更深一層的體會。
我需要在網頁下載檔案，但有經驗的人應該知道，通常的作法有幾種：

1. 開新視窗進行下載動作
    優點：運氣好時，檔案會直接開在 Browser 視窗中上。
    缺點：有時後檔案下載了，但是視窗會殘留！

2. 在本頁直接下載
    優點：運氣好時，檔案會直接下載。
    缺點：若遇到檔案會直接在 User 的瀏覽器直接開啟的狀況，有可能會讓 User 等到檔案下載完才會開啟，例如有些 PDF 檔非常大，下載的這段時間 Browser 會卡死不能動。

3. 透過一個隱藏的 Frame 或 IFrame 進行下載 ( 直接透過 a 標籤的 target 指定 iframe 目標 )
    優點：運氣好時，檔案會直接下載，運氣不好時也不會殘留視窗。
    缺點：運氣不好時檔案就看不到了，不過可以透過設定 Content-Disposition 強制下載。
    缺點：當使用者連續下載兩個檔案，又按下瀏覽器上的「回上一頁」時，會重新下載上一個檔案！

4. 透過一個隱藏的 Frame 或 IFrame 進行下載 ( 透過 location.href 指定下載目標 )
    優點：運氣好時，檔案會直接下載，運氣不好時也不會殘留視窗。
    缺點：運氣不好時檔案就看不到了，不過可以透過設定 Content-Disposition 強制下載。
    缺點：當使用者連續下載兩個檔案，又按下瀏覽器上的「回上一頁」時，會重新下載上一個檔案！

5. 透過一個隱藏的 Frame 或 IFrame 進行下載 ( 透過 location.replace 指定下載目標 )
    優點：運氣好時，檔案會直接下載，運氣不好時也不會殘留視窗。
    優點：當使用者連續下載兩個檔案，又按下瀏覽器上的「回上一頁」時，因為在瀏覽器中該 frame 並無瀏覽紀錄，所以不會發生重複下載的動作。
    缺點：運氣不好時檔案就看不到了，不過可以透過設定 Content-Disposition 強制下載。
<hr>
由此可知，第 5 種指定下載的方法是最好的！雖然是一個簡單的差異，但時實務上就是有那麼一點 "眉角" (台語, 小技巧的意思)，一點小經驗分享。^_^