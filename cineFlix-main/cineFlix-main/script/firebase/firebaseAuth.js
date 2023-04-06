import {
  getAuth,
  createUserWithEmailAndPassword,
  signInWithEmailAndPassword
} from "https://www.gstatic.com/firebasejs/9.19.1/firebase-auth.js";
import app from "./firebaseApp.js";


const auth = getAuth(app);
export const logIn = async (email, senha) => {
    try {
        const user = await signInWithEmailAndPassword(auth, email, senha);
        return user
    } catch (error) {
        alert(error.message)
        console.error(error.message);
    }
};
export const signUp = (email, senha) => {
  createUserWithEmailAndPassword(auth, email, senha)
    .then((userCredential) => {
      // Signed in
      const user = userCredential.user;
      console.log(user, "userr");
      // ...
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      // ..
    });
};
