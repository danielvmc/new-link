@component('layout')
    @if (count($snippets))
        @foreach ($snippets as $snippet)
            <article class="snippet">
                <div class="is-flex">
                    <h4 class="title is-4 flex">
                        <a href="/snippets/{{ $snippet->id }}">
                            {{ $snippet->title }}
                        </a>
                    </h4>

                    <a href="/snippets/{{ $snippet->id }}/fork">Forked me</a>
                </div>

                <pre>
                    <code>{{ $snippet->body }}</code>
                </pre>
            </article>
        @endforeach
    @endif
@endcomponent
