* O PROBLEMA DA EDITORA DE LIVROS

Recentemente, a editora de livros na qual você trabalha como
desenvolvedor teve uma ideia inovadora. Ela passará a receber
solicitações de livros com dedicatória para um nome de pessoa à
escolha do comprador. Este nome sairá impresso na capa do livro,
abaixo do título, e os livros serão impressos todos juntos pela
aplicação.

A ideia é ter uma listagem de nomes para determinado livro, e
o esperado por lote é ter milhares de nomes. Ao pensarem em uma
solução, a equipe de desenvolvedores sabia que existiriam objetos
no sistema para representar cada livro, contendo atributos com
todas as suas informações, entre elas: título, categoria do livro etc.
Bastaria ter uma classe para estes livros e instanciá-la diversas
vezes em um laço de repetições. Porém, em cada uma das milhares
de voltas desse laço, teríamos de definir todas as informações do
livro – que são exatamente iguais (título, assunto etc.) – e apenas
alterar o nome da dedicatória. Após isso, seria só mandar para a
impressão.

A equipe desenvolveu essa solução, e começou a receber os
pedidos e armazenar os nomes em seu sistema. Só no primeiro
mês, ela recebeu um número enorme de solicitações, muito acima
do esperado, e foi aí que perceberam o grande problema: devido à
grande quantidade de livros que deveriam ser impressos, sempre
que a impressão começava, o uso de memória do servidor ia até
seu limite e o programa parava.

Depois de algumas análises, descobriram que o programa de
impressão estava usando muita memória do servidor, pois, no
nível da aplicação, havia muitas classes que eram instanciadas e,
nelas, muitas propriedades iguais eram inseridas em seus atributos
através de funções setter.

Após mais algumas análises de solução do novo problema,
chegaram à conclusão de que aplicação do Padrão de Projeto
Prototype era perfeita para resolver este problema de memória do
servidor.

* O PADRÃO PROTOTYPE
  Definição

O objetivo desse padrão é definir alguns objetos que servem
como uma instância de protótipo, clonada para a criação de novos
objetos. Diferente dos demais padrões de criação, o Prototype
utiliza o próprio objeto para criar as novas instâncias em vez de
usar classes auxiliares para fazer isso.

Este padrão é indicado principalmente quando se quer criar
cópias exatas de um objeto, incluindo seus atributos. Assim, temos
um custo muito menor de memória do que instanciar o mesmo
objeto muitas vezes e, em cada uma dessas vezes, setar exatamente
os mesmos valores em suas propriedades. Aliás, também é
interessante seu uso nos casos em que temos poucas variações.
Ainda assim, teríamos um ganho na performance.

```
Elementos que compõem o Prototype
Prototype (protótipo): uma classe abstrata que define a
interface com os métodos que a permitem se autoclonar.
Concrete Prototype (protótipo concreto): classe concreta
que implementa a interface Prototype .
Client (cliente): classe responsável por criar os objetos de
protótipo e cloná-los por meio de seus métodos.
```

* CONCLUSÃO
  Ao analisarmos o Padrão de Projeto Prototype, podemos
  concluir que ele é uma excelente alternativa, oferecendo as mesmas
  vantagens de outros. Ele oculta os produtos criados de seus
  solicitantes (clientes) e reduz consideravelmente o acoplamento de
  nossa aplicação. Assim, mantém um contrato através de sua
  interface que aumenta a flexibilidade nas alterações de nossos
  produtos (objetos clonados).
  Seu uso é recomendado quando a criação de objetos torna-se
  um processo muito caro. Com ele, aproveitamos propriedades
  compartilhadas entre um conjunto de objetos, e evitamos o uso do
  operador new .


