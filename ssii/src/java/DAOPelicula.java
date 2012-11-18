/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
import java.util.*;
import javax.persistence.*;
/**
 *
 * @author javi
 */
public class DAOPelicula {
    static DAOPelicula instancia = null;
    private String termino;

    DAOPelicula() {

    } 
    public static DAOPelicula instancia() {
        if (instancia == null) {
            instancia = new DAOPelicula();
        }
        return instancia;
    }  
}
