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
    'click #overCargoStateCheckbox' : 'toggleVisible'
  },

  toggleVisible: function() {  
    APP.overCargoState = !APP.overCargoState;
    this.render();
  }   

});
