<template>
    <div class="main clearfix position-relative">
        <div class="main_1 clearfix position-absolute top-0 w-100">
            <NavBar/>
        </div>
        <CarouselComponent/>
    </div>
    <PortComponent/>
    <FolioComponent/>
    <BlogComponent/>
    <FrameComponent/>
    <AboutComponent/>
</template>

<script>
import NavBar from "@/Pages/Client/layouts/NavBar.vue";
import CarouselComponent from "@/Pages/Client/Home/components/CarouselComponent.vue";
import PortComponent from "@/Pages/Client/Home/components/PortComponent.vue";
import FolioComponent from "@/Pages/Client/Home/components/FolioComponent.vue";
import BlogComponent from "@/Pages/Client/Home/components/BlogComponent.vue";
import FrameComponent from "@/Pages/Client/Home/components/FrameComponent.vue";
import AboutComponent from "@/Pages/Client/Home/components/AboutComponent.vue";

export default {
    name: "HomePage",
    components: {AboutComponent, FrameComponent, BlogComponent, FolioComponent, PortComponent, CarouselComponent, NavBar}
}
</script>

<style scoped>

</style>
