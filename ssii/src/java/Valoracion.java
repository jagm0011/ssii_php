
import java.util.Vector;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author javi
 */
class Valoracion {
    private pelicula pelicula;
    //este vector contendra posiciones en las que la puntuacion sea null
    //Eso indica que no ha sido votado
    private Vector<Integer> puntuacion;
    
    /**
     * @return the pelicula
     */
    public pelicula getPelicula() {
        return pelicula;
    }

    /**
     * @param pelicula the pelicula to set
     */
    public void setPelicula(pelicula pelicula) {
        this.pelicula = pelicula;
    }

    /**
     * @return the puntuacion
     */
    public Vector<Integer> getPuntuacion() {
        return puntuacion;
    }

    /**
     * @param puntuacion the puntuacion to set
     */
    public void setPuntuacion(Vector<Integer> puntuacion) {
        this.puntuacion = puntuacion;
    }

}
