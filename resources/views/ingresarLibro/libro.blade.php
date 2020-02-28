<!DOCTYPE html>
<html>
<head>
	<title>Libreria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

 <script>
      var ok=false;
    </script>
</head>
<body>
<div id="app">
	<v-app>
<!--   <v-navigation-drawer app>
   
  </v-navigation-drawer> -->

  <v-app-bar app>
    <!-- -->Ingresar Libro
  </v-app-bar>

  <!-- Sizes your content based upon application components -->
  <v-content>

    <!-- Provides the application the proper gutter -->
    <v-container fluid>
<libro></libro>

      <!-- If using vue-router -->
      <!-- <router-view></router-view> -->
    </v-container>
  </v-content>

  <v-footer app>
    <!-- -->
  </v-footer>
</v-app>
		

</div>

 <script src="{{ asset('js/app.js') }}" defer>
   

 </script>
</body>
</html>