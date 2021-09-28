* CONSTRUINDO OBJETOS COM FACTORY METHOD

O PROBLEMA AUTOMÓVEIS DA STARTUP DE AUTOMÓVEIS

Imagine a seguinte situação: você trabalha como desenvolvedor
em uma startup que tem como principal objetivo revolucionar a
venda de veículos através do mundo. Os veículos vendidos na
plataforma são disponibilizados por meio de acordo direto com as
fabricantes. Até agora, já foram fechados contratos de venda de
alguns modelos específicos, como a Tesla e a Dodge.

A ideia é desenvolver um sistema do zero que permitirá a
venda online e a divulgação dos veículos através de outras plataformas (outros sistemas) de integração, entre outras
funcionalidades. Repare que, só aí, já possuímos claramente dois
lugares em nosso sistema que vão trabalhar diretamente com os
veículos. Isso quer dizer que, se cada carro possuir uma classe
específica, será necessário instanciar cada uma delas repetidas
vezes, então teríamos uma repetição do código. Além dessa
repetição, que dificulta a manutenção caso precisemos alterar
alguma classe de veículos, temos um problema ainda maior: não
sabemos quantos carros teremos no total, pois, a cada ano,
modelos saem de linha e outros são lançados (substituídos).

Agora, imagine ter de entrar em cada ponto do sistema que
utiliza determinada classe de um modelo específico e alterá-la.
Além da dificuldade de lembrar de todos os pontos que usam a
classe, teríamos um acoplamento muito alto entre o nosso sistema
e as instâncias (que podem variar ou aumentar com o tempo).

Uma solução utilizada por muitos desenvolvedores para esse
tipo de problema é a aplicação do Padrão de Projeto Factory
Method. Com ele, alteramos a parte do nosso código que possui a
responsabilidade de criação de determinados objetos. Vamos
encapsular essa criação, de modo que teremos um sistema mais
flexível e menos acoplado, conforme será visto neste capítulo.

* O PADRÃO FACTORY METHOD

Definição
O objetivo desse padrão Factory Method é encapsular a
criação e os objetos de um sistema. Isso ocorre por meio de outros
objetos chamados de fábricas (referência à fábrica de objetos), cuja
responsabilidade é apenas criar as instâncias.
No padrão Factory Method, temos uma interface que define
um contrato para os objetos a serem criados pelas fábricas, que
seriam nossos produtos finais. Também temos uma interface que
define como nossas classes-fábrica deverão ser construídas.

```
C ONTRATOS ATRAVÉS DE INTERFACES
O grande benefício do uso das interfaces é estabelecer
contratos entre classes. Na interface, temos apenas a definição
de métodos abstratos, sem qualquer definição de código
dentro. Se uma classe implementa uma interface, ela deve
obrigatoriamente escrever os métodos abstratos. Porém, cada
classe define o seu próprio comportamento para esse método,
contanto que obedeça à assinatura definida na interface. A
assinatura do método é como o identificamos de forma única,
composta por elementos como o nome do método, os
parâmetros e os tipos de dados que ela recebe, seu retorno etc.
Outro grande benefício em PHP é que podemos utilizar a
interface em definições de tipos de dados de parâmetros de
métodos ou seus retornos. Por exemplo, se criássemos uma
interface InterfaceDeTeste , e ela fosse implementada por
duas outras classes, poderíamos definir nos parâmetros da
assinatura de qualquer outro método de nosso sistema essa
interface. Automaticamente, esse método aceitaria ambas as
classes que o implementam. Dessa forma, ao programarmos
para uma interface (para seus métodos), e não para uma
classe concreta, nosso sistema fica muito mais flexível.
```

A criação de cada um dos objetos fica encapsulada dentro de
uma classe específica, responsável por isso. Todos os pontos do
sistema que necessitem de instâncias dessa classe fazem
solicitações para sua fábrica, dispensando o uso do operador new .

Caso nosso produto precise ser alterado no futuro, será necessário
apenas alterações em sua classe-fábrica.
Conforme a definição no livro Design Patterns (GAMMA;
HELM; JOHNSON; VLISSIDES, 1994), os autores sugerem que o
objetivo do padrão é definir uma interface para a criação dos
objetos e transferir a responsabilidade de criação para as
subclasses.
Com o uso deste padrão, temos uma redução do acoplamento
do código. As nossas classes clientes não têm conhecimento direto
das classes concretas, apenas de uma interface. Logo, temos uma
maior flexibilidade, pois não estamos diretamente dependentes de
um objeto concreto.

Elementos que compõem o Factory Method
Product (produto abstrato): define uma interface de
objetos que será criada pelo nosso método-fábrica que
estará no Concrete Creator.
Concrete Product (produto concreto): é o produto
concreto que implementa a interface Product. Trata-se do
produto final que será criado pelas fábricas.
Creator (criador abstrato): é a interface que define o
contrato de todas as nossas fábricas.
Concrete Creator (criador concreto): é a classe concreta
que implementa nossa interface Creator, ela representa a
fábrica de objetos de cada produto.

