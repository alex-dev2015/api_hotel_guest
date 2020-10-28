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


## Métodos
Requisições para a API devem seguir os padrões:
| Método | Descrição |
|---|---|
| `GET` | Retorna informações de um ou mais registros. |
| `POST` | Utilizado para criar um novo registro. |
| `PUT` | Atualiza dados de um registro ou altera sua situação. |
| `DELETE` | Remove um registro do sistema. |

# Group Recursos


# Hóspedes [api/guests]

### Novo(create) [POST]
+ Attibutes (Multipart)
  
   + name : Nome do hóspede (string) - limite 255 caracteres
   + doc  : Doumento de identificação (string, unique) - limite de 14 caracteres
   + phone: Número de Telefone (string, required) - limite de 12 caracteres
   + additionalVehicle: Reserva de Veículo (boolean) - 0 para false e 1 para true
   
   
 + Response 201 (application/json)
 
  + Body
    {
      "message": "Hóspede inserido com sucesso!"
    }
   
### Listar Todos(Read) [GET /api/guests]


+ Response 200 (application/json)
  Todos os Hóspedes
  
  + Body
    
      {
        "id": 1,
        "name": "Alex Sousa",
        "doc": "123554879",
        "phone": "98988883663",
        "created_at": null,
        "updated_at": null
      },
      {
        "id": 4,
        "name": "Carlos Eduardo",
        "doc": "236449745",
        "phone": "98966554478",
        "created_at": "2020-10-28 13:00:59",
        "updated_at": "2020-10-28 13:00:59"
      }
      
### Listar (Read) [GET /api/guests{id}]

+ Parameters
    + id (required, number, `1`) ... Código do Hóspede


    
+ Response 200 (application/json)
  Hóspede por ID
  
  + Body
    
      {
        "id": 1,
        "name": "Alex Sousa",
        "doc": "123554879",
        "phone": "98988883663",
        "created_at": null,
        "updated_at": null
      }

      
### Busca (Read) [GET /api/searchGuest]

+ Request (application/json)

  
  + Parameters
      + name (string , `Alex Sousa`) ... Nome do Hóspede
      + doc  (string , `6547979656`) ... Documento do Hóspede
      + phone(string , `9896-3665`)  ... Telefone do Hóspede

+ Response 200 (application/json)

    + Body

    {
      "id": 9,
      "name": "Alex Sousa",
      "doc": "6547979656",
      "phone": "9896-65555",
      "created_at": "2020-10-28 13:20:07",
      "updated_at": "2020-10-28 13:20:07"
    }
    
### Atualizar (update) [PUT /api/guests/{id}]    

  + Request (application/json)
  
  + Parameters
      + id (required, number, `1`) ... Código do Hóspede
      
  + Response 200 (application/json)      
  
  + Body
    {
      "message": "Dados atualizados com sucesso!"
    }

  + Response 404 (application/json)
 Quando o registro não foi encontrado.

    + Body
      {
        "message" => "Hóspede não encontrado"
      }
      
      
### Remover (Delete) [DELETE  /api/guests/{id}]

  + Request (application/json)
  
  + Response 200 (application/json)
  
  + Body
    {
      "message" => "Hóspede deletado com sucesso!"
    }

 + Response 404 (application/json)
 Quando o registro não foi encontrado.

    + Body
      {
        "message" => "Hóspede não encontrado"
      }
    

## ⛏️ Ferramentas usadas <a name = "built_using"></a>

- [Laravel](https://laravel.com/) - Framework PHP

## ✍️ Autor <a name = "authors"></a>

- [Página Pessoal](https://alexsousa.eti.br) - Alex Sousa
