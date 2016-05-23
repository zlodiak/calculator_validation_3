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
            bla
            </div>

            <div id="errMsg_overCargoWeightt" class="help-block"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</script>
