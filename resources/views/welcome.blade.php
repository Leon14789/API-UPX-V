<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fila Digital - API Documentation</title>
    <style>
        :root {
            --primary-color: #4a6fa5;
            --secondary-color: #166088;
            --accent-color: #4fc3f7;
            --background-color: #f8f9fa;
            --text-color: #333;
            --light-gray: #e9ecef;
            --dark-gray: #6c757d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        
        header p {
            margin: 0.5rem 0 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        section {
            background-color: white;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        h2 {
            color: var(--secondary-color);
            margin-top: 0;
            border-bottom: 2px solid var(--light-gray);
            padding-bottom: 0.5rem;
        }
        
        h3 {
            color: var(--secondary-color);
            margin-top: 1.5rem;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .feature-card {
            background-color: var(--light-gray);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
        }
        
        .tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-top: 1rem;
        }
        
        .badge {
            background-color: var(--secondary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        .installation-steps {
            counter-reset: step-counter;
        }
        
        .step {
            position: relative;
            padding-left: 3rem;
            margin-bottom: 1.5rem;
        }
        
        .step:before {
            counter-increment: step-counter;
            content: counter(step-counter);
            position: absolute;
            left: 0;
            top: 0;
            background-color: var(--accent-color);
            color: white;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        code {
            background-color: var(--light-gray);
            padding: 0.2rem 0.4rem;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 0.9rem;
        }
        
        pre {
            background-color: #2d2d2d;
            color: #f8f8f2;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
            margin: 1rem 0;
        }
        
        .endpoints {
            margin-top: 1.5rem;
        }
        
        .endpoint {
            background-color: var(--light-gray);
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .endpoint-method {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            font-weight: bold;
            margin-right: 1rem;
        }
        
        .post { background-color: #49cc90; color: white; }
        .get { background-color: #61affe; color: white; }
        
        footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1rem;
            color: var(--dark-gray);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Fila Digital - API</h1>
            <p>Solução inovadora para gerenciamento de filas em diversos ambientes</p>
        </div>
    </header>
    
    <div class="container">
        <section id="description">
            <h2>Descrição do Projeto</h2>
            <p>A <strong>Fila Digital</strong> é uma solução inovadora desenvolvida para otimizar o gerenciamento de filas em diversos ambientes, como bancos, hospitais, restaurantes e outros estabelecimentos que necessitam de um sistema de atendimento organizado.</p>
            <p>Este projeto consiste em uma API desenvolvida em <strong>Laravel</strong> com banco de dados <strong>MySQL</strong>, que permite a criação de senhas digitais, chamadas de clientes, verificação do próximo da fila e notificações para avisar quando é a vez do usuário.</p>
            <p>A API foi projetada para ser integrada a um aplicativo móvel ou web, proporcionando uma experiência fluida e eficiente tanto para os clientes quanto para os atendentes.</p>
        </section>
        
        <section id="features">
            <h2>Funcionalidades Principais</h2>
            <div class="features">
                <div class="feature-card">
                    <h3>Geração de Senha Digital</h3>
                    <p>Os usuários podem gerar uma senha digital diretamente pelo aplicativo.</p>
                </div>
                <div class="feature-card">
                    <h3>Chamada de Senha</h3>
                    <p>Os atendentes podem chamar a próxima senha disponível.</p>
                </div>
                <div class="feature-card">
                    <h3>Verificação do Próximo</h3>
                    <p>Visualização da próxima senha a ser chamada.</p>
                </div>
                <div class="feature-card">
                    <h3>Notificação de Vez</h3>
                    <p>Notificação automática ao usuário quando for sua vez de ser atendido.</p>
                </div>
                <div class="feature-card">
                    <h3>Histórico de Atendimentos</h3>
                    <p>Registro de todas as senhas chamadas e atendidas.</p>
                </div>
            </div>
        </section>
        
        <section id="technologies">
            <h2>Tecnologias Utilizadas</h2>
            <div class="tech-badges">
                <span class="badge">Laravel</span>
                <span class="badge">MySQL</span>
                <span class="badge">Eloquent ORM</span>
                <span class="badge">API RESTful</span>
            </div>
        </section>
        
        <section id="requirements">
            <h2>Requisitos do Sistema</h2>
            <ul>
                <li><strong>PHP</strong>: Versão 7.4 ou superior.</li>
                <li><strong>Composer</strong>: Gerenciador de dependências para PHP.</li>
                <li><strong>MySQL</strong>: Versão 5.7 ou superior.</li>
                <li><strong>Node.js</strong>: Opcional, para compilação de assets (se necessário).</li>
            </ul>
        </section>
        
        
        <footer>
            <p>Documentação da API Fila Digital &copy; 2025</p>
        </footer>
    </div>
</body>
</html>