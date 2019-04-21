<!DOCTYPE html>
<html>
  <head>
    <script src="https://www.gstatic.com/firebasejs/5.10.0/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
    <meta charset="UTF-8">
    <title>Sample FirebaseUI App</title>
    <!-- *******************************************************************************************
       * TODO(DEVELOPER): Paste the initialization snippet from:
       * Firebase Console > Overview > Add Firebase to your web app. *
       ***************************************************************************************** -->
    <script type="text/javascript">
    var config = {
      apiKey: "AIzaSyAk2NkSMaB1Kvftg974gLBFrIBw8Sj_dcM",
      authDomain: "ppee-8802d.firebaseapp.com",
      databaseURL: "https://ppee-8802d.firebaseio.com",
      projectId: "ppee-8802d",
      storageBucket: "ppee-8802d.appspot.com",
      messagingSenderId: "105379384514"
    };
    firebase.initializeApp(config);
      initApp = function() {
        firebase.auth().onAuthStateChanged(function(user) {

          if (user) {
            // User is signed in.
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var uid = user.uid;
            var phoneNumber = user.phoneNumber;
            var providerData = user.providerData;

            user.getIdToken().then(function(accessToken) {
              document.getElementById('sign-in-status').textContent = 'Signed in';
              document.getElementById('sign-in').textContent = 'Sign out';
              document.getElementById('account-details').textContent = JSON.stringify({
                displayName: displayName,
                email: email,
                emailVerified: emailVerified,
                phoneNumber: phoneNumber,
                photoURL: photoURL,
                uid: uid,
                accessToken: accessToken,
                providerData: providerData
              }, null, '  ');
              document.getElementById('image').src=photoURL;
              user.reload();
            });
          } else {
            // User is signed out.
            document.getElementById('sign-in-status').textContent = 'Signed out';
            document.getElementById('sign-in').textContent = 'Sign in';
            document.getElementById('account-details').textContent = 'null';
          }
        }, function(error) {
          console.log(error);
        });
      };
        initApp()
    </script>
  </head>
  <body>
    <h1>Welcome to My Awesome App</h1>
    <div id="sign-in-status"></div>
    <div id="sign-in"></div>
    <pre id="account-details"></pre>
    <img src="" id="image">
  </body>
</html>
