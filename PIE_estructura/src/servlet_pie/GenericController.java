package servlet_pie;

import java.io.IOException;
import java.time.LocalDate;
import java.util.Calendar;
import java.util.Date;
import java.util.Enumeration;
import java.util.Map;
import java.util.Set;

import javax.servlet.FilterChain;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import com.fasterxml.jackson.databind.*;
import com.google.gson.Gson;
import com.google.gson.GsonBuilder;
import domains.User;

/**
 * Servlet implementation that takes the request from the client
 */
@WebServlet(name = "ServletMio", description = "This is my first servlet", urlPatterns = "/info/*")
public class GenericController extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public GenericController() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * Method that takes get requests
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		System.out.println("doGet");
		//Example of a controller method
		servletGETResponseJSON(response);
	}

	/**
	 * Method that takes post requests
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		System.out.println("doPost");
		//Example of a controller method
		servletPOSTResponseJSON(request, response);
	}
	
	
	/**
	 * Example method to GET a request from the cliente
	 * and gave a json response.
	 * Change for your methods
	 * @param response
	 */
	private void servletGETResponseJSON(HttpServletResponse response){
		try {
	    	String json = "{\"name\":\"holita\"}";
		    response.setContentType("application/json");
		    response.setCharacterEncoding("UTF-8");
			response.getWriter().write(json);
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	/**
	 * Example method to do a POST request from the client
	 * and gave a json response.
	 * Change for your methods
	 * @param response
	 */
	private void servletPOSTResponseJSON(HttpServletRequest request, HttpServletResponse response){
		try {
			System.out.println("servletPOSTResponseJSON");
			//Coger datos de la peticion
			
			Enumeration<String> parametros = request.getParameterNames();
			//Datos en formato JSON
			String data = parametros.nextElement();
			//Parsear a objeto org.json
			GsonBuilder builder = new GsonBuilder();
		    Gson gson = builder.create();
			User user = gson.fromJson(data,User.class);
			System.out.println(user.toString());
			
			//Comprobaciones
					        
			//Preparacion de la respuesta (org.json para crear json a partir de objeto)
			String json = "{\"name\":\"holita\"}";
			response.setContentType("application/json");
		    response.setCharacterEncoding("UTF-8");
			response.getWriter().write(json);
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	

}
