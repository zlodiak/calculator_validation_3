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