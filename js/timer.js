var timeout;
function timer() {
    timeout = setTimeout(redirection, 5000);
}
function redirection() {
   window.location="https://fredericbrodar.com/";
}
 timer();