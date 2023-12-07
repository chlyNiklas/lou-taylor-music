<script>
  import Contact from "$lib/component/Contact.svelte";
</script>

<div class="content">
  <article class="left">
    <address>
      Alpenstrasse 22, <br />
      4950 Huttwil <br />
      Loana Groux <br />
      E-Mail: <a href="mailto:kontakt@lou-taylor.ch">kontakt@lou-taylor.ch</a>
      <br />
      0797740153<br />
    </address>
  </article>
  <article class="right">
    <Contact />
  </article>
</div>

<style lang="scss">
  @use "$lib/style/settings.scss";
  @use "$lib/style/grid.scss";

  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;

    address {
      margin: settings.$margin-small;
    }
  }

  .content {
    @include grid.iregular-thirds;
    margin-top: 5vh;
  }
  .left {
    @include grid.left-side;
  }
  .right {
    @include grid.right-side;
  }
  address {
    text-align: left;
  }
</style>
