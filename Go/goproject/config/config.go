package config

const ENV = "dev"

// Config struct
type Config struct {
	APIURL             string
	DbSettings         string
	FlagURL            string
	CsURL              string
	MessageQueueURL    string
	MyURL              string
	IPWhiteListPrivate string
	PushCenterURL      string
}

var myConfig map[string]Config = map[string]Config{
	"dev": {
		APIURL:             "http://192.168.99.84:8083",
		DbSettings:         "root:@tcp(192.168.99.121:3306)/gobaodeveloperconsole",
		FlagURL:            "http://192.168.99.133:8080",
		CsURL:              "https://cs.gppay.net", //192.168.99.47:2096
		MessageQueueURL:    "http://192.168.96.34:8085",
		MyURL:              "http://192.168.99.121:8092",
		IPWhiteListPrivate: "220.130.60.70,60.249.13.151",
		PushCenterURL:      "http://192.168.6.61:1788", //測試開vpn
	},
}

// GlobalConfig config info
var GlobalConfig Config = myConfig[ENV]

// Secret api server key
// const Secret = "Fz6fXJAnE5cIJMUp0nHqZElKhvpVYDcL"

// FlagSecret flag server key
// const FlagSecret = "35949232163b06b143e88d6c699cf15c"

//PushCenterSecret push center server key
// const PushCenterSecret = "9E8E2C11-C313-4B6E-AE17-DB3A615B7C61"

// FlagType flag type id
// const FlagType = "devbk"

// JwtSecret jwt key
// const JwtSecret = "27d68905329e0f1fb53bcfdbf692d20db78a68c2"

// GoAuthTitle goauth title
// const GoAuthTitle = "购宝商户管端"

// SMSTitle sms titile
// const SMSTitle = "DEVBK"
