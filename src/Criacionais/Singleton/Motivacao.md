- O PROBLEMA DOS LOGS DESCONTROLADOS

Imagine	 que	 você	 administra	 um	 sistema	 de	 um	 banco	 de
grande	porte.	Um	banco	precisa	de	segurança	em	suas	transações	e
rastreabilidade	de	 todos	os	possíveis	erros	de	sistema	que	possam
ocorrer.	 Nesse	 sistema,	 existe	 uma	 única	 classe	 responsável	 por
gravar	 logs	 (registros	 para	 fins	 de	 histórico	 do	 que	 é	 feito	 no
sistema).
A	cada	operação	–	ou	seja,	quase	todas	as	ações	executadas	no
sistema	 –,	 um	log	 é	gravado	 com	 diversas	informações.	Porém,	 à medida	que	o	número	de	usuários	aumentou,	o	sistema	começou	a
apresentar	 problemas	 de	 performance.	 Todos	 os	 usuários
começaram	a	reclamar	constantemente	da	lentidão.

Um	 dos	 motivos	 para	 esse	 problema	foi	 que,	 a	 cada	 vez	 que
precisávamos	 gravar	 um	 log,	 tínhamos	 de	 instanciar	 a	 classe
novamente;	 a	 cada	 nova	 instância,	 um	 espaço	 na	 memória	 do
servidor	 era	 ocupado.	 Como	 o	 sistema	 recebia	 um	 número
considerável	de	usuários	 simultâneos,	isso	acabou	elevando	o	uso
da	memória	física	do	sistema	até	seus	limites.

Após	 chegarem	 à	 conclusão	 de	 que	 esse	 número	 elevado	 de
instâncias	 de	 classe	 de	 log	 era	 um	 dos	 principais	 causadores	 do
problema	 de	 performance,	 surgiu	 a	 necessidade	 de	 diminuir	 o
número	 de	 instâncias	 simultâneas	 existentes.	 Se	 fosse	 possível
instanciar	esse	objeto	de	logs	uma	única	vez	e	compartilhá-lo	todo
o	 tempo	 de	 execução	 (período	 em	 que	 um	 programa	 de
computador	permanece	em	execução)	do	sistema,	resolveríamos	o
problema;	é	aí	que	entra	o	padrão	Singleton.

O	PADRÃO	SINGLETON

Definição:
Assim	 como	 o	 problema	 do	 sistema	 bancário	 apresentado
anteriormente,	no	 qual	 tivemos	 um	 problema	 de	 performance	 da
aplicação	 por	 possuir	 um	 grande	 número	 de	 instâncias	 de	 uma
classe	–	criadas	simultaneamente	em	cada	requisição	ao	servidor	–,
precisamos	 ter	 um	 maior	 controle	 da	 criação	 de	 instâncias
descontroladas	de	uma	classe.

O	 Singleton	 tem	 a	 finalidade	 de	 garantir	 esse	 controle,	 de
gerenciar	 o	 número	 de	 instâncias	 criadas	 para	 uma	 determinada
classe,	e	também	centralizar	a	criação	desses	objetos	em	um	único
ponto	de	acesso	global	(que	pode	ser	acessado	de	qualquer	parte	do
sistema).
Existem	diversos	exemplos	pela	internet	de	implementações	do
Singleton,	em	que	a	classe	principal	controla	a	instância	de	outras
classes.	 Porém,	 isso	 não	 garante	 o	 real	 controle	 de	 instâncias	 de
uma	classe,	já	que	um	desenvolvedor	desavisado	poderia	ignorar	a
classe	do	Singleton	 (que	 controla	 a	 criação	 das	instâncias)	 e	 criar
novos	objetos,	seja	por	não	ter	conhecimento	de	sua	existência	ou
não	querer	utilizá-la.
O	 correto	 é	 que	 a	 classe	 que	 segue	 esse	 Padrão	 de	 Projeto
controle	 a	 criação	 de	 suas	 próprias	 instâncias,	 assim,	 não	 seria
possível	criar	instâncias	dela	de	outra	forma.	A	forma	de	limitar	a
criação	 de	 novas	 instâncias	 da	 própria	 classe	 varia	 de	 linguagem
para	 linguagem.	 Veremos	 todos	 os	 passos	 para	 fazer	 isso	 com	 o
PHP	7+.

SINGLETON,	O ANTI-PATTERN
Para	 muitos,	 o	 padrão	 Singleton	 é	 considerado	 um	 antipattern	por	conta	do	seu	uso	em	forma	estática	(chamando	a
classe	 sem	 precisar	 instanciá-la)	 e,	 principalmente,	 pelo
acesso	 global	 à	instância	 da	 classe.	 Os	 problemas	 de	 utilizar
classes	 estáticas	 são	 vários:	 não	 podemos	 trabalhar	 com
interfaces,	nosso	código	fica	com	um	acoplamento	mais	alto,
entre	outros.
Também	 temos	 problemas	 relacionados	 a	 acesso	 global	 à
variável	da	instância.	Ele	gera	um	difícil	entendimento	de	por
que	 a	 variável	 não	 está	 diretamente	 ligada	 a	 um	 escopo
específico	do	sistema.	Também	temos	o	risco	de	uma	variável
que	 pode	 ser	 alterada	 em	 qualquer	 ponto	 do	 sistema	 acabar
afetando	outras	partes.

Apesar	 de	 possuir	 todas	 estas	 desvantagens,	 a	 aplicação	 de
qualquer	 padrão	 deve	 ser	 sempre	 medida	 de	 acordo	 com	 a	 real
necessidade.	 No	 caso	 do	 Singleton,	 seu	 uso	 é	 indicado	 caso	 seja
necessário	 o	 controle	 de	 acesso	 simultâneo	 a	 um	 recurso
compartilhado,	 ou	 caso	 realmente	 precisemos	 de	 uma	 única
instância.