* O PADRÃO FACADE
DEFINIÇÃO

Facade (ou em português, "fachada") pode ser definido como
uma fachada arquitetural de um sistema, ou seja, uma pequena
parte do sistema que serve como camada para outras partes da
aplicação. Quando precisamos usar esses subsistemas, trabalhamos
diretamente em contato com a fachada.
Geralmente, essa camada de fachada é aplicada em situações
nas quais possuímos um subsistema (sistema menor dentro de
outro), ou módulos/bibliotecas que possuem uma certa
complexidade para seu uso – seja por possuírem muitas funções,
muitos parâmetros que devem ser passados para executar alguma
ação ou, no pior dos casos, por existir uma ordem exata na
sequência de funções chamadas para executar uma determinada
ação.
O Facade trabalha em um nível mais alto da aplicação e seu
papel é simplificar o uso de módulos, subsistemas ou classes mais
complexas. Mesmo adicionando essa camada sobre classes de
nossa aplicação, ainda assim, se for necessário, podemos continuar
usando classes diretamente. O Facade faz uso das outras classes
sem a necessidade de alterações nelas.

```
Elementos que compõem o Facade
**Facade** (fachada): representação da fachada responsável
por abstrair as classes de subsistemas. Geralmente, esta
camada é construída sobre uma única classe.
**Classes de subsistemas e módulos/bibliotecas**: são todas
as classes das quais um Facade faz uso. São as classes cujas
operações se quer simplificar.
```

* CONCLUSÃO
Utilizar o Facade é uma ótima escolha para os casos em que
queremos simplificar ou abstrair uma parte do sistema,
principalmente quando falamos de sistemas legados ou módulos
que queremos utilizar indiretamente em nossa aplicação. O que o
torna ainda mais interessante é a possibilidade de continuar
usando diretamente as classes, não afetando partes do sistema que
já estão em funcionamento e serão alteradas.