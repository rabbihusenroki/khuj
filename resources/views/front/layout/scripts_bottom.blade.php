<script src="{{ asset('dist-front/js/custom.js') }}"></script>
<script>
    function shareOnFacebook() {
        var urlToShare = encodeURIComponent(window.location.href);
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + urlToShare, '_blank');
    }
    
    function shareOnTwitter() {
        var urlToShare = encodeURIComponent(window.location.href);
        window.open('https://twitter.com/intent/tweet?url=' + urlToShare, '_blank');
    }
</script>

