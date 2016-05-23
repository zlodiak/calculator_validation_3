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
        <input type="text" class="form-control size" id="fldSizeLength" value="<%= length %>" name="sizeLength">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_sizeLength" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Ширина</label>

      <div class="input-group">
        <input type="text" class="form-control size" id="fldSizeWidth" value="<%= width %>" name="sizeWidth">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_sizeWidth" class="help-block"></div>
    </div>

    <div class="col-xs-4 form-group">
      <label>Высота</label>

      <div class="input-group">
        <input type="text" class="form-control size" id="fldSizeHeight" value="<%= height %>" name="sizeHeight">
        <span class="input-group-addon">м</span>
      </div>

      <div id="errMsg_sizeHeight" class="help-block"></div>
    </div>                    
  </div> 
</script>