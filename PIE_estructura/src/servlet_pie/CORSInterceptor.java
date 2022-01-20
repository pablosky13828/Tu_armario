package servlet_pie;

import java.io.IOException;

import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebFilter;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebFilter(asyncSupported = true, urlPatterns = { "/*" })
public class CORSInterceptor implements Filter {

	private ServletContext context;
        
	/**
	 * Init filter method
	 */
    @Override
	public void init(FilterConfig fConfig) throws ServletException {
    	System.out.println("init filter");
		this.context = fConfig.getServletContext();
		
	}

    /**
     * Filter method
     */
	@Override
	public void doFilter(ServletRequest servletRequest, ServletResponse servletResponse, FilterChain filterChain)
			throws IOException, ServletException {
		/*Filter to permit access*/
		HttpServletRequest request = (HttpServletRequest) servletRequest;

        String requestOrigin = request.getHeader("Origin");
        // Authorize the origin, all headers, and all methods
        ((HttpServletResponse) servletResponse).addHeader("Access-Control-Allow-Origin", requestOrigin);
        ((HttpServletResponse) servletResponse).addHeader("Access-Control-Allow-Headers", "*");
        ((HttpServletResponse) servletResponse).addHeader("Access-Control-Allow-Methods",
                "GET, OPTIONS, HEAD, PUT, POST, DELETE");

        HttpServletResponse resp = (HttpServletResponse) servletResponse;

        // CORS handshake (pre-flight request)
        if (request.getMethod().equals("OPTIONS")) {
            resp.setStatus(HttpServletResponse.SC_ACCEPTED);
            return;
        }
        // pass the request along the filter chain
        filterChain.doFilter(request, servletResponse);
		
	}

	
	/**
	 * Destroy method, not neccessary implementation
	 */
	@Override
	public void destroy() {
	}
}
