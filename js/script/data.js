var data = document.querySelector("Datanas");; 

function retornaData(data){
	if(!data){
		return data;	
	}
	split = data.split('/');
	return new Date( split[1] + "/" +split[0]+"/"+split[2] );
}

var dataCurrente = new Date();

	if(retornaData(data) > dataCurrente){

		windows.alert("A data informada é inferir a data atual");

  }
  
  console.log(retornaData(data)); //1540177200000
  
  console.log(dataCurrente);
    
  var jsTimestamp = new Date(1540177200000);
    
    console.log(jsTimestamp);