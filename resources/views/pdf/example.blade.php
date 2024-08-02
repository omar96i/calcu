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
{{-- @foreach ($company as $item) --}}
  {{-- Total:{{$company}}
  {{$sumaPorUserId}} --}}
{{-- @endforeach --}}

{{-- Grupo:{{$grupo}}
Total:{{$totalCount}}
Suma:{{$totalAmount}} --}}



{{-- @foreach ($resultado as $dato) {
    $userId = $dato->user_id;
    $totalAmount = $dato->total_amount;
    $totalCount = $dato->total_count;
    
    // Aquí puedes hacer algo con las variables
    echo "User ID: $userId, Total Amount: $totalAmount, Total Count: $totalCount\n";
}
@endforeach --}}

@foreach ($usercontroller as $item)
<img src="logo.png" /><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3 class="empresa">{{$item->name}}</h3>
<p>Calculo Actuarial con corte al 31 de Dic. de 2023</p>
<p>GUILLERMO L. SUAREZ MORENO - ACTUARIAL CONSULTING GROUP</p>


<h3>NOTA TÉCNICA</h3>

{{-- @foreach ($accumulatedData as $row) --}}


{{-- @endforeach --}}


<p>VALORACIÓN PASIVO PENSIONAL A CARGO {{$item->name}}</p>


<p>El presente estudio tiene por objeto valorar el pasivo por concepto de 
pensiones de jubilación, cuotas partes del personal jubilado del personal retirado, 
con corte a 31 de diciembre de 2023. </p>

<h3>1.  CONSIDERACIONES LEGALES: </h3>
<p>Para la elaboración de los cálculos actuariales se tienen en cuenta lo dispuesto en la Ley 33 de 1985, 
la Ley 100 sancionada en el año 1993, la Ley 797 sancionada en el año 2003, el Acto Legislativo 01 de 2005 y 
los Decretos 1748 de 1995 y las normas propias aplicables a {{$item->name}} que lo complementan o 
modifican, con el fin de reportar los datos relacionados con la obligación de reconocer y 
pagar pensiones de jubilación, bonos y/o títulos pensionales.

Adicionalmente se incluyen las consideraciones derivadas de lo dispuesto en el acto legislativo 01 de 2005.</p>

 <h3>2. CLASIFICACIÓN DEL PERSONAL:</h3>

