package main

import (
    "github.com/julienschmidt/httprouter"
    "html/template"
    "net/http"
    "fmt"
)

func main() {
    mux := httprouter.New()
    mux.GET("/", index)
    mux.NotFound = http.HandlerFunc(notFound)
    mux.PanicHandler = errorHandler

    server := http.Server{
        Addr: "127.0.0.1:9000",
        Handler: mux,
    }

    server.ListenAndServe()
}

func index(w http.ResponseWriter, r *http.Request, p httprouter.Params) {
    t := template.Must(template.ParseFiles("index.html"))

    t.Execute(w, "Hello, Template")
}

func notFound(w http.ResponseWriter, r *http.Request) {
	w.WriteHeader(http.StatusNotFound)
	fmt.Fprintln(w, "Page Not Found")
}

func errorHandler(w http.ResponseWriter, r *http.Request, p interface{}) {
	w.WriteHeader(http.StatusInternalServerError)
	fmt.Fprintln(w, "Internal Server Error")
}