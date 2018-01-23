<template lang='pug' src='./home.pug'></template>

<script>
import Loader from 'components/loader/loader'

export default {
  name: 'home',
  data () {
    return {
      props: {},
      loading: true
    }
  },
  created () {
    this.loading = false
  },
  components: {
    Loader
  }
}
</script>
