<template>
    <v-container class="my-15">
        <v-row class="div">
            <v-col lg="6" class="div1">
                <img width="980px" src="./../assets/about3.svg" class="img">
            </v-col>
            <v-col lg="6" class="div2">
                <h2 class="intro-text">A propos de nous</h2><br>
                <p>L'entreprise Gondomar Isolation c'est:</p>
            <v-list>
                <v-list-item>
                    <v-icon color="light-blue lighten-2" class="mr-3">mdi-check-all</v-icon>
                    <v-list-item-subtitle>Plus de 12ans d'expérience dans le domaine</v-list-item-subtitle>
                </v-list-item>
                <v-list-item>
                    <v-icon color="light-blue lighten-2" class="mr-3">mdi-check-all</v-icon>
                    <v-list-item-subtitle>Des clients toujours satisfait</v-list-item-subtitle>
                </v-list-item>
                <v-list-item>
                    <v-icon color="light-blue lighten-2" class="mr-3">mdi-check-all</v-icon>
                    <v-list-item-subtitle>Des travaux réalisé par un profesionnel</v-list-item-subtitle>
                </v-list-item>
                <p>Nous sommes l'entreprise qu'il vous faut pour tout vos travaux de platerie et autres.</p>
            </v-list>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default{
    name: "Aboutus"
}
</script>

<style scoped>
.img{
    margin-left: -30%;
}
.intro-text{
    font-style: 50px;
}
.text-h4{
    color: #29B6F6;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
p{
    color: #4FC3F7;
    font-style: 700px;
}
.div2{
    margin-top: 18%;
}
.v-list-item{
        width: 1100px;

}

</style>
