package com.example.tuarmario.Services;

import com.example.tuarmario.Domains.Productos;
import com.example.tuarmario.Repositories.ProductosDao;

import java.sql.SQLException;
import java.util.List;

public class ProductosServices {
    ProductosDao productosDao;

    public List<Productos> selectProducto () throws ClassNotFoundException, SQLException {

        //Logica
        //LLamada al dao
        productosDao = new ProductosDao();
        return productosDao.selectProductoBD();
    }
}
