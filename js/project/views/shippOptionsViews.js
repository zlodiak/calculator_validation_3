APP.ShippOptionsView = Backbone.View.extend({    

  initialize: function() {
    this.sizeWidget = new APP.SizeView({model: this.model});

    this.listenTo(this.model, 'change:shippOptionsVolume', this.volumeUpdate);
  },

  id: 'shippOptionsWidget',

  template: _.template($('#shippOptionsTpl').html()),

  render: function () {  
    var sizeElem = this.sizeWidget.render().el;

    this.$el.html(this.template());

    this.$el.find('.widget_content').append(sizeElem);
    
    return this;
  },

  volumeUpdate: function () {  
    var volume = this.model.get('shippOptionsVolume');
    this.$el.find('#fldShippOptionsVolume').val(volume);
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

    console.log('ch APP.shippOptionsSizesState', APP.shippOptionsSizesState)
    this.render();
  },

  calculateSize: function() {
    var length =  this.$el.find('#fldSizeLength').val(),
        width =   this.$el.find('#fldSizeWidth').val(),
        height =  this.$el.find('#fldSizeHeight').val(),
        volume =  length * width * height;

    if(APP.helper.isNumCheck(volume)) { 
      this.model.set({shippOptionsVolume: volume});
    } else {
      this.model.set({shippOptionsVolume: undefined});
    };    
  }  

});