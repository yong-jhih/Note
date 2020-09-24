package database

import (
	"database/sql"
	"log"

	"goproject/config"

	_ "github.com/go-sql-driver/mysql"
)

var DB *sql.DB

///////////////////////////////////////////
//
// InitDatabase
//
///////////////////////////////////////////
func InitDatabase() {
	dbSettings := config.GlobalConfig.DbSettings
	var err error

	DB, err = sql.Open("mysql", dbSettings)
	if err != nil {
		log.Println(err)
	}

	DB.SetMaxOpenConns(200)
	DB.SetMaxIdleConns(100)

	DB.Ping()

	//defer DB.Close()
}