<strong>1.Personal Jubilado totalmente a cargo de la empresa: </strong><p>Comprende el personal pensionado de la empresa{{$item->name}}, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar.</p> <br>
<strong>2.Personal Jubilado con pensión Compartida: </strong><p>Corresponde al personal jubilado por la empresa, con pensión en el régimen de prima media y que concurre las dos pensiones, de la extinta Álcalis de Colombia, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar.</p><br>
<strong>3.Personal beneficiario vitalicio a cargo de la empresa: </strong><p>Corresponde al personal beneficiario de la empresa{{$item->name}}, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar. </p><br>
<strong>4.Personal Beneficiario Vitalicio compartido con COLPENSIONES:</strong> <p>Corresponde al personal beneficiario a cargo de la empresa, con pensión de sustitución en el régimen de prima media y que concurren las dos pensiones, quedando a cargo de la extinta Álcalis de Colombia, pagados hoy por la UGPP (entidad responsable del cálculo actuarial como pensionados), a los cuales se les calcula únicamente el valor de las reservas correspondientes a las cuotas partes por cobrar.</p><br>
<strong>5.Personal Jubilado con cuota parte a cargo de la Empresa: </strong><p>se refiere a las personas que disfrutan de pensión de Jubilación otorgada por otra empresa oficial, y que la entidad le corresponde pagar cuota parte a por el tiempo laborado.</p><br>
<strong>6.Personal Beneficiario Vitalicio Cuota parte a Cargo de la Empresa: </strong><p>Corresponde al personal beneficiario de pensiones de sobrevivientes que están a cargo de la empresa. </p> <br>
<strong>7.Personal Despedido sin Justa Causa a Cargo de la Empresa: </strong><p>Corresponde al personal que a la fecha de valoración se encuentra retirado de la empresa, para los cuales se calcula reservas contingentes por posibles fallos judiciales.</p>   <br>     
<strong>8.Personal Despedido sin Justa Causa a Cargo de la Empresa: </strong><p>Corresponde al personal que a la fecha de valoración se encuentra retirado de la empresa, que está afiliado al ISS hoy Colpensiones, para los cuales se calcula reservas contingentes por posibles fallos judiciales.</p><br>

    <h3>3. CONSIDERACIONES ADICIONALES </h3>
    <p><strong>1.</strong> Para el personal jubilado la pensión de vejez del régimen de transición del sector público se difiere a los 55 años y 20 años de servicio en el sector público incluyendo el tiempo laborado en la empresa hasta la fecha de jubilación. </p><br>
    <p><strong>2.</strong> Para el personal jubilado con cotizaciones a COLPENSIONES se tiene en cuenta la concurrencia de la pensión con esa entidad cuando se cumplan los requisitos previstos en la Ley 797 sancionada en el 2003, considerando para ello el tiempo cotizado a COLPENSIONES, el tiempo laborado en la empresa y en el sector público.</p><br>
    <p><strong>3.</strong> Para el personal jubilado las reservas de sobrevivencia se difieren a la fecha de jubilación. Durante el período comprendido entre la fecha de jubilación y la fecha en que concurre la pensión de COLPENSIONES, se incluye una reserva adicional de sobrevivencia a cargo de COLPENSIONES, valorada en los términos de la Ley 797 sancionada en el 2003, en proporción al tiempo cotizado al COLPENSIONES y la suma del tiempo laborado en la empresa hasta el 31/03/1994, el tiempo labrado en el sector público y el tiempo cotizado hasta la fecha de concurrencia.</p><br>
    <p><strong>4.</strong> La reserva a cargo de la empresa corresponde a la reserva total disminuida en la suma de las cuotas partes de la concurrencia de la pensión de vejez del sector público, la de concurrencia con COLPENSIONES y la de sobrevivencia a cargo de COLPENSIONES durante el período de cotizaciones, e incrementada en la reserva de cotizaciones.</p><br>
    <p><strong>5.</strong> Cuando no se conoce la edad del cónyuge del titular del beneficio se asume que ésta es 5 años más o menos según el titular sea mujer u hombre, respectivamente.</p><br>
    <p><strong>6.</strong> Si la pensión de la empresa se causa después del 22 de julio de 2005, las reservas de jubilación y sobrevivencia se valoran con sólo una mesada adicional en diciembre, excepto para aquellas que se causen con posterioridad al 22 de julio de 2005 y con anterioridad al primero de agosto del 2011 y el monto de la pensión sea inferior o igual a tres (3) salarios mínimos legales vigentes, que se valoran igual que las causadas antes del 22 de julio de 2005 con 2 mesadas adicionales.</p><br>
       
       <h3>4. BASES TÉCNICAS </h3>
       <h3>1. TABLAS MORTALIDAD:</h3>
       <p>Tablas de mortalidad e invalidez Rentistas: Sexo masculino y femenino experiencia 2005 – 2008.  Resolución 1555 de 2010.  Superintendencia Financiera de Colombia.</p>
       
       <h3>3.TASAS DE CRECIMIENTO DE RENTAS INTERES:</h3>
       <p>Crecimiento de pensiones (k) :    8.702%Decreto 2783 de 2001.</p>
        <p>Interés técnico real (i) : 		4,8% 	Decreto 2984 de 2009. </p>

        <h4>a. Reserva de Pensionados</h4>
        <strong>RESERVAS DE CAUSANTES:</strong>

        <p>(Va)x =Nx+1/Dx</p>
        <p>(Va)12x=   (Va)x  [ 1 + 11/24 k ] + 11/24 (1+k)</p>
        <p>(Va)2x=  (Va)x  [ 1 + ¼ k ] + ¼ (1+k)</p>

        <strong>RESERVAS DE SUPERVIVENCIA</strong>
        <p>(Va)x ,y   =  	 Nx+1:y+1
			    Dx:y	</p>
        <p>(Va)x /y   =	(Va)y	-  (Va)x ,y</p>
        <p>(Va)12x/y =	(Va)x/y  [  1 + 11/24 k  ] </p>
        <p>(Va)2x/y  =  (Va)x/y  [ 1 + ¼ k ] </p>
        <p>tEx	=	Dx + t/Dx</p>
        <p>tExy	=	D x +t ,y + t / Dxy</p>
        <p>Ax    =   Mx/Dx </p>
        <p>J   =    (1+i)*(1+k)-1</p>
        <p>V	=  1/(1+j)</p>
        <p>Jm= (1+j) (1/12)  -1</p>
        <p>Js= (1+j) (1/2)  -1</p>

    Donde: 

