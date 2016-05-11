<nav class="hide-on-small-only green accent-4">
    <div class="nav-wrapper">
        <div class="col s12 mapaDelSitio white-text text-darken-4   ">
            <a  class="breadcrumb">Nosotros</a>
            <a  class="breadcrumb">Contacto</a>
        </div>
    </div>
</nav>


<div class="fila" style="width:100%; height:550px;"  >  </div>

    <div class="row " >
        <div class="col s5 card superponer">
            <div class="card-content">
                    <form id="contacto" name="contacto">
                    <h4 class="center-align"> Formulario de contacto</h4>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nombre" type="text" class="validate nombre">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="tel" class="validate email">
                            <label for="email">E-mail</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="telefone " type="tel" class="validate telefono">
                            <label for="telefone">Telefono</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="asunto" class="materialize-textarea asunto"></textarea>
                            <label for="asunto">Asunto</label>
                        </div>

                        <a class="waves-effect waves-light btn right green accent-3 white-text text-darken-4 contacto"><i class="material-icons left">done</i>Enviar</a>

                    </div>
                        <div class="error center"></div>
                </form>
            </div>
        </div>
    </div>

<!--  Scripts-->

<script src="js/enviarEmail.js"></script>

<!--  Scripts-->



<script >
    if(window.location.href.substr(-2) !== "?r") {
        window.location = window.location.href + "?r";
        if(window.location==window.location){
            window.location.reload()
        }
    }
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74193575-1', 'auto');
  ga('send', 'pageview');

</script>