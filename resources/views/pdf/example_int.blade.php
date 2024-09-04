<head>
  <style>
    .heading { color: #039; }
    p {
  text-align: justify;
   }
   .empresa{
    color: #039;
    font-weight: bold;
    text-transform: uppercase;
    
   }
   img{
    width: 30%;
   }
   h3{
    text-align: center;
    color: #1f3764;
   }
   table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
}
th {     font-size: 16px;     font-weight: normal;     padding: 8px;     background: #1f3764;
    border-top: 1px solid #000000;    border-bottom: 1px solid #000000; color: #FFFFFF; }
  </style>
</head>
@foreach ($usercontroller as $item)
{{-- <h1 class="heading"> Actuarial Consulting Group </h1> --}}
<img src="logo.png" /><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3 class="empresa">{{$item->name}}</h3>
<p>Calculo Actuarial con corte al 31 de Dic. de 2023</p>
<p>Valoración de los beneficios a largo plazo y posempleo: prima de antigüedad, cesantías retroactivas y reservas de jubilación, a cargo de EMSA, con corte a 31 de diciembre de 2023</p>
<p>GUILLERMO L. SUAREZ MORENO - ACTUARIAL CONSULTING GROUP</p>



<h2 class="empresa">DOCUMENTO TÉCNICO DE VALORACIÓN BENEFICIOS A LARGO PLAZO Y POSEMPLEO {{$item->name}}</h2>


<p>Esté documento tiene por objeto valorar el pasivo por concepto de los beneficios largo plazo y beneficios posempleo por primas de antigüedad, cesantías retroactivas y reservas de jubilación de los empleados activos y pensionados, con corte a 31 de diciembre de 2023.
</p>
<p>La {{$item->name}}, es una sociedad por acciones, de carácter mixto que hace parte de las empresas de la Nación y tiene como objeto principal la prestación del servicio público de energía eléctrica. {{$item->name}}, desarrolla actividades de comercialización y distribución de energía eléctrica en 24 de los 29 municipios del Departamento del Meta





<h2>1.  CONSIDERACIONES LEGALES: </h2>




<p>
({{$item->international_legal_considerations}})</p><br><br>

Con el objetivo de mostrar los resultados de la valoración actuarial a 31 de diciembre de 2023 del beneficio de cesantías del régimen anterior al de la Ley 50 de 1990 o de cesantías retroactivas, se realiza la estimación del valor presente a 31 de diciembre de 2023 de la liquidación definitiva de cesantías a la fecha estimada de retiro, así como los demás costos asociados, para su incorporación en los estados financieros de la empresa, en la forma en que lo considere apropiado.

Para la elaboración de los cálculos actuariales de reservas de jubilación, se tienen en cuenta lo dispuesto en la Ley 100 sancionada en el año 1993, la Ley 797 sancionada en el año 2003, el Acto Legislativo 01 de 2005 y los Decretos 1748 de 1995 y las normas propias aplicables a la entidad que lo complementan o modifican, con el fin de reportar los datos relacionados con la obligación de reconocer y pagar pensiones de jubilación.

Adicionalmente se incluyen las consideraciones derivadas de lo dispuesto en el acto legislativo 01 de 2005.

Los valores fueron estimados partiendo de la información proporcionada por la entidad.

</p>

 <h2>2. CLASIFICACIÓN DEL PERSONAL:</h2>

<strong>1.Personal Jubilado totalmente a cargo de la empresa: </strong><p>Comprende el personal pensionado de la empresa{{$item->name}}, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar.</p> <br>
<strong>2.Personal Jubilado con pensión Compartida: </strong><p>Corresponde al personal jubilado por la empresa, con pensión en el régimen de prima media y que concurre las dos pensiones, de la extinta Álcalis de Colombia, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar.</p><br>
<strong>3.Personal beneficiario vitalicio a cargo de la empresa: </strong><p>Corresponde al personal beneficiario de la empresa{{$item->name}}, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar. </p><br>
<strong>4.Personal Beneficiario Vitalicio compartido con COLPENSIONES:</strong> <p>Corresponde al personal beneficiario a cargo de la empresa, con pensión de sustitución en el régimen de prima media y que concurren las dos pensiones, quedando a cargo de la extinta Álcalis de Colombia, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar.</p><br>
<strong>5.Personal Jubilado con cuota parte a cargo de la Empresa: </strong><p>se refiere a las personas que disfrutan de pensión de Jubilación otorgada por otra empresa oficial, y que la entidad le corresponde pagar cuota parte a por el tiempo laborado.</p><br>
<strong>6.Personal Beneficiario Vitalicio Cuota parte a Cargo de la Empresa: </strong><p>Corresponde al personal beneficiario de pensiones de sobrevivientes que están a cargo de la empresa. </p> <br>
<strong>7.Personal Despedido sin Justa Causa a Cargo de la Empresa: </strong><p>Corresponde al personal que a la fecha de valoración se encuentra retirado de la empresa, para los cuales se calcula reservas contingentes por posibles fallos judiciales.</p>   <br>     
<strong>8.Personal Despedido sin Justa Causa a Cargo de la Empresa: </strong><p>Corresponde al personal que a la fecha de valoración se encuentra retirado de la empresa, que está afiliado al ISS hoy Colpensiones, para los cuales se calcula reservas contingentes por posibles fallos judiciales.</p><br>

    <h2>3. CONSIDERACIONES ADICIONALES </h2>
    <p><strong>1.</strong> Para el personal jubilado la pensión de vejez del régimen de transición del sector público se difiere a los 55 años y 20 años de servicio en el sector público incluyendo el tiempo laborado en la empresa hasta la fecha de jubilación. </p><br>
    <p><strong>2.</strong> Para el personal jubilado con cotizaciones a COLPENSIONES se tiene en cuenta la concurrencia de la pensión con esa entidad cuando se cumplan los requisitos previstos en la Ley 797 sancionada en el 2003, considerando para ello el tiempo cotizado a COLPENSIONES, el tiempo laborado en la empresa y en el sector público.</p><br>
    <p><strong>3.</strong> Para el personal jubilado las reservas de sobrevivencia se difieren a la fecha de jubilación. Durante el período comprendido entre la fecha de jubilación y la fecha en que concurre la pensión de COLPENSIONES, se incluye una reserva adicional de sobrevivencia a cargo de COLPENSIONES, valorada en los términos de la Ley 797 sancionada en el 2003, en proporción al tiempo cotizado al COLPENSIONES y la suma del tiempo laborado en la empresa hasta el 31/03/1994, el tiempo labrado en el sector público y el tiempo cotizado hasta la fecha de concurrencia.</p><br>
    <p><strong>4.</strong> La reserva a cargo de la empresa corresponde a la reserva total disminuida en la suma de las cuotas partes de la concurrencia de la pensión de vejez del sector público, la de concurrencia con COLPENSIONES y la de sobrevivencia a cargo de COLPENSIONES durante el período de cotizaciones, e incrementada en la reserva de cotizaciones.</p><br>
    <p><strong>5.</strong> Cuando no se conoce la edad del cónyuge del titular del beneficio se asume que ésta es 5 años más o menos según el titular sea mujer u hombre, respectivamente.</p><br>
    <p><strong>6.</strong> Si la pensión de la empresa se causa después del 22 de julio de 2005, las reservas de jubilación y sobrevivencia se valoran con sólo una mesada adicional en diciembre, excepto para aquellas que se causen con posterioridad al 22 de julio de 2005 y con anterioridad al primero de agosto del 2011 y el monto de la pensión sea inferior o igual a tres (3) salarios mínimos legales vigentes, que se valoran igual que las causadas antes del 22 de julio de 2005 con 2 mesadas adicionales.</p><br>
       
       <h2>4. BASES TÉCNICAS </h2>
       <h3>1. TABLAS MORTALIDAD:</h3>
       <p>Tablas de mortalidad e invalidez Rentistas: Sexo masculino y femenino experiencia 2005 – 2008.  Resolución 1555 de 2010.  Superintendencia Financiera de Colombia.</p>
       
      <h3>2.TABLA DE ROTACIÓN</h3>
      <p>Tabla de rotación basada en tiempo de servicio - SOA2003 Basic Service Table</p>

      


       <h3>3.TASAS DE CRECIMIENTO DE RENTAS INTERES:</h3>
       <p>Crecimiento de pensiones (k) :    4,000%</p>
       <p>Pensiones de jubilación</p>
        <p>Tasa de descuento(v):		11.064%
        Interés técnico real (i): 		6.793%
        </p>
        <p>Prima de antigüedad</p>
        <p>Tasa de descuento(v):		10.928%
Interés técnico real (i): 		6.661%</p>
  <p>Cesantías retroactivas</p>
<p>Tasa de descuento(v):		11.175%
Interés técnico real (i): 		6.899%
</p>
        

<h3> 4.1 Metodología Actuarial</h3>

Los valores presentados en este informe son un estimado de la situación financiera del plan en una fecha cálculo específica. Este informe no predice la situación financiera futura del plan ni su capacidad para pagar los beneficios futuros.

Con el transcurrir del tiempo, el costo total del plan dependerá de varios factores, incluyendo el monto de los beneficios pagados, el número de personas que reciben los beneficios y las variables económicas que influyen en la valoración del pasivo. Estos montos y demás variables son inciertos y desconocidos al momento de la valoración y únicamente se predicen de tal forma que estén en un rango razonable de posibilidad.

Dado que no es factible o práctico modelar todas las variables, es posible haber usado información resumida, estimada, o simplificada para algunos casos, con el fin
de facilitar la modelación de eventos futuros en una forma eficiente. De igual forma, pudimos haber excluido factores o información que, a nuestro juicio, no afecta significativamente los resultados de la valoración. Según nuestro criterio, el uso de las mencionadas técnicas de simplificación, no afectan la razonabilidad de los resultados de la valoración actuarial para el plan.

<h3>5. PROCEDIMIENTO Y FORMULACION</h3>

El pasivo correspondiente a reservas pensionales a cargo de la entidad se calcula con la metodología de rentas vitalicias contingentes, crecientes anualmente con pagos fraccionados mensuales y mesadas adicionales según corresponda a 13 o 14 mesadas, de acuerdo con el sistema general de pensiones. 

Los pasivos por concepto de Prima de Antigüedad y Cesantías y el costo de los servicios del periodo corriente se calcularon utilizando el método denominado “Unidad de Crédito Proyectado”, en inglés “Projected Unit Credit”. Bajo este método consiste en cuantificar los beneficios de cada participante en el plan a medida que se tiene derecho sobre ellos, teniendo en cuenta los incrementos futuros de salario y la fórmula del plan para la asignación de beneficios. Por lo tanto, el beneficio total estimado al que cada participante se espera que tenga derecho al separarse de la empresa se divide en unidades, cada una asociada con un año de servicio acreditado ya sea pasado o futuro.

La valoración se realiza individualmente para cada individuo. Mediante la aplicación de las hipótesis actuariales, se calcula el monto del beneficio proyectado que depende de la fecha estimada de separación, el servicio acreditado y el valor del beneficio en el momento del hecho causante.

El beneficio estimado al que tiene derecho un individuo, para efectos de una valoración asociada a una fecha de retiro, corresponde al beneficio descrito en el plan calculado con el salario proyectado para el beneficio a la fecha de retiro esperada.

El beneficio atribuido por el servicio prestado durante un periodo es la diferencia entre la obligación de la valoración al final del periodo menos la obligación al inicio del periodo, es decir a la fecha de la valoración.

Por lo tanto, la obligación por beneficios definidos del plan a la fecha de cálculo se estima aplicando, sobre la cuantía total del beneficio estimado, la proporción existente entre el servicio acreditado a la fecha de medición y el servicio total que alcanzará cada participante a la fecha de separación esperada.

La obligación por beneficios definidos del plan es la suma de la obligación de cada individuo a la fecha de medición, y el costo de los servicios del periodo corriente del plan se calcula como la suma de los costos de los servicios individuales del periodo corriente.

<h3>5.1 Cálculo Prima de Antigüedad</h3>

<p>PAn=SBD*DiasPrima(1+TasaTecnica)n*Rt+n* Px+n</p>
<p>Donde:
n: Año de pago de la prima de antigüedad de acuerdo a lo señalado en la convención colectiva aplicable al funcionario.
PAn: Prima de antigüedad en al año n.
SBD: Salario Base Diario de acuerdo a lo señalado en la convención colectiva aplicable al funcionario.
DiasPrima: Número de días de prima de antigüedad de acuerdo a lo señalado en la convención colectiva aplicable al funcionario.
TasaTecnica: Tasa de interés técnico
t: Tiempo de servicio a fecha de cálculo (años)
x: Edad a fecha de cálculo (años)
Rt+n: Probabilidad de rotación en el año de servicio t + n
Px+n: Probabilidad de sobrevivencia a la edad x+n
</p>
<p> Reservaant= n=1wPAn*UCP </p>
<p>Donde:
Reservaant: Reserva a cargo de la entidad por prima de antigüedad
w: Número de años adicionales hasta la fecha estimada de retiro forzoso
UCP: Unidad de crédito proyectada
</p>
<h3>5.2 Cálculo Cesantías Retroactivas</h3>
<p> Para esta parte se procedió a tomar el valor del sueldo correspondiente al año 2023 y las estimaciones se hicieron en pesos del año 2023.

Partiendo de la fecha de nacimiento se procedió estimar la posible fecha de retiro forzoso, siendo esta el punto de referencia para establecer el año de pago del valor definitivo de las cesantías. Es pertinente indicar que las personas con más de 66 años se les dejo como año de liquidación el 2023.

Con la fecha anterior y la fecha de ingreso se obtuvo el número de Días a los cuales hay que liquidarle cesantías.

Dado que se trata de liquidaciones que se hacen con el último sueldo devengado, se procede a establecer un factor diario, considerando el año de 360 días.

Con las consideraciones anteriores y el salario del año 2023 se obtiene la liquidación definitiva para cada persona indicada en la base de Datos aportada. Así mismo, acuerdo al numeral 5.3.2 Medición, 5.3 Beneficios a largo plazo, capitulo II Pasivos, de la versión 07 del marco normativo de las empresas regidas por la Resolución 414 del 2014:

“37. El pasivo por beneficios a los empleados a largo plazo se medirá por el valor presente, sin deducir los activos del plan de activos para beneficios a los empleados

a largo plazo, de los pagos futuros esperados que serán necesarios para liquidar las obligaciones por dichos beneficios. (…)
39. En el caso de las cesantías retroactivas a cargo de la empresa, el pasivo por beneficios a los empleados a largo plazo se medirá, como mínimo al final del periodo contable, por el valor que la empresa tendría que pagar si fuera a liquidar esa obligación a esa fecha.”

Por lo anterior, para efectos de cubrir las necesidades informativas internas de la administración de la compañía se ha calculado el valor presente de las cesantías retroactivas, sin embargo, el reconocimiento del pasivo relacionado con esta obligación en los estados financieros se realiza de acuerdo con la medición prescrita en el párrafo 39.
</p>
<h3>5.3 Reserva de Pensionados</h3>
<p>Se utiliza el método de rentas fraccionarias contingentes, así:</p>
<p>RESERVAS DE CAUSANTES:
(Va)x  =Nx+1   
		 Dx	</p>

     <p>(Va)12x=   (Va)x  [ 1 + 11/24 k ] + 11/24 (1+k)
</p>
<p>(Va)2x=  (Va)x  [ 1 + ¼ k ] + ¼ (1+k)
</p>
<p>RESERVAS DE SUPERVIVENCIA</p>
<p>
(Va)x ,y   =  	 Nx+1:y+1
			    Dx:y	    	
(Va)x /y   =	(Va)y	-  (Va)x ,y

(Va)12x/y =	(Va)x/y  [  1 + 11/24 k  ]

(Va)2x/y  =  (Va)x/y  [ 1 + ¼ k ] 

tEx	=	Dx + t
			   Dx

tExy	=	D x +t ,y + t
			   Dxy

Ax              =         Mx/Dx 

J          =    (1+i)*(1+k)-1

V	=  1/(1+j)

Jm= (1+j) (1/12)  -1

Js= (1+j) (1/2)  -1 
</p>

<p> Donde: </p>
<p> (Va)x=	Valor actual de una renta vitalicia contingente anual variable del valor inicial de $1 con tasa de crecimiento de K pagadera a plazos vencido
</p>
<p>(Va)12x=	Valor actual de una renta vitalicia contingente semestral variable con tasa de crecimiento de K pagadera vencida en doce fracciones de 1/12 cada una.
</p>
<p>(Va)2x=	Valor actual de una renta vitalicia contingente semestral variable con tasa de crecimiento de K pagadera vencida en dos fracciones de ½ cada una.
</p>
<p>(Va)xy	=	Valor actual de una renta vitalicia contingente anual variable del valor inicial de $1 con tasa de crecimiento de K pagadera anual vencida sobre dos vidas hasta el primer fallecimiento.
</p>
<p>
(Va)x/y =	Valor actual de una renta variable sobre dos vidas, de valor inicial de $1 con tasa de crecimiento de K pagadera en anualidades vencidas al cónyuge de edad y a la muerte del jubilado de edad x.
</p>
<p>(Va)12x/y =	Valor actual de una renta mensual vencida de 1/12 con tasa de crecimiento de K, pagadera al cónyuge de edad Y a la muerte del jubilado de edad X.
</p>
<p>
tEx=	Valor actual de $1 pagadero a una persona   de edad x, dentro de t años, sí a los t años se encuentra viva.
</p>
<p>tExy =	Valor actual de $1 pagadero a una pareja   de edad xy, dentro de t años, sí a los t años ambos viven.
</p>
<p>Ax=	Valor actual de $1 pagaderos a los beneficiarios al final del año de la muerte del trabajador
</p>
<p>AF=	Valor del auxilio funerario señalado en el artículo 51 de la Ley 100/93
</p>

<h3>PERSONAL JUBILADO</h3>

<p>RESERVA TOTAL EMPRESA</p>

<p>Para las personas con causación de la pensión antes del 22 de julio de 2005, y la que se causen entre el 22 de julio de 2005 y el 31 de julio de 2011, siempre que Si P<= 3 salarios mínimos mensuales legales vigentes:</p>

<p>Rj	=	[12P (Va)12x  ]  +  [2B (Va)2x ].
</p>
<p>Rs	=	12P..(Va)12x/y + 2B..(Va)2x/y
</p>

<p>En los demás casos: 
</p>
<p>Rj	=	[12P (Va)12x  ]  +B*[ (Va) x ].
</p>
<p>Rj	=	[12P (Va)12x  ]  +B*[ (Va) x ].
</p>
<p>RA/F	=	Ax.AF.
</p>
<p>
RC        = (1-(1+0.04)-n)   . tc. IBC(u)
                (1+0.04)1/12-1 </p>
<p>Donde:</p>
<p>RC : Reserva de  cotizaciones  
</p>
<p>tc(n) = 0.16 
</p>
<p>IBC(u) = Pensión jubilación empresa </p>
<p>tc:  Tasa de cotización para pensiones al ISS hoy Colpensiones, correspondiente a la Fecha de Corte de acuerdo con el artículo 7 de la Ley 797 de 2003; se asumirá que ésta se mantendrá fija a lo largo de los n años.
</p>
<p>n:   Número de años faltantes para la jubilación con el ISS hoy Colpensiones, contados a partir de la edad de jubilación del sector público deberá ser entero.  En caso de no ser entero, se redondeará al entero más cercano.
</p>
<p>Rt  = Rj  +  Rs  +  RAF +  RC
</p>
<h3>RESERVA CONCURRENCIA COLPENSIONES
</h3>
<p> Para t  > 6  (causación después del 2011)
</p>
<p>Rj	=	{ [12P (Va)12x+t  ] .tEx +  [B (Va)x+t ]. tEx } * tf/(to+ttr+tf)</p>
<p>Rs	=	{12P.tEx/y.(Va)12x+t/y+t + B.tExy.(Va)x+t/y+t} * tf/(to+ttr+tf)
</p>
<p>Para 0<= t <= 6 y   P> 3 * Salario mínimo
</p>
<p>Rj	=	{ [12P (Va)12x+t  ] .tEx +  [B (Va)x+t ]. tEx } * tf/(to+ttr+tf)</p>
<p>Rs	=	{12P.tEx/y.(Va)12x+t/y+t + B.tExy.(Va)x+t/y+t} * tf/(to+ttr+tf)
</p>
<p>Para 0<= t <= 6 y   P<= 3 * Salario mínimo</p>
<p>Rj	=	{ [12P (Va)12x+t  ] .tEx +  [2B (Va)2x+t ]. tEx } * tf/(to+ttr+tf)
</p>
<p>Rs	=	{12P.tEx/y.(Va)12x+t/y+t + 2B.tExy.(Va)2x+t/y+t} * tf/(to+ttr+tf)</p>
<p>RA/F	=	Ax+t.AF..tEx * tf/(to+ttr+tf)
</p>
<p>.t : tiempo faltante para adquirir derecho a pensión con COLPENSIONES
.tf: tiempo cotizado a Colpensiones
to : tiempo en otras entidades del sector público
.ttr: tiempo total en la empresa hasta 31 de marzo de 1994
</p>
<p>Reserva sobrevivencia a cargo del Colpensiones por el período entre la jubilación empresa y la concurrencia con Colpensiones
</p>
<p>Si n+u > 6</p>
<p>RS/Col  =PS (u) [12*(Va)12y+n+u + (Va)y+n+u ].u+n/  qx . u+npy.. v u+n . 

</p>
<p>Si n+u< =6
</p>
<p>Si PS(u) > 3 * Salario mínimo
</p>
<p>RS/Col  =PS (u) [ 12 * (Va)12y+n+u +   (Va) y+n+u ].u+n/ qx . u+npy.. v u+n . </p>
<p>Si PS(u) <= 3 * Salario mínimo</p>

<p>RS/Col  =PS (u) [ 12 * (Va)12y+n+u + 2*  (Va)2y+n+u ].u+n/ qx . u+npy.. v u+n . 
</p>

<p>Donde:</p>
<p>RS/Col : Reserva sobrevivencia a cargo del Colpensiones  por el período entre la jubilación  empresa y la concurrencia con Colpensiones

</p>
<p>n. Período en años de diferimiento para la jubilación (n=0).</p>
<p>z. Período en años de diferimiento entre la jubilación y la concurrencia con Colpensiones
</p>
<p>
SEM-FC: Semanas cotizadas a Colpensiones   hasta la fecha de corte </p>
<p>IBC: Ingreso base de cotización a Colpensiones</p>

<p>PS (u) =  IBC*PPS(u)*(1+k)(u+n) 
</p>
<p>PPS(u) = 0.45 si  (SEM-FC + (n+u)*52)<500
</p>
<p>PPS(u) =0.45+[ SEM-FC +  (n+u)*52 -500]/50*0.02 si (SEM-FC  + (n+u)*52)>500
</p>
<p>PPS(u) =0.45+[ SEM-FC +  (n+u)*52 -500]/50*0.02 si (SEM-FC  + (n+u)*52)>500
</p>
<p>Si PPS(u)>0.75 ,  PPS(u)=0.75  

RCol   = Rj  +  Rs  +  RAF + RS/ Col</p>

<h3>RESERVAS NETAS
</h3>
<p>RE        = RT -  RP  -  RCol   
</p>
<p>RE  :          Reserva a cargo de la empresa 

</p>
<p>Para el personal del grupo de beneficiarios de la pensión de sobrevivientes con beneficio vitalicio RT  = Rj ,    RP  = 0 ,   RCol   = 0
</p>
<p>Para toda la formulación anterior:
</p>
<p>Rj  : Reserva de jubilación total, o del sector público o de Colpensiones, según el caso.</p>
<p>Rs : Reserva de Sobrevivencia total, o del sector público o de Colpensiones, según el caso.
</p>
<p>RA/F: Reserva de Auxilio Funerario total, o del sector público o de Colpensiones, según el caso.
</p>
<p>RC  : Reserva de Cotizaciones al Colpensiones 
<p>RR/Col : Reserva Sobrevivencia adicional a cargo del Colpensiones  durante el periodo de cotizaciones.</p>
<p>Rtem  : Renta temporal
</p>
<p>Para toda la formulación anterior:
</p>
<p>P = Valor de la pensión mensual de jubilación, de concurrencia con el sector público o con Colpensiones, según el caso  
</p>
<p>B =	Valor de las primas de jubilación, de concurrencia o de con el sector público o con Colpensiones, según el caso  </p>
<p>x	=	Edad del trabajador a la fecha de corte
</p>
<p>y	=	Edad del cónyuge a la fecha de corte
</p>
<p>t          =	Período de diferimiento en años para acceder al beneficio teniendo en cuenta las consideraciones adicionales anteriormente señaladas.
</p>
<p>Para el personal del grupo de beneficiarios de la pensión de sobrevivientes con beneficio vitalicio RT  = Rj ,    RP  = 0 ,   RCol   = 0
</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<h3>6.RESULTADOS:</h3>
<p>{{$item->name}}</p>
<p>Calculo Actuarial Normal Internacional - NIIF</p>
<p>Resolucion 533 del 2015 de la contaduria general de la nacion, version 09</p><br><br><br><br>
<table>
<tr>
<th>Grupo pensionales</th>
    <th>No personas</th>
    <th>Reserva Causante</th>
     <th>Reserva Sobrevivencia</th>
   
    <th>Reserva Auxilio Funerario</th>
   
    <th>Reserva + Cotizaciones a dic 2023</th>
    <th>Reserva cuotas partes por cobrar</th>
    <th>Reserva neta de cuotas partes por cobrar</th> 
  </tr>
@foreach ($sumaPorUserId as $dato) 
            
     
            
          
        

  <tr>
   
    <td> {{$dato->actuarial_group->name}}</td>
    <td>{{$dato->total_count}}</td>

    <td>${{number_format($dato->total_amount_bv, 0, '.', '.')}}</td>
    <td>${{number_format($dato->total_amount_bw, 0, '.', '.')}}</td>
     <td>${{number_format($dato->total_amount_bx, 0, '.', '.')}}</td>
     <td>${{$dato->total_amount_bx+$dato->total_amount_bw+$dato->total_amount_bv}}</td>
     <td>${{number_format($dato->total_amount_baz, 0, '.', '.')}}</td>
     <td>${{$dato->total_amount_baz+($dato->total_amount_bx+$dato->total_amount_bw+$dato->total_amount_bv)}}</td>
    
    
    
    
  </tr>
  
  
    
 @endforeach  
 <tr>
   
    <td><b>Total General</b></td>
    <td><b>{{$conteoTotal}}</b></td>

    <td><b>${{round($sumTotal_bv)}}</b></td>
     <td><b>${{round($sumTotal_bw)}}</b></td>
     <td><b>${{round($sumTotal_bx)}}</b></td>
     <td><b>${{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)}}</b></td>
     <td><b>${{round($sumTotal_baz)}}</b></td>
    
    
    <td><b>${{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</b></td>
    
    
    
  </tr> 
</table>


      

<h3>7.REVELACIONES CONTABLES:</h3>

<h3>7.1 Reserva de pensiones</h3>

<p>Resumen del pasivo y gasto a cargo de la entidad
</p>

<p>El gasto contable y el pasivo neto por reconocer en el balance a fecha de valoración son los siguientes:</p>

<table>
<tr>
    <th></th>
    <th>2023</th>
    {{-- <th>2024</th> --}}
</tr>  
 
<tr>
    <td>Cargo a resultados</td>
    <td><b>${{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)}}</b></td>
    {{-- <td>$1.656.379.582</td> --}}
</tr>   
<tr>
    <td>Cuenta de otros resultados integrables</td>
    <td>$--Falta sacar el dato del 2022---</td>
    {{-- <td>$3.786.528.444</td> --}}
</tr>
<tr>
    <td>Pasivo neto al final del periodo</td>
    <td>{{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</td>
    {{-- <td>$14.594.244.400</td> --}}
</tr>
</table>
 

<p>Base de datos con corte a diciembre de 2023. </p>
<table>
<tr>
  <th>Descripcion</th>
  <th>#Beneficiarios</th>
  <th>Valor en pesos</th>
  <th>Duration</th>
<tr>
<tr>
 <td>Pensiones</td>
 <td><b>{{$conteoTotal}}</b></td>
 <td>{{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</td>
 <td>8.60-Duda</td>
</tr>
<tr>
 <td><b>Total</b></td>
 <td><b></b></td>
 <td><b>$16.782.375.995</b></td>
 <td><b></b></td>
</tr> 
</table><br><br>

<table>
<tr>
  <th>Descripcion</th>
  <th>31/12/2023</th>
<tr>
<tr>
  <td>Pesonal Jubilado</td>
  <td>{{$conteoTotal}}</td>
<tr>
<tr>
  <td>Edad media Jubilado</td>
  <td>69</td>
<tr>
<tr>
  <td>Pension Promedio Mensual</td>
  <td>1.466.855</td>
<tr>
<tr>
  <td><b>Valor total plan pension</b></td>
  <td><b>{{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</b></td>
</tr>
</table>

<p>Hipótesis Actuariales y financieras:
</p>
<p>A continuación, se relacionan las hipótesis financieras y demográficas utilizadas para los efectos de contabilización bajo el entendido de las Normas Internacionales de Contabilidad 19 y las normas contables emitidas por la Contaduría General de la Nación, que aplican para la entidad consagradas en la Resolución 414 de 2014. Estos parámetros son la base para determinar la obligación por los beneficios definidos a fecha de corte y el gasto contable del siguiente periodo.

Tasa de descuento: La tasa de descuento de acuerdo con el cálculo del Duration calculado de acuerdo con la fórmula señalada en el artículo McCaulay, M. (2013). Duration and Convexity for Pension liabilities. SOA Pension Section News, 81, 18-2.</p>
<img src="prima.png" />
<p>Dónde 
Li: Valor del pasivo calculado a la tasa i
i: tasa de descuento 
x: Cambio en la tasa de interés (100 pb)
</p>
<p>Así mismo se tiene en cuenta lo señalado en la Norma Internacional de Información Financiera: La tasa utilizada para descontar las obligaciones de beneficios post-empleo (tanto financiadas como no) se determinará utilizando como referencia los rendimientos del mercado, al final del periodo sobre el que se informa, correspondientes a emisiones de bonos u obligaciones empresariales de alta calidad. En países donde no exista un mercado amplio para estos bonos, se utilizará el rendimiento de mercado (al final del periodo sobre el que se informa) los bonos emitidos por el gobierno. La moneda y el plazo de los bonos empresariales o gubernamentales serán congruentes con moneda y el plazo estimado de pago de obligaciones por beneficios postempleo.
</p>
<p>Para el presente concepto se calculó un Duration de 8.60 años, razón por la cual se toma como referencia la tasa de interés extraída de la curva cero cupón de los TES en pesos equivalente a 11.064%
</p>
<table>
<tr>
  <td></td>
  <th>31/12/2023</th>
  <th>31/12/2022</th>
<tr>  
<tr>
  <td>Tipo de interes tecnico</td>
  <td>6.793% Anual</td>
  <td>7.245% Anual</td>
<tr> 
<tr>
  <td>Tasa de descuentos</td>
  <td>11.064% Anual</td>
  <td>11.534% Anual</td>
<tr> 
<tr>
  <td>Crecimiento salarial</td>
  <td>No aplica</td>
  <td>No aplica</td>
<tr> 
<tr>
  <td>Inflacion</td>
  <td>4% Anual</td>
  <td>4% Anual</td>
<tr> 
<tr>
  <td>Mortalidad</td>
  <td>RV08</td>
  <td>RV08</td>
<tr> 
<tr>
  <td>Tasa de crecimiento de las pensiones</td>
  <td>4% Anual</td>
  <td>4% Anual</td>
</tr> 
</table>
<p>Resultados Principales de la Valoración Actuarial 
</p>
<p>A continuación, los principales resultados de la valoración actuarial a cargo de la entidad:
<p>Pasivo Neto: El monto del pasivo neto a 31 de diciembre de 2023 comparado con corte 31 de diciembre de 2022, se muestra a continuación:</p>

<table>
  <tr>
    <td></td>
    <th>31/12/2023</th>
    <th>31/12/2022</th>
  </tr>
  <tr>
    <td>Oblicacion por beneficios definidos</td>
    <td>{{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</td>
    <td>$--Falta el dato del 2022</td>

  </tr>
  <tr>
    <td>Valor de los activos del plan</td>
    <td>$</td>
    <td>$</td>
    
  </tr>
  <tr>
    <td>Deficit</td>
    <td>{{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</td>
    <td>$--Falta el dato del 2022</td>
    
  </tr>
  <tr>
    <td>Costo por servicio pasados no reconocidos</td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Pasivo (Activo) neto reconocido</td>
    <td>{{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</td>
    <td>$--Falta el dato del 2022</td>
    
  </tr>
</table><br><br>

<p>Gasto Contable: Los componentes del gasto contable del año 2023 y la estimación para el 2024 se muestran en la siguiente tabla:
</p>
<table>
<tr>
  <td></td>
  <th>2024(estimado)</th>
  <th>2023</th>
</tr>  
<tr>
  <td>Componente del gasto</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo de los servicios</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Costo de los servicios del periodo corriente</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>b.Costo de los servicios pasados</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo por interes</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Intereses sobre la OBD</td>
  <td>$1.843.931.462</td>
  <td>$1.671.606.861</td>
</tr>  
<tr>
  <td>b.Intereses sobre activos del plan</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Remendiciones de Otros beneficios de largo plazo</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo total por beneficios definidos</td>
  <td>$1.843.931.462</td>
  <td>$1.671.606.861</td>
</tr>  
<tr>
  <td>Cuenta de otros resultados integrales</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Remediciones</td>
  <td></td>
  <td>$2.766.896.086</td>
</tr> 
<tr>
  <td><b>Costo total de beneficios definidos reconocidos en P&L Y OCI</b></td>
  <td><b></b></td>
  <td><b>$4.438.502.947</b></td>
</tr> 
</table>
<p>Divulgación Retribuciones Post-Empleo
</p>

<table>
<tr>
  <td></td>
  <th>31-12-23</th>
  {{-- <th>31-12-22</th> --}}
</tr>  
<tr>
  <td>Conciliacion de la obligacion por Benficios definidos</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Obligacion inicio del periodo</td>
  {{-- <td>$14.594.244.400</td> --}}
  {{-- <td>$19.094.424.049</td> --}}
</tr>  
<tr>
  <td>Costo de los servicios del periodo corriente</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Costo de los servicios del periodo corriente</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>b.Costo de los servicios pasados</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>c.Ganancia/Perdida por liquidaciones anticipadas</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Costo por interes</td>
  <td><b>${{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</b></td>
  
</tr>  
<tr>
  <td>Flujo de Efectivo</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Beneficios pagados del plan</td>
  <td>$</td>
  <td></td>
</tr>  
<tr>
  <td>b.Beneficiarios pagados directamente por la empresa</td>
  <td>${{$sumTotal_cg}}</td>
  <td></td>
</tr>  
<tr>
  <td>c.Pagos de liquidaciones anticipadas</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>d.Aportaciones de los participantes</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Otros eventos</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>a.Transferencias/combinaciones/escisiones de negocios</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>b.Combianciones de planes</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Remendiciones</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>a.Efecto del cambio en supuestos demograficos</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>b.Efecto del cambio en metodologia y/o supuestos financieros</td>
  <td>$766.786.874</td>
  <td>$3.300.669.221</td>
</tr> 
<tr>
  <td>c.Efectos de cambios por experiencia</td>
  <td>$2.000.109.346</td>
  <td>$485.859.223</td>
</tr>
<tr>
  <td><b>Obligacion al final del periodo</b></td>
  <td><b>${{round($sumTotal_bx+$sumTotal_bw+$sumTotal_bv)+$sumTotal_baz}}</b></td>
  {{-- <td><b>$14.594.244.400</b></td> --}}
</tr>
</table>
@endforeach

<p>Proyecciones</p>

<table>
<tr>
  <th></th>
  <th>Plan de proyecciones</th>
</tr>
<tr>
  <td>Año 1</td>
  <td>$2.114.883.184</td>
</tr>
<tr>
  <td>Año 2</td>
  <td>$1.980.362.391</td>
</tr>
<tr>
  <td>Año 3</td>
  <td>$1.854.398.025</td>
</tr>
<tr>
  <td>Año 4</td>
  <td>$1.736.445.840</td>
</tr>
<tr>
  <td>Año 5</td>
  <td>$1.625.996.207</td>
</tr>
<tr>
  <td>Año 6 al 10</td>
  <td>$6.687.190.967</td>
</tr>
</table><br><br>

<table>
  <tr>
    <th></th>
    <th>31-12-2023</th>
    <th>31-12-2022</th>
  </tr>
  <tr>
    <td>Montos reconocidos en el estado de la posicion financiera</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor presente de las obligaciones fondeadas</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor de los activos del plan</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Deficit de los planes fondeados</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor presente de los planes no fondeados</td>
    <td>$16.782.375.995</td>
    <td>$14.594.244.400</td>
  </tr>
  <tr>
    <td>Pasivo(activo) neto</td>
    <td>$16.782.375.995</td>
    <td>$14.594.244.400</td>
  </tr>
  <tr>
    <td>Componente del gasto contable</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Costos de los servicios</td>
    <td></td>
    <td></td>
  </tr> 
  <tr>
    <td>a.Costos de los servicios del periodo corriente</td>
    <td></td>
    <td></td>
  </tr>  
  <tr>
    <td>b.Costos de los servicios pasados</td>
    <td></td>
    <td></td>
  </tr>   
  <tr>
    <td>c.Ganancia/perdida por liquidacion anticipadas</td>
    <td></td>
    <td></td>
  </tr>   
  <tr>
    <td>d.Costos total de los servicios</td>
    <td></td>
    <td></td>
  </tr>  
  <tr>
    <td>Costo por interes</td>
    <td></td>
    <td></td>
  </tr>  
  <tr>
    <td>a.Interes sobre la OBD</td>
    <td>$1.671.606.861</td>
    <td>$1.656.379.582</td>
  </tr> 
  <tr>
    <td>Intereses sobre los activos del plan</td>
    <td></td>
    <td></td>
  </tr> 
  <tr>
    <td>c.Costo total por intereses</td>
    <td>$1.671.606.861</td>
    <td>$1.656.379.582</td>
  </tr>  
  <tr>
    <td>Remediciones de otros benificios de largo plazo </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Gasto total reconocido en resultados(P&L)</td>
    <td>$1.671.606.861</td>
    <td>$1.656.379.582</td>
  </tr> 
  <tr>
    <td>Reconocimiento inmediato de remedicioneS en ORI</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>a.Efecto de cambio en suspuestos demograficos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>b.Efecto de cambio en metodologia y/o supuestos financieros</td>
    <td>$766.786740</td>
    <td>$3.300.669.221</td>
  </tr>
  <tr>
    <td>c.Efecto de cambio por experiencia</td>
    <td>$2.000.109.346</td>
    <td>$485.859.223</td>
  </tr>
  <tr>
    <td>Total reconocido en la cuenta ORI</td>
    <td>$2.766.896.086</td>
    <td>$3.786.528.444</td>
  </tr>
  <tr>
    <td>Total reconocido en P&L y ORI</td>
    <td>$4.438.502.947</td>
    <td>$2.130.148.862</td>
  </tr>
  <tr>
    <td>Conciliacion de los pasivos(activos)netos por beneficios definidos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Pasivos (activos) netos por beneficios definidos al inicio del periodo</td>
    <td>$14.594.244.400</td>
    <td>$19.094.424.049</td>
  </tr>
  <tr>
    <td>Costo por beneficios definidos reconocidos P&L</td>
    <td>$1.671.606.861</td>
    <td>$1.656.379.582</td>
  </tr>
  <tr>
    <td>Total remediciones reconocidas en ORI</td>
    <td>$2.766.896.086</td>
    <td>$3.786.528.444</td>
  </tr>
  <tr>
    <td>Otros eventos significativos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Flujos de efectivo</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Beneficios pagados del plan</td>
    <td>$2.250.371.352</td>
    <td>$2.370.030.787</td>
  </tr>
  <tr>
    <td>Beneficios pagados directamente por la empresa</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Creditos a reembolsos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Efectos de la tasa de cambio</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Pasivos (activos) neto por beneficios definidos al final del periodo</td>
    <td>$16.782.375.995</td>
    <td>$14.594.244.400</td>
  </tr>
  <tr>
    <td>Hipotesis utilizadas para determinar las obligaciones</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Tasa de descuentos</td>
    <td>11.06%</td>
    <td>11.53%</td>
  </tr>
  <tr>
    <td>Tasa inflacion a largo plazo</td>
    <td>4.00%</td>
    <td>4.00%</td>
  </tr>
  <tr>
    <td>Tasa real</td>
    <td>6.79%</td>
    <td>7.24%</td>
  </tr>
  </table>


<p>Sensibilidad a los principales supuestos actuariales</p>

<p>De acuerdo con lo establecido en la Norma Internacional Contable, es responsabilidad de la empresa los supuestos actuariales, es por esto que se muestra la sensibilidad de los pasivos de la entidad a 31 de diciembre de 2023 y el gasto contable estimado para el año 2024, cuando se modifican los parámetros de tasa de interés y el incremento de pensiones
</p>

<table>
 <tr>
    <th> </th>
    <th>Tasa de descuento</th>
    <th>Inflacion</th>
 </tr> 
  <tr>
    <td> </td>
    <td>+1%</td>
    <td>+1%</td>
 </tr> 
 <tr>
    <td>Hipotesis </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>Tasa de descuento </td>
    <td>12.064%</td>
    <td>4.00%</td>
 </tr> 
  <tr>
    <td>Inflacion</td>
    <td>4.00%</td>
    <td>5.00%</td>
 </tr> 
  <tr>
    <td>Sensibilidad </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>PBO(Pasivo total) </td>
    <td>$15.464.384.355</td>
    <td>$18.498947.562</td>
 </tr> 
  <tr>
    <td>Gasto estimado 2024 </td>
    <td>$2.096.011.157</td>
    <td>$2.135.218.599</td>
 </tr> 
   <tr>
    <td> </td>
    <td>-1%</td>
    <td>-1%</td>
 </tr>
 <tr>
    <td>Hipotesis </td>
    <td></td>
    <td></td>
 </tr> 
 <tr>
    <td>Tasa de descuento </td>
    <td>10.064%</td>
    <td>11.064%</td>
 </tr> 
  <tr>
    <td>Inflacion</td>
    <td>4.00%</td>
    <td>3.00%</td>
 </tr> 
  <tr>
    <td>Sensibilidad </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>PBO(Pasivo total) </td>
    <td>$18.319.416.452</td>
    <td>$15.299.644.907</td>
 </tr> 
  <tr>
    <td>Gasto estimado 2024 </td>
    <td>$2.134.098.137</td>
    <td>$2.094.547.768</td>
 </tr> 
</table>
<p>Novedades en la población

A continuación, se presentan los cambios en la población de 2022 a 2023:

PENSIONADOS FALLECIDOS
</p>


<p>CAMBIO DE GRUPO
</p>

<p>Para los dos primeros casos no se tiene los datos del sustituto, se calcula un sustituto supuesto teniendo en cuenta la información histórica. Para los casos 3-4 se valida que aún no se ha compartido la pensión
</p>
<p>INCLUSIONES
</p>


 {{-- PRIMA --}}

<h3>7.2 Reserva prima de antigüedad
</h3>

<p>Resumen del pasivo y gasto a cargo de la entidad
</p>

<p>El gasto contable y el pasivo neto por reconocer en el balance a fecha de valoración son los siguientes:
</p>
<table>
<tr>
    <th></th>
    <th>2023</th>
    <th>2024</th>
</tr>    
<tr>
    <td>Cargo a resultados</td>
    <td>{{$total}}</td>
    <td>$451.601.619</td>
</tr>   
<tr>
    <td>Cuenta de resultados</td>
    <td>$451.601.619</td>
    <td>$-187.205.561</td>
</tr>
<tr>
    <td>Pasivo neto al final del periodo</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>
</tr>
</table>

<p>Base de datos con corte a diciembre de 2023. 
</p>
<p>El siguiente es un resumen con la información relevante:
</p>
<table>
<tr>
  <th>Descripcion</th>
  <th>#Beneficiarios</th>
  <th>Valor en pesos</th>
  <th>Duration</th>
<tr>
<tr>
 <td>Prima antiguedad</td>
 <td>213</td>
 <td>$3.079.403.619</td>
 <td>6.52</td>
<tr>
<tr>
 <td>Total</td>
 <td></td>
 <td></td>
 <td></td>
</table><br><br>

<table>
<tr>
  <th>Descripcion</th>
  <th>31/12/2023</th>
<tr>
<tr>
  <td>Pesonal</td>
  <td>213</td>
</tr>
<tr>
  <td>Edad media</td>
  <td>47</td>
</tr>
<tr>
  <td>Salario Base promedio</td>
  <td>5.957.845</td>
<tr>
</tr>
  <td>Valor total prima antiguedad</td>
  <td>$3.079.403.619</td>
</tr>
</table>

<p>Hipótesis Actuariales y financieras:</p>
<p>A continuación, se relacionan las hipótesis financieras y demográficas utilizadas para los efectos de contabilización bajo el entendido de las Normas Internacionales de Contabilidad 19 y las normas contables emitidas por la Contaduría General de la Nación, que aplican para la entidad consagradas en la Resolución 414 de 2014. Estos parámetros son la base para determinar la obligación por los beneficios definidos a fecha de corte y el gasto contable del siguiente periodo.

Para el presente estudio se calculó un Duration de 6.53 años, razón por la cual se toma como referencia la tasa de interés extraída de la curva cero cupón de los TES en pesos equivalente a 10.928%
</p>

<table>
<tr>
  <th></th>
  <th>31/12/2023</th>
  <th>31/12/2022</th>
<tr>  
<tr>
  <td>Tipo de interes tecnico</td>
  <td>6.661% Anual</td>
  <td>7.067% Anual</td>
</tr> 
<tr>
  <td>Tasa de descuentos</td>
  <td>10.928% Anual</td>
  <td>11.35% Anual</td>
</tr> 
<tr>
  <td>Crecimiento salarial</td>
  <td>No aplica</td>
  <td>No aplica</td>
</tr> 
<tr>
  <td>Inflacion</td>
  <td>4% Anual</td>
  <td>4% Anual</td>
</tr> 
<tr>
  <td>Mortalidad</td>
  <td>RV08</td>
  <td>RV08</td>
</tr> 
<tr>
  <td>Tasa de crecimiento de las pensiones</td>
  <td>4% Anual</td>
  <td>4% Anual</td>
</tr> 
</table>


<p>
Resultados Principales de la Valoración Actuarial </p>
<p>A continuación, los principales resultados de la valoración actuarial a cargo de la entidad:
</p>
<p>Pasivo Neto: El monto del pasivo neto a 31 de diciembre de 2023 comparado con corte 31 de diciembre de 2022, se muestra a continuación:
</p>
<table>
  <tr>
    <th></th>
    <th>31/12/2023</th>
    <th>31/12/2022</th>
  </tr>
  <tr>
    <td>Oblicacion por beneficios definidos</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>

  </tr>
  <tr>
    <td>Valor de los activos del plan</td>
    <td>$</td>
    <td>$</td>
    
  </tr>
  <tr>
    <td>Deficit</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>
    
  </tr>
  <tr>
    <td>Costo por servicio pasados no reconocidos</td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Pasivo (Activo) neto reconocido</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>
    
  </tr>
</table><br><br>
<p>Gasto Contable: Los componentes del gasto contable del año 2023 y la estimación para el 2024 se muestran en la siguiente tabla:
</p>
<table>
<tr>
  <th></th>
  <th>2024(estimado)</th>
  <th>2023</th>
</tr>  
<tr>
  <td>Componente del gasto</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo de los servicios</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Costo de los servicios del periodo corriente</td>
  <td>$481.301.782</td>
  <td>$406.612.143</td>
</tr>  
<tr>
  <td>b.Costo de los servicios pasados</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo por interes</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Intereses sobre la OBD</td>
  <td>$310.215.352</td>
  <td>$258.435.907</td>
</tr>  
<tr>
  <td>b.Intereses sobre activos del plan</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Remendiciones de Otros beneficios de largo plazo</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo total por beneficios definidos</td>
  <td>$791.517.134</td>
  <td>$665.048.050</td>
</tr>  
<tr>
  <td>Cuenta de otros resultados integrales</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Remediciones</td>
  <td></td>
  <td>$451.601.619</td>
</tr> 
<tr>
  <td><b>Costo total de beneficios definidos reconocidos en P&L Y OCI</b></td>
  <td><b></b></td>
  <td><b>$1.116.649.669</b></td>
</tr> 
</table><br><br>


<p>Divulgación Retribuciones Post-Empleo
</p>

<table>
<tr>
  <th></th>
  <th>31-12-23</th>
  <th>31-12-22</th>
</tr>  
<tr>
  <td>Conciliacion de la obligacion por Benficios definidos</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Obligacion inicio del periodo</td>
  <td>$2.480.274.412</td>
  <td>$2.562.781.453</td>
</tr>  
<tr>
  <td>Costo de los servicios del periodo corriente</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Costo de los servicios del periodo corriente</td>
  <td>$406.612.143</td>
  <td>$373.373.695</td>
</tr>  
<tr>
  <td>b.Costo de los servicios pasados</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>c.Ganancia/Perdida por liquidaciones anticipadas</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Costo por interes</td>
  <td>$258.435.907</td>
  <td>$199.591.947</td>
</tr>  
<tr>
  <td>Flujo de Efectivo</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Beneficios pagados del plan</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>b.Beneficios pagados directamente por la empresa</td>
  <td>$517.520.461</td>
  <td>$468.267.123</td>
</tr>  
<tr>
  <td>c.Pagos de liquidaciones anticipadas</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>d.Aportaciones de los participantes</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Otros eventos</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>a.Transferencias/combinaciones/escisiones de negocios</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>b.Combianciones de planes</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Remendiciones</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>a.Efecto del cambio en supuestos demograficos</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>b.Efecto del cambio en metodologia y/o supuestos financieros</td>
  <td>$82.485.290</td>
  <td>$455.139.859</td>
</tr> 
<tr>
  <td>c.Efectos de cambios por experiencia</td>
  <td>$369.116.329</td>
  <td>$455.139.859</td>
</tr>
<tr>
  <td>Obligacion al final del periodo</td>
  <td>$3.079.403.619</td>
  <td>$2.480.274.412</td>
</tr>
</table>


<p>Proyecciones</p>

<table>
<tr>
  <th></th>
  <th>Plan de proyecciones</th>
</tr>
<tr>
  <td>Año 1</td>
  <td>$481.301.782</td>
</tr>
<tr>
  <td>Año 2</td>
  <td>$520.948.587</td>
</tr>
<tr>
  <td>Año 3</td>
  <td>$507.522.907</td>
</tr>
<tr>
  <td>Año 4</td>
  <td>$464.331.802</td>
</tr>
<tr>
  <td>Año 5</td>
  <td>$444.695.454</td>
</tr>
<tr>
  <td>Año 6 al 10</td>
  <td>$1.858.958.043</td>
</tr>
</table><br><br>

<table>
  <tr>
    <th></th>
    <th>31-12-2023</th>
    <th>31-12-2022</th>
  </tr>
  <tr>
    <td>Montos reconocidos en el estado de la posicion financiera</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor presente de las obligaciones fondeadas</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor de los activos del plan</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Deficit de los planes fondeados</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor presente de los planes no fondeados</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>
  </tr>
  <tr>
    <td>Pasivo(activo) neto</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>
  </tr>
  <tr>
    <td>Componente del gasto contable</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Costos de los servicios</td>
    <td></td>
    <td></td>
  </tr> 
  <tr>
    <td>a.Costos de los servicios del periodo corriente</td>
    <td>$406.612.143</td>
    <td>$373.373.695</td>
  </tr>  
  <tr>
    <td>b.Costos de los servicios pasados</td>
    <td></td>
    <td></td>
  </tr>   
  <tr>
    <td>c.Ganancia/perdida por liquidacion anticipadas</td>
    <td></td>
    <td></td>
  </tr>   
  <tr>
    <td>d.Costos total de los servicios</td>
    <td>$406.612.143</td>
    <td>$373.373.695</td>
  </tr>  
  <tr>
    <td>Costo por interes</td>
    <td></td>
    <td></td>
  </tr>  
  <tr>
    <td>a.Interes sobre la OBD</td>
    <td>$258.435.907</td>
    <td>$199.591.947</td>
  </tr> 
  <tr>
    <td>Intereses sobre los activos del plan</td>
    <td></td>
    <td></td>
  </tr> 
  <tr>
    <td>c.Costo total por intereses</td>
    <td>$258.435.907</td>
    <td>$199.591.947</td>
  </tr>  
  <tr>
    <td>Remediciones de otros benificios de largo plazo </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Gasto total reconocido en resultados(P&L)</td>
    <td>$665.048.050</td>
    <td>$572.965.642</td>
  </tr> 
  <tr>
    <td>Reconocimiento inmediato de remedicioneS en ORI</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>a.Efecto de cambio en suspuestos demograficos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>b.Efecto de cambio en metodologia y/o supuestos financieros</td>
    <td>$82.485.290</td>
    <td>$455.139.859</td>
  </tr>
  <tr>
    <td>c.Efecto de cambio por experiencia</td>
    <td>$369.116.329</td>
    <td>$267.934.298</td>
  </tr>
  <tr>
    <td>Total reconocido en la cuenta ORI</td>
    <td>$451.601.619</td>
    <td>$187.205.561</td>
  </tr>
  <tr>
    <td>Total reconocido en P&L y ORI</td>
    <td>$1.116.649.669</td>
    <td>$385.760.081</td>
  </tr>
  <tr>
    <td>Conciliacion de los pasivos(activos)netos por beneficios definidos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Pasivos (activos) netos por beneficios definidos al inicio del periodo</td>
    <td>$14.594.244.400</td>
    <td>$19.094.424.049</td>
  </tr>
  <tr>
    <td>Costo por beneficios definidos reconocidos P&L</td>
    <td>$2.480.274.412</td>
    <td>$2.562.781.453</td>
  </tr>
  <tr>
    <td>Total remediciones reconocidas</td>
    <td>$665.048.050</td>
    <td>$572.965.642</td>
  </tr>
  <tr>
    <td>Otros eventos significativos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Flujos de efectivo</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Beneficios pagados del plan</td>
    <td>$517.520.461</td>
    <td>$468.267.123</td>
  </tr>
  <tr>
    <td>Beneficios pagados directamente por la empresa</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Creditos a reembolsos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Efectos de la tasa de cambio</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Pasivos (activos) neto por beneficios definidos al final del periodo</td>
    <td>$3.079.403.619</td>
    <td>$2.480.274.412</td>
  </tr>
  <tr>
    <td>Hipotesis utilizadas para determinar las obligaciones</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Tasa de descuentos</td>
    <td>10.93%</td>
    <td>11.35%</td>
  </tr>
  <tr>
    <td>Tasa inflacion a largo plazo</td>
    <td>4.00%</td>
    <td>4.00%</td>
  </tr>
  <tr>
    <td>Tasa real</td>
    <td>6.66%</td>
    <td>7.07%</td>
  </tr>
  </table>




<p>Sensibilidad a los principales supuestos actuariales

</p>
<p>De acuerdo a lo establecido en la Norma Internacional Contable, es responsabilidad de la empresa los supuestos actuariales, es por esto que se muestra la sensibilidad de los pasivos de la entidad a 31 de diciembre de 2023 y el gasto contable estimado para el año 2024, cuando se modifican los parámetros de tasa de interés y el incremento de pensiones.
</p>
<table>
 <tr>
    <th> </th>
    <th>Tasa de descuento</th>
    <th>Inflacion</th>
 </tr> 
  <tr>
    <td> </td>
    <td>+1%</td>
    <td>+1%</td>
 </tr> 
 <tr>
    <td>Hipotesis </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>Tasa de descuento </td>
    <td>11.928%</td>
    <td>10.928%</td>
 </tr> 
  <tr>
    <td>Inflacion</td>
    <td>4.00%</td>
    <td>5.00%</td>
 </tr> 
  <tr>
    <td>Sensibilidad </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>PBO(Pasivo total) </td>
    <td>$2.890.105.922</td>
    <td>$3.304.204.958</td>
 </tr> 
  <tr>
    <td>Gasto estimado 2024 </td>
    <td>$477.001.676</td>
    <td>$485.929.684</td>
 </tr> 
   <tr>
    <td> </td>
    <td>-1%</td>
    <td>-1%</td>
 </tr>
 <tr>
    <td>Hipotesis </td>
    <td></td>
    <td></td>
 </tr> 
 <tr>
    <td>Tasa de descuento </td>
    <td>9.928%</td>
    <td>10.928%</td>
 </tr> 
  <tr>
    <td>Inflacion</td>
    <td>4.00%</td>
    <td>3.00%</td>
 </tr> 
  <tr>
    <td>Sensibilidad </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>PBO(Pasivo total) </td>
    <td>$3.291.477.053</td>
    <td>$2.876.383.475</td>
 </tr> 
  <tr>
    <td>Gasto estimado 2024 </td>
    <td>$485.680.124</td>
    <td>$476.673.880</td>
 </tr> 
</table>

<p>Novedades en la población
</p>
<p>A continuación, se presentan los cambios en la población de 2022 a 2023:</p>
<p>EXCLUSIONES</p>
<p>-----resultados----</p>

<p>INCLUSIONES</p>
<p>-----resultados----</p>

<p>CAMBIO DE SINDICATO</p>


{{-- CESANTIAS --}}

<h3>7.3 Reserva de cesantías retroactivas</h3>
<p>Con el fin de cubrir las necesidades informativas internas de la administración de la compañía se ha calculado el valor presente de las cesantías retroactivas, sin embargo, el reconocimiento del pasivo relacionado con esta obligación en los estados financieros se realiza de acuerdo con la medición prescrita en el párrafo 39 del numeral 5.3.2. Medición, 5.3 Beneficios a empleados a largo plazo, Capitulo II Pasivos, de la versión 07 del Marco normativo para empresas que no cotizan en el mercado de valores y que no captan ni administran ahorro del público, el cual corresponde con el valor de liquidación a la fecha de cálculo.
</p>
<table>


 <tr>
  <th></th>
  <th>Valor Pasivo</th>
 </tr> 
 <tr>
  <td>Valor presente del beneficio</td>
  <td>$520.062.685</td>
 </tr> 
 <tr>
  <td>Valor liquidacion a la fecha de calculo</td>
  <td>$1.363.826.067</td>
 </tr> 
</table><br><br>

<table>
<tr>
    <th></th>
    <th>2023</th>
    <th>2024</th>
</tr>    
<tr>
    <td>Cargo a resultados</td>
    <td>$183.884.847</td>
    <td>$174.566.686</td>
</tr>   
<tr>
    <td>Cuenta de otros resultados integrales</td>
    <td>$635.034.287</td>
    <td>$176.760.585</td>
</tr>
<tr>
    <td>Pasivo neto al final del periodo</td>
    <td>$1.363.826.067</td>
    <td>$902.376.933</td>
</tr>
</table>

<p>Base de datos con corte a diciembre de 2023. 
</p>
<p>El siguiente es un resumen con la información relevante:
</p>
<table>
<tr>
  <th>Descripcion</th>
  <th>#Beneficiarios</th>
  <th>Valor en pesos</th>
  <th>Duration</th>
<tr>
<tr>
 <td>Cesantias</td>
 <td>24</td>
 <td>$1.363.826.067</td>
 <td>10.26</td>
</tr>
<tr>
 <td>Total</td>
 <td></td>
 <td>$1.363.826.067</td>
 <td></td>
</tr> 
</table><br><br>

<table>
<tr>
  <th>Descripcion</th>
  <th>31/12/2023</th>
<tr>
<tr>
  <td>Pesonal</td>
  <td>24</td>
<tr>
<tr>
  <td>Edad media</td>
  <td>57</td>
<tr>
<tr>
  <td>Salario Base promedio</td>
  <td>$6.271.687</td>
<tr>
<tr>
  <td>Valor total prima antiguedad</td>
  <td>$1.363.826.067</td>
</tr>
</table>

<p>Hipótesis Actuariales y financieras:
</p>
<p>A continuación, se relacionan las hipótesis financieras y demográficas utilizadas para los efectos de contabilización bajo el entendido de las Normas Internacionales de Contabilidad 19 y las normas contables emitidas por la Contaduría General de la Nación, que aplican para la entidad consagradas en la Resolución 414 de 2014. Estos parámetros son la base para determinar la obligación por los beneficios definidos a fecha de corte y el gasto contable del siguiente periodo.

Para el presente concepto se calculó el Duration y se toma como referencia la tasa de interés extraída de la curva cero cupón de los TES en pesos equivalente a 11.175%
</p>
<table>
<tr>
  <th></th>
  <th>31/12/2023</th>
  <th>31/12/2022</th>
<tr>  
<tr>
  <td>Tipo de interes tecnico</td>
  <td>6.899% Anual</td>
  <td>7.087% Anual</td>
</tr> 
<tr>
  <td>Tasa de descuentos</td>
  <td>11.175% Anual</td>
  <td>11.37% Anual</td>
</tr> 
<tr>
  <td>Crecimiento salarial</td>
  <td>No aplica</td>
  <td>No aplica</td>
</tr> 
<tr>
  <td>Inflacion</td>
  <td>4% Anual</td>
  <td>4% Anual</td>
</tr> 
<tr>
  <td>Mortalidad</td>
  <td>RV08</td>
  <td>RV08</td>
</tr> 
<tr>
  <td>Tasa de crecimiento de las pensiones</td>
  <td>4% Anual</td>
  <td>4% Anual</td>
</tr> 
</table>

<p>Resultados Principales de la Valoración Actuarial </p>
<p>A continuación, los principales resultados de la valoración actuarial a cargo de la entidad:

Pasivo Neto: El monto del pasivo neto a 31 de diciembre de 2023 comparado con corte 31 de diciembre de 2022, se muestra a continuación:
</p>
<table>
  <tr>
    <th></th>
    <th>31/12/2023</th>
    <th>31/12/2022</th>
  </tr>
  <tr>
    <td>Oblicacion por beneficios definidos</td>
    <td>$1.363.826.067</td>
    <td>$902.376.933</td>

  </tr>
  <tr>
    <td>Valor de los activos del plan</td>
    <td>$</td>
    <td>$</td>
  </tr>
  <tr>
    <td>Deficit</td>
    <td>$1.363.826.067</td>
    <td>$902.376.933</td>
  </tr>
  <tr>
    <td>Costo por servicio pasados no reconocidos</td>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td>Pasivo (Activo) neto reconocido</td>
    <td>$1.363.826.067</td>
    <td>$902.376.933</td>
  </tr>
</table><br><br>
<p>Gasto Contable: Los componentes del gasto contable del año 2023 y la estimación para el 2024 se muestran en la siguiente tabla:
</p>
<table>
<tr>
  <th></th>
  <th>2024(estimado)</th>
  <th>2023</th>
</tr>  
<tr>
  <td>Componente del gasto</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo de los servicios</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Costo de los servicios del periodo corriente</td>
  <td>$131.508.675</td>
  <td>$93.670.176</td>
</tr>  
<tr>
  <td>b.Costo de los servicios pasados</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo por interes</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Intereses sobre la OBD</td>
  <td>$122.396.526</td>
  <td>$90.214.671</td>
</tr>  
<tr>
  <td>b.Intereses sobre activos del plan</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Remendiciones de Otros beneficios de largo plazo</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Costo total por beneficios definidos</td>
  <td>$253.905.201</td>
  <td>$183.884.847</td>
</tr>  
<tr>
  <td>Cuenta de otros resultados integrales</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Remediciones</td>
  <td></td>
  <td>$635.034.287</td>
</tr> 
<tr>
  <td>Costo total de beneficios definidos reconocidos en P&L Y OCI</td>
  <td></td>
  <td>$818.919.134</td>
</tr> 
</table>



<p>Divulgación Retribuciones Post-Empleo</p>

<table>
<tr>
  <th></th>
  <th>31-12-23</th>
  <th>31-12-22</th>
</tr>  
<tr>
  <td>Conciliacion de la obligacion por Benficios definidos</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>Obligacion inicio del periodo</td>
  <td>$902.376.933</td>
  <td>$837.357.554</td>
</tr>  
<tr>
  <td>Costo de los servicios del periodo corriente</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Costo de los servicios del periodo corriente</td>
  <td>$93.670.176</td>
  <td>$109.831.833</td>
</tr>  
<tr>
  <td>b.Costo de los servicios pasados</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>c.Ganancia/Perdida por liquidaciones anticipadas</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Costo por interes</td>
  <td>$90.214.671</td>
  <td>$64.734.853</td>
</tr>  
<tr>
  <td>Flujo de Efectivo</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>a.Beneficios pagados del plan</td>
  <td></td>
  <td></td>
</tr>  
<tr>
  <td>b.Beneficios pagados directamente por la empresa</td>
  <td>$357.470.000</td>
  <td>$286.307.892</td>
</tr>  
<tr>
  <td>c.Pagos de liquidaciones anticipadas</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>d.Aportaciones de los participantes</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Otros eventos</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>a.Transferencias/combinaciones/escisiones de negocios</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>b.Combianciones de planes</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>Remendiciones</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>a.Efecto del cambio en supuestos demograficos</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>b.Efecto del cambio en metodologia y/o supuestos financieros</td>
  <td></td>
  <td></td>
</tr> 
<tr>
  <td>c.Efectos de cambios por experiencia</td>
  <td>$635.034.287</td>
  <td>$176.760.585</td>
</tr>
<tr>
  <td>Obligacion al final del periodo</td>
  <td>$1.363.826.967</td>
  <td>$902.376.933</td>
</tr>
</table>


<p>Proyecciones</p>

<table>
<tr>
  <th></th>
  <th>Plan de proyecciones</th>
</tr>
<tr>
  <td>Año 1</td>
  <td>$268.574.561</td>
</tr>
<tr>
  <td>Año 2</td>
  <td>$56.706.604</td>
</tr>
<tr>
  <td>Año 3</td>
  <td>$47.623.264</td>
</tr>
<tr>
  <td>Año 4</td>
  <td></td>
</tr>
<tr>
  <td>Año 5</td>
  <td>$84.695.876</td>
</tr>
<tr>
  <td>Año 6 al 10</td>
  <td>$62.462.381</td>
</tr>
</table><br><br>


<table>
  <tr>
    <th></th>
    <th>31-12-2023</th>
    <th>31-12-2022</th>
  </tr>
  <tr>
    <td>Montos reconocidos en el estado de la posicion financiera</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor presente de las obligaciones fondeadas</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor de los activos del plan</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Deficit de los planes fondeados</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Valor presente de los planes no fondeados</td>
    <td>$1.363.826.067</td>
    <td>$902.376.933</td>
  </tr>
  <tr>
    <td>Pasivo(activo) neto</td>
     <td>$1.363.826.067</td>
    <td>$902.376.933</td>
  </tr>
  <tr>
    <td>Componente del gasto contable</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Costos de los servicios</td>
    <td></td>
    <td></td>
  </tr> 
  <tr>
    <td>a.Costos de los servicios del periodo corriente</td>
    <td>$93.670.176</td>
    <td>$109.831.833</td>
  </tr>  
  <tr>
    <td>b.Costos de los servicios pasados</td>
    <td></td>
    <td></td>
  </tr>   
  <tr>
    <td>c.Ganancia/perdida por liquidacion anticipadas</td>
    <td></td>
    <td></td>
  </tr>   
  <tr>
    <td>d.Costos total de los servicios</td>
    <td>$93.670.176</td>
    <td>$109.831.833</td>
  </tr>  
  <tr>
    <td>Costo por interes</td>
    <td></td>
    <td></td>
  </tr>  
  <tr>
    <td>a.Interes sobre la OBD</td>
    <td>$90.214.671</td>
    <td>$64.734.853</td>
  </tr> 
  <tr>
    <td>Intereses sobre los activos del plan</td>
    <td></td>
    <td></td>
  </tr> 
  <tr>
    <td>c.Costo total por intereses</td>
    <td>$90.214.671</td>
    <td>$64.734.853</td>
  </tr>  
  <tr>
    <td>Remediciones de otros benificios de largo plazo </td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Gasto total reconocido en resultados(P&L)</td>
    <td>$183.884.847</td>
    <td>$174.566.686</td>
  </tr> 
  <tr>
    <td>Reconocimiento inmediato de remedicioneS en ORI</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>a.Efecto de cambio en suspuestos demograficos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>b.Efecto de cambio en metodologia y/o supuestos financieros</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>c.Efecto de cambio por experiencia</td>
    <td>$635.034.287</td>
    <td>$176.760.585</td>
  </tr>
  <tr>
    <td>Total reconocido en la cuenta ORI</td>
    <td>$635.034.287</td>
    <td>$176.760.585</td>
  </tr>
  <tr>
    <td>Total reconocido en P&L y ORI</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Conciliacion de los pasivos(activos)netos por beneficios definidos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Pasivos (activos) netos por beneficios definidos al inicio del periodo</td>
    <td>$902.376.933</td>
    <td>$837.357.554</td>
  </tr>
  <tr>
    <td>Costo por beneficios definidos reconocidos P&L</td>
    <td>$183.884.847</td>
    <td>$174.566.686</td>
  </tr>
  <tr>
    <td>Total remediciones reconocidas en ORI</td>
    <td>$635.034.287</td>
    <td>$176.760.585</td>
  </tr>
  <tr>
    <td>Otros eventos significativos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Flujos de efectivo</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Beneficios pagados del plan</td>
    <td>$357.470.000</td>
    <td>$286.307.892</td>
  </tr>
  <tr>
    <td>Beneficios pagados directamente por la empresa</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Creditos a reembolsos</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Efectos de la tasa de cambio</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Pasivos (activos) neto por beneficios definidos al final del periodo</td>
    <td>$1.363.826.067</td>
    <td>$902.376.933</td>
  </tr>
  <tr>
    <td>Hipotesis utilizadas para determinar las obligaciones</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Tasa de descuentos</td>
    <td>11.18%</td>
    <td>11.37%</td>
  </tr>
  <tr>
    <td>Tasa inflacion a largo plazo</td>
    <td>4.00%</td>
    <td>4.00%</td>
  </tr>
  <tr>
    <td>Tasa real</td>
    <td>6.90%</td>
    <td>7.09%</td>
  </tr>
  </table>


<p>Sensibilidad a los principales supuestos actuariales
</p>
<p>De acuerdo a lo establecido en la Norma Internacional Contable, es responsabilidad de la empresa los supuestos actuariales, es por esto que se muestra la sensibilidad de los pasivos de la entidad a 31 de diciembre de 2023 y el gasto contable estimado para el año 2024, cuando se modifican los parámetros de tasa de interés, incremento de pensiones y el costo de salud.
</p>
<table>
 <tr>
    <th> </th>
    <th>Tasa de descuento</th>
    <th>Inflacion</th>
 </tr> 
  <tr>
    <td> </td>
    <td>+1%</td>
    <td>+1%</td>
 </tr> 
 <tr>
    <td>Hipotesis </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>Tasa de descuento </td>
    <td>12.175%</td>
    <td>11.175%</td>
 </tr> 
  <tr>
    <td>Inflacion</td>
    <td>4.00%</td>
    <td>5.00%</td>
 </tr> 
  <tr>
    <td>Sensibilidad </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>PBO(Pasivo total) </td>
    <td>$1.363.826.067</td>
    <td>$1.363.826.067</td>
 </tr> 
  <tr>
    <td>Gasto estimado 2024 </td>
    <td>$477.001.676</td>
    <td>$485.929.684</td>
 </tr> 
   <tr>
    <td> </td>
    <td>-1%</td>
    <td>-1%</td>
 </tr>
 <tr>
    <td>Hipotesis </td>
    <td></td>
    <td></td>
 </tr> 
 <tr>
    <td>Tasa de descuento </td>
    <td>10.175%</td>
    <td>11.175%</td>
 </tr> 
  <tr>
    <td>Inflacion</td>
    <td>4.00%</td>
    <td>3.00%</td>
 </tr> 
  <tr>
    <td>Sensibilidad </td>
    <td></td>
    <td></td>
 </tr> 
  <tr>
    <td>PBO(Pasivo total) </td>
    <td>$1.363.826.067</td>
   <td>$1.363.826.067</td>
 </tr> 
  <tr>
    <td>Gasto estimado 2024 </td>
    <td>$274.484.441</td>
    <td>$262.344.501</td>
 </tr> 
</table>
<p>Novedades en la población

No se presentaron novedades en la población entre 2022-2023
</p>

<p> Firmaa_________________</p>

