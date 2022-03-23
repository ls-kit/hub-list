<template lang="">
    <div>
        <HeroSection></HeroSection>
        <CategoryGridSection></CategoryGridSection>
        <ListingSection></ListingSection>
        <FooterSection></FooterSection>
    </div>
</template>
<script>

import HeroSection from '../Sections/HeroSection.vue'
import CategoryGridSection from '../Sections/CategoryGridSection.vue'
import ListingSection from '../Sections/ListingSection.vue'
import FooterSection from '../Sections/FooterSection.vue'

export default {
    components: {
        HeroSection,
        CategoryGridSection,
        ListingSection,
        FooterSection,

    },


}
</script>
