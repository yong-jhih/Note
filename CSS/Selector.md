# CSS Selector 選擇器
1. 全域選擇器
- `*`符號為全域選擇器，他會選取頁面上所有元素
```
*{
    margin: 0;
    padding: 0;
}
```
2. ID選擇器 ID selectors
- #符號為ID選擇器，他會選取頁面上相符的ID名稱
- 在網頁中ID名稱是唯一的，僅能使用一次，不能被重複使用
```
#content{
    width: 100px;
}
```
3. 類別選擇器 Class selectors
- .符號為類別選擇器，他會選擇頁面上相符的class名稱
- 跟id不一樣，class可以不斷地重複使用
```
.content{
    width: 100px;
    height: 100px;
}
```
4. 類型選擇器、標籤選擇器 Type selectors
- 用來選擇HTML標籤的選擇器
```
div{
    width: 100px;
    height: 100px;
}
```
5. 偽類選擇器、虛擬類別選擇器 Pseudo-classes
- 偽類可以對指定的選擇器增加特殊的效果
- 冒號前面為指定的選擇器像是a:hover{hover後的樣式}  
代碼 | 功能
---- | ----
:link | 連結平常的樣式
:visited | 連結查閱後的樣式
:hover | 滑鼠滑入的樣式
:active | 滑鼠按下的樣式
:focus | 目標為焦點的樣式
:lang(E) | 當語言為E的樣式
:first-child | 第一個元素的樣式

6. 偽元素選擇器、虛擬元素選擇器 Pseudo-elements
- 偽元素要使用兩個冒號來表示，雖然用一個冒號也能正常運作，可是為了方便區分，還是使用兩個冒號會比較好！
- 偽元素也會繼承原本元素的屬性，如果原本屬性的文字是黑色，那麼偽元素的文字也會是黑色的
代碼 | 功能
--- | ---
::before | 在原本的元素之前加入內容
::after | 在原本的元素之後加入內容

7. 群組選擇器 Group of selectors
- 同時對一個以上的元素套用樣式就可以這樣使用  
假如我想選擇a跟p
```
a, p{
    color: blue;
}
```