<header>
    
    <div class="vertical-align logo">
        <img src="uploads/sites/{{ $id }}/logo.svg" alt="{{ $theme->name }}">
        <h1>{{ $theme->claim }}</h1>
    </div>
    
    @if (isset($theme->github_link) && !empty($theme->github_link))
    
    <a class="github show-for-medium-up" href="{{ $theme->github_link }}" target="_blank">GitHub</a>
    
    @endif
    
    <a class="repository show-for-medium-up" href="{{ env('APP_URL') }}">Repository Index</a>
    
</header>