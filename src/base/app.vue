<template lang='pug' src='./app.pug'></template>

<script>
// components
import Navigation from 'components/navigation/navigation'

export default {
  data () {
    return {
      props: ['props']
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
