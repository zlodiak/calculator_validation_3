<script type="text/template" id="lathingTpl">
  <div class="panel panel-default">
    <div class="panel-body row ">
      <div class="col-xs-12">
          <input 
            class="lthing_state_checkbox" 
            id="lathingStateCheckbox" 
            type="checkbox" 
            <%= checkboxActiveState %> 
          >

        <h2 class="header_widget">Обрешетка груза</h2>
      </div>

      <div class="widget_content col-xs-12">
        <div class="row <%= visibility %>">
          <div class="col-xs-6 form-group">
            <label>Коэффициент</label>

            <div class="input-group">
              <label>
                <input name="lathing" type="radio" value="1" checked=""> К=<b>1</b> 
                <small>(без наценки за обрешетку)</small>
              </label>

              <br>

               <label>
                <input name="lathing" type="radio" value="1.5"> К=<b>1,5</b> 
                <small>(используется при обрешетке витрин, стеклянных конструкций, декоративных изделий из отделочных растворов и бетонов, камня, глины, стекла)</small>
               </label>

               <br>

               <label>
                <input name="lathing" type="radio" value="2"> К=<b>2</b> 
                <small>(используется при обрешетке специализированных отправлений: гидроциклы, вездеходы, специальное оборудование и т.д.)</small>
               </label>
            </div>

            <div id="errMsg_overCargoWeightt" class="help-block"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</script>
