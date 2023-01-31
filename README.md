
## Setup

#### After cloning this repository, need a download php servers

### Options Servers PHP
- XAMPP.
- LAMP.
- LEMP.
- MAMP.
- WAMP.
- AMPSS.
- EasyPHP.

<p>used: WampServer and PhpMyAdmin</p>

<hr>

#### Added this repository into folder wamp > www 

##### Folder Example 

```bash
    C:\Program Files\wamp\www
 ```

#### Querys

##### Create DataBase
```bash
CREATE DATABASE student-manager; 
```

##### Create Table
```bash
    CREATE TABLE aluno (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    senha VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    celular VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    curso VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    mensalidade DECIMAL(10,2) DEFAULT NULL,
    observacao TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    situacao ENUM('Ativo', 'Inativo', 'Cancelada') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL );
 ```

##### URL Example Access
```bash
    http://localhost/php-site/src/php/views/home/home.php
 ```
 
### Stacks Front-end 

- [x] CSS3
- [x] HTML5
- [x] Bootstrap 
- [x] JavaScript
- [x] Regex Forms
- [x] Responsive Site

### Stacks Back-end 
- [x] PHP
- [x] CRUD 
- [x] MySql with PDO
- [x] Validations fields

<p>
Just to test the fluidity of the site. Rename the file to .html and refactor style and script imports</p>
