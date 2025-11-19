<?php
class Database {
    // Preencha com os dados do seu TiDB Cloud
    private $host = "gateway01.ap-northeast-1.prod.aws.tidbcloud.com"; // Exemplo
    private $port = "4000"; // Porta padrão do TiDB
    private $db_name = "test"; // Nome do banco
    private $username = "3ULq4Y3VSE2g7Li.root";
    private $password = "kQCeloE8dDlh0mZV";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            // Opções SSL são recomendadas para TiDB Cloud
            $options = [
                PDO::MYSQL_ATTR_SSL_CA => "/path/to/ca-bundle.pem", // Opcional dependendo da config
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            $dsn = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name;
            
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
            
        } catch(PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>