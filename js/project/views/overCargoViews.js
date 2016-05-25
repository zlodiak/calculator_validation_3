APP.OverCargoView = Backbone.View.extend({    

  initialize: function() {
    this.listenTo(this.model, 'change:overCargoVolume', this.volumeUpdate);
  },

  id: 'overCargoWidget',

  template: _.template($('#overCargoTpl').html()),

  render: function () {  
    var visibility = APP.overCargoState ? 'show' : 'hide',
        checkboxActiveState = APP.overCargoState ? 'checked' : '',
        checkboxExtraActiveState = this.model.get('overCargoExtra') ? 'checked' : '';    

    this.$el.html(this.template({
      checkboxActiveState: checkboxActiveState,
      visibility: visibility,
      weight: this.model.get('overCargoWeight'),
      volume: this.model.get('overCargoVolume'),
      checkboxExtraActiveState: checkboxExtraActiveState
    }));

    var overCargoSizeWidget =  new APP.OverCargoSizeView({model: this.model}), 
        overCargoSizeElem = overCargoSizeWidget.render().el;

    this.$el.find('.widget_content .size_content').html(overCargoSizeElem);

    return this;
  },

  events: {
    'click #overCargoStateCheckbox' : 'toggleVisible',
    'click #overCargoExtraStateCheckbox' : 'toggleExtraValue',
    'click #overCargoExtraRulesLink' : 'showExtraModal'
  },

  toggleVisible: function() {  
    APP.overCargoState = !APP.overCargoState;
    this.render();
  },

  toggleExtraValue: function() {  
    var extraValue = this.model.get('overCargoExtra');

    extraValue = !extraValue;
    this.model.set({overCargoExtra: extraValue});

    this.render();
  },

  showExtraModal: function() { 
    var extraRulesModalView =  new APP.ExtraRulesModalView();   

    this.$el.append(extraRulesModalView.render().el);

    $('#extraRulesModal').modal('show'); 
  },

  volumeUpdate: function () {  
    var volume = this.model.get('overCargoVolume');
    this.$el.find('#fldOverCargoVolume').val(volume);
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
    'click #overCargoSizeVisibleToggler' : 'toggleVisible',
    'blur .size' : 'calculateSize'
  },

  toggleVisible: function() { 
    APP.overCargoSizeState = !APP.overCargoSizeState;
    this.render();
  },

  calculateSize: function() {
    var length =  this.$el.find('#fldoverCargoSizeLength').val(),
        width =   this.$el.find('#fldOverCargoSizeWidth').val(),
        height =  this.$el.find('#fldOverCargoSizeHeight').val(),
        volume =  length * width * height;

    if(APP.helper.isNumCheck(volume)) { 
      this.model.set({overCargoVolume: volume});
    } else {
      this.model.set({overCargoVolume: undefined});
    };  
  } 

});


