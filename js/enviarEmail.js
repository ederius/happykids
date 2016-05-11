    $(".contacto").on("click", function(){

        
        var nombre=$(".nombre").val();
        var email=$(".email").val();
        var telefono=$(".telefono").val();
        var asunto=$(".asunto").val();

        if(nombre=="" || email =="" || telefono =="" ||asunto =="")
        {
            $('.error').fadeIn(5000).html('<div class="center-aligner center red lighten-1 white-text btn">Campo Vacio</div>').fadeOut(6000);
        }else {
            var  Data='nombre='+nombre+'&email='+email+'&telefono='+telefono+'&asunto='+asunto

            $.ajax({
                type: "POST",
                url: "php/enviarContacto.php",
                data: Data,


                success: function (data) {
                    $('.error').fadeIn(1000).html(data).fadeOut(9000);
                    $(".nombre").val('');
                    $(".email").val('');
                    $(".telefono").val('');
                    $(".asunto").val('');
                }
            });

        }
    })
