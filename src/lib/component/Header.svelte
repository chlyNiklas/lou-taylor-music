<script lang="ts">
  import { page } from "$app/stores";
  import ti_menue from "typicons.font/src/svg/th-menu.svg";
  import ti_close from "typicons.font/src/svg/times.svg";
  import SvgButton from "$lib/component/SvgButton.svelte";
  import ThemeSwitcher from "$lib/component/ThemeSwitcher.svelte";

  const entries = [
    { url: "/", name: "Startseite" },
    { url: "/gallery/", name: "Galerie" },
    { url: "/projects/", name: "Projekte" },
    { url: "/biography/", name: "Biografie" },
    { url: "/contact/", name: "Kontakt" },
  ];

  let menue = {
    open: false,
    src: ti_menue,
  };

  $: {
    if (menue.open) {
      menue.src = ti_close;
    } else {
      menue.src = ti_menue;
    }
  }

  function getPageName(): string {
    let name: string[] = [$page.url.pathname];
    name = name[0].split("/");
    return (
      name[name.length - 2].charAt(0).toUpperCase() +
      name[name.length - 2].slice(1)
    );
  }
</script>

<header>
  <div class="corner">
    <div>
      <ThemeSwitcher />
    </div>
  </div>
  <nav>
    <ul class="desktop">
      {#if !entries.find((e) => e.url === $page.url.pathname)}
        <li aria-current="page">
          <a href="/">{getPageName()}</a>
        </li>
      {/if}

      {#each entries as entry}
        <li
          aria-current={$page.url.pathname === entry.url ? "page" : undefined}
        >
          <a href={entry.url}>{entry.name}</a>
        </li>
      {/each}
    </ul>
    <ul class="mobile" style="flex-direction: column; ">
      {#if entries.find((e) => e.url === $page.url.pathname)}
        <li aria-current="page">
          <a href="/" on:click={() => (menue.open = false)}
            >{entries.find((e) => e.url === $page.url.pathname).name}</a
          >
        </li>
      {:else}
        <li aria-current="page">
          <a href="/" on:click={() => (menue.open = false)}>{getPageName()}</a>
        </li>
      {/if}
      {#each entries.filter((e) => e.url !== $page.url.pathname) as entry}
        <li class:invisible={!menue.open}>
          <a href={entry.url} on:click={() => (menue.open = false)}
            >{entry.name}</a
          >
        </li>
      {/each}
    </ul>
  </nav>

  <div class="corner">
    <div class="mobile" style="height: 100%;">
      <SvgButton
        src={menue.src}
        color="light"
        ariaLabel={!menue.open ? "show menu" : "hide menu"}
        on:click={() => (menue.open = !menue.open)}
      />
    </div>
  </div>
</header>

<style lang="scss">
  @use "$lib/style/settings.scss";
  header {
    display: flex;
    background-color: settings.$color-dark-0;
    justify-content: space-between;
  }
  nav {
    display: flex;
    justify-content: center;
  }

  .corner {
    width: 3em;
    height: 3em;

    div {
      display: flex;

      height: 100%;

      align-items: center;
      justify-content: center;
    }

    img {
      width: 2em;
      height: 2em;
      object-fit: contain;
    }
  }
  .invisible {
    height: 0;
    margin: 0;
    padding: 0;
    transition: all settings.$transition-duration-long ease-in-out;
  }

  svg {
    width: 2em;
    height: 3em;
    display: block;
  }

  path {
    fill: var(--background);
  }

  ul {
    position: relative;
    padding: 0;
    margin: 0;
    min-height: 3em;
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    background-size: contain;
  }

  li {
    position: relative;
    height: 1em;
    margin: 1em 0.5em;
    padding: 0.1em;

    overflow: hidden;

    transition: all settings.$transition-duration-long ease-in-out;
  }

  li[aria-current="page"] a {
    font-weight: 1000;
    font-size: 1rem;
  }

  nav a {
    display: flex;
    height: 100%;
    align-items: center;
    padding: 0 0.5rem;
    color: settings.$color-light-0;
    font-size: 0.8rem;
    letter-spacing: 0.1em;
    text-decoration: none;
  }

  a:hover {
    color: settings.$color-accent-strong;
  }

  @media (min-width: settings.$threshold-desktop) {
    .mobile {
      display: none;
    }
  }
  @media (max-width: settings.$threshold-desktop) {
    .desktop {
      display: none;
    }
  }
</style>
