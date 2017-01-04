<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Snippet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css">
</head>
<body>
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <a href="/">Snippets</a>
                </h1>

                <h2 class="subtitle">
                    A tutorial from the friendly fold at Laracast.com
                </h2>

                <p>
                    <a href="/snippets/create" class="button">Create Snippet</a>
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            {{ $slot }}
        </div>
    </section>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
