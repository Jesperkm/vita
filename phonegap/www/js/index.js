window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);

Zepto(function($) {
    function getWord() {
        // Check if input field is empty.
        if ($('#addWord').val() == null) {
            alert("skriv venligst en tekst");
        } else {
            // Click event for the class word.
            $('.btn-click').on('click', function(e) {
                // get word scope withing scope.
                var word = $(this).text();
                // add html to results
                $('#textfield').append('<li class="' + word + ' result" "><a href="#" class="item">X  ' + word + ' </a></li>');
            });
            // click event for input field.
            $(document).on('click', '#submit_word', function() {
                if ($('#addWord').val() == "") //
                {
                    alert("skriv venligst en tekst");
                } else {
                    // output string from input field.
                    $('#textfield').append('<div class="result" "><a href="#" class="item">X ' + $('#addWord').val() + '</a></div>');
                }
            });
            // remove word from result list.
            $(document).on('click', '.result', function() {
                $(this).remove();
            });
            $(document).on('click', '#trashcan', function() {
                // remove all results.
                $('.result').remove();
            });
        }
    };

    getWord();

})