* O PROBLEMA DO SOFTWARE DE EDIÇÃO DE TEXTO

Você recentemente trabalhou em um projeto de
desenvolvimento de um software de edição de texto. Quando você
finalizou, ele passou por diversos roteiros de homologação para
garantir que tudo funcionaria conforme o previsto e ele pudesse
ser liberado para a comercialização.
Estava tudo correndo na mais perfeita ordem, até que alguém,
responsável pela homologação, identificou a falta de uma
funcionalidade essencial, e foi aí que começou sua dor de cabeça. A
funcionalidade identificada era de guardar versões anteriores de
documentos editados através do programa, assim você poderia
retornar para um estado anterior do documento que estivesse
editando.

Assim como qualquer programa, existem milhares de formas
de construir o código e obter quase que o mesmo resultado no
final, porém o padrão Memento é perfeito para a necessidade de
salvar e recuperar estados de um determinado objeto. Por meio
dele, podemos resolver o problema destes estados facilmente.

* O PADRÃO MEMENTO
* Definicao

O Memento é uma excelente alternativa para captura e
restauração de estados internos de objetos. Seriam como backups
de informações de um objeto: o padrão faz cópias destes estados e
as mantém armazenadas em um local.
As informações a serem salvas dependem da necessidade de
cada sistema. Por exemplo, em um jogo de videogame, os estados
poderiam ser gravações (saved game) das fases alcançadas de um
jogo.
A grande vantagem de utilizar esse padrão para isso é que ele
não viola o encapsulamento dessas classes cujo estado se quer
manter salvo. Além disso, sua utilização é muito simples e
organizada.

```
Elementos que compõem o Memento
**Originator**: é o objeto cujo estado queremos capturar.
**Memento**: é o objeto usado para armazenar o estado
interno do Originator .
**Caretaker** (armazenador): responsável por armazenar e
gerenciar os estados internos ( Memento ) de um
Originator .
```

* CONCLUSÃO

O Padrão de Projeto Memento torna-se uma ótima alternativa
para gravação e recuperação de estados internos de objetos. Além
de ter uma implementação extremamente simples, temos uma
diminuição das responsabilidades de acesso aos estados do objeto
Originator pela forma como o padrão se compõe.

A única desvantagem que podemos observar nele é que ele
pode utilizar muita memória de um computador, caso não se tenha
controle ou não se limite o número de instâncias ou dados salvos
de um determinado estado. Um ponto importante é que somente o
objeto originador dos estados ( Originator ) deve ter acesso a
seus estados, assim temos um maior controle do acesso aos estados
armazenados.
