# php_financeiro
Sistema de Gerenciamento Financeiro em PHP

Requisitos: 
Servidor Linux com cPanel (cPanel.net), Apache, Php 5.3+, Apache, Banco MySQL, phpMyAdmin
----
Acesse o cPanel - o gerenciador de Banco de dados MySQL, crie o Banco de Dados MySQL, o Usuário de acesso ao 
banco + senha, depois atribua todas as permissões do usuário ao Banco. 
Abra o phpMyAdmin, selecione o banco que criou e importe a base de dados (BANCO-DE-DADOS.sql) que está 
dentro da pasta /INSTALACAO 
Arquivo de conexão com o banco: 
Na pasta /Script, acesse: 
-------
/includes/db.php 
Edite as informações do banco de dados, usuário e senha para conexão com o banco entre as linhas 5 a 8 depois 
salve e feche. 
$dbuser="USUARIOCPANEL_USUARIOBANCO";
$dbpassword="SENHA";
$dbname="USUARIOCPANEL_BANCO";
$dbhost="localhost";
-------
Agora compacte o conteúdo da pasta /Script em um arquivo .zip e faça o upload deste arquivo zipado pelo 
Gerenciador de Arquivos do cPanel e assim que finalizar o upload descompacte o .zip lá pelo gerenciador mesmo. 
E pronto! 
Acesso: 
www.seusite.com/PASTA 
Agora é só criar uma conta para gerir as suas finanças
