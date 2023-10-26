<script lang="ts">
  export let style: string = "";
</script>

<div {style}>
  <h1 style="grid-column: 1/ span 2">Lou</h1>
  <h1 style="grid-column: 2/ span 4">Taylor</h1>
  <h1 style="grid-column: 1/ span 3">Music</h1>
</div>

<style lang="scss">
  @use "$lib/style/settings.scss";
  @use "sass:math";
  h1 {
    margin: math.div(settings.$margin-small, 4) settings.$margin-small;
  }
  div {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
  }
</style>
