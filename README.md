# API Hotel Guest
## 📝 Índice

- [Sobre](#about)
- [Começando](#getting_started)
- [Uso](#usage)
- [Ferramentas usadas](#built_using)
- [Autor](#authors)


## 🧐 Sobre <a name = "about"></a>

Api Rest para cadastro de Hóspedes e Chekin.

## 🏁 Começando <a name = "getting_started"></a>

Essas instruções fornecerão uma cópia do projeto instalado e funcionando em sua máquina local para fins de desenvolvimento e teste.

### Pré requisitos

```
php ^7.2
composer
laravel
Mysql

```
Fazer o clone do projeto e entrar na pasta api_hotel_guest


```
git clone git@github.com:alex-dev2015/api_hotel_guest.git
cd api_hotel_guest
```

Executar o composer para a instalação das dependências

```
composer install

```

renomear o arquivo .env.example para .env e alterar as variáveis de ambiente 
relacionadas a conexão com o banco de dados

```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=hotel_guest
  DB_USERNAME=usuario_do_banco
  DB_PASSWORD=senha_do_banco  
```

Criar o banco de dados no mysql chamado hotel_guest ou algum outro
de sua preferência,
e sem seguida rodas as migrations para a criação das tabelas.

```
  php artisan migrate   
```

Startar o servidor

```
 php artisan serve   
```


## 🎈 Uso <a name="usage"></a>






## ⛏️ Ferramentas usadas <a name = "built_using"></a>

- [Laravel](https://laravel.com/) - Framework PHP

## ✍️ Autor <a name = "authors"></a>

- [Página Pessoal](https://alexsousa.eti.br) - Alex Sousa