<p>(Va)x=	Valor actual de una renta vitalicia contingente anual variable del valor inicial de $1 con tasa de crecimiento de K pagadera a plazos vencido<p>

<p>(Va)12x=	Valor actual de una renta vitalicia contingente semestral variable con tasa de crecimiento de K pagadera vencida en doce fracciones de 1/12 cada una.<p>
	
<p>(Va)2x=	Valor actual de una renta vitalicia contingente semestral variable con tasa de crecimiento de K pagadera vencida en dos fracciones de ½ cada una.<p>

<p>(Va)xy	=	Valor actual de una renta vitalicia contingente anual variable del valor inicial de $1 con tasa de crecimiento de K pagadera anual vencida sobre dos vidas hasta el primer fallecimiento.<p>

<p>(Va)x/y =	Valor actual de una renta variable sobre dos vidas, de valor inicial de $1 con tasa de crecimiento de K pagadera en anualidades vencidas al cónyuge de edad y a la muerte del jubilado de edad x.<p>

<p>(Va)12x/y =	Valor actual de una renta mensual vencida de 1/12 con tasa de crecimiento de K, pagadera al cónyuge de edad Y a la muerte del jubilado de edad X.<p>

<p>tEx=	Valor actual de $1 pagadero a una persona   de edad x, dentro de t años, sí a los t años se encuentra viva.<p>

<p>tExy =	Valor actual de $1 pagadero a una pareja   de edad xy, dentro de t años, sí a los t años ambos viven.<p>

<p>Ax=	Valor actual de $1 pagaderos a los beneficiarios al final del año de la muerte del trabajador</p>

<p>AF=	Valor del auxilio funerario señalado en el artículo 51 de la Ley 100/93 </p>

<h3>PERSONAL JUBILADO</h3>

<h3>RESERVA TOTAL EMPRESA </h3>

<p>Para las personas con causación de la pensión antes del 22 de julio de 2005, y la que se causen entre el 22 de julio de 2005 y el 31 de julio de 2011, siempre que Si P<= 3 salarios mínimos mensuales legales vigentes: </p>

<p>Rj	=	[12P (Va)12x  ]  +  [2B (Va)2x ].</p>

<p>Rs	=	12P..(Va)12x/y + 2B..(Va)2x/y</p>

<p>En los demás casos: </p>

<p>Rj	=	[12P (Va)12x  ]  +B*[ (Va) x ].</p>

<p>Rs	=	12P..(Va)12x/y + B*(Va) x/y</p>


<p>RA/F	=	Ax.AF.</p>

<p>RC        = (1-(1+0.04)-n)   . tc. IBC(u)</p>
                (1+0.04)1/12-1</p>

<p>Donde:</p>

<p>RC : Reserva de  cotizaciones  </p>

<p>tc(n) = 0.16 </p>

<p>IBC(u) = Pensión jubilación empresa  </p>

<p>tc:  Tasa de cotización para pensiones al ISS hoy Colpensiones, correspondiente a la Fecha de Corte de acuerdo con el artículo 7 de la Ley 797 de 2003; se asumirá que ésta se mantendrá fija a lo largo de los n años.</p>

