


var miAplicacion= angular.module('happykids',['ngRoute','ngtweet'])

miAplicacion.controller('controlador1', ['$scope', function($scope){
    $scope.cantidad=20
    $scope.precio=2.15

}])



miAplicacion.config(['$routeProvider',function($routerProvider) {
    $routerProvider.when('/contactanos', {
        templateUrl: 'plantillas/contacto.php'
    }).when('/nosotros/quienesSomos', {
        templateUrl: 'plantillas/Nosotros/quienesSomos.html'
    }).when('/nosotros/organigrama', {
        templateUrl: 'plantillas/Nosotros/organigrama.html'
    }).when('/nosotros/uniforme', {
        templateUrl: 'plantillas/Nosotros/uniforme.html'
    }).when('/nosotros/himno', {
        templateUrl: 'plantillas/Nosotros/himno.html'
    }).when('/nosotros/manual-de-convivencia', {
        templateUrl: 'plantillas/Nosotros/manualConvivencia.html'
    }).when('/nosotros/cronograma-de-actividades', {
        templateUrl: 'plantillas/Nosotros/cronogramaActividades.html'
    }).when('/nosotros/documentos', {
        templateUrl: 'plantillas/Nosotros/documentos.html'
    }).when('/servicios/orientacion-escolar', {
        templateUrl: 'plantillas/error.html'
    }).when('/servicios/restaurante-comedor', {
        templateUrl: 'plantillas/servicios/restaurante.html'
    }).when('/servicios/horario-extendido', {
        templateUrl: 'plantillas/servicios/horariosExtendidos.html'
    }).when('/gobierno-escolar/organos-del-gobierno', {
        templateUrl: 'plantillas/gobiernoEscolar/gobiernoEscolar.html'
    }).when('/gobierno-escolar/rectoria', {
        templateUrl: 'plantillas/gobiernoEscolar/rectoria.html'
    }).when('/gobierno-escolar/consejo-directivo', {
        templateUrl: 'plantillas/gobiernoEscolar/consejoDirectivo.html'
    }).when('/gobierno-escolar/consejo-academico', {
        templateUrl: 'plantillas/gobiernoEscolar/consejoAcademico.html'
    }).when('/gobierno-escolar/comision-de-evalucion', {
        templateUrl: 'plantillas/gobiernoEscolar/comisionEvalucion.html'
    }).when('/gobierno-escolar/consejo-de-padres-de-familia', {
        templateUrl: 'plantillas/gobiernoEscolar/consejoPadres.html'
    }).when('/gobierno-escolar/personero-estudiantil', {
        templateUrl: 'plantillas/gobiernoEscolar/personeroEstudiantil.html'
    }).when('/gobierno-escolar/consejo-estudiantil', {
        templateUrl: 'plantillas/gobiernoEscolar/consejoEstudiantil.html'
    }).when('/admisiones/proceso-de-admision', {
        templateUrl: 'plantillas/admisiones/procesoAdmision.html'
    }).when('/admisiones/requisitos-de-matricula', {
        templateUrl: 'plantillas/admisiones/requisitosMatricula.html'
    }).when('/novedades/eventos', {
        templateUrl: 'plantillas/error.html'
    }).when('/novedades/boletin-informativo', {
        templateUrl: 'plantillas/error.html'
    }).when('/primaria/noticias', {
        templateUrl: 'plantillas/primaria/resumenNoticias.html'
    }).when('/primaria/noticias/diagnostico-de-entrada', {
        templateUrl: 'plantillas/primaria/diagnostico-de-entrada.html'
    }).when('/primaria/noticias/pruebas-superate', {
        templateUrl: 'plantillas/primaria/pruebas-superate.html'
    }).when('/primaria/noticias/reunion-de-padres', {
        templateUrl: 'plantillas/primaria/reunion-de-padres.html'
    }).when('/primaria/noticias/elecciones-estudiantiles', {
        templateUrl: 'plantillas/primaria/elecciones-estudiantiles.html'
    }).when('/primaria/noticias/dia-de-la-mujer', {
        templateUrl: 'plantillas/primaria/dia-de-la-mujer.html'
    }).when('/primaria/noticias/capacitacion-sabios', {
        templateUrl: 'plantillas/primaria/capacitacion-sabios.html'
    }).when('/primaria/noticias/personero-estudiantil', {
        templateUrl: 'plantillas/primaria/personero-estudiantil.html'
    }).when('/primaria/noticias/dia-especial-semana-santa', {
        templateUrl: 'plantillas/primaria/dia-especial-semana-santa.html'
    }).when('/primaria/noticias/jornada-electoral', {
        templateUrl: 'plantillas/primaria/jornada-electoral.html'
    }).when('/primaria/noticias/reunion-consejo', {
        templateUrl: 'plantillas/primaria/reunion-consejo.html'
    }).when('/primaria/noticias/superate-deporte', {
        templateUrl: 'plantillas/primaria/conpetencia-superate.html'
    }).when('/primaria/noticias/proyecto-tiempo-libre', {
        templateUrl: 'plantillas/primaria/proyectoAprovechamientotiempoLibre.html'
    }).when('/primaria/noticias/diaE-familia', {
        templateUrl: 'plantillas/primaria/diaE-de-la-familia.html'
    }).when('/primaria/noticias/dia-del-arbol', {
        templateUrl: 'plantillas/primaria/dia-del-arbol.html'
    }).when('/primaria/noticias/dia-del-agua', {
        templateUrl: 'plantillas/primaria/diaAgua.html'
    }).when('/primaria/noticias/dia-del-idioma', {
        templateUrl: 'plantillas/primaria/dia-del-idioma.html'
    }).when('/primaria/noticias/experimento-2b', {
        templateUrl: 'plantillas/primaria/experimento-2b.html'
    }).when('/primaria/noticias/dia-del-nino', {
        templateUrl: 'plantillas/primaria/dia-del-nino.html'
    }).when('/primaria/noticias/dia-del-maestro', {
        templateUrl: 'plantillas/primaria/diaMaestro.html'
    }).when('/primaria/noticias/deporte-cancha-sintetica', {
        templateUrl: 'plantillas/primaria/canchaSintetica.html'
    }).when('/primaria/noticias/dia-afro', {
        templateUrl: 'plantillas/primaria/dia-afro.html'
    }).when('/primaria/noticias/dona-conocimiento', {
        templateUrl: 'plantillas/primaria/donaConocimiento.html'
    }).when('/primaria/noticias/semana-de-lectura', {
        templateUrl: 'plantillas/primaria/semanaElectura.html'
    }).when('/preescolar/noticias', {
        templateUrl: 'plantillas/preescolar/resumenNoticiasPreescolar.html'
    }).when('/preescolar/actividades', {
        templateUrl: 'plantillas/preescolar/resumen-actividades.html'
    }).when('/preescolar/noticias/proyecto-mi-cuerpo', {
        templateUrl: 'plantillas/preescolar/proyecto-mi-cuerpo.html'
    }).when('/preescolar/noticias/dia-de-granja', {
        templateUrl: 'plantillas/preescolar/dia-granja.html'
    }).when('/preescolar', {
        templateUrl: 'plantillas/preescolar/menu-preescolar.html'
    }).when('/maternal', {
        templateUrl: 'plantillas/maternal/resumenNoticias.html'
    }).when('/maternal/noticias/cierre-proyecto1m', {
        templateUrl: 'plantillas/maternal/cierre-proyecto1m.html'
    }).when('/maternal/noticias/dia-de-granja-maternal', {
        templateUrl: 'plantillas/maternal/dia-granja.html'
    }).otherwise({
        redirectTo:'/',
        templateUrl:'plantillas/body.html'
    });

}]);
