@component('layout')
    <div class="is-flex">
        <h1 class="title flex">
            {{ $snippet->title }}
        </h1>

        <a href="/snippets/{{ $snippet->id }}/fork">Forked me</a>
    </div>
    <pre>
        <code>{{ $snippet->body }}</code>
    </pre>

    <p>
        <a href="/">Back</a>
    </p>

    @if ($snippet->isAFork())
        <hr>
        <h3 class="title is-3">
            Forked From
            <a href="/snippets/{{ $snippet->originalSnippet->id }}">
                {{ $snippet->originalSnippet->title }}
            </a>
        </h3>
    @endif

    @if ($snippet->forks->count())
        <hr>

        <h3 class="title is-3">Forks</h3>

        <ul>
            @foreach ($snippet->forks as $fork)
                <li>
                    <a href="/snippets/{{ $fork->id }}">
                        {{ $fork->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
@endcomponent
