APP.DepartCityView = Backbone.View.extend({   

  id: 'departCityWidget',

  template: _.template($('#departCityTpl').html()),

  render: function () {  
    this.$el.html(this.template());
    return this;
  } 

});


APP.DestinCityView = Backbone.View.extend({   

  id: 'destinCityWidget',

  template: _.template($('#destinCityTpl').html()),

  render: function () {  
    this.$el.html(this.template());
    return this;
  } 

});


APP.ShippOptionsView = Backbone.View.extend({    

  initialize: function() {
    this.sizeWidget = new APP.sizeView({model: this.model});
  },

  id: 'shippOptionsWidget',

  template: _.template($('#shippOptionsTpl').html()),

  render: function () {  
    var sizeElem = this.sizeWidget.render().el;

    this.$el.html(this.template());

    this.$el.find('.widget_content').append(sizeElem);
    
    return this;
  }

});


APP.sizeView = Backbone.View.extend({    
  initialize: function() {
    this.listenTo(this.model, 'change:sizeVisibility', this.render);
  },

  id: 'sizeWidget',

  template: _.template($('#sizeTpl').html()),

  render: function () {  
    var visibility = APP.shippOptionsSizesState ? 'show' : 'hide';

    this.$el.html(this.template({
      visibility: visibility,
      length: this.model.get('sizeLength'),
      width: this.model.get('sizeWidth'),
      height: this.model.get('sizeHeight')
    }));

    return this;
  },

  events: {
    'click #sizeVisibleToggler' : 'toggleSizeVisible'
  },

  toggleSizeVisible: function() {
    APP.shippOptionsSizesState = !APP.shippOptionsSizesState;
    this.render();
  }

});


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


