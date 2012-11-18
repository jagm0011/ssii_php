/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author javi
 */
public class celdaKNN {
    private pelicula pelicula;
    private int similitud;
    
    public celdaKNN(){}
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
     * @return the similitud
     */
    public int getSimilitud() {
        return similitud;
    }

    /**
     * @param similitud the similitud to set
     */
    public void setSimilitud(int similitud) {
        this.similitud = similitud;
    }
}
