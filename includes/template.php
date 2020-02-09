<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>Notes</title>
</head>
<body>
    <div id="app">
    <v-app>
    <v-navigation-drawer app>
        <!-- -->
    </v-navigation-drawer>

    <v-app-bar app color="indigo darken-2">
        <h1 style="color: #fff;">Notes</h1>
    </v-app-bar>

    <!-- Sizes your content based upon application components -->
    <v-content>

        <!-- Provides the application the proper gutter -->
        <v-container fluid>

        <!-- If using vue-router -->
        <?php route();?>
        </v-container>
    </v-content>

    <v-footer app>
        <!-- -->
    </v-footer>
    </v-app>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script>
        new Vue({
      el: '#app',
      vuetify: new Vuetify(),
        })
    </script>

</body>
</html>