<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title></title>
</head>
<body>
    <div id="app">
        <v-app>
            <v-toolbar dark color="primary">
                <v-toolbar-side-icon></v-toolbar-side-icon>

                <v-toolbar-title class="white--text">Title</v-toolbar-title>

                <v-spacer></v-spacer>

                <v-btn icon>
                    <v-icon>search</v-icon>
                </v-btn>

                <v-btn icon>
                    <v-icon>apps</v-icon>
                </v-btn>

                <v-btn icon>
                    <v-icon>refresh</v-icon>
                </v-btn>

                <v-btn icon>
                    <v-icon>more_vert</v-icon>
                </v-btn>
            </v-toolbar>
        </v-app>
    </div>
<script src="{{asset('js/app.js')}}" ></script>
</body>
</html>