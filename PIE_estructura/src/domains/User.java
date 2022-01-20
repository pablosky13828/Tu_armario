package domains;

/**
 * Example class. Reflects a table in the database.
 * Create one class for each table
 * @author LENOVO
 *
 */
public class User {
	
	private String name;
	private String lastName;
	private String dni;
	private int age;
	
	public User() {
	}
	
	public User(String name, String lastName, String dni, int age) {
		this.name = name;
		this.lastName = lastName;
		this.dni = dni;
		this.age = age;
	}
	
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getLastName() {
		return lastName;
	}
	public void setLastName(String lastName) {
		this.lastName = lastName;
	}
	public String getDni() {
		return dni;
	}
	public void setDni(String dni) {
		this.dni = dni;
	}
	public int getAge() {
		return age;
	}
	public void setAge(int age) {
		this.age = age;
	}
	
	public String toString(){
		return "nombre: "+name+",apellidos: "+lastName
				+",dni: "+dni+",edad: "+age;
	}

}
