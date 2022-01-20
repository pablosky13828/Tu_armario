package com.example.tuarmario;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.example.tuarmario.Domains.ListaProductos;
import com.example.tuarmario.Domains.Productos;
import com.example.tuarmario.Services.ProductosServices;
import com.google.firebase.auth.FirebaseAuth;

import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class camisetasActivity extends AppCompatActivity {
Button fila;

    private String comprobar;
    static ProductosServices productosServices;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_camisetas);


        //Bundle extras = getIntent().getExtras();
         //comprobar = extras.getString("usuariocom");

        productosServices = new ProductosServices();
        List<Productos> listaproductos = new ArrayList<>();
        try {
            listaproductos = productosServices.selectProducto();
            for(int i = 0;i<listaproductos.size();i++){
                System.out.println(listaproductos.get(i).getNombre());
            }
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        } catch (SQLException throwables) {
            throwables.printStackTrace();
        }
        LinearLayout ly =new LinearLayout(this);
        LinearLayout.LayoutParams params = new LinearLayout.LayoutParams(LinearLayout.LayoutParams.MATCH_PARENT,LinearLayout.LayoutParams.WRAP_CONTENT);
        params.setMargins(10,10,10,10);
        ly.setOrientation(LinearLayout.VERTICAL);
        ListaProductos lp = new ListaProductos();
        lp.setProductos((ArrayList<Productos>) listaproductos);
        //ListView
       // for(Productos p : listaproductos) {


            //String txt = p.getId()+" - "+p.getNombre()+" - "+p.getTalla()+" - "+p.getLargo()+" - "+p.getAncho()+" - "+p.getMangas()+" - "+p.getPrecio()+" - "+p.getImagen();

            /*fila = findViewById(R.id.fila);
            fila.setText(txt);

            System.out.println(txt);
            fila.setTextSize((float)60);
           // ly.addView(fila,params);
            int id = p.getId();*/
      //  }

    }





    /*public void Comprarcamiseta (View view) {
        if(comprobar.equals("true")){
            Toast.makeText(this,"Debes estar logueado para acceder a esta sección",Toast.LENGTH_SHORT).show();
        } else {
            Toast.makeText(this,"Accediendo a editar este producto",Toast.LENGTH_SHORT).show();
        }
    }*/
}