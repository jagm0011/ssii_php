/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;

/**
 *
 * @author Javier
 */
public class Persistencia {
    EntityManagerFactory emf;
    EntityManager em;
    
    static Persistencia instancia = null;
    
    public Persistencia(){
        emf = Persistence.createEntityManagerFactory("SI_DB");
        em = emf.createEntityManager();
    }
    
    public EntityManager getEntityManager() {
        return em;
    }
    
    public static void crearConexion() {
        if (instancia == null) {
            instancia = new Persistencia();
        }
    }
    
    public static Persistencia instancia() {
        return instancia;
    }
    public static void desconectar() {
        if (instancia != null) {
            System.out.println("    desconectar");           
            instancia.em.close();
            instancia.emf.close();
            instancia = null;
        }
    }
    
   
}