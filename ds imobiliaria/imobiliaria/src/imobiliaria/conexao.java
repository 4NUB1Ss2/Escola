
package imobiliaria;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.Statement;
import java.sql.DriverManager;
import java.sql.SQLException;


public class conexao {
    
    public static Connection con = null;
    public Statement st = null;
    
    public static void conectar() throws ClassNotFoundException, SQLException
    {
        System.out.println("conectando ao BANCO DE DADOS");
        Class.forName("com.mysql.jdbc.Driver");
        con = (Connection) DriverManager.getConnection("jdbc:mysql://localhost/imobiliaria", "root", "root");
        System.out.println("conectado");
    }
    
}
