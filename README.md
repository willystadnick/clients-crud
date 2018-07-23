# Teste para Desenvolvedor Fullstack

## Tarefa
Crie, conforme seus conhecimentos, um pequeno sistema de cadastro de clientes, com uma tela de visualização e exclusão de registros e formulário(s) para inserção e edição dos cadastros já inseridos. Essas informações devem ser persistidos em um banco de dados. O formulário deverá solicitar, pelo menos, o nome, e-mail, telefone e uma foto, que deverá ser enviada para o servidor HTTP (LAMP, XAMP, MAMP...) instalado na sua máquina, essa imagem deve ser apresentada ao lado do nome do cliente na lista de visualização, em miniatura.

- Use a linguagem que você se sente mais confortável, preferimos o PHP C# ou Java.
- Fique a vontade para usar qualquer framework que você possua conhecimento, como Laravel, Zend Framework, Symphony, SpringMVC...

## Entrega
Envie o sistema para o Github juntamente com o modelo relacional e posteriormente envie um e-mail com o link para fernando@essentia.com.br e nina@essentia.com.br.

-----

## Instalação

1. git clone git@github.com:willystadnick/essentia-test.git
2. cd essentia-test
3. composer install
4. cp .env.example .env
5. vi .env (DB_)
6. mysql -u(user) \[-p\] -e "create database essentia_test;"
7. php artisan migrate
8. php artisan key:generate
9. php artisan serve

## Dúvidas e comentários

willy.stadnick@gmail.com
