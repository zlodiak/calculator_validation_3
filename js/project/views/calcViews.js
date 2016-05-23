APP.CalcView = Backbone.View.extend({  

  initialize: function() {       
    APP.shippOptionsSizeState = false;
    APP.overCargoState = false;
    APP.overCargoSizeState = false;
    APP.lathingState = false;

    this.model = new APP.CalcModel();    
      
    this.paymentModal =         new APP.PaymentModalView({model: this.model});       
    this.departCityWidget =     new APP.DepartCityView({model: this.model});   
    this.destinCityWidget =     new APP.DestinCityView({model: this.model});
    this.shippOptionsWidget =   new APP.ShippOptionsView({model: this.model});   
    this.overCargoWidget =      new APP.OverCargoView({model: this.model});       
    this.lathingView =          new APP.LathingView({model: this.model});       
       
    this.render();

    Backbone.Validation.bind(this);
  },    

  template: _.template($('#calcTpl').html()),

  render: function () {    
    this.$el.html(this.template());    
    this.$el.find('#departCityWidgetCont').html(this.departCityWidget.render().el);
    this.$el.find('#destinCityWidgetCont').html(this.destinCityWidget.render().el);
    this.$el.find('#shippOptionsWidgetCont').html(this.shippOptionsWidget.render().el);
    this.$el.find('#overCargoWidgetCont').html(this.overCargoWidget.render().el);
    this.$el.find('#lathingWidgetCont').html(this.lathingView.render().el);

    return this;
  },

  events:{
    'click #calcSubmitBtn' : 'submit'
  },

  submit: function() { 
    var data = this.$el.find('#shippForm').serializeObject();

    this.model.set(data);

    console.log(this.model)

    var departCityValid = this.model.isValid('departCity'), 
        destinCityValid = this.model.isValid('destinCity'),

        shippOptionsWeightValid = this.model.isValid('shippOptionsWeight'),
        shippOptionsVolumeValid = this.model.isValid('shippOptionsVolume'),
        sizeLengthValid = this.model.isValid('sizeLength'),
        sizeWidthValid = this.model.isValid('sizeWidth'),
        sizeHeightValid = this.model.isValid('sizeHeight'),

        overCargoWeightValid = this.model.isValid('overCargoWeight'),
        overCargoVolumeValid = this.model.isValid('overCargoVolume'),
        overCargoSizeLengthValid = this.model.isValid('overCargoSizeLength'),
        overCargoSizeWidthValid = this.model.isValid('overCargoSizeWidth'),
        overCargoSizeHeightValid = this.model.isValid('overCargoSizeHeight'),
        overCargoExtraValid = this.model.isValid('overCargoExtra'),

        lathingValid = this.model.isValid('lathing'),

        formValid = this.model.isValid(true);

        /* 
          TODO: super puper calculate prica algoritm
        */

/*    var cities = departCityValid && destinCityValid,
        shippOptions = shippOptionsWeightValid && shippOptionsVolumeValid,
        sizes = sizeLengthValid && sizeWidthValid && sizeHeightValid;

    if(APP.shippOptionsSizeState) {
      if(cities && shippOptions && sizes) {
        this.$el.append(this.paymentModal.render({price: this._computePrice()}).el);
        $('#paymentModal').modal('show'); 
      };
    } else {
      if(cities && shippOptions) {
        this.$el.append(this.paymentModal.render({price: this._computePrice()}).el);
        $('#paymentModal').modal('show'); 
      };
    };*/
  },
    
  _computePrice: function() { 
    var weight = this.model.get('shippOptionsWeight'),
        volume = this.model.get('shippOptionsVolume'),
        length = this.model.get('sizeLength'),
        width = this.model.get('sizeWidth'),
        height = this.model.get('sizeHeight'),
        price = (weight + volume) / 20;

    if(length && width && height && APP.shippOptionsSizeState) { price += (length * width) / height };

    return parseInt(price, 10);
  }

});


