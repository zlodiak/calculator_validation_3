APP.CalcModel = Backbone.Model.extend({

  defaults: {
    departCity: undefined,
    destinCity: undefined,
    shippOptionsWeight: undefined,
    shippOptionsVolume: undefined,
    sizeLength: undefined,
    sizeWidth: undefined,
    sizeHeight: undefined,
    overCargoWeight: undefined,
    overCargoVolume: undefined,
    overCargoSizeLength: undefined,
    overCargoSizeWidth: undefined,
    overCargoSizeHeight: undefined,          
    overCargoExtra: false,
    lathing: undefined          
  }, 

  validation: {
    departCity: [ 
                  { required: true, msg: 'Поле не может быть пустым' },
                  { minLength: 3, msg: 'Введите не менее 3 сииволов' }
                ], 

    destinCity: [ 
                  { required: true,msg: 'Поле не может быть пустым' },
                  { minLength: 3,msg: 'Введите не менее 3 сииволов' }
                ],

    shippOptionsWeight: [ 
                          { required: true, msg: 'Поле не может быть пустым' },
                          { pattern: 'number', msg: 'Введите число' },
                          { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                          { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                        ],     

    shippOptionsVolume: [ 
                          { required: true, msg: 'Поле не может быть пустым' },
                          { pattern: 'number', msg: 'Введите число' },
                          { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                          { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                        ],

    sizeLength: [ 
                  { required: true, msg: 'Поле не может быть пустым' },
                  { pattern: 'number', msg: 'Введите число' },
                  { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                  { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                ], 

    sizeWidth: [
                { required: true, msg: 'Поле не может быть пустым' },
                { pattern: 'number', msg: 'Введите число' },
                { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
              ], 

    sizeHeight: [ 
                  { required: true, msg: 'Поле не может быть пустым' },
                  { pattern: 'number', msg: 'Введите число' },
                  { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                  { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                ],

    overCargoWeight: [ 
                        { required: true, msg: 'Поле не может быть пустым' },
                        { pattern: 'number', msg: 'Введите число' },
                        { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                        { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                      ],     

    overCargoVolume: [ 
                        { required: true, msg: 'Поле не может быть пустым' },
                        { pattern: 'number', msg: 'Введите число' },
                        { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                        { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                      ],

    overCargoSizeLength: [ 
                  { required: true, msg: 'Поле не может быть пустым' },
                  { pattern: 'number', msg: 'Введите число' },
                  { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                  { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                ], 

    overCargoSizeWidth: [
                { required: true, msg: 'Поле не может быть пустым' },
                { pattern: 'number', msg: 'Введите число' },
                { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
              ], 

    overCargoSizeHeight: [ 
                  { required: true, msg: 'Поле не может быть пустым' },
                  { pattern: 'number', msg: 'Введите число' },
                  { pattern: /^[0-9]\d*(\.\d+)?$/, msg: 'Введите положительное число' },
                  { pattern: /^[1-9]\d*(\.\d+)?$/, msg: 'Число не может быть нулём' }
                ],                                                  
  }       

});

