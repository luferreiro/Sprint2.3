
  <!-- Pongo el link a nav_bar.php -->
  <?php include("nav_bar.php") ?>

  <!-- Pongo div de Body de bootstrap -->
  <div class="container">
  <div class="card-body">
      <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Necesito darme de alta para hacer compras?
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Podés darte de alta como usuario de nuestra web muy fácilmente ingresando un e-mail y creando una clave personal o podé ingresar con tu cuenta de Facebook.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Cuánto demora en estar listo mi pedido?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            La demora depende de los productos comprados. En la publicación de cada producto se informa el tiempo estimado. Dichos plazos cuentan a partir de la acreditación del pago hasta que el pedido esté listo para retirar por nuestra oficina o para entregar al correo. Muchos productos se realizan por encargue y demoran algunos días en estar listos. Hacemos lo posible por acelerar los plazos.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Puedo comprar desde cualquier parte del país?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Sí, seleccionando la opción "Envío a domicilio" te enviamos tu pedido mediante correo privado al domicilio que nos indiques dentro de la República Argentina.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              ¿Cuánto cuesta el envío a domicilio?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
             El costo se calculará automáticamente en el segundo paso del carrito de compras, una vez seleccionada la modalidad "Correo Privado" y completado el domicilio de entrega (incluyendo provincia y código postal). Es necesario llegar a este paso ya que el costo depende del volumen y peso de todos los productos elegidos y del destino del envío. Se puede verificar antes de confirmar el pedido.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              ¿Puedo ahorrarme el costo de envío?
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            Sí, podés seleccionar la opción "Retirar en Oficina" y te avisaremos cuando esté listo el pedido para que pases a buscarlo por nuestra oficina ubicada en Palermo. Nuestro horario es de Lunes a Sábados de 10 a 20 hs.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              ¿Cómo hago para pagar con tarjeta de crédito?
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
            Tenes que seleccionar como forma de pago el sistema MercadoPago y luego elegir la modalidad que prefieras dentro de todas las opciones del sistema.
    Si sos cliente de alguno de los bancos con los que tengamos convenios especiales, selecciona la modalidad exclusiva para clientes de ese banco que te permitirá acceder a los beneficios vigentes.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              No pude completar el proceso de pago. ¿Qué debo hacer?
            </button>
          </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
            Podés buscar tu pedido ingresando a la sección "Mis compras". Para ello, debes ingresar a la página con el usuario que usaste para comprar y dirigirte al ángulo superior derecho. Donde figura tu nombre se desplegará un menú que incluye dicha sección. En las compras impagas aparece la opción "Pagar Ahora”, que brinda la posibilidad de concluir tu compra. Si el medio de pago seleccionado rebota el pago será necesario cargar el pedido nuevamente y cancelaremos el anterior.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              ¿Puedo cambiar la forma de pago?
            </button>
          </h2>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
          <div class="card-body">
            Una vez finalizado el pedido no es posible cambiar la modalidad de pago puesto que se generan las órdenes de pago con números únicos. Si preferís pagar por transferencia bancaria escribinos a envios@nordic.com y te pasamos los datos. Si queres pagar con otra modalidad será necesario cargar un nuevo pedido y luego cancelamos el anterior.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              ¿Cómo uso mi código promocional?
            </button>
          </h2>
        </div>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
          <div class="card-body">
            Una vez seleccionados los productos, te dirigís al carrito de compras arriba a la derecha, seleccionas "Comprar". En la pantalla siguiente verás un detalle de los productos elegidos y arriba del botón “Comprar” deberás ingresar en "Tengo un código promocional". Debes cliquear ahí, ingresar el código y cliquear en "APLICAR". Para proseguir con tu pedido, tenes que cliquear en "Continuar Compra", que te dará la posibilidad de seleccionar el medio de pago y forma de envío.
          </div>
        </div>
      </div>

    </div>

  </div>

  </div>

  <!-- Pongo el link a footer.php -->
  <?php include("footer.php") ?>
