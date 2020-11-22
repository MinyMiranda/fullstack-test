
<template>
  <b-navbar toggleable="lg" type="dark" variant="dark">
    <b-navbar-brand href="#" class="ml-10 text-navbar">Rockr Page</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-navbar-nav class="mr-10">
          <b-nav-item href="#" class="text-navbar">Posts</b-nav-item>
          <b-nav-item href="#" class="ml-5 text-navbar">Contact</b-nav-item>
        </b-navbar-nav>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>
<script>
import { BNavbar, BNavItem, BNavbarNav, BCollapse, BNavbarBrand, BNavbarToggle } from "bootstrap-vue";
export default {
  components: {
    BNavbar,
    BNavItem,
    BNavbarNav,
    BCollapse,
    BNavbarToggle,
    BNavbarBrand,
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
