<script src="https://www.gstatic.com/firebasejs/5.10.0/firebase.js"></script>
<script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
<script>
// Initialize Firebase
var config = {
  apiKey: "AIzaSyAk2NkSMaB1Kvftg974gLBFrIBw8Sj_dcM",
  authDomain: "ppee-8802d.firebaseapp.com",
  databaseURL: "https://ppee-8802d.firebaseio.com",
  projectId: "ppee-8802d",
  storageBucket: "ppee-8802d.appspot.com",
  messagingSenderId: "105379384514"
};
firebase.initializeApp(config);
</script>
<script type="text/javascript">
// FirebaseUI config.
var uiConfig = {
  signInSuccessUrl: 'panel.php',
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    firebase.auth.EmailAuthProvider.PROVIDER_ID,
    firebaseui.auth.AnonymousAuthProvider.PROVIDER_ID
  ],
  // tosUrl and privacyPolicyUrl accept either url string or a callback
  // function.
  // Terms of service url/callback.
  tosUrl: '<your-tos-url>',
  // Privacy policy url/callback.
  privacyPolicyUrl: function() {
    window.location.assign('<your-privacy-policy-url>');
  }
};

// Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());
// The start method will wait until the DOM is loaded.
ui.start('#firebaseui-auth-container', uiConfig);
</script>

<div id="firebaseui-auth-container">
</div>
