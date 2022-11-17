<template>
  <div>
    <multiselect 
      v-model="value" 
      :options="options" 
      :multiple="true" 
      :close-on-select="false" 
      :clear-on-select="false"
      track-by="id"
      label="name"
      @select="addSelection"
      @remove="removeSelection"
    >
    </multiselect>
    <input type="hidden" :name="alias" :value="selected">
  </div>
</template>

<script>
  import Multiselect from 'vue-multiselect'

  export default {
    // OR register locally
    props: ['data', 'alias', 'defaultValue'],
    components: { Multiselect },
    data () {
      return {
        value: this.defaultValue,
        selected: [],
        options: this.data
      }
    },
    methods: {
      addSelection(option) {
        this.selected.push(option.id)
      },
      removeSelection(option) {
        this.selected = this.selected.filter(function(item) {
          return item !== option.id
        })
      }
    },
    mounted() {
      this.defaultValue.forEach(
        value => this.selected.push(value.id)
      )
    }
  }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
