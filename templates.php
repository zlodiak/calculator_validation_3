<script type="text/template" id="calcTpl">
  <form class="container" id="shippForm">
    <div class="row">
      <div class="col-xs-12"><h1>Калькулятор доставки</h1></div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-6" id="departCityWidgetCont"></div>
      <div class="col-xs-12 col-sm-6" id="destinCityWidgetCont"></div>
    </div> 

    <div class="row">
      <div class="col-xs-12" id="shippOptionsWidgetCont"></div>
    </div>     

    <div class="row">
      <div class="col-xs-12" id="overCargoWidgetCont"></div>
    </div>       

    <div class="row">
      <div class="col-xs-12">
        <div class="btn btn-default pull-right" id="calcSubmitBtn">Рассчитать</div>
      </div>
    </div>        
  </form>
</script>


<script type="text/template" id="departCityTpl">
  <div class="panel panel-default">
    <div class="panel-body row">
      <div class="col-xs-12">
        <h2>Город отправления</h2>
      </div>

      <div class="widget_content form-group col-xs-12">
        <input type="text" class="form-control" id="fldDepartCity" name="departCity">
        <div id="errMsg_departCity" class="help-block"></div>
      </div>
    </div>
  </div>
</script>


<script type="text/template" id="destinCityTpl">
  <div class="panel panel-default">
    <div class="panel-body row">
      <div class="col-xs-12">
        <h2>Город назначения</h2>
      </div>

      <div class="widget_content form-group col-xs-12">
        <input type="text" class="form-control" id="fldDepartCity" name="destinCity">
        <div id="errMsg_destinCity" class="help-block"></div>
      </div>
    </div>
  </div>
</script>


<script type="text/template" id="shippOptionsTpl">
  <div class="panel panel-default">
    <div class="panel-body row">
      <div class="col-xs-12">
        <h2>Параметры груза</h2>
      </div>

      <div class="widget_content col-xs-12">
        <div class="row">
          <div class="col-xs-6 form-group">
            <label>Вес</label>

            <div class="input-group">
              <input type="text" class="form-control" id="fldShippOptionsWeight" name="shippOptionsWeight">
              <span class="input-group-addon">кг</span>
            </div>

            <div id="errMsg_shippOptionsWeight" class="help-block"></div>
          </div>

          <div class="col-xs-6 form-group">
            <label>Объём</label>

            <div class="input-group">
            <input type="text" class="form-control" id="fldShippOptionsVolume" name="shippOptionsVolume"> 
              <span class="input-group-addon">м<sup>3</sup></span>
            </div>

            <div id="errMsg_shippOptionsVolume" class="help-block"></div>      
          </div>
        </div>

      </div>
    </div>
  </div>
</script>

<script type="text/template" id="sizeTpl">
  <div class="row">
    <div class="col-xs-12">
      <h4 class="size_visible_toggler" id="sizeVisibleToggler">Ввести размеры</h4>
    </div>        
  </div>        

  <div class="row size_container <%= visibility %>">
    <div class="col-xs-4 form-group">
      <label>Длина</label>

      <div class="input-group">
        <input type="text" class="form-control" id="fldSizeLength" value="<%= length %>" name="sizeLength">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_sizeLength" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Ширина</label>

      <div class="input-group">
        <input type="text" class="form-control" id="fldSizeWidth" value="<%= width %>" name="sizeWidth">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_sizeWidth" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Высота</label>

      <div class="input-group">
        <input type="text" class="form-control" id="fldSizeHeight" value="<%= height %>" name="sizeHeight">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_sizeHeight" class="help-block"></div>
    </div>                    
  </div> 
</script>


<script type="text/template" id="overCargoTpl">
  <div class="panel panel-default">
    <div class="panel-body row ">
      <div class="col-xs-6">
          <input 
            class="over_cargo_state_checkbox" 
            id="overCargoStateCheckbox" 
            type="checkbox" 
            <%= checkboxActiveState %> 
          >

        <h2 class="header_widget">Негабаритный груз</h2>
      </div>

      <div class="col-xs-6 over_cargo_extra_rules_link_outer">
        Для определения типа грузовых мест воспользуйтесь <span class="over_cargo_extra_rules_link" id="overCargoExtraRulesLink">памяткой</span>
      </div>

      <div class="widget_content col-xs-12">
        <div class="row <%= visibility %>">
          <div class="col-xs-6 form-group">
            <label>Вес</label>

            <div class="input-group">
              <input type="text" class="form-control" id="fldOverCargoWeight" name="overCargoWeight" value="<%= weight %>">
              <span class="input-group-addon">кг</span>
            </div>

            <div id="errMsg_overCargoWeightt" class="help-block"></div>
          </div>

          <div class="col-xs-6 form-group">
            <label>Объём</label>

            <div class="input-group">
            <input type="text" class="form-control" id="fldOverCargoVolume" name="overCargoVolume" value="<%= volume %>"> 
              <span class="input-group-addon">м<sup>3</sup></span>
            </div>

            <div id="errMsg_overCargoVolume" class="help-block"></div>      
          </div>

          <div class="col-xs-12 form-group size_content"></div>

          <div class="col-xs-12 form-group extra_content">
            <label>Сверхнегабарит</label>

            <div class="input-group">
              <input 
                class="over_cargo_extra_state_checkbox" 
                id="overCargoExtraStateCheckbox" 
                type="checkbox" 
                <%= checkboxExtraActiveState %> 
              >              
              <span>груз является сверхнегабаритным</span>
            </div>

            <div id="errMsg_overCargoWeightt" class="help-block"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</script>


