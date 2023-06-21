package dao;

import java.sql.Statement;
import java.sql.PreparedStatement;//
import java.sql.Connection;//
import java.sql.DriverManager;//
import java.sql.SQLException;//
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import view.TelaCadastro;

public class FuncionarioDAO {

    Connection conn;
    Statement st;
    PreparedStatement stt;
    ResultSet rs;
    private Connection connection;

    public boolean conectar() {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/bdfunc", "root", "");
            st = conn.createStatement();
            return true;
        } catch (ClassNotFoundException | SQLException ex) {
            return false;
        }
    }

    public boolean salvar(Funcionario funcionarioX) {
        String inserir;
        inserir = "INSERT INTO tbFuncionario VALUES ('" + funcionarioX.getRegistro() + "' , '" + funcionarioX.getNome() + "', '" + "" + funcionarioX.getCargo() + "' ,"
                + funcionarioX.getSalario() + ")";
        try {
            st.execute(inserir);
            return true;
        } catch (SQLException ex) {
            return false;
        }
    }

    public void desconectar() {
        try {
            conn.close();
        } catch (SQLException ex) {

        }
    }

    public Funcionario consultar(String registro) {
        Funcionario funcionario = new Funcionario();
        try {

            stt = conn.prepareStatement("SELECT * FROM tbFuncionario WHERE registro = ?");
            stt.setString(1, registro);
            rs = stt.executeQuery();
            //verifica se a consulta encontrou o funcionario com o registro informado
            if (rs.next()) {
                funcionario.setRegistro(rs.getString("registro"));
                funcionario.setNome(rs.getString("nome"));
                funcionario.setCargo(rs.getString("cargo"));
                funcionario.setSalario(rs.getDouble("salario"));
                return funcionario;
            } else {
                return null;
            }
        } catch (SQLException ex) {
            return null;
        }
    }
    
    public boolean editar(Funcionario funcionarioX) {
        String inserir;
        inserir = "UPDATE tbFuncionario set nome = '" + funcionarioX.getNome() + "', cargo = '" + funcionarioX.getCargo() + "', salario = " 
                + funcionarioX.getSalario() + " WHERE registro = " + funcionarioX.getRegistro();
        try {
            st.execute(inserir);
            System.out.println(funcionarioX.getRegistro());
            return true;
            
        } catch (SQLException ex) {
            System.out.println(ex);
            return false;
            
        }
    }
    
    public boolean deletar(Funcionario funcionarioX) {
        String delet;
        delet = "DELETE FROM `tbfuncionario` WHERE registro = " + funcionarioX.getRegistro();
        try {
            st.execute(delet);
            return true;
        } catch (SQLException ex) {
            System.out.println(ex);
            return false;
        }
        
    }
}