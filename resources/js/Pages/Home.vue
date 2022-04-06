<template lang="">
    <div>
        <HeroSection></HeroSection>
        <CategoryGridSection></CategoryGridSection>
        <ListingSection :listings="listings"></ListingSection>
        <ServiceListingSection :services="services"></ServiceListingSection>
        <FooterSection></FooterSection>
    </div>
</template>
<script>

import HeroSection from '../Sections/HeroSection.vue'
import CategoryGridSection from '../Sections/CategoryGridSection.vue'
import ListingSection from '../Sections/ListingSection.vue'
import ServiceListingSection from '../Sections/ServiceListingSection.vue'

import FooterSection from '../Sections/FooterSection.vue'

export default {
    props: [
        'listings',
        'services'
        ],
    components: {
        HeroSection,
        CategoryGridSection,
        ListingSection,
        ServiceListingSection,
        FooterSection,
    },



}
</script>
