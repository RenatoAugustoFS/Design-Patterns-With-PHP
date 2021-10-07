* O PADRÃO DECORATOR
  Definição

O Padrão de Projeto Decorator, também conhecido como
Wrapper, permite adicionar a um objeto comportamentos de
forma dinâmica, agregando funcionalidades ou responsabilidades
adicionais a ele. Ao contrário do uso da herança, em que são
definidos comportamentos a classes, o Decorator permite
adicionar esses comportamentos a objetos em tempo de execução,
o que torna a aplicação muito mais dinâmica, permitindo mais
flexibilidade a seus atributos e métodos.
Um exemplo muito usado para a explicação deste padrão é o
de uma loja que vende bebidas e drinks. Temos as bebidas base,
café expresso e cappuccino, e cada uma tem seu valor padrão a ser
cobrado. Porém, é possível adicionar doses extra de alguns itens
(dose de café, dose de leite, canela), sendo que é somado um valor
ao total a cada item agregado. Note que os clientes podem
adicionar doses de qualquer item adicional, independentemente da
ordem.
Agora, imagine a implementação dessas bebidas com suas
combinações. Poderíamos utilizar a herança e desenvolver muitas
classes com todas as combinações possíveis. Entretanto, o número
de classes seria um absurdo, sem falar da manutenção, inviável.
Poderiam surgir mais bebidas e adicionais no futuro. Com o
Decorator, temos uma estrutura de agregação de componentes
que simplifica tudo isso.
A implementação é feita por meio de uma composição
recursiva de objetos, que são os decoradores (que agregam as
funcionalidades). Todos eles possuem a mesma interface e podem
possuir uma instância de sua própria interface. Um decorador fica
dentro de outro e, ao final, eles vão chamando os mesmos métodos
de forma recursiva até chegar ao último elemento.


```
Elementos que compõem o Decorator
**Component** (componente): é a interface que será
implementada, tanto pelos decoradores quanto pelos
componentes concretos. Ela garantirá que ambas as classes
tenham uma compatibilidade de métodos para o
funcionamento das decorações.
**Concrete Component** (componente concreto): é o
componente do sistema que receberá as decorações. Nele,
serão adicionados funcionalidades, comportamentos e
estados extra. Estes componentes são considerados as
classes base de nosso sistema, que serão alteradas.
**Decorator (decorador)**: é a interface ou classe abstrata que
serve de contrato para os decoradores concretos
implementarem, garantindo a compatibilidade para as
decorações.
**Concrete Decorator** (decorador concreto): são as
implementações concretas dos decoradores. Elas contêm as
funcionalidades extras a serem agregadas ao componente
principal.
```


* CONCLUSÃO
  Podemos observar algumas desvantagens que podem surgir ao
  utilizar esse padrão. Sem dúvida, o padrão pode gerar um número
  de classes muito grande em nosso projeto, o que pode, em vez de
  facilitar, acabar dificultando sua leitura e manutenção.
  Porém, existem diversas vantagens. Diferente da herança, que
  adiciona funcionalidades a toda uma cadeia de classes sem muita
  flexibilidade, o Decorator permite adicionar funcionalidades a
  objetos dinamicamente e em tempo de execução.
  Essas funcionalidades são adicionadas individualmente a um
  objeto e podem ser pré-selecionadas. Deste modo, evitamos classes
  cheias de métodos que nunca serão usados, bem como alterações
  no código para novas combinações de objetos com funcionalidades variadas.
  Uma outra grande vantagem do padrão é que as classes de
  componentes se mantêm simples, apenas sendo necessário
  desenvolver novos decoradores caso se queira uma nova
  funcionalidade. A construção de decoradores, quando feita de
  forma padronizada, torna o código muito mais fácil de ler e
  expandir.