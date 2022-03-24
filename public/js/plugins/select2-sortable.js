(function($){
    function titleCase(string) {
        var sentence = string.toLowerCase().split(" ");
        for(var i = 0; i< sentence.length; i++){
            sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
        }
        return string.toUpperCase() == string ? string : sentence.join(" ");
    }
    $.fn.extend({
        select2_sortable: function(){
            var select = $(this);
            $(select).select2({
                width: '100%',
                tags:true,
                createTag: function(params) {
                    var term = titleCase($.trim(params.term));

                    if (term === '') {
                      return null;
                    }
                    var code = term
                    return {
                      id: code,
                      text: term,
                      newTag: true // add additional parameters
                    }
                },
                templateSelection: function (data, container) {
                    // Add custom attributes to the <option> tag for the selected option
                    $(data.element).attr('data-title', data.text);
                    return data.text;
                }
            });
            var ul = $(select).next('.select2-container').first('ul.select2-selection__rendered');
            ul.sortable({
                placeholder : 'ui-state-highlight',
                forcePlaceholderSize: true,
                items       : 'li:not(.select2-search__field)',
                tolerance   : 'pointer',
                stop: function() {
                    $($(ul).find('.select2-selection__choice').get().reverse()).each(function() {
                        var id = $(this).attr('title');
                        var option = select.find('option[data-title="' + id + '"]')[0];
                        $(select).prepend(option).trigger("change");
                    });
                }
            });
        }
    });
}(jQuery));
