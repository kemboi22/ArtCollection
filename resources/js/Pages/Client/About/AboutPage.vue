<template>
<div>
    <NavBar/>
    <AboutLinksComponent/>
    <AboutMoreInfoComponent/>
    <NewsLetterComponent/>
    <FooterComponent/>
</div>
</template>

<script>
import NavBar from "@/Pages/Client/layouts/NavBar.vue";
import AboutLinksComponent from "@/Pages/Client/About/components/AboutLinksComponent.vue";
import AboutMoreInfoComponent from "@/Pages/Client/About/components/AboutMoreInfoComponent.vue";
import NewsLetterComponent from "@/Pages/Client/About/components/NewsLetterComponent.vue";
import FooterComponent from "@/Pages/Client/layouts/FooterComponent.vue";

export default {
    name: "AboutPage",
    components: {FooterComponent, NewsLetterComponent, AboutMoreInfoComponent, AboutLinksComponent, NavBar}
}
</script>

<style scoped>

</style>
