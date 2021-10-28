window.onload = function()
{
    angular.element( document.getElementById( 'texto-cargar')).scope().cargar_datos();

    angular.element( document.getElementById( 'texto-cargar' )).scope().otra_funcion();
}


var app = angular.module( "apptraductor", [] );

app.controller( "controlador", 

    [ "$scope", "$http", 

        function( $scope, $http ){ 
            $scope.documento = [ ];
            $scope.informacion = [];

            //console.log("real");
            $scope.buscar = function( e ){
                let tx = e.target.value.toLowerCase();
                if (tx == ''){
                    $scope.informacion = $scope.documento;
                }else{
                    $scope.informacion = [];
                    let filtro1 = $scope.documento.filter(x=>x.texto.toLowerCase().includes(tx) && x.titulo=="titulo");
    
                    if (filtro1.length > 0){
                        // Titulos
                        let tm = [];
                        filtro1.forEach(item => {

                            tm = tm.concat($scope.documento.filter(x=>x.titulo));
                            
                        });
                        
                        
                        filtro1 = tm;    


                    }else{
                        filtro1 = $scope.documento.filter(x=>x.texto.toLowerCase().includes(tx) && x.titulo);
                        let tm = []
                        filtro1 = tm;
                    }
    
                    $scope.informacion = filtro1;
    
                }
                
            }

            $scope.cargar_datos = function()
            {
                
                var lin = 'angular/buscador_informe.php';
              
               
                console.log(lin);  
                $http.get( lin ).then( //-----------datos-------- 
                
                    function( response )
                    {
                        console.log(lin); 
                       console.log('datos.php?mivalor=' + $scope.mitexto + "&in=1&fn=10");
                        $scope.informacion = response.data;
                        $scope.documento = response.data;
                        //console.log( $scope.informacion);
                    }   
                );//--------fin datos---    
            }  
        }//-----------FIN del MAXIMA-------------------
    ]
);



