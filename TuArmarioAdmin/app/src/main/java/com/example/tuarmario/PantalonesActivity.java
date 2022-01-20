package com.example.tuarmario;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

public class PantalonesActivity extends AppCompatActivity {
    private String comprobar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pantalones);

        Bundle extras = getIntent().getExtras();
        comprobar = extras.getString("usuariocom");
    }

    public void comprarpantalones (View view) {
        if(comprobar.equals("true")){
            Toast.makeText(this,"Debes estar logueado para acceder a esta sección",Toast.LENGTH_SHORT).show();
        } else {
            Toast.makeText(this,"Accediendo a editar este producto",Toast.LENGTH_SHORT).show();
        }
    }

}