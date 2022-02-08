<template>
    <v-container class="my-15">
        <v-row justify="center">
            <v-col lg="12" class="text-center">
                <v-subheader class="text-h4 justify-center">Nos travaux</v-subheader>
                <p>Voici quelque photos de nos construction et rénovation</p>
            </v-col>
            <v-col lg="12">
                <div class="text-center">
                    <v-chip @click="travaux = 'construction'">Construction</v-chip>
                    <v-chip @click="travaux = 'renovation'">Renovation</v-chip>
                </div>
            </v-col>
            <slot v-if="travaux == 'construction'">
                <v-col lg="3" v-for="(construction, i) in construction" :key="i">
                    <v-card>
                        <v-img
                        :src="construction.image"
                        class="white--text align-end"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                        height="200px"
                        >
                            <v-card-title>{{construction.title}}</v-card-title>
                        </v-img>

                    </v-card>
                </v-col>
            </slot>
            <slot v-if="travaux == 'renovation'">
                <v-col lg="3" v-for="(renovation, i) in renovation" :key="i">
                    <v-card>
                        <v-img
                        :src="renovation.image"
                        class="white--text align-end"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                        height="200px"
                        >
                            <v-card-title>{{renovation.title}}</v-card-title>
                        </v-img>

                    </v-card>
                </v-col>
            </slot>

        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "Portfolio",
    data(){
        return{
            travaux:'CR',
            construction:[
                {title:'Construction 1',image:'https://akadia.fr/wp-content/uploads/2021/03/renovation-maison-1.jpg'},
                {title:'Construction 2',image:'https://www.prix-travaux-m2.com/images/placoplatre.jpg'},
                {title:'Construction 3',image:'https://www.lemoniteur.fr/mediatheque/4/7/3/002122374_620x393_c.jpeg'},
                {title:'Construction 4',image:'https://www.monequerre.fr/wp-content/uploads/2018/02/renovation-appartement.jpg'},
                {title:'Construction 5',image:'https://lebonartisan.cdn.prismic.io/lebonartisan/745a6d68664e74f653aa0d54f09a26e4a007aabb_pose-placo-platre.jpg'},
                {title:'Construction 6',image:'https://www.prix-travaux-m2.com/images/renovation-maison.jpg'}
            ],
            renovation:[
                {title:'Renovation 1',image:'https://storage.googleapis.com/blog-media.kozikaza.com/2019/04/236379d8-salle-de-bain-moderne-noire-et-blanche-1024x768.jpeg'},
                {title:'Renovation 2',image:'https://dzbab7qlkubhz.cloudfront.net/sulu/uploads/media/h-740x570/04/354-pagot-savoie-salle-de-bains-moderne.jpg?v=1-0'},
                {title:'Renovation 3',image:'https://lapiece-prod.s3.amazonaws.com/medias/1606400006_AAD%20sdb%202.JPG'},
                {title:'Renovation 4',image:'https://i.f1g.fr/media/madame/1900x1900/sites/default/files/img/2016/07/salle-de-bain-parentale-de-luxe_3.jpg'},
                {title:'Renovation 5',image:'https://www.sanijura.fr/media/wysiwyg/Tendances/011_100_0826_halo_noir-brillant-laque_meuble_1240.jpg'},
                {title:'Renovation 6',image:'https://www.riluxa.com/media/wysiwyg/Riluxa_-021.jpg'},
                {title:'Renovation 7',image:'https://www.forgiarini.net/sites/default/files/marazzi_appeal_000_0.jpg'},
                {title:'Renovation 8',image:'https://www.espace-aubade.fr/uploads/blog/picture/630x410/2020-12-04-quel-budget-prevoir-pour-renover-sa-salle-de-bains-en-2021-une.jpg'}

            ]
        }
    }
}
</script>

<style>

</style>