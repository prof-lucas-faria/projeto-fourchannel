# Comandos Git

Comandos que iremos utilizar
```

//Para baixar o projetos em maquinas distintas usamos o comando: "git clone <link do repositorio>"
//Ficando algo asimm

git clone https://github.com/prof-lucas-faria/projeto-fourchannel

// Com o repositório baixado, acesse a pasta do mesmo
// antes de qualquer alteração, utilize o comando "git pull"
// Para que possa pegar todas as modificações feitas por outros integrantes do grupo

git pull

// Quando vocês terminarem de editar seus arquivos adicione os seguites comandos

git add -A // para adicionar tudo que vocêss modificaram
//ou
git add . //vai dar na mesma do comando acima 

//Depois de adicionado seus arquivos, você pode quais arquivos foram editado com o comando

git status

//os nome dos arquivos da cor verdes são os que foram adicionado

// Agora antes de enviar suas modificações você antes precisa falar o que vc modificou
// então utilizamos o comando "git commit" ficando dessa forma:

git commit -m "sua mensagem aqui"

// e para finalizar, utilize o comando git push

git push

//isso enviará todas suas modificações para essse repositório
:)
```
fonte("https://git-scm.com/docs")
# Como configurar CodeIgniter na minha maquina?

acesse a pasta ``` aplication/config/config.php```

```php
#mude $config['base_url'] = ''; para
$config['base_url'] = 'http://localhost/projeto-fourchannel/';#ou o diretorio de onde ele esteja
```

# Estrutura de pastas

A estrutura de diretórios do CodeIgniter é dividida em 3 pastas −

    -Application
    -System
    -User_guide

## -Application
    Como o nome indica, a pasta Application contém todo o código do sistema que você está criando. Esta é a pasta onde você irá desenvolver seu projeto. A pasta Application contém várias outras pastas, que são explicadas abaixo 

## Cache
     − Esta pasta contém todas as páginas em cache do seu sistema. Essas páginas armazenadas em cache aumentam a velocidade geral de acesso às páginas.

## Config
    − Esta pasta contém vários arquivos para configurar o sistema. Com a ajuda do arquivo config.php, o usuário pode configurar o sistema. Usando o arquivo database.php, o usuário pode configurar o banco de dados do sistema.

## Controllers
    − Esta pasta contém os controladores do seu sistema. É a parte básica do seu sistema.

## Core 
    − Esta pasta irá conter a classe base do seu sistema.

## Helpers 
    − Nesta pasta, você pode colocar a classe auxiliar do seu sistema.

## Hooks 
    − Os arquivos nesta pasta fornecem um meio de explorar e modificar o funcionamento interno da estrutura sem invadir os arquivos principais.

## Language 
    − Esta pasta contém arquivos relacionados ao idioma.

## Libraries 
    − Esta pasta contém arquivos das bibliotecas desenvolvidas para sua aplicação.

## Logs 
    − Esta pasta contém arquivos relacionados ao log do sistema.

## Models 
    − O login do banco de dados será colocado nessa pasta.

## Third_party 
    − Nesta pasta, você pode colocar qualquer plug-in, que será usado para o seu aplicativo.

## Views 
    − Os arquivos HTML do seu sistema serão colocados nessa pasta.


