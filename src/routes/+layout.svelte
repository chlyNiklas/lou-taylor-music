<script>
  import Header from "$lib/component/Header.svelte";
  import Footer from "$lib/component/Footer.svelte";
  import "./styles.scss";
  import "../app.css";
</script>

<svelte:head>
  <title>Lou Taylor Music</title>
</svelte:head>

<div class="flex flex-col min-h-screen">
  <Header />

  <main class="flex flex-col p-4 w-full mx-auto my-10 box-border sm:max-w-3xl">
    <slot />
  </main>
  <Footer />
</div>
