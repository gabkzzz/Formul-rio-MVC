# 📘 Agenda de Contatos MVC (TiDB)

# 📝 Descrição
Este projeto é uma aplicação web simples desenvolvida em PHP seguindo o padrão de arquitetura MVC (Model-View-Controller).

O objetivo da aplicação é gerenciar uma Agenda de Contatos, permitindo realizar operações de CRUD (Criar, Ler, Atualizar e Deletar). O sistema está conectado a um banco de dados na nuvem utilizando o TiDB Cloud (compatível com MySQL).

# Estrutura do Projeto
O projeto está organizado nas seguintes pastas:
- `config/`: Configuração de conexão com o banco de dados.
- `controllers/`: Lógica de controle e fluxo de dados.
- `models/`: Lógica de acesso aos dados (SQL).
- `views/`: Interface do usuário (HTML/CSS).
- `index.php`: Arquivo principal e roteador da aplicação.

---

# 👥 Membros da Equipe
* **[Gabriel Moreira Silva]**
* **[Guilherme Ferreira]**
* **[Eduardo Rossi]** (se houver)

---

# 🚀 Como Configurar e Executar

# Pré-requisitos
- **PHP 7.4** ou superior instalado.
- Extensão **PDO MySQL** habilitada no PHP.
- Uma conta ativa no **TiDB Cloud** (ou um banco MySQL local).

### Passo a Passo

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
   cd seu-repositorio


2.  **Configure o Banco de Dados:**

      - Abra o arquivo `config/database.php`.
      - Insira as credenciais do seu banco TiDB (Host, User, Password, Port e DB Name).

3.  **Execute a aplicação:**
    Você pode usar o servidor embutido do PHP. No terminal, dentro da pasta do projeto, execute:

    ```bash
    php -S localhost:8080
    ```

4.  **Acesse no navegador:**
    Abra o link `http://localhost:8080` no seu navegador.

-----

## 🗄️ Código SQL (Database)

Para o funcionamento correto do sistema, execute o script SQL abaixo no console do seu **TiDB Cloud** para criar a tabela necessária:

```sql
CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(20)
);
```

-----

# 🛠 Tecnologias Utilizadas

  - PHP (Backend)
  - HTML5 / CSS3 (Frontend)
  - TiDB Cloud (Database)
