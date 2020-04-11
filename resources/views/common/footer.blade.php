@if(setting('app-privacy-policy') or setting('app-terms-of-service'))
<footer>
    @if(setting('app-privacy-policy'))
        <a href="{{ setting('app-privacy-policy') }}">{{ trans('settings.app_privacy_policy') }}</a>
    @endif
    @if(setting('app-terms-of-service'))
        <a href="{{ setting('app-terms-of-service') }}">{{ trans('settings.app_terms_of_service') }}</a>
    @endif
    <a href="https://www.bookstackapp.com/">Powered by BookStack</a>
    <a href="https://github.com/Findus23/BookStack/">with custom modifications</a>
</footer>
@endif
