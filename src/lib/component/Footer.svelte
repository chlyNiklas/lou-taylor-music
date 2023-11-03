<footer>
  <p>
    <a href="/imprint">Impressum</a>
  </p>
  <p>
    Icons auf dieser Webseite sind <a href="https://www.s-ings.com/typicons/"
      >Typicons</a
    >
  </p>
</footer>

<style lang="scss">
  @use "$lib/style/settings.scss";
  footer {
    display: flex;
    padding: 12px;

    text-align: center;

    background-color: settings.$color-dark-0;
    color: settings.$color-light-2;

    justify-content: space-evenly;
    flex-wrap: wrap;
    * {
      min-width: 150px;
    }
  }

  footer a {
    font-weight: bold;
  }
</style>
