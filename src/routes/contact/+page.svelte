<script>
  import Contact from "$lib/component/Contact.svelte";
</script>

<div class="content">
  <article class="left">
    <h1>Kontaktier mich!</h1>
    <p>
      Wenn du mit mir in Kontakt treten willst, um einfach nur Hallo zu sagen,
      ein Projekt zu starten oder wenn du mich buchen möchtest, kannst du das
      über...
    </p>
  </article>
  <article class="right">
    <h1>Socialmedia,</h1>
    <p>
      <a href="https://www.instagram.com/lou.t_jazz/" target="_blank"
        >Instagram</a
      >,
      <a href="https://on.soundcloud.com/P6kds" target="_blank">Soundcloud</a>
    </p>
  </article>
  <article class="left">
    <h1><a href="mailto:kontakt@lou-taylor.ch">Email</a>,</h1>
    <p>Schreib mir einfach, normalerweise bin ich nicht allzu frech.</p>
  </article>

  <article class="right">
    <h1>Dieses Formular,</h1>
    <Contact />
  </article>
  <article class="left">
    <h1>Oder sogar per Brief.</h1>
    <div>
      <p>
        Ja, wirklich. Also wenn du so ausgefallen bist <br />
        und immer noch mit Papier herumhantierst.
      </p>
      <address>
        Alpenstrasse 22, <br />
        4950 Huttwil <br />
        Loana Groux <br />
      </address>
    </div>
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

    div {
      text-align: left;

      address {
        margin: settings.$margin-small;
      }
    }
  }

  .content {
    @include grid.iregular-thirds;
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
