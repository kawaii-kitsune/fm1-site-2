let key= 'b1458f9092d2f8f3a0810864b7696031'
let secret='1b615199157b6602dd8b0fc83c744fd8d92d415bc0840435441e5746b7da7dbf'
let id='605e590e2698ff32b32f98ed'
let token='cf15126dd5323a15aa473bc317c6e6b75c460169b8d90d9703883e2f10879ced'
let data;
// window.onload = function(){
//     getInfo();
// };
function getInfo(){
    fetch('https://api.trello.com/1/boards/'+id+'/cards?key='+key+'&token='+token, {
  method: 'GET'
})
  .then(response => {
    console.log(
      `Response: ${response.status} ${response.statusText}`
    );
    tesstinJson(response.json());
  })
  .then(text => console.log(text))
  .catch(err => console.error(err));
}
function tesstinJson(response){
    data=response;
    console.log(response);
}