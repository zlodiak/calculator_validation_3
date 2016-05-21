APP.OverCargoView = Backbone.View.extend({    

  initialize: function() {

  },

  id: 'overCargoWidget',

  template: _.template($('#overCargoTpl').html()),

  render: function () {  
    var visibility = APP.overCargoState ? 'show' : 'hide',
        checkboxActiveState = APP.overCargoState ? 'checked' : '';

    this.$el.html(this.template({
      checkboxActiveState: checkboxActiveState,
      visibility: visibility,
      weight: this.model.get('overCargoWeight'),
      volume: this.model.get('overCargoVolume')
    }));
    
    return this;
  },

  events: {
    'click #overCargoStateCheckbox' : 'toggleOverCargoVisible'
  },

  toggleOverCargoVisible: function() {
    APP.overCargoState = !APP.overCargoState;
    this.render();
  }

});


