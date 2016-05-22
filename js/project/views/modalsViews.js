APP.PaymentModalView = Backbone.View.extend({     

  tagName: 'div',

  template: _.template($('#paymentModalTpl').html()),

  render: function (data) { 
    this.$el.html(this.template(data));
    return this;
  }

});


APP.ExtraRulesModalView = Backbone.View.extend({     

  tagName: 'div',

  template: _.template($('#extraRulesModalTpl').html()),

  render: function () { 
    this.$el.html(this.template());
    return this;
  }

});