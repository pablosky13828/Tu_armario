package com.example.tuarmario.Repositories;

import com.example.tuarmario.Domains.Productos;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

public class ProductosDao {

    public List<Productos> selectProductoBD () throws ClassNotFoundException, SQLException {
        System.out.println("selectProductoBD metodo");
        //Paso 1: conectarme a BD
        Connection connection = DBConnection.connectToDB();
        //Paso 2: query insert, update o delete
        Statement st = connection.createStatement();
        ResultSet lineas = st.executeQuery("SELECT * FROM productos WHERE categoria = 'camisetas'");
        List<Productos> listaproductos = new ArrayList();
        System.out.println("selectProductoBD resulset "+lineas);
        while(lineas.next()){
            int id = lineas.getInt("id");
            String nombre = lineas.getString("nombre");
            String talla = lineas.getString("talla");
            int largo = lineas.getInt("largo");
            int ancho = lineas.getInt("ancho");
            int mangas = lineas.getInt("mangas");
            Float precio = lineas.getFloat("precio");
            String imagen = lineas.getString("imagen");
            Productos p = new Productos (id,nombre,talla,largo,ancho,mangas,precio,imagen);
            System.out.println(p);
            listaproductos.add(p);
        }

        //Paso 3: cerrar BD
        lineas.close();
        st.close();
        DBConnection.closeConnection(connection);
        return listaproductos;
    }
}
