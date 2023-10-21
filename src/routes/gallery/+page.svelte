<script>
  import AutoGrid from "$lib/component/AutoGrid.svelte";
  import lou_taylor_home from "$lib/images/lou-taylor-home.jpeg";
</script>

<AutoGrid>
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
</AutoGrid>

<style lang="scss">
  img {
    max-width: 30%;
  }
</style>
