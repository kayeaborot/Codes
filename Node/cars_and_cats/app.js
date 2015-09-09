var http = require('http');
var fs = require('fs');
var server = http.createServer(function (request, response){
    console.log('client request URL: ', request.url);
    if(request.url === '/cars') {
        fs.readFile('./images/test.jpg', function (errors, contents){
            response.writeHead(200, {'Content-Type': 'image/jpg'});
            response.write(contents); 
            response.end();
        });
    }
    else if (request.url === "/cats") {
         fs.readFile('./images/test.jpg', function (errors, contents){
             response.writeHead(200, {'Content-type': 'image/jpg'});
             response.write(contents); 
             response.end();
         });
    }
    else if (request.url === "/cars/new") {
         fs.readFile('./views/index.html', 'utf8', function (errors, contents){
             response.writeHead(200, {'Content-type': 'text/html'});
             response.write(contents); 
             response.end();
         });
    }
    else {
        response.end('File not found!!!');
    }
});
server.listen(7077);
console.log("Running in localhost at port 7077");