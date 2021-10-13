* O PROBLEMA DOS CAUCULOS DE IMPOSTOS

Você está desenvolvendo um sistema de emissão de notas
fiscais para venda de produtos. Primeiro, foram desenvolvidas as
partes do sistema que permitem o cadastro de novos produtos e
dos preços, o controle de estoque, entre muitas outras.
A única parte que falta desenvolver é a que calcula os valores
finais do pedido e faz a emissão de notas fiscais. É aí que você
começa a refletir sobre qual seria a melhor forma de estruturar essa
parte do sistema.

A sua necessidade é que sejam selecionados produtos
previamente cadastrados e suas respectivas quantidades. Após isso,
o programa deve calcular alguns impostos fixos sobre a venda de
cada um dos produtos e outros impostos que podem variar de
acordo com alguns fatores. São dois impostos fixos (sempre são
cobrados) e mais um que varia de acordo com o tipo de produto
(vestuário, eletrônicos ou alimentação), sendo que cada um tem
um cálculo (fórmula) específico.

Resumidamente, temos partes do algoritmo que são iguais para
qualquer produto, e outras que variam, porém sempre vão existir.
O padrão Template Method é perfeito para resolver este
problema.

* O PADRÃO TEMPLATE METHOD

Definição
O objetivo do Padrão de Projeto Template Method é definir
uma base para um algoritmo que contenha partes que variam,
sendo que essas variações reutilizam a base principal, que serve
como uma espécie de esqueleto. A estrutura principal do algoritmo
não se altera.

Temos uma classe abstrata com um método concreto chamado
de "método template", dentro do qual existe a chamada a outros
métodos da própria classe, porém são abstratos (que ainda não
foram implementados). Ele também define a ordem em que os
métodos serão executados.

Quanto à parte do nosso algoritmo que varia, ela fica
implementada nas subclasses (que estendem a classe abstrata). Este
código fica exatamente dentro dos métodos que foram definidos
como abstratos na superclasse (classe abstrata estendida).
Uma das grandes vantagens de utilizar esse padrão é a
reutilização de código, já que diminuímos consideravelmente a
duplicação de partes do nosso algoritmo.

```
Hook Method (Método Gancho)
Como explicado anteriormente, temos uma classe abstrata que
possui um método concreto chamado de "método template". Este
faz a chamada a seus métodos abstratos, implementados nas
subclasses (que as estendem).
Porém, algumas vezes temos a necessidade de executar alguma
parte do algoritmo que será usada por apenas algumas dessas
subclasses. Para que possamos chamar essa parte do algoritmo que
será implementada em apenas algumas subclasses, temos os Hook
Methods (Métodos Gancho).
O Hook Method é um método concreto definido na
superclasse, que também é chamado diretamente do método
template, mas geralmente sua implementação não faz nada; é
apenas um método em branco. As subclasses que precisarem
utilizar esse método vão sobrescrevê-lo. Desta forma, ele será
chamado automaticamente no método template , conforme será
mostrado no exemplo posterior deste capítulo.

Elementos que compõem o Template Method
Classe abstrata: é o esqueleto do algoritmo, e contém a
definição da parte principal do algoritmo que não varia.
Subclasses: são as classes com a implementação do
template que variam.
```

* CONCLUSAO
  Alguns pontos não tão positivos que podemos observar é que,
  às vezes, depurar e entender o fluxo da implementação do
  Template Method pode ser um pouco confuso. Desta forma, a
  manutenção pode ser um pouco crítica, e é possível uma pequena
  mudança nas subclasses afetar toda a estrutura.

  Porém, apesar destes pequenos pontos negativos, o padrão
  Template Method torna-se uma excelente alternativa para o
  reaproveitamento de código, já que não há duplicidade das partes
  em comum entre nossos algoritmos. O padrão é construído com o
  uso da herança de classes, dando uma certa flexibilidade para que
  subclasses decidam como implementar partes específicas de um
  determinado algoritmo.