<template>
    <v-form v-model="valid">
        <v-container>
            <v-layout>

                <v-flex
                        xs12
                        md4
                >
                    <v-text-field
                            v-model="form.email"
                            :type="email"
                            label="E-mail"
                            required
                    ></v-text-field>
                </v-flex>

                <v-flex
                        xs12
                        md4
                >
                    <v-text-field
                            v-model="form.password"
                            :type="password"
                            :counter="10"
                            label="Password"
                            required
                    ></v-text-field>
                </v-flex>

                <v-btn
                        color="green"
                        type="submit"
                >Login</v-btn>

            </v-layout>
        </v-container>
    </v-form>
</template>

<script>
    export default {
        data(){
            return {
                form: {
                    email:null,
                    password:null
                }
            }
        }
    }
</script>

<style>

</style>