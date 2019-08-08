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