<script type="text/template" id="paymentModalTpl">
  <!-- Modal payment -->
  <div class="modal fade payment_modal" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentLabel">
    <div class="modal-dialog" role="document">     
      <div class="modal-content">
        <form class="" id="paymentForm" method="get" action="#" onSubmit="return false;">
          <fieldset>         
            <div class="modal-header">
              <btn type="btn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></btn>
              <h4 class="modal-title" id="paymentLabel">Стоимость пересылки</h4>
            </div>

            <div class="modal-body" id="paymentPriceCont">
              <span class="price"><%= price %></span>
              <span class="currency">руб</span>
            </div>

            <div class="modal-footer">
              <btn type="btn" class="btn btn-default" data-dismiss="modal">Понятно</btn>
            </div>
          </fieldset>
        </form>          
      </div>
    </div>
  </div>  
</script>


<script type="text/template" id="extraRulesModalTpl">
  <!-- Modal extra rules -->
  <div class="modal fade extra_rules_modal" id="extraRulesModal" tabindex="-1" role="dialog" aria-labelledby="extraRulesLabel">
    <div class="modal-dialog" role="document">     
      <div class="modal-content">       
        <div class="modal-header">
          <btn type="btn" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></btn>
          <h4 class="modal-title" id="extraRulesLabel">Классификатор грузов</h4>
        </div>

        <div class="modal-body" id="extraRulesDocument">
          Негабаритный груз - груз, который при размещении на универсальном подвижном составе, находящемся на прямом горизонтальном участке пути, какой-либо своей точкой выступает за очертание основного габарита погрузки при совмещении продольных плоскостей симметрии подвижного состава и пути; груз, который на прямом горизонтальном участке пути не выступает за очертание габарита погрузки, но в кривой расчетного радиуса R = 350 м без возвышения наружного рельса имеет геометрический вынос больший, чем геометрический вынос расчетного вагона; груз, У которого разность между геометрическим выносом груза и геометрическим выносом расчетного вагона больше разности между полушириной габарита погрузки и полушириной груза. Геометрический вынос груза (подвижного состава) - отклонение его продольной плоскости симметрии от оси пути в кривой при расположении подвижного состава по хорде. Расчетный вагон: условный вагон, имеющий базу 17 м и длину кузова 24 м. В зависимости от высоты, на которой груз выступает за очертание габарита погрузки и величины выступания установлены зоны негабаритности: нижней - 6 степеней, боковой - 6 степеней, верхней - 3 степени, а также условная зона совместной боковой и нижней негабаритности. Груз, геометрический вынос которого превышает геометрический вынос расчетного вагона, может иметь расчетную негабаритность. Расчетная негабаритность оп¬ределяется для длинномерных грузов, отношение длины которых к базе подижного состава превышает 1,41; грузов, размещенных на сцепе платформ; грузов, размещенных на транспортерах с базой более 17 м. Сверхнегабаритный груз - груз, выступающий по горизонтали за очертания зон: 3-й степени верхней негабаритности; 4-й (на высоте 3.700 - 4.000 мм), 5-й (на высоте 3.400 - 3.700 мм) и 6-й степеней боковой; 2-й (на высоте 380-1.230 мм) и 6-й степеней нижней негабаритности; также груз, высота которого от уровня головок рельсов превышает 5.300 мм. В соответствии с установленными зонами негабаритности груз может иметь нижнюю, боковую и верхнюю сверхнегабаритность. Сверхнега-баритность груза, имеющего высоту более 5.300 мм, называется вертикальной.
        </div>

        <div class="modal-footer">
          <btn type="btn" class="btn btn-default" data-dismiss="modal">Понятно</btn>
        </div>        
      </div>
    </div>
  </div>  
</script>


<script type="text/template" id="overCargoSizeTpl">
  <div class="row">
    <div class="col-xs-12">
      <h4 class="size_visible_toggler" id="overCargoSizeVisibleToggler">Ввести размеры</h4>
    </div>        
  </div>        

  <div class="row size_container <%= visibility %>">
    <div class="col-xs-4 form-group">
      <label>Длина</label>

      <div class="input-group">
        <input type="text" class="form-control" id="fldoverCargoSizeLength" value="<%= length %>" name="overCargoSizeLength">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_overCargoSizeLength" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Ширина</label>

      <div class="input-group">
        <input type="text" class="form-control" id="fldOverCargoSizeWidth" value="<%= width %>" name="overCargoSizeWidth">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_overCargoSizeWidth" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Высота</label>

      <div class="input-group">
        <input type="text" class="form-control" id="fldOverCargoSizeHeight" value="<%= height %>" name="overCargoSizeHeight">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_overCargoSizeHeight" class="help-block"></div>
    </div>                    
  </div> 
</script>


