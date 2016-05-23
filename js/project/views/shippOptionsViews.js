APP.ShippOptionsView = Backbone.View.extend({    

  initialize: function() {
    this.sizeWidget = new APP.SizeView({model: this.model});
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


APP.SizeView = Backbone.View.extend({    

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
    'click #sizeVisibleToggler' : 'toggleVisible',
    'blur .size' : 'calculateSize'
  },

  toggleVisible: function() {
    APP.shippOptionsSizesState = !APP.shippOptionsSizesState;
    this.render();
  },

  calculateSize: function() {
    var length =  this.$el.find('#fldSizeLength').val(),
        width =   this.$el.find('#fldSizeWidth').val(),
        height =  this.$el.find('#fldSizeHeight').val(),
        value = length * width * height;

    if(APP.helper.isNumCheck(value)) { 
      this.model.set({shippOptionsVolume: value});
    } else {
      this.model.set({shippOptionsVolume: undefined});
    };    
  }  

});