package com.example.tuarmario;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;

public class MainActivity extends AppCompatActivity {

    private FirebaseAuth nAuth;
    private  String usuariocomprobar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        nAuth = FirebaseAuth.getInstance();
        usuariocomprobar = "false";

    }

    public void irIniciar(View view){
        Intent i = new Intent(this,IniciarSesionActivity.class);
        startActivity(i);
    }

    public void Vercamisetas (View view) {
        Toast.makeText(this,"Has seleccionado camisetas",Toast.LENGTH_SHORT).show();
        usuariocomprobar = "true";
        Intent i = new Intent(this,camisetasActivity.class);
        i.putExtra("usuariocom",usuariocomprobar);
        startActivity(i);

    }

    public void Verpantalones (View view) {
        Toast.makeText(this,"Has seleccionado pantalones",Toast.LENGTH_SHORT).show();
        usuariocomprobar = "true";
        Intent i = new Intent(this,PantalonesActivity.class);
        i.putExtra("usuariocom",usuariocomprobar);
        startActivity(i);
    }

    public void Verzapatillas (View view) {
        Intent i = new Intent(this,ZapatillasActivity.class);
        usuariocomprobar = "true";
        i.putExtra("usuariocom",usuariocomprobar);
        startActivity(i);
    }

    }

