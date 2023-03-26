
# Setando um ambiente PHP

Um forma rápida e simples de setar um ambiente de desenvolvimento PHP é utilizando o XAMPP, faça o download no site do [apachefriends.org](https://www.apachefriends.org/pt_br/download.html)

Nele temos as ferramentas:  
    - Apache
    - PHP
    - Mysql
    - Perl
Depois de baixado o pacote do site execute os seguintes comandos:

&nbsp;Passo 1: 
&nbsp;&nbsp;`chmod 755 xampp*.run`
&nbsp;&nbsp; > O chmod é um comando que altera as permissões dos arquivos. [pesquisar](https://www.hostgator.com.br/blog/comando-chmod-no-linux-como-utilizar-e-para-o-que-ele-serve/) 

&nbsp;Passo 2: 
&nbsp;&nbsp;`sudo ./xampp*.run`

> :memo: | Xampp está instalado no diretório **/opt/lampp**.

## Iniciando e parando o ambiente 

Para inicar o xampp via CLI usamos o comando:
&nbsp;`sudo /opt/lampp/lampp start`

O comando para parar segue a mesma lógica
&nbsp;`sudo /opt/lampp/lampp stop`

> :memo: | Caso algum erro apareça visite as páginas da comunidade apachefriends.

Iniciando o xampp via GUI:
```
    cd /opt/lampp
    sudo ./manager*.run
```
&nbsp; > após executar esses comandos uma interface gráfica do xampp irá abrir e apartir dela você consegue gerenciar os serviços.

Para mais informações acesse o [perguntas_mais_frequentes](https://www.apachefriends.org/pt_br/faq_linux.html).

## Alterando o htdocs 

> :warning: | Essa situação é pensado apenas no ambiente de desenvolvimento.

De forma resumida é mais simples dar acesso total ao htdocs, com isso você consegue criar, excluir, e etc os arquivos dentro dessa pasta, que por padrão só quem pode mecher é o root. 

podemos dar acesso total acessando a pasta pelo caminho */opt/lampp/htdocs* acesse as propriedades e depois permissões, em seguida, altera as permissões para que todos possam acessar livremente.

