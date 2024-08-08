# Migration
| Command line                                     | 用途                                                        |
| ------------------------------------------------ | ----------------------------------------------------------- |
| php artisan make:migration create_students_table | 自動產生一個migration檔案                                   |
| php artisan migrate                              | 按照檔名順序執行migration檔案的up方法                       |
| php artisan migrate:rollback                     | 按照檔名順序執行migration檔案的down方法,僅執行一次          |
| php artisan migrate:reset                        | 按照檔名順序執行migration檔案的down方法,全數執行            |
| php artisan migrate:refresh                      | 按照檔名順序執行migration檔案的down方法,全數執行,結束後更新 |

# Schema Builder
## 常用的Schema方法
| Code                                                       | 用途                 |
| ---------------------------------------------------------- | -------------------- |
| Schema::create('table_name',function(Blueprint $table){}); | 建表                 |
| Schema::table('table_name',function(Blueprint $table){});  | 針對指定的表進行維護 |
| Schema::rename('table_name_origin','table_name_new');      | 重新命名資料表       |
| Schema::drop('table_name');                                | 刪除資料表           |
| Schema::dropIfExists('table_name');                        | 存在時刪除           |

## 常用的欄位方法
| Code                                                     | 用途 |
| -------------------------------------------------------- | ---- |
| increments('column_name')                                | null |
| boolean('column_name')                                   | null |
| char('column_name',長度)                                 | null |
| date('column_name')                                      | null |
| dateTime('column_name')                                  | null |
| double('column_name',總位數,小數點位數)                  | null |
| float('column_name')                                     | null |
| integer('column_name')                                   | null |
| string('column_name')                                    | null |
| text('column_name')                                      | null |
| timestamp('column_name')                                 | null |
| timestamps() 建立created_at及updated_at兩個Timestamp欄位 | null |
| softDelete() delete_at的Timestamp欄位                    | null |

## 欄位修飾法
| Code                                       | 用途 |
| ------------------------------------------ | ---- |
| ->after(欄位名稱) 將此欄位放在其他欄位之後 | null |
| ->autoIncrement() 為此欄位加上自動增值功能 | null |
| ->comment(備註內容) 設定欄位備註           | null |
| ->default(預設值) 設定預設值               | null |
| ->first() 將此欄位放在資料表第一欄         | null |
| ->nullable() 允許null                      | null |
| ->unsigned() 僅能為正整數                  | null |
| ->primary() 主鍵                           | null |
| ->unique() 唯一鍵                          | null |
| ->index() 索引鍵                           | null |

## 資料表維護方法
| Code                                         | 用途 |
| -------------------------------------------- | ---- |
| dropColumn('column_name') 刪除指定欄位       | null |
| dropTimestamps() 刪除時間戳記欄位            | null |
| dropsoftdeletes() 刪除軟刪除戳記欄位         | null |
| dropPrimary('column_name') 刪除指定欄位主鍵  | null |
| dropUnique('column_name') 刪除指定欄位唯一鍵 | null |
| dropIndex('column_name') 刪除指定欄位索引鍵  | null |
| softDelete() 建立delete_at的Timestamp欄位    | null |