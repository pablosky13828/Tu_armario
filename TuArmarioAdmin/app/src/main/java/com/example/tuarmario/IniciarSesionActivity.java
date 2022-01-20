package com.example.tuarmario;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

public class IniciarSesionActivity extends AppCompatActivity {

    private EditText correo;
    private EditText contrasena;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_iniciar_sesion);

        correo = findViewById(R.id.correoedittext);
        contrasena = findViewById(R.id.contrasena);



    }

    public void onStart() {
        super.onStart();

        //updateUI(currentUser);
    }

    public void iniciarSesion(View view) {
        String comprobacioncorreo = correo.getText().toString().trim();
        String comprobacioncontrasena = contrasena.getText().toString().trim();
        if((comprobacioncorreo.equals("admin"))&&(comprobacioncontrasena.equals("administrador"))){
            Intent i = new Intent(this,PrincipalActivity.class);
            i.putExtra("correo", correo.getText().toString());
            startActivity(i);
        }else{
            Toast.makeText(this,"Usuario o contraseña incorrecta",Toast.LENGTH_SHORT).show();
        }
    }

    public void volver (View view) {
        Intent i = new Intent(this,MainActivity.class);
        startActivity(i);
    }

}