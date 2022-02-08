<template>
    <v-container class="pt-15">
        <v-row>
            <v-col lg="6">
                <h2 class="intro-text">Bienvenue chez Gondomar Isolation</h2>
                <p class="description  ">L'entreprise spécialisé dans vos travaux de platerie depuis plus de 12ans</p>
                <v-btn color="light-blue lighten-2" class="white--text mr-10" rounded>Prendre contact</v-btn>
                <v-btn color="light-blue lighten-2" class="white--text" rounded>
                     Demander un devis
                </v-btn>
            </v-col>
            <v-col lg="6">
                <img width="100%" src="./../assets/home.svg" alt="">
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "HeroComponent"
}
</script>

<style scoped>
h2.intro-text {
    margin-top: 20%;
    font-size: 50px;
    font-weight: 800;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #5D4037;
}
p.description {
    font-size: 19px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin: 32px 0px;
    color: #8D6E63;
}
</style>