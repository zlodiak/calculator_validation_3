APP.LathingView = Backbone.View.extend({    

  id: 'lathingWidget',

  template: _.template($('#lathingTpl').html()),

  render: function () {  
    var visibility = APP.lathingState ? 'show' : 'hide',
        checkboxActiveState = APP.lathingState ? 'checked' : '';    

    this.$el.html(this.template({
      checkboxActiveState: checkboxActiveState,
      visibility: visibility,
      weight: this.model.get('lathing')
    }));

    return this;
  },

  events: {
    'click #lathingStateCheckbox' : 'toggleVisible'
  },

  toggleVisible: function() {  
    APP.lathingState = !APP.lathingState;
    this.render();
  }   

});
