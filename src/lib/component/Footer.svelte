<footer>
  <p>
    <a href="/impressum">Impressum</a>
  </p>
  <p>
    Icons on this website are <a href="https://www.s-ings.com/typicons/"
      >Typicons</a
    >
  </p>
</footer>

<style lang="scss">
  @use "$lib/settings.scss";
  footer {
    display: grid;
    padding: 12px;

    grid-template-columns: repeat(
      auto-fill,
      minmax(settings.$threshold-mobile, 1fr)
    );

    text-align: center;

    background-color: settings.$color-dark-0;
    color: settings.$color-light-2;
  }

  footer a {
    font-weight: bold;
  }
  @media (max-width: settings.$threshold-mobile) {
    footer {
      grid-template-columns: 1fr;
    }
  }
</style>
