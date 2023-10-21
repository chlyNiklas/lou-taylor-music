<script>
  import lou_taylor_home from "$lib/images/lou-taylor-home.jpeg";
</script>

<div>
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
  <img src={lou_taylor_home} />
</div>

<style lang="scss">
  div {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-template-rows: masonry;
  }
  img {
    max-width: 250px;
  }
</style>
