// Initialize Firebase
var config = {
  apiKey: "AIzaSyDAwK50deOmOKJjGIvC0GeYkrN47JT7sys",
  authDomain: "contact-10696.firebaseapp.com",
  databaseURL: "https://contact-10696.firebaseio.com",
  projectId: "contact-10696",
  storageBucket: "contact-10696.appspot.com",
  messagingSenderId: "257907305138"
};
firebase.initializeApp(config);
var databaseFB = fb.database();
console.log("Connected");

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  console.log("Form Submited");

  // Get values
  var name = getInputVal('name');
  var email = getInputVal('email');
  var proyecto = getInputVal('proyecto');
  var opcion = getInputVal('opcion');
  var detalles = getInputVal('detalles');


  // Save message
  saveMessage(name, email, proyecto, opcion, detalles);

  // Show alert
  //document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  /*
  setTimeout(function(){
   document.querySelector('.alert').style.display = 'none';
  },3000);
  */

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, company, email, phone, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    email: email,
    proyecto: proyecto,
    opcion: opcion,
    detalles: detalles
  });
}
