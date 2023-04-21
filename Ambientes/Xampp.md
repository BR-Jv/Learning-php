
# Xampp no linux

Um forma rápida e simples de montar um ambiente de desenvolvimento PHP é utilizando o XAMPP, faça o download no site do [apachefriends.org](https://www.apachefriends.org/pt_br/download.html)

Nele temos as ferramentas:  
<ul>
    <li>Apache</li>
    <li>PHP</li>
    <li>Mysql</li>
    <li>Perl</li>
</ul><br>

Depois de baixado o pacote do site, vá até o diretório aonde o intalador do xampp está e em seguida execute<br><br>
 
`chmod 755 xampp*.run`<br>

> chmod 755, permite a leitura e a execução desse arquivo. 

`sudo ./xampp*.run`<br>

> :memo: | O arquivo xampp está no diretório **/opt/lampp**. 

>  O chmod é um comando que altera as permissões dos arquivos. [Saiba_mais](https://www.hostgator.com.br/blog/comando-chmod-no-linux-como-utilizar-e-para-o-que-ele-serve/)

## Gerenciando o ambiente 

Inicar o xampp via CLI:<br>
`sudo /opt/lampp/lampp start`

Parando o xampp via CLI:<br>
`sudo /opt/lampp/lampp stop`

> :memo: | Caso algum erro apareça visite as páginas da comunidade apachefriends.

<br>Usando a GUI do xampp:

`cd /opt/lampp | sudo ./manager*.run `

>  após executar esses comandos uma interface gráfica do xampp irá abrir e apartir dela você consegue gerenciar os serviços.

<br>

Para mais informações acesse o [perguntas_mais_frequentes](https://www.apachefriends.org/pt_br/faq_linux.html)

## Alterando o htdocs 

> :warning: | Essa situação é pensada apenas em ambientes de desenvolvimento.

Inicialmente só o usuário root tem permissão para adicionar arquivos nessa pasta, no ambiente de desenvolvimentos vamos dar acesso total a esse pasta. 

`sudo chmod 777 /opt/lampp/htdocs`<br>

> caso exista alguma posta dentro do htdocs é uma opção usar -R do chmod, para alterar as permissões recursivamente

