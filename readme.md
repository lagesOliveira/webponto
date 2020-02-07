# WebPonto

## Resumo

Desafio Técnico para vaga de desenvolvedor na Solides

Versão de demonstração disponível aqui http://julio.lagesoliveira.com.br/webponto/

**Acesso Admin**
- Login: *julio@lagesoliveira.com.br*
- Senha: *demo*


## Table of contents

- [Proposta](#proposta)
- [Instalação](#Instalação)
- [Próximos passos](#Próximos-passos)



# Poposta

Criar um WebApp* para estagiários apontarem hora de trabalho. Este Webapp deve conter:

- Tela de login
- Tela de cadastro
- Controle de sessão via login
- Tela para apontar hora (chegada na empresa, hora de almoço, saída da empresa)
- Tela de histórico de apontamentos do usuário
- Design responsivo que utilize JQuery e Bootstrap
- Arquivo de DUMP do MySQL, para recriar o banco de dados em outro ambiente
- Um readme.txt explicando como fazer funcionar o seu sistema

*Webapp - Sistema web, que roda em um navegador, com design responsivo voltado para celulares.

Todo o desafio deve ser desenvolvido em PHP e MySQL (você terá que criar o banco de dados e as tabelas). Não se preocupe em fazer um super sistema lindo. O que será avaliado é como você estrutura seu código, seus conhecimentos de algoritmo e de consultas sql. Os requisitos do sistema estão escrito de maneira bem rasa de propósito. É importante para gente ver como é sua linha de raciocínio e como você transforma informação em código ;)


# Instalação

 ### 1. Clonar o repositório


```shell
$ git clone https://github.com/lagesOliveira/webponto.git
```

### 2. Enviar arquivos para seu servidor
### 3. Alterar arquivos de configuração

- 3.1 Configuração de URL padrão
```
├── application
│   ├── config
│   │   └── config.php 

26 $config['base_url'] = 'http://CAMINHO-DO-SEU-APP';
```
- 3.2 Configuração de Banco de dados
```
├── application
│   ├── config
│   │   └── database.php

78 'hostname' => 'endereco-do-banco',
79 'username' => 'usuario-do-banco',
80 'password' => 'senha-do-banco',
81 'database' => 'nome-do-banco',
```
- 3.3 Configuração do datatable
```
├── assets
│   ├── js
│   │   └── datatables.js

1 URL_BASE = "http://CAMINHO-DO-SEU-APP/";

```

# Próximos passos

Sugestões são bem vindas :smile:

- Calcular tempo de trabalho dos usuários
	- Diário
	- Semanal
	- Mensal

# Thanks

[Template SB 2 Admin](https://github.com/BlackrockDigital/startbootstrap-sb-admin-2)


That's it!

# Copyright and license

Code and documentation copyright 2020 the authors. Code released under the [MIT License](https://reponame/blob/master/LICENSE).

Enjoy :metal:
