package main

import (
	"net/http"
	"html/template"
	"fmt"
	"errors"
	"bytes"
)
func main() {
	http.HandleFunc("/",handler)
	err := http.ListenAndServe(":9000", nil)
    if err != nil {
        fmt.Println("服务失败 /// ", err)
    }
}

func handler(w http.ResponseWriter, r *http.Request){
	t, err := template.ParseFiles("index.html")
    if err != nil {
        fmt.Println(err)
        return
	}
	err = WriteTemplateToHttpResponse(w, t)
    if err != nil {
        fmt.Println(err)
        return
    }
}

func WriteTemplateToHttpResponse(res http.ResponseWriter, t *template.Template) error {
    if t == nil || res == nil {
        return errors.New("WriteTemplateToHttpResponse: t must not be nil.")
    }
    var buf bytes.Buffer
    err := t.Execute(&buf, nil)
    if err != nil {
        return err
    }
    res.Header().Set("Content-Type", "text/html; charset=utf-8")
    _, err = res.Write(buf.Bytes())
    return err
}