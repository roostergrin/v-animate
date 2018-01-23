<template lang='pug' src='./app.pug'></template>

<script>
// components
import Navigation from 'components/navigation/navigation'

export default {
  created () {
    this.$store.dispatch('GET_PAGES')
    this.$store.dispatch('GET_APP')
  },
  computed: {
    props () {
      return this.$store.state
    }
  },
  components: {
    Navigation
  },
  name: 'app'
}
</script>

<-- styles have been moved to main.sass file -->
<style src='../main.sass' lang='sass'></style>
