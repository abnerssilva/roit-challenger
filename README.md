# Prova Técnica ROITBANK - Estágio Full Stack


[Clique aqui para testar a aplicação](http://roitchallenger.abnersouza.dev.br/candidatos/index)

Aplicação desevolvida como parte do processo seletivo para o Programa de Estágio da ROITBANK.


## Considerações

* Aplicação desenvolvida em PHP com o framework MVC CakePHP;
* Funcionalidades:
   * Botão Cadastrar funcionando para surgimento da modal;
   * Botões Salvar, cancelar e fechar da modal Adicionar funcionando;
   * Botões de Ação (Edit e Delete) na index funcionando para surgimento das modais;
   * Botões Salvar, cancelar e fechar da modal Editar funcionando;
   * Botões Excluir, cancelar e fechar da modal Excluir funcionando (aplicando soft delete);
   * Implantado Delete Lógico (soft delete), porém, a função Delete Físico (hard delete) está pronta e comentada na controller;
   * Lista de Candidatos dinâmica na index funcionando;
   * Campo de Busca por nome da index funcionando (pressionando enter ou clicando na lupa);
   * Consumo da API Viacep funcionando (na modal de Adicionar e na de Editar);
   * Implantada Paginação. Limite de Registros default: 5;
   * Paginação pode ser ordenada por ID (padrão), Nome ou Idade;
   * Select de quantidade de registros colocada no front, porém, sem funcionaliadde.
   


## Códigos construídos

1. Controller
   1. Diretório app/Controller/CandidatosController.php
2. Model
   1. Diretório app/Model/Candidato.php
3. SQL
   1. Diretório app/sql_register/candidatos.sql
4. View
   1. Diretório app/View/Candidatos/index.ctp
   2. Diretório app/View/Candidatos/edit.ctp
   3. Diretório app/View/Candidatos/delete.ctp
   5. Diretório app/View/Elements/erro.ctp
   6. Diretório app/View/Elements/info.ctp
   7. Diretório app/View/Elements/success.ctp
   8. Diretório app/View/Layouts/default.ctp
5. Style
   1. Diretório app/webroot/css/style.css




