package classes;

import javax.swing.JOptionPane;

public class Banco {

    public int NumConta;
    protected String tipo;
    private String dono;
    private float saldo;
    private float carteira;
    private boolean status;

    public void construtor() {
        this.saldo = 0;
        this.status = false;
    }

    public int getNumConta() {
        return NumConta;
    }

    public void setNumConta(int NumConta) {
        this.NumConta = NumConta;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getDono() {
        return dono;
    }

    public void setDono(String dono) {
        this.dono = dono;
    }

    public float getSaldo() {
        return saldo;
    }

    public void setSaldo(float saldo) {
        this.saldo = saldo;
    }

    public float getCarteira() {
        return this.carteira;
    }

    public void setCarteira(float carteira) {
        this.carteira = carteira;
    }

    public boolean isStatus() {
        return status;
    }

    public void setStatus(boolean status) {
        this.status = status;
    }

    public void abrirConta(String tipo, String nome) {
        if (tipo.equals("cc") || tipo.equals("cp")) {
            setTipo(tipo);
        } else {
            JOptionPane.showMessageDialog(null, "O tipo informado pode ser apenas cc ou cp!!");
        }
        if (this.tipo.equals("cc")) {
            setSaldo(50f);
            setDono(nome);
            setNumConta(1);
            setStatus(true);
        } else if (this.tipo.equals("cp")) {
            setSaldo(150f);
            setDono(nome);
            setNumConta(1);
            setStatus(true);
        }

    }

    public void fecharConta() {
        if (saldo >= 1) {
            JOptionPane.showMessageDialog(null, "Você não pode fechar uma conta" + "\n"
                    + " com dinheiro no saldo, saque ele antes");
        } else if (saldo < 0) {
            JOptionPane.showMessageDialog(null, "Você não pode fechar uma conta" + "\n"
                    + " devendo dinheiro, pague seus debitos antes!");
        } else {
            JOptionPane.showMessageDialog(null, "Sua conta foi fechada");
            setStatus(false);
        }
    }

    public void depositar() {
        float dep = Float.parseFloat(JOptionPane.showInputDialog("Informe o valor que você quer depositar"));
        if (status == false) {
            JOptionPane.showMessageDialog(null, "Crie uma conta antes para depositar!");
        } else {
            setSaldo(getSaldo() + dep);
        }
    }

    public void pagarMensal() {
        if (tipo.equals("cc")) {
            setSaldo(getSaldo() - 12f);
        } else if (tipo.equals("cp")) {
            setSaldo(getSaldo() - 20f);
        }
    }

    public void sacar() {

        float qt = Float.parseFloat(JOptionPane.showInputDialog("Informe o valor que você quer sacar"));
        if (status == false) {
            JOptionPane.showMessageDialog(null, "Crie uma conta antes para poder sacar!");
        } else if (this.saldo < 0) {
            JOptionPane.showMessageDialog(null, "Você não tem dinheiro na sua conta para ser sacado");
        } else if (qt > this.saldo) {
            JOptionPane.showMessageDialog(null, "Saldo Insuficiente");
        } else {
            setSaldo(getSaldo() - qt);
            setCarteira(getCarteira() + qt);
            JOptionPane.showMessageDialog(null, "Agora você tem " + "R$" + this.carteira + " na sua carteira");
        }
    }

}
