var message = "";

function addMessage(){
  // get db access
  // convert data to the string

  var username = "test";
  var content = "text";
  var date = "02.12.2021";

  var add = `<div class='comment-div-section'> <div class='comment-userinfo-section'> <p>${username}</p> </div> <div class='comment-content-section'> <div class='comment-date-section'> <p>${date}</p> </div> <div class='comment-text-section'> <p> ${content}</p> </div> </div> </div>`

  message = add + message;

  document.getElementById('mid-mid-section').innerHTML = message;

}
