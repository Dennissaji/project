<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <form action="javascript:void(0)">
            <label> enter your email </label>
           <input type="email" name="email" id="email" required>
           <br><br>
           <input type="submit" value="submit" id="submit">
           
    </form>
</body>
<script type="module">

  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
  import { getAuth, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDqPi8NKMoG61jlfy6fBXahHwyXO0Mgu0o",
    authDomain: "mini-project-login-6893a.firebaseapp.com",
    databaseURL: "https://mini-project-login-6893a-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "mini-project-login-6893a",
    storageBucket: "mini-project-login-6893a.appspot.com",
    messagingSenderId: "905486507652",
    appId: "1:905486507652:web:7d07363c0c03cca0ed2cd1",
    measurementId: "G-5NGV8V7GFH"
  };
  const app = initializeApp(firebaseConfig);



  

  // Initialize Firebase

  const auth = getAuth(app);
  submit.addEventListener("click", () => 
  {
let email = document.getElementById('email').value;
sendPasswordResetEmail(auth, email)
  .then(() => {
   alert("email sent successfully");
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
  });

  })

  </script>
</html>