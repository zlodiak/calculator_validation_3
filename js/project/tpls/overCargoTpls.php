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
        <input type="text" class="form-control size" id="fldoverCargoSizeLength" value="<%= length %>" name="overCargoSizeLength">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_overCargoSizeLength" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Ширина</label>

      <div class="input-group">
        <input type="text" class="form-control size" id="fldOverCargoSizeWidth" value="<%= width %>" name="overCargoSizeWidth">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_overCargoSizeWidth" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Высота</label>

      <div class="input-group">
        <input type="text" class="form-control size" id="fldOverCargoSizeHeight" value="<%= height %>" name="overCargoSizeHeight">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_overCargoSizeHeight" class="help-block"></div>
    </div>                    
  </div> 
</script>