<p>n:   Número de años faltantes para la jubilación con el ISS hoy Colpensiones, contados a partir de la edad de jubilación del sector público deberá ser entero.  En caso de no ser entero, se redondeará al entero más cercano.</p>

<p>Rt  = Rj  +  Rs  +  RAF +  RC</p>

<h3>RESERVA CONCURRENCIA COLPENSIONES</h3>

<p>Para t  > 6  (causación después del 2011)</p>

<p>Rj	=	{ [12P (Va)12x+t  ] .tEx +  [B (Va)x+t ]. tEx } * tf/(to+ttr+tf)</p>

<p>Rs	=	{12P.tEx/y.(Va)12x+t/y+t + B.tExy.(Va)x+t/y+t} * tf/(to+ttr+tf)</p>


<p>Para 0<= t <= 6 y   P> 3 * Salario mínimo</p>
       	
<p>Rj	=	{ [12P (Va)12x+t  ] .tEx +  [B (Va)x+t ]. tEx } * tf/(to+ttr+tf)</p>

<p>Rs	=	{12P.tEx/y.(Va)12x+t/y+t + B.tExy.(Va)x+t/y+t} * tf/(to+ttr+tf)</p>

<p>Para 0<= t <= 6 y   P<= 3 * Salario mínimo</p>

<p>Rj	=	{ [12P (Va)12x+t  ] .tEx +  [2B (Va)2x+t ]. tEx } * tf/(to+ttr+tf)</p>

<p>Rs	=	{12P.tEx/y.(Va)12x+t/y+t + 2B.tExy.(Va)2x+t/y+t} * tf/(to+ttr+tf)</p>

<p>RA/F	=	Ax+t.AF..tEx * tf/(to+ttr+tf)</p>

<p>.t : tiempo faltante para adquirir derecho a pensión con COLPENSIONES</p>
<p>.tf: tiempo cotizado a Colpensiones</p>
<p>to : tiempo en otras entidades del sector público</p>
<p>.ttr: tiempo total en la empresa hasta 31 de marzo de 1994</p>

<p>Reserva sobrevivencia a cargo del Colpensiones por el período entre la jubilación empresa y la concurrencia con Colpensiones</p>

<p>Si n+u > 6 </p>

<p>RS/Col  =PS (u) [12*(Va)12y+n+u + (Va)y+n+u ].u+n/  qx . u+npy.. v u+n . </p>

<p>Si n+u< =6</p>

<p>Si PS(u) > 3 * Salario mínimo</p>
<p>RS/Col  =PS (u) [ 12 * (Va)12y+n+u +   (Va) y+n+u ].u+n/ qx . u+npy.. v u+n . </p>


<p>Si PS(u) <= 3 * Salario mínimo</p>
<p>RS/Col  =PS (u) [ 12 * (Va)12y+n+u + 2*  (Va)2y+n+u ].u+n/ qx . u+npy.. v u+n . </p>

<p>Donde:</p>

<p>RS/Col : Reserva sobrevivencia a cargo del Colpensiones  por el período entre la jubilación  empresa y la concurrencia con Colpensiones</p>

<p>n. Período en años de diferimiento para la jubilación (n=0).</p>

<p>z. Período en años de diferimiento entre la jubilación y la concurrencia con Colpensiones</p>

<p>SEM-FC: Semanas cotizadas a Colpensiones   hasta la fecha de corte </p>

<p>IBC: Ingreso base de cotización a Colpensiones</p>

PS (u) =  IBC*PPS(u)*(1+k)(u+n) </p>

<p>PPS(u) = 0.45 si  (SEM-FC + (n+u)*52)<500</p>
<p>PPS(u) =0.45+[ SEM-FC +  (n+u)*52 -500]/50*0.02 si (SEM-FC  + (n+u)*52)>500</p>
<p>Si PPS(u)>0.75 ,  PPS(u)=0.75 </p> 

<p>RCol   = Rj  +  Rs  +  RAF + RS/ Col	</p>

<h3>RESERVAS NETAS</h3>


<p>RE        = RT -  RP  -  RCol   

<p>RE  :          Reserva a cargo de la empresa 

