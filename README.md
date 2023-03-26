
# Montando um ambiente PHP

Um forma rápida e simples de setar um ambiente de desenvolvimento PHP é utilizando o XAMPP, faça o download no site do [apachefriends.org](https://www.apachefriends.org/pt_br/download.html)

Nele temos as ferramentas:  
<ul>
    <li>Apache</li>
    <li>PHP</li>
    <li>Mysql</li>
    <li>Perl</li>
</ul><br>

Depois de baixado o pacote do site execute os seguintes comandos:<br><br>
*Passo 1*:<br> 
`chmod 755 xampp*.run`
 >  O chmod é um comando que altera as permissões dos arquivos. [Saiba_mais](https://www.hostgator.com.br/blog/comando-chmod-no-linux-como-utilizar-e-para-o-que-ele-serve/)

*Passo 2*:<br> 
`sudo ./xampp*.run`<br>

> :memo: | Xampp está instalado no diretório **/opt/lampp**. 

> :memo: | Outra forma de montar um ambiente é usando docker e docker-compose.


## Iniciando e parando o ambiente 

Para inicar o xampp via CLI usamos o comando:<br>
`sudo /opt/lampp/lampp start`

O comando para parar segue a mesma lógica:<br>
`sudo /opt/lampp/lampp stop`

> :memo: | Caso algum erro apareça visite as páginas da comunidade apachefriends.

<br>Iniciando o xampp via GUI:
```
    cd /opt/lampp
    sudo ./manager*.run
```
>  após executar esses comandos uma interface gráfica do xampp irá abrir e apartir dela você consegue gerenciar os serviços.

<br>Para mais informações acesse o [perguntas_mais_frequentes](https://www.apachefriends.org/pt_br/faq_linux.html).

## Alterando o htdocs 

> :warning: | Essa situação é pensada apenas em ambientes de desenvolvimento.

De forma resumida, é mais simples dar acesso total ao htdocs, com isso você consegue manipular livremente os arquivos dentro da pasta htdocs, por padrão só o usuário root tem essa permissão. 

Dentro da pasta htdocs acesse ***propriedades > permissões***, chegando na aba de permissões altera para que todos possam ler/escrever e excluir/adicionar.
 

