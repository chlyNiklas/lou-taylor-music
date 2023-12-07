<script lang="ts">
  type Email = {
    from: string;
    subject: string;
    message: string;
  };

  let errors: string[] = [];
  let isFormSubmitted: boolean = false;

  let form: Email = {
    from: "",
    subject: "",
    message: "",
  };

  let response: string = "";

  const validateForm = (): boolean => {
    errors = [];

    if (!form.from.trim()) {
      errors.push("Email wird benötigt");
    }

    if (!form.subject.trim()) {
      errors.push("Betreff wird benötigt");
    }

    if (!form.message.trim()) {
      errors.push("Nachricht wird benötigt");
    }

    return errors.length === 0;
  };

  const handleSubmit = () => {
    // TODO: handleSubmit!
    if (validateForm()) {
      console.log("Form submitted:", form);

      fetch("");
      fetch("/api/mail.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(form),
      })
        .then((response) => response.json())
        .catch((error) => {
          isFormSubmitted = true;
          response = error;
          console.error("Error:", error);
        });
      form = {
        from: "",
        subject: "",
        message: "",
      };
    }
  };
</script>

{#if !isFormSubmitted}
  <form on:submit|preventDefault={handleSubmit}>
    <label for="from">Deine Email:</label>
    <input type="email" id="from" bind:value={form.from} />

    <label for="subject">Betreff:</label>
    <input type="text" id="subject" bind:value={form.subject} />

    <label for="message">Nachricht:</label>
    <textarea id="message" bind:value={form.message} />

    {#if errors.length > 0}
      <ul>
        {#each errors as error (error)}
          <li>{error}</li>
        {/each}
      </ul>
    {/if}

    <button type="submit">Senden</button>
  </form>
{:else}
  <p>{response}</p>
{/if}

<style lang="scss">
  @use "$lib/style/settings.scss";
  form {
    display: grid;
    gap: settings.$margin-small;
    margin: settings.$margin-big;

    width: 75%;
    min-width: 200px;
    max-width: 350px;

    input,
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid var(--color-bg-2);
      border-radius: settings.$margin-small;
      box-sizing: border-box;
      background-color: #fff;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      color: var(--color-accent-error);
      font-weight: 500;

      li {
        margin-bottom: 5px;
      }
    }

    button {
      display: block;

      margin: 0 auto;
      padding: settings.$margin-small settings.$margin-big;

      background-color: var(--color-accent-strong);
      color: white;
      border: none;
      border-radius: settings.$margin-small;
      cursor: pointer;

      &:hover {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
      &:active,
      &:disabled {
        background-color: var(--color-accent-weak);
      }
    }
  }

  p {
    color: var(--color-accent-error);
    font-weight: bold;
  }
</style>