<p>Para el personal del grupo de beneficiarios de la pensión de sobrevivientes con beneficio vitalicio RT  = Rj ,    RP  = 0 ,   RCol   = 0

<p>Para toda la formulación anterior:

<p>Rj  : Reserva de jubilación total, o del sector público o de Colpensiones, según el caso.

<p>Rs : Reserva de Sobrevivencia total, o del sector público o de Colpensiones, según el caso.

<p>RA/F: Reserva de Auxilio Funerario total, o del sector público o de Colpensiones, según el caso.

<p>RC  : Reserva de Cotizaciones al Colpensiones 

<p>RR/Col : Reserva Sobrevivencia adicional a cargo del Colpensiones  durante el periodo de cotizaciones.
 
<p>Rtem  : Renta temporal

<p>Para toda la formulación anterior:

<p>P = Valor de la pensión mensual de jubilación, de concurrencia con el sector público o con Colpensiones, según el caso  

<p>B =	Valor de las primas de jubilación, de concurrencia o de con el sector público o con Colpensiones, según el caso  

<p>x	=	Edad del trabajador a la fecha de corte

<p>y	=	Edad del cónyuge a la fecha de corte

<p>t          =	Período de diferimiento en años para acceder al beneficio teniendo en cuenta las consideraciones adicionales anteriormente señaladas.

<p>Para el personal del grupo de beneficiarios de la pensión de sobrevivientes con beneficio vitalicio RT  = Rj ,    RP  = 0 ,   RCol   = 0

<h3>NOVEDADADES EN LA POBLACIÓN</h3>

<p>A continuación, se presentan los cambios en la población de 2022 a 2023:

<p>PENSIONADOS FALLECIDOS

<p>CAMBIO DE GRUPO

<p>Para los dos primeros casos no se tiene los datos del sustituto, se calcula un sustituto supuesto teniendo en cuenta la información histórica. Para los casos 3-4 se valida que aún no se ha compartido la pensió

<p>INCLUSIONES

<p>Verificada la información en la entidad, se incluye los beneficiarios de pensionados fallecidos



<h3>6.RESULTADOS:</h3>
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
   
    <td> {{$dato->col3}}</td>
    <td>{{$dato->total_count}}</td>

    <td>${{number_format($dato->total_amount, 0, '.', '.')}}</td>
    
    
    
    
  </tr>
  {{-- <tr>
   
    <td>PERSONAL JUBILADO CON PENSION COMPARTIDA</td>
    <td>91</td>

    <td>$8.104.119.280</td>
    <td>$4.976.729.859</td>
    <td>$</td>
    <td>$13.080.849.139</td>

    <td>$956.039.692</td>
    <td>$12.124.809.447</td>
   
  </tr>

  <tr>
   
    <td>PESONAL BENEFICIARIO VITALICIO TOTALMENTE A CARGO DE LA EMPRESA</td>
    <td>3</td>

    <td>$435.333.574</td>
    <td>$</td>
    <td>$</td>
    <td>$435.333.574</td>

    <td>$</td>
    <td>$435.333.574</td>
    
  </tr>

  <tr>
   
    <td>PERSONAL BENEFICIARIO VITALICIO COMPARTIDO CON COLPENSIONES</td>
    <td>107</td>

    <td>$16.189.169.013</td>
    <td>$</td>
    <td>$</td>
    <td>$16.189.169.013</td>

    <td>$1.438.294.798</td>
    <td>$14.750.874.215</td>
    
  {{-- </tr> --}}
  
  
    
 @endforeach  
 <tr>
   
    <td><b>Total General</b></td>
    <td><b>{{$conteoTotal}}</b></td>

    <td><b>${{number_format($sumTotal, 0, '.', '.')}}</b></td>
    <td><b>$5.074.378.639</b></td>
    <td><b>$</b></td>
    <td><b>$29.971.627.086</b></td>

    <td><b>$2.394.334.490</b></td>
    <td><b>$27.677.292.596</b></td>
    
  </tr> 
</table>

 @endforeach
  
