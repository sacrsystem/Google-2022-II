function registrar(){
    
    var correo =document.getElementById('correo').value;
    var contraseña = document.getElementById('contraseña').value;

    firebase.auth().createUserWithEmailAndPassword(correo, contraseña)
  .then((userCredential) => {
    // Signed in
    var correo = userCredential.firebase;
    var contraseña = userCredential.firebase;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    // ..
  });
}
