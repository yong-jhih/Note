package main

import (
	"net/http"
)

var count int
func main() {
	http.HandleFunc("/", index)
	http.HandleFunc("/profile", profile)
	http.HandleFunc("/about", about)
	http.ListenAndServe(":9000", nil)
}
func index(w http.ResponseWriter, r *http.Request) {
	message := "Request URL Path is " + r.URL.Path
	w.Write([]byte(message))
}

func profile(w http.ResponseWriter, r *http.Request) {
	message := "Request URL Path is " + r.URL.Path
	w.Write([]byte(message))
}

func about(w http.ResponseWriter, r *http.Request) {
	message := "Request URL Path is " + r.URL.Path
	w.Write([]byte(message))
}