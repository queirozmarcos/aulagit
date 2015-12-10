<h2>Cadastro de Clientes - Projeto 3</h2>

Este projeto consiste em apresentar as classes e demais arquivos dentro de estrutura de diretórios nos padrões PHP-FIG. Todas as pastas possuem um arquivo index.php (Exceto a raiz /aulagit/projeto3/, estes arquivos estão vazios para evitar mostrar o conteúdo).

A estrutura dos diretórios está relacionada abaixo (/aulagit/projeto3/):

1. img - Sub-diretório com as imagens utilizadas no projeto
   1. ascend.png
   2. descen.png
   3. estrela.png
   4. livro.gif
2. scripts - Sub-diretório com os scripts do projeto
   1. IncluiCli.php - Gera o array de objeto
   2. MostraCli.php - Exibe os dados do cliente selecionado
   3. MostraGrau.php - Função PHP para mostrar o grau de imortância que vai de 1 a 5 estrelas
3. src - Source (onde ficam as Classes e Interfaces)
   1. PMRO - Vendor neme
      * Clientes
      * Interfaces
4. README.md - Leia-me
5. index.php - Mostra os clientes com possibilidade de ordenar

Arquivos constantes dentro de src/PMRO/Clientes:

* Cli_p_f.php - Sub-classe de Cliente para Pessoa Física
* Cli_p_j.php - Sub-classe de Cliente para Pessoa Jurídica
* Cliente.php - Classe-mãe Cliente

Arquivos constantes dentro de src/PMRO/Interfaces:

* EnderecoCobranca.php - Interface de Cliente Pessoa Física e Jurídica para Endereço de Cobrança
* GrauImportancia.php - Interface de Cliente Pessoa Física e Jurídica para Grau de Importância para a empresa

Observações:

1. No formulário, ao lado do "Código" há um ícone com a seta para classificar em ordem crescente ou decrescente.
2. Os scripts foram testados e melhor visualizados no navegador Firefox (navegador em que a imagem gif aparece com movimento).
3. Todos os teste foram realizados com os arquivos em servidor Linux.
