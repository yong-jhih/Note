# Note

## MVC六大執行步驟
   1. Request請求-無實質檔案
   2. Routing路由-App_Start/RouteConfig.cs
   3. Controller控制器-*Controller.cs
   4. Model模型-Models/*.cs
   5. View檢視-Views/.../*.cshtml
   6. Response回應-View & _Layout合併輸出  

- ASPN.NET MVC 規定控制器名稱一定是Controller結尾 否則無法執行
- Views底下的資料夾名稱必須與控制器名稱相同  

## 參照路由RouteConfig.cs
```
routes.MapRoute(
    name: "Default",
    url: "{controller}/{action}/{id}",
    defaults: new { controller = "Home", action = "Index", id = UrlParameter.Optional }
);
```  

## 產生之網址
   - https://localhost:44398/MVC/Index
   - 44398g是IIS執行後的port號 是建立專案時隨機指定的 可修改 專案右鍵>屬性>web>專案URL>修改號碼 儲存後重啟即完成變更
   - MVC是控制器名稱 不是資料夾
   - Index是動作名稱  

## 查看網頁執行頁面  

   Model檔案可以任意命名 他跟Controller或View沒有名稱上的連動限制
   1. 在該頁面*.cshtml 按F5執行
   2. 在該頁面*.cshtml 右鍵在瀏覽器中檢視
***
using System.Data.Entity;  
如果要使用這個類別必須先安裝Entity Framework NuGet套件  
可至NuGet 輸入 install-Package EntityFramework