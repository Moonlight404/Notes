<div class="center" style="max-width: 700px;
    margin: 0px auto;
    position: relative;
    background: #fff;
    box-shadow: 1px 1px 2px rgba(0,0,0,0.4);
    padding: 28px;">
<h1>Register</h1>
<v-form v-model="valid">
    <v-container>
    <v-row>   
        <v-col
        cols="12"
        md="12"
        >
        <v-text-field
            v-model="email"
            :rules="emailRules"
            label="E-mail"
            required
        ></v-text-field>
        </v-col>

        <v-col
        cols="12"
        md="12"
        >
        <v-text-field
            v-model="password"
            :rules="nameRules"
            label="Senha"
            required
        ></v-text-field>
        </v-col>


    <div style="padding: 10px;">
    <div class="my-2">
        <v-btn depressed color="primary">Registrar</v-btn>
        <span style="padding:15px;">  </span>
        <v-btn href="/login" depressed color="primary">Login</v-btn>
    </div>
    </div>

    </v-row>
    </v-container>
</v-form>
</div>