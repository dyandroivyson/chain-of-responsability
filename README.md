# Chain of Responsability

O **Chain of Responsibility** é um padrão de projeto comportamental que permite que você passe pedidos por uma corrente de handlers. Ao receber um pedido, cada handler decide se processa o pedido ou o passa adiante para o próximo handler na corrente.

## Analogia com o mundo real
Imagine que você esteja desenvolvendo um sistema onde cada usuário realizará um cadastro obrigatório indicando sua idade e, posteriormente, eles receberão uma permissão de acesso. Mesmo que dois usuários tenham a mesma permissão, mas o maior de idade receberá privilégios que o de menor não terá. Cada verificação que existirá entre a idade e a permissão de acesso é uma corrente de responsabilidades.

## Aplicação
Utilize o padrão **Chain of Responsibility** quando é esperado que seu programa processe diferentes tipos de pedidos em várias maneiras, mas os exatos tipos de pedidos e suas sequências são desconhecidos de antemão.

Utilize o padrão quando é essencial executar diversos handlers em uma ordem específica.

Utilize o padrão quando o conjunto de handlers e suas encomendas devem mudar no momento de execução.

## Implementação
Em nosso algoritmo, dividimos o problema na pasta *original* e a solução na pasta *refactored*.
Alteramos o arquivo index removendo todos os *if* alinhados e em seu lugar instanciamos um *Middleware* indicando a primeira verificação a ser realizada e após as demais, cada qual separada facilitando assim a leitura e manutenção do código posteriormente.

## Fonte
- <a href="https://refactoring.guru/design-patterns/chain-of-responsibility" target="_blank">Refactoring Guru</a>
