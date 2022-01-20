package com.example.tuarmario.Repositories;



import android.os.StrictMode;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;

public class DBConnection {
    public static Connection connectToDB() throws ClassNotFoundException, SQLException{
        Connection connection=null;

        try {
            StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
            StrictMode.setThreadPolicy(policy);
            Class.forName("com.mysql.jdbc.Driver").newInstance();
        } catch (Exception e) {
            e.printStackTrace();
        }

        connection = DriverManager.getConnection("jdbc:mysql://192.168.50.95:3306/tuarmario", "corredor", "123456");
        return connection;
    }

    public static void closeConnection(Connection connection) throws SQLException {
        connection.close();
    }
}
