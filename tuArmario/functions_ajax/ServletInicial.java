package conexion;

import java.io.IOException;
import java.util.Enumeration;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

import domains.Persona;

/**
 * Class that manages get and post requests
 * @author Ester Gonzalez, Antonio Mata
 * @version 1.0
 */
@WebServlet("/ServletInicial/*")
public class ServletInicial extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ServletInicial() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		System.out.println("doGet");
		
		String json = "{\"name\":\"holita\"}";
	    response.setContentType("application/json");
	    response.setCharacterEncoding("UTF-8");
		response.getWriter().write(json);
	}

	/**
	 * Method which takes json data from a request and gave a response
	 * in json
	 * @param request
	 * @param response
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		System.out.println("doPost");
		
		//Coger datos de la peticion
		Enumeration<String> parametros = request.getParameterNames();
		//Datos en formato JSON
		String data = parametros.nextElement();
		//Parsear de json a objeto
		GsonBuilder builder = new GsonBuilder();
	    Gson gson = builder.create();
	    //Transformar de String en json a objeto (equivalente a JSON.parse)
		Persona p = gson.fromJson(data,Persona.class);
		System.out.println(p.toString());
	
		//Comprobaciones y/o logica
		
		//Preparacion de la respuesta (parsear de objeto a json)
    	String json = "{\"name\":\"holita\"}";
	    response.setContentType("application/json");
	    response.setCharacterEncoding("UTF-8");
		response.getWriter().write(json);
	}

}
