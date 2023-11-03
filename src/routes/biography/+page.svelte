<script>
  import Contact from "$lib/component/Contact.svelte";
  import Image from "$lib/component/Image.svelte";
  import kiss from "$lib/images/kiss.jpeg";
</script>

<div class="content">
  <article class="left">
    <p>
      Loana Iva Tiziana Groux, geboren am 07.07.2007, zeigte schon mit jungem
      Alter Freude an der Musik. Ihre kleinen Beine zappelten herum, als ihr
      Vater ihr das Musik Video zu Kiss’s “I was made for loving you” zeigte,
      während ihr schriller Gesang war durch das ganze Haus zu hören war.
    </p>
  </article>
  <article class="right">
    <Image src={kiss} alt="Lou als Kiss." />
  </article>
  <article class="left">
    <p>
      Mit sieben Jahren wurde das energiegeladene Kind eingeschult und um übrige
      Energie loszuwerden, meldeten Loana’s Eltern sie für Karate und Schlagzeug
      Unterricht an.
    </p>
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
