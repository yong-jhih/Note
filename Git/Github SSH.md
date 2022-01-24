

Step 1 產生金鑰
```
ssh-keygen
```
後面的選項一律按 Enter 同意；產生的金鑰（id_rsa 和 id_rsa.pub）會放在 ~/.ssh 路徑底下。



Step 2 上傳金鑰（id_rsa.pub）
來到 GitHub，並打開右上角個人圖示的選單，選擇底下的 Settings 選項。
進入後，再選擇左側選項中的 SSH and GPG keys 選項。
選擇添加新的 SSH keys。
Title 可以自己設定一個好記的名稱，底下的 Key 則要完整填入 id_rsa.pub 中的內容，多一個空格也不行。



Step 3 設定 GitHub 個人帳戶訊息
```
git config --global user.email "you@example.com"
git config --global user.name "Your Name"
```