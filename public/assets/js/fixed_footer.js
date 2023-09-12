document.addEventListener('DOMContentLoaded', function() {
    function adjustFooterPosition() {
        var windowHeight = window.innerHeight;
        var documentHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);

        var footer = document.querySelector('footer');

        if (documentHeight > windowHeight) {
            footer.classList.remove('fixed-footer');
            console.log('remove');
        } else {
            footer.classList.add('fixed-footer');
            console.log('add');
        }
    }

    adjustFooterPosition();

    window.addEventListener('resize', function() {
        adjustFooterPosition();
    });
});