<template>
  <div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col" v-for="header in headers">{{header}}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="datum in data">
          <td v-for="value in datum">{{value}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        props: ['headers', 'data'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
