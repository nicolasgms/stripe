<template>
     <v-container class="my-15">
        <v-row justify="center">
            <v-col lg="12" class="text-center">
                <v-subheader class="text-h4 justify-center">Contactez nous</v-subheader><br>
                <p>Vous pouvez nous contacter par mail ou noud appeler au 06-75-65-84-96</p><br>
            </v-col>
            <v-col lg="6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1348903.440105345!2d1.381641584520732!3d48.67533138777788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e1c403a68c17%3A0x10b82c3688b2570!2s%C3%8Ele-de-France!5e0!3m2!1sfr!2sfr!4v1638804829630!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </v-col>
            <v-col lg="6">
                <v-form ref="form">
                    <v-text-field
                        v-model="contactInfo.name"
                        :counter="10"
                        label="Name"
                        required
                    ></v-text-field>

                    <v-text-field
                        v-model="contactInfo.email"
                        label="E-mail"
                        required
                    ></v-text-field>
                    <v-textarea label="Message" v-model="contactInfo.message">

                    </v-textarea>


                    <v-btn color="blue light-blue-1" class="mr-4">
                    Envoyer
                    </v-btn>

                </v-form>
            </v-col>
        </v-row>
     </v-container>
</template>

<script>
export default {
    name: "Contactus",
    data(){
        return{
            contactInfo:{}
        }
    }
}
</script>