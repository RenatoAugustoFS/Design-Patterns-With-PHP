* O PROBLEMA DA FÁBRICA DE FOGUETES

Atualmente, uma grande empresa que constrói nada menos do
que foguetes espaciais teve a necessidade de um software para a
gestão dos seus produtos, e você foi contratado para executar este
serviço. O sistema basicamente permitiria o cadastro dos foguetes
que a empresa disponibiliza. Posteriormente, os foguetes
previamente cadastrados passariam por diversas rotinas de teste
através do mesmo sistema usado como catálogo para apresentação
e venda.

Cada foguete possui suas respectivas características: seu
modelo, um tipo de motor, tanque de combustível, número de
assentos para os tripulantes, entre uma infinidade de outras
características específicas de cada modelo.

Todos os modelos dentro do sistema possuirão uma classe em
comum, porém, os atributos de cada um são diferentes e devem ser
informados quando criamos cada um dos objetos que os
representa. Por exemplo, um foguete Modelo I possui 3 motores,
já o foguete Modelo II possui 5; ou seja, são características
particulares de cada um. Além disso, temos uma série de outros
atributos que definem suas representações.

Cada objeto, representante de um foguete, possui uma
montagem complexa na qual devemos atribuir diversos valores a
suas propriedades. Precisamos simplificar e abstrair essa criação de
tal forma que seja fácil construir esses diferentes foguetes. Você,
como desenvolvedor experiente, sabe que o padrão Builder é
perfeito para solucionar este problema.

* O PADRÃO BUILDER
* Definição

O Padrão de Projeto Builder tem como objetivo simplificar a
construção de objetos complexos, abstraindo essa complexidade
por meio de classes específicas. Geralmente, temos complexidade
na construção de um objeto quando ele possui um número muito
grande de propriedades. Ele separa a construção desses objetos de
suas representações, de modo que seja possível predefini-las.

Assim como o padrão Factory, o Builder encapsula a criação
de objetos, ocultando os detalhes de sua criação e diminuindo o
acoplamento do código. Seu foco é a divisão de responsabilidades
na construção de um objeto, definindo os passos que devem ser
executados. Já no Factory, não existe esse passo a passo que
simplifica a criação dos objetos, nem a separação de suas criações
com as representações.

````
Elementos que compõem o Builder:

Product (produto): é o objeto complexo construído pelo Builder.

Builder (construtor): é uma interface que serve como
contrato para a construção das partes do nosso objeto Product

Concrete Builder (construtor concreto): a implementação
concreta que constrói o Product de acordo com os dados
especificados nela.

Director: é a classe responsável por definir a construção
dos objetos utilizando a interface Builder .
`````

* Conclusão

O Padrão de Projeto Builder é perfeito quando precisamos
separar a construção de objetos complexos em pequenos passos,
simplificando-os. Como desvantagem significativa de adotar este
padrão, podemos destacar que, quando usamos em uma
determinada classe de produto (Product), sempre teremos outros
objetos para a construção de nossas instâncias, o que pode se
tornar um problema em aplicações nas quais a performance é um
ponto-chave.

Quanto às vantagens, temos a possibilidade de separar a
definição das representações dos nossos produtos, o que facilita a
manutenção e o desenvolvimento futuro. Também temos o código
dessas representações e da construção totalmente encapsulado, e,
como foi dito antes, temos um maior controle das etapas de
criação de um objeto.