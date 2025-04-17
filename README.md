# Fila Digital - API

## Descrição do Projeto

A **Fila Digital** é uma solução inovadora desenvolvida para otimizar o gerenciamento de filas em diversos ambientes, como bancos, hospitais, restaurantes e outros estabelecimentos que necessitam de um sistema de atendimento organizado. Este projeto consiste em uma API desenvolvida em **Laravel** com banco de dados **MySQL**, que permite a criação de senhas digitais, chamadas de clientes, verificação do próximo da fila e notificações para avisar quando é a vez do usuário.

A API foi projetada para ser integrada a um aplicativo móvel ou web, proporcionando uma experiência fluida e eficiente tanto para os clientes quanto para os atendentes.

## Funcionalidades Principais

- **Geração de Senha Digital**: Os usuários podem gerar uma senha digital diretamente pelo aplicativo.
- **Chamada de Senha**: Os atendentes podem chamar a próxima senha disponível.
- **Verificação do Próximo**: Visualização da próxima senha a ser chamada.
- **Notificação de Vez**: Notificação automática ao usuário quando for sua vez de ser atendido.
- **Histórico de Atendimentos**: Registro de todas as senhas chamadas e atendidas.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP utilizado para o desenvolvimento da API.
- **MySQL**: Banco de dados relacional para armazenamento de dados.
- **Eloquent ORM**: Para mapeamento objeto-relacional e manipulação de dados.
- **API RESTful**: Arquitetura REST para comunicação entre o cliente e o servidor.

## Requisitos do Sistema

- **PHP**: Versão 7.4 ou superior.
- **Composer**: Gerenciador de dependências para PHP.
- **MySQL**: Versão 5.7 ou superior.
- **Node.js**: Opcional, para compilação de assets (se necessário).

## Instalação e Configuração

### Passo 1: Clonar o Repositório

```bash
git clone https://github.com/Leon14789/UPX-V
```

## Passo 2: Instalar Dependências

```bash
composer install
```

## Passo 3: Configurar o Ambiente

Renomeie o arquivo .env.example para .env.
Configure as variáveis de ambiente no arquivo .env,
especialmente as relacionadas ao banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

## Passo 4: Gerar Chave de Aplicação
```bash
php artisan key:generate
```

## Passo 5: Executar Migrações
```bash
php artisan migrate
```

## Passo 6: Iniciar o Servidor
```bash
php artisan serve
```

A API estará disponível em http://localhost:8000.
Endpoints da API

## Aqui estão os principais endpoints disponíveis na API:

<ul>
<li> POST /api/gerar-senha: Gera uma nova senha digital. </li>
<li> GET /api/listar-senhas Lista todas as senhas. </li>
<li> POST /api/chamar-senha Lista todas as senhas. </li>


</ul>