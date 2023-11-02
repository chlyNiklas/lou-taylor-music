<script lang="ts">
  import { Marked, Renderer } from "@ts-stack/markdown";
  import { afterUpdate } from "svelte";

  Marked.setOptions({
    renderer: new Renderer(),
    gfm: true,
    tables: true,
    breaks: false,
    pedantic: false,
    sanitize: true,
    smartLists: true,
    smartypants: false,
  });
  export let markdown: string | null = null;
  export let src: string | null = null;

  let output: string = "";

  async function getMarkdown() {
    if (!src) return;

    markdown = await (await fetch(src)).text();
  }
  afterUpdate(() => {
    if (src) getMarkdown();
    output = Marked.parse(markdown ? markdown : "__nothing to see here__");
  });
</script>

<div class="markdown">
  {@html output}
</div>
