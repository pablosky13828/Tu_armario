package com.example.tuarmario.Domains;

public class Productos {
    private int id;
    private String nombre;
    private String categoria;
    private String talla;
    private int largo;
    private int ancho;
    private int mangas;
    private Float precio;
    private String imagen;

    public Productos () {}
    public Productos (int id,String nombre,String talla,int largo,int ancho,int mangas,Float precio,String imagen){
        this.id=id;
        this.nombre = nombre;
        this.talla=talla;
        this.largo=largo;
        this.ancho=ancho;
        this.mangas=mangas;
        this.precio=precio;
        this.imagen=imagen;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getTalla() {return talla;}

    public void setTalla(String talla) {
        this.talla = talla;
    }

    public int getLargo() {
        return largo;
    }

    public void setLargo(int largo) {
        this.largo = largo;
    }

    public int getAncho() {
        return ancho;
    }

    public void setAncho(int ancho) {
        this.ancho = ancho;
    }

    public int getMangas() {
        return mangas;
    }

    public void setMangas(int mangas) {
        this.mangas = mangas;
    }

    public Float getPrecio() {
        return precio;
    }

    public void setPrecio(Float precio) {
        this.precio = precio;
    }

    public String getImagen() {
        return imagen;
    }

    public void setImagen(String imagen) {
        this.imagen = imagen;
    }

    @Override
    public String toString() {
        return "" +
                "id=" + id +
                ", nombre='" + nombre + '\'' +
                ", talla=" + talla +
                ", largo=" + largo +
                ", ancho=" + ancho +
                ", mangas=" + mangas +
                ", precio=" + precio +
                ", imagen='" + imagen;
    }
}
