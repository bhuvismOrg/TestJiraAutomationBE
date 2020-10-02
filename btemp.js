
function getlink(link){
   
        var myHeaders = new Headers();

var formdata = new FormData();
formdata.append("link", link)
formdata.append("submit", "true");
formdata.append("user", "106688601600686655926");
      
var requestOptions = {
method: 'POST',
headers: myHeaders,
body: formdata,
redirect: 'follow'
};

fetch("https://nith.ml/API.php", requestOptions)
.then(response => response.text())
.then(result => document.querySelector('#mylink').innerHTML=JSON.parse(result).url)
.catch(error => console.log('error', error));
        
    
    }

    function copytoCB2(){
        var copyText = document.getElementById("mylink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
      }

      