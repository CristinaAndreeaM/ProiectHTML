var http = require('http');
var mysql = require('mysql');
//clase pentru redirectionare si procesare actiuni
var express = require('express');
var session = require('express-session');
//body e body-ul requestului
var bodyParser = require('body-parser');
//pathul este folosit pentru crearea de pathuri menite redirectionarii
var path = require('path');
//realiam conexiunea la db
const con = mysql.createConnection({
  host: 'localhost',
  user: '2022.mititean.andreea.cristina',
  password: 'Mititean18',
  database: '2022.mititean.andreea.cristina'
});
//realizam o instanta de clasa
var app = express();
//stabilim datele sesiunii in care ne aflam
app.use(session({
	secret: 'secret',
	resave: true,
	saveUninitialized: true
}));
//trimitem la server body de tip json
app.use(bodyParser.urlencoded({extended : true}));
app.use(bodyParser.json());


app.get('/', function(request, response) {
	//cand am apasat pe a href, ne apeleaza aceatsa metoda
	//trimite ca raspuns fisierul cu numele chhangePswd
	//path defapt concateneaza pathul pana la fisier+numele acestuia
	response.sendFile(path.join(__dirname + '/changePswd.html'));

});
//la apasarea butonului care are metoda post, se redirectioneaza catre /changePswd si actualizam parola userului admin cu parola data
app.post('/changePswd', function(request, response) {
	// ca si in php $_POST['newPassword']
	var newPassword =	request.body.newPassword;
	//daca nu e null sau undefined
	if (newPassword ) {
		//se realizeaza update-ul si ne redirectioneaza la pagina principala
		con.query("UPDATE registration set password =? where username = 'admin'",[newPassword]);	
		response.sendFile(path.join(__dirname + '/index.html'));
} //daca parola e undefined sau null afiseaza un mesaj
	else {
		response.send('parola necesara');
		response.end();
	}
});
//portul de pe ahref la care asculta .js-ul nostru
app.listen(60001);