* A CONFUSÃO DA BAIXA DE ESTOQUE

Você trabalha como programador em um sistema ERP,
desenvolvido em PHP 7+, que funciona através de qualquer
navegador web, sem a necessidade de instalações de versões (como
a maioria dos ERPs em funcionamento no mercado). Esse sistema
é de uma empresa que vende aparelhos eletrônicos.
Ela vende muitos produtos diariamente, e necessita que seu
controle de estoque esteja sempre atualizado e alinhado com o
estoque físico disponível. Existe uma pessoa responsável por fazer
a baixa de cada item no estoque de forma manual, por meio de
uma tela do sistema. Cada vez que um estoque chega a zero, uma
mensagem deve ser enviada por e-mail para o setor de compras da
empresa, responsável por adquirir mais itens daquele produto.

Além de simplesmente enviar a mensagem, esse produto (seu
identificador) deve ser enviado para uma listagem de produtos que
devem ser comprados futuramente. Isso ocorre para que se tenha
um maior controle dos itens com falta de estoque.

Imagine o envio de e-mails, o controle de requisições de
compra e o controle de estoque como três classes distintas. As
classes de e-mail e de controle de requisições de compra executam
uma ação quando a classe de controle de estoques faz uma
alteração na quantidade de um item. Poderíamos simplesmente
instanciar as duas classes dentro da classe de estoque e, quando o
produto chegasse a zero, bastaria chamar alguma função
responsável por cada ação (e-mail, requisição de compra).

Sem dúvidas, este parece o mais simples a se fazer, porém
teríamos um grande problema em desenvolver o sistema dessa
forma. As três classes estariam altamente acopladas. Caso fosse
necessário efetuar alguma alteração na classe de e-mails ou na de
requisição de compras, teríamos problemas se não atualizássemos
a classe de estoque, e isso poderia ocorrer para todas as outras
classes do sistema que fazem uso delas. É por isso que devemos ter
um acoplamento mais baixo entre classes dependentes umas das
outras.

Além de buscarmos um baixo acoplamento entre essas classes
do sistema, se repararmos no modelo do exemplo, possuímos duas
classes (e-mails e requisição de compra) que executam ações
quando algo muda na classe de controle de estoque. É aí que entra
a aplicação do Observer.

* O PADRÃO OBSERVER
* Definicao

O objetivo desse padrão é a definição "um para muitos" entre
objetos, na qual muitos objetos podem ser dependentes de um. Ele
é composto por classes principais, chamadas de Subjects (sujeitos),
e classes dependentes, chamadas de Observers (observadores).
Quando o objeto principal recebe alguma alteração em seu
estado, todos os seus dependentes são notificados da sua
atualização – tudo isso de forma automática. Entenda alteração em
seu estado como a chamada de algum método ou alteração de
alguma de suas propriedades internas.
O uso deste padrão reduz o acoplamento entre as classes, pois
nenhuma das classes dependentes tem conhecimento das outras,
como será mostrado no exemplo posterior. E o principal, a classe
responsável por notificar os observadores também tem o menor
acoplamento possível: tudo o que ela conhece é uma interface que
todos os observadores compartilham. No final, isso acaba
permitindo que todas as classes sejam usadas de forma totalmente
independente.
O padrão é indicado quando mudanças em um objeto geram
mudanças em outros (quantidade indefinida de outros objetos),
mantendo um acoplamento baixo. Isso permite que todas as
classes possam ser usadas de forma independente.

```
Elementos que compõem o Observer
Subject (sujeito/assunto): interface que possui a definição
dos métodos que devem ser seguidos por Concrete
Subject ; é o contrato que garante a notificação da
mudança dos estados dos sujeitos a seus observadores.

Observer (observador): interface que possui a definição
dos métodos de um observador concreto ( Concrete
Observer ). Esse contrato garante que os observadores
estarão no padrão para receber notificações dos sujeitos.
Concrete Subject (sujeito/assunto concreto): classes
concretas de sujeitos responsáveis por armazenar e enviar
notificações a seus observadores.

Concrete Observer (observador concreto): classes
concretas de observadores que são responsáveis por receber
notificações de sujeitos concretos ( Concrete Subjects ).
```


* CONCLUSAO

Em um sistema orientado a objetos, o padrão Observer torna-
se perfeito quando possuímos um relacionamento "um para
muitos" e precisamos executar ações em objetos distintos de
acordo com modificações de um objeto principal. Essas ações são
disparadas de acordo com uma parte de nosso sistema (sujeito
observado) que sofre algum tipo de alteração.
Podemos até comparar o funcionamento desse disparo de
notificações com um broadcast. Além de resolver essa necessidade,
temos uma redução considerável no acoplamento entre as classes
da nossa aplicação.