package com.example.tuarmario;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

public class PrincipalActivity extends AppCompatActivity {

    TextView textouser;
    private String comprobar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_principal);
        textouser = findViewById(R.id.textView3);

        Bundle extras = getIntent().getExtras();
        String correorecibido = extras.getString("correo");
        comprobar = "false";

        textouser.setText(correorecibido);
    }

    public void pulsarcamiseta (View view) {
        Toast.makeText(this,"Has accedido al apartado sudaderas",
                Toast.LENGTH_SHORT).show();
        Intent i = new Intent(this,camisetasActivity.class);
        i.putExtra("usuariocom",comprobar);
        startActivity(i);
    }

    public void pulsarpantalon (View view) {
        Toast.makeText(this,"Has accedido al apartado pantalones",
                Toast.LENGTH_SHORT).show();
        Intent i = new Intent(this,PantalonesActivity.class);
        i.putExtra("usuariocom",comprobar);
        startActivity(i);
    }

    public void pulsarzapatillas (View view) {
        Toast.makeText(this,"Has accedido al apartado zapatillas",
                Toast.LENGTH_SHORT).show();
        Intent i = new Intent(this,ZapatillasActivity.class);
        i.putExtra("usuariocom",comprobar);
        startActivity(i);
    }

}