<template>
    <v-app-bar
    style="padding:0px 90px"
      app
      elevation="6"
      elevate-on-scroll
    >
    <v-toolbar-title>Gondomar Isolation</v-toolbar-title>
    <v-spacer/>
    <v-list class="d-flex align-center"> 
      <v-list-item link v-for="(menu,index) in menus" :key="index" :to="menu.route">
        <v-list-item-title class="title">{{menu.title}}</v-list-item-title>
      </v-list-item>
    </v-list>

    </v-app-bar>
</template>

<script>

export default {
  name: 'Header',
  data(){
    return{
      menus:[
        {title:'Home',      route:'home'},
        {title:'A Propos',  route: 'Aboutus'},
        {title:'Portfolio', route:'portfolio'},
        {title:'Projet',   route:'project'},
        {title:'Gallerie',   route:'Gallerie'},
        {title:'Contact',   route:'contact'},
        
      ]
    }
  }
}
</script>

<style scoped>
.v-toolbar__title{
  font-size: 32px;
  color: #6D4C41;
  font-weight: 700;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.v-app-bar{
  color: aqua;
}

</style>
