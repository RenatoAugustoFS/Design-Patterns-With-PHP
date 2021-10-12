* O PROBLEMA DA COMPREENSÃO DE ARQUIVOS

Você trabalha em uma empresa que é contratada por terceiros
para escanear documentos, uma prática muito comum em
situações em que se quer digitalizar documentos físicos antigos.
Quando uma nova demanda de documentos se inicia, existe um
operador responsável por escanear manualmente folha a folha.

Estes arquivos são armazenados em um servidor da empresa e
ficam organizados por pastas, e quem faz este controle é o próprio
software da impressora. Neste mesmo servidor, existe uma
aplicação desenvolvida em PHP rodando na web e, através dela, os
clientes acessam um painel administrativo e têm acesso a todos os
seus documentos.

Até então, os clientes sempre trabalhavam com uma
quantidade não muito grande de documentos, e acessavam-nos
diretamente online para a consulta, fazendo downloads um a um.
Porém, recentemente um dos clientes solicitou a digitalização de
milhares de documentos e informou que seria necessário fazer o
download de forma agrupada sempre que fosse necessário.
Uma solução pensada foi a de incluir um botão no painel
administrativo que selecionasse todos os documentos e
comprimisse em um único arquivo com a extensão .RAR , o que
resolveria o problema. Após o analista do sistema refletir a solução,
ele teve a ideia de aproveitar e já incluir a compressão dos arquivos
no formato .ZIP e .TAR , assim, o cliente final poderia
selecionar o formato que preferisse.

Pensando na estruturação desta parte do sistema, podemos
notar que, independente do formato de saída dos arquivos, todos
eles têm a finalidade em comum de gerar um arquivo comprimido.
A única coisa que muda é uma parte do algoritmo, a parte que
comprime para o formato diferente. Pensando em aproveitamento
de código e em como poderíamos solucionar este problema de
algoritmos semelhantes, que têm uma pequena parte do
comportamento diferente, é que chegamos ao uso do Strategy.

* O PADRÃO STRATEGY

Definição
O Padrão de Projeto Strategy, também conhecido como
Policy, tem como objetivo definir uma família de algoritmos que
executam operações semelhantes (em comum), porém possuem
diferenças quanto a sua implementação. Ele encapsula cada um
desses algoritmos e permite que sejam utilizados por qualquer
cliente, e que esses comportamentos sejam trocados em tempo de
execução.

Muitas vezes, temos classes distintas, mas que diferem apenas
em algum comportamento. Com o encapsulamento dos algoritmos
(comportamentos), temos um maior reúso de código, pois
extraímos apenas a parte que varia, mantendo o restante em uma
única classe que faz uso deles.

Os desenvolvedores costumam substituir o Strategy pela
herança de classes ou uso de interfaces, já que o objetivo final dos
comportamentos que variam e são reaproveitados é um tanto
parecido, mas não tem exatamente o mesmo efeito. Seguindo o
exemplo da herança, podemos ter classes com comportamentos
distintos que estendem de uma classe em comum. Esta superclasse
teria um comportamento concreto definido, e todas as subclasses
utilizariam ou sobrescreveriam esse comportamento.

Agora, pense nas subclasses que não devem ter esse
comportamento. Com a herança, elas obrigatoriamente teriam.
Uma solução utilizada é sobrescrever o método que não se quer, e
deixar sua implementação em branco, mas isso não é uma solução
muito elegante.

A outra opção muito usada é a criação de uma interface com os
métodos de cada comportamento. Ela é implementada apenas
pelas classes que necessitam daquele comportamento. Parece uma
solução melhor que a herança, mas também seria um problema:
imagine acabar chamando um método de alguma classe da mesma
família de objetos e ele não existir, por não implementar a
interface. Teríamos um erro em nossa aplicação.

É aí que entra o padrão Strategy. Ele faz uso da composição de
objetos, assim, as nossas classes são compostas apenas de
instâncias dos comportamentos dos quais necessita. Além dessa
flexibilidade, temos a segurança de sempre existir um
comportamento padrão a ser chamado e, com isso, evitar erros de
execução em nossos programas. Tudo isso ficará mais claro nos
exemplos a seguir.

```
Elementos que compõem o Strategy
Context (contexto): é a classe responsável por criar e
manter uma instância de nosso Strategy.
Strategy (estratégia): serve de contrato para qualquer
Concrete Strategy contendo os métodos obrigatórios
chamados por nossa classe de contexto. Pode ser tanto uma
interface como uma classe abstrata. A classe abstrata é
usada caso seja necessário implementar métodos em
comum para nossas estratégias.
Concrete Strategy (estratégia concreta): é a estratégia
concreta que implementa a interface Strategy .
```

* CONCLUSÃO

O Padrão de Projeto Strategy é perfeito a ser implementado
quando temos algoritmos semelhantes, que têm a mesma
finalidade mas com comportamentos diferentes. Nestes casos,
separamos o comportamento em classes específicas.

Também o aplicamos quando temos a necessidade de ocultar
do usuário estruturas complexas de um algoritmo. Ele pode
diminuir o uso de lógicas condicionais, e permite a variação dos
algoritmos (comportamentos) em tempo de execução. Assim, esses
comportamentos ficam mais desacoplados das classes que os
executam, diminuindo a repetição de código e facilitando sua
manutenção.

As desvantagens que podemos observar são o aumento no
número de classes existentes no sistema e o aumento da
complexidade de criação dos objetos. As classes de contexto têm
como dependência as de estratégia, então temos de instanciá-las e
saber qual será usada. Em meu ponto de vista, as vantagens são
muito superiores a essas pequenas desvantagens.