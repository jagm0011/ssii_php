<?
class KNN {
    private $vecinosSimilitudes;
   
    private $valoraciones;
    //parametros configuracion. Por defecto PCC
    private PCC;
    private SC;
    
    public function KNN($valoracion){
        $this->valoraciones=$valoracion;
        $this->vecinosSimilitudes=array();
        $SC=0;
        $PCC=1;
    }
/*
    public function calculoVecinos(){
        $con=0;
        //Empezamos recorriendo el vector con las valoraciones
        while($con<count($valoraciones)){
            $vActual = new valoracion();
            $vActual = valoraciones.get(con);
            $con2=con+1;
            while($con2<count($this->valoraciones)){
                $vActualDos=new valoracion(); ;
                $vActualDos = valoraciones.get($con2);
                float similitud=calculaSimilitud($vActual, $vActualDos);
                $con2++;
            }
            
            con++;
        }
    }
    //Culcula la similitud entre 2 peliculas.
    private float calculaSimilitud(Valoracion v1, Valoracion v2){
        Vector<Integer> vectorPuntuaciones1;
        Vector<Integer> vectorPuntuaciones2;
        vectorPuntuaciones1=v1.getPuntuacion();
        vectorPuntuaciones2=v2.getPuntuacion();
        //quiere decir que tienen valoraciones. Si alguno no tiene, la similitud es 0
        if(vectorPuntuaciones1.size()>0 && vectorPuntuaciones2.size()>0){
            if(PCC==1)
                return PCC(vectorPuntuaciones1,vectorPuntuaciones2);
            else
                return SC(vectorPuntuaciones1,vectorPuntuaciones2);
        }
        return 0;
    }
  
    /*****FUNCIONES CALCULO DE SIMILITUD******/
    //Coeficiente de correlacion de Pearson
    /*
     * r=1 correlacion perfect
     * 0<r<1 correlacion positiva
     * r=0 no existe relacion
     * 1<r<0 correlacion negativa
     * r=-1 correlacion negativa perfecta
     */
     /*
    public float PCC(Vector<Integer> v1, Vector<Integer> v2){
        float mediaValoracionItem1=calculaMedia(v1);
        float mediaValoracionItem2=calculaMedia(v2);
        
       //Calculo numerador
        float sumatoriaNumerador=0;    
        for($con=0;con<v1.size();con++){
            sumatoriaNumerador+=(v1.get(con)-mediaValoracionItem1)*(v2.get(con)-mediaValoracionItem2);                        
        }
        
        //Calculo denominador
        float sumatoriaDenominador1=0;    
        for($con=0;con<v1.size();con++){
            sumatoriaDenominador1+=(v1.get(con)-mediaValoracionItem1)*(v1.get(con)-mediaValoracionItem1);            
        }
       
        float sumatoriaDenominador2=0;    
        for($con=0;con<v2.size();con++){
            sumatoriaDenominador2+=(v2.get(con)-mediaValoracionItem2)*(v2.get(con)-mediaValoracionItem2);            
        }
        
        float sumatoriaDenominador=(float)Math.sqrt(sumatoriaDenominador1*sumatoriaDenominador2);
        //return
        float resultado=sumatoriaNumerador/sumatoriaDenominador;
        //hay que hacer esta cuenta para transformala a medida de similitud
        return (resultado+1)/2;
    }
    
    public float calculaMedia(Vector<Integer> v){
        float media=0;
        for($con=0;con<v.size();con++){
            media+=v.get(con);
        }
        media=media/v.size();
        return media;
    }
    //Similitud del coseno
    /*
     * r=0 minima similitus
     * r=1 maxima similitud
     *//*
    public float SC(Vector<Integer> v1, Vector<Integer> v2){
        
        return 0;
    }
    
    /**
     * @return the vecinos
     *//*
    public Vector<Vector<celdaKNN>> getVecinos() {
        return $this->vecinosSimilitudes;
    }

    /**
     * @param vecinos the vecinos to set
     *//*
    public void setVecinos(Vector<Vector<celdaKNN>> vecinos) {
        $this->$this->vecinosSimilitudes = vecinos;
    }

   
    
}
?>