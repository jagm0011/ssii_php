
import javax.persistence.*;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author javi
 */
@Entity
@Table(name="peliculas")
public class pelicula {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    @Column(name="id")    
    private int id;
    private int anio;    
    private String descripcion;

    public pelicula(){
      id=0;
      anio=0;
      descripcion="";
    }
    public pelicula(int id, int anio, String descripcion) {
        this.id = id;
        this.anio = anio;
        this.descripcion = descripcion;
        
    }
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    /**
     * @return the anio
     */
    public int getAnio() {
        return anio;
    }

    /**
     * @param anio the anio to set
     */
    public void setAnio(int anio) {
        this.anio = anio;
    }

    /**
     * @return the descripcion
     */
    public String getDescripcion() {
        return descripcion;
    }

    /**
     * @param descripcion the descripcion to set
     */
    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }
}
