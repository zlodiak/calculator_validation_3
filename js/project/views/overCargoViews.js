APP.OverCargoView = Backbone.View.extend({    

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

    var overCargoSizeWidget =  new APP.OverCargoSizeView({model: this.model}), 
        overCargoSizeElem = overCargoSizeWidget.render().el;

    this.$el.find('.widget_content .size_content').html(overCargoSizeElem);

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


APP.OverCargoSizeView = Backbone.View.extend({    

  id: 'overCargoSizeWidget',

  template: _.template($('#overCargoSizeTpl').html()),

  render: function () {  
    var visibility = APP.overCargoSizeState ? 'show' : 'hide';

    this.$el.html(this.template({
      visibility: visibility,
      length: this.model.get('overCargoSizeLength'),
      width:  this.model.get('overCargoSizeWidth'),
      height: this.model.get('overCargoSizeHeight')
    }));

    return this;
  },

  events: {
    'click #overCargoSizeVisibleToggler' : 'toggleVisible'
  },

  toggleVisible: function() { 
    APP.overCargoSizeState = !APP.overCargoSizeState;
    this.render();
  }

});

