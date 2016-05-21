// Extend the callbacks to work with Bootstrap, as used in this example
// See: http://thedersen.com/projects/backbone-validation/#configuration/callbacks
_.extend(Backbone.Validation.callbacks, {
    valid: function (view, attr, selector) {
        var $el = view.$('[name=' + attr + ']'), 
            $group = $el.closest('.form-group');
        
        $group.removeClass('has-error');
        $group.find('.help-block').html('').addClass('hidden');
    },
    invalid: function (view, attr, error, selector) {
        var $el = view.$('[name=' + attr + ']'), 
            $group = $el.closest('.form-group');
        
        $group.addClass('has-error');
        $group.find('.help-block').html(error).removeClass('hidden');
    }
});


// https://github.com/hongymagic/jQuery.serializeObject
$.fn.serializeObject = function () {
    "use strict";
    var a = {}, b = function (b, c) {
        var d = a[c.name];
        "undefined" != typeof d && d !== null ? $.isArray(d) ? d.push(c.value) : a[c.name] = [d, c.value] : a[c.name] = c.value
    };
    return $.each(this.serializeArray(), b), a
};