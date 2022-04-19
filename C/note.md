# Note
[Youtube C課程筆記](https://www.youtube.com/playlist?list=PLY_qIufNHc293YnIjVeEwNDuqGo8y2Emx)
## 變數型態
   * int
   * unsigned int
   * float
   * double
   * char

## 實作定義(各種編譯器可能有不同設定)
   * char 型別占用 1位元組
   * ASCII 編碼 1位元組(8-bit) = 2^8 = 256 種組合(大小寫英文字母.數字.常用符號 "以整數做儲存")
   * UTF8 編碼 1~4位元組 可向下相容 ASCII 編碼(包含各國文字,特殊符號等)

## 數值運算
   1. 同型別計算 結果型別為同型別
   2. 不同型別計算 結果型別依範圍大者
   3. 運算子+-*/依優先順序由左至右計算並存入暫時
   4. 整數除法 取商數(非四捨五入)
   5. 運算子%基本上同/ 但是取餘 且 "不可作浮點數運算"
   6. 浮點數除法 (double)
```
5/2 != 5./2.            // 前者為2 後者為2.5
1+2*3/4-5=-3            // 整數除法2*3/4=1  
```

## 格式字符
常用符號 | 意義
---- | ----
%d | 整數
%f | 浮點數
$c | 字元
```
#include <stdio.h>
main(){
    int a, b , c ;
    printf("Please enter first Number");
    scanf( "%d" , &a );
    printf("Please enter second Number");
    scanf( "%d" , &b )
    c = a + b ;
    printf("Sum is %d. \n",c);
    return 0 ;
}
```
## 賦值運算
   * 賦值運算子優先順序比大部分運算子都低(先乘除後加減最後等於)
   * 複數個賦值運算子計算順序為右至左
```
int a, c ;
double b , d ;
a = b = c = d = 3 + 7 / 2. ;
// d = 6.5,c = 6,b = 6.,a = 6
```

## 真假
   * 非0為真 其餘為假
   * '\0' 為假 (空字元 null character 編號0號的字元)

## 關係運算子(一次僅能比較2個數)
   * <
   * `>`
   * ==
   * !=
   * `>=`
   * <=

## 邏輯運算子
   * &&
   * ||
   * !

## 運算子優先順序
   1. !
   2. `*` %
   3. `+` `-`
   4. < > >= <=
   5. == !=
   6. &&
   7. ||
   8. =
***
## 範例
求三角形種類
```
#include <stdio.h>
main(){
    int a, b , c ;
    printf("Please enter 3 sides :");
    scanf( "%d%d%d" , &a , &b , &c);
    if(a+b>c || b+c>a || a+c>b){
        if(a==b && b==c){
            printf("Regular triangle\n");
        }
        if(a==b || b==c || a==c && !(a==b && b==c)){
            printf("Isosceles triangle\n");
        }
        if(a*a+b*b==c*c || b*b+c*c==a*a || a*a+c*c==b*b){
            printf("Rectangular Triangle\n");
        }
    }
    return 0 ;
}
```

三數求中位數
```
#include <stdio.h>
main(){
    int a, b , c , mid;
    printf("Please enter 3 sides :");
    scanf( "%d%d%d" , &a , &b , &c);
    mid = a ;
    if( (b-a)*(b-c)<0 ){
        mid = b ;
    }
    if( (c-b)*(c-a)<0 ){
        mid = c ;
    }
    printf("The median is %d. \n", mid );
    return 0 ;
}
```

數字排序(大到小)(數值交換)
```
#include <stdio.h>
main(){
    int a, b , c , tmp;
    printf("Please enter 3 Numbers :");
    scanf( "%d%d%d" , &a , &b , &c);
    if(a>=b && a>=c && b>=c){
        //do nothing 順序不變
    }
    if(a<b || a<c){ // a不是最大值
        tmp = a;
        if(b==c){ // bba

        }
        if(b>c){ // bca or bac

        }
        if(b<c){ // cba or cab

        }
    }
    return 0 ;
}
```