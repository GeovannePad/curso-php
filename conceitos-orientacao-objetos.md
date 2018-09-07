Classe = Um tipo de "caixa", que na verdade, o que importa é apenas o que está presente dentro dela. Dentro delas, existem variáveis e funções, porém elas ganham outros nomes e também alguns recursos.

Atributo = Mesma coisa que uma variável, porém, possui alguns recursos extras o que a diferencia da variável comum/normal do PHP. Tem esse nome apenas se estiver dentro de uma classe.

Encapsulamento = Controle de quem pode ou não pode utilizar essas variáveis e funções. Privando a variável ou função, e no caso de estarem privadas, as únicas coisas que podem acessá-las são as presentes dentro da classe em que elas foram criadas.

Método = É o nome dado as funçõos que estão dentro das classes, ganhando alguns recursos extras, elas também se aplicam ao conceito de encapsulamento.

Tip -> Algo para armazenar, utilize os atributos(variáveis dentro das classes). Algo a fazer, um processo, neste caso você deve utilizar os métodos(funções dentro das classes).

Instânciar = Quando uma variável instância ou representa uma classe. Para então utilizar a classe presente num objeto(variável).

Objeto = Uma variável que representa ou tira uma "cópia" da classe já criada. exemplo: $sql = new SQL(). $sql é um objeto que armazenará todas as informações presente na classe SQL. E esse processo chama instância.

Tudo na orientação a objetos se baseia em classes, importando apenas as informações dentro dessas classes, que são os atributos e métodos, sendo,respectivamente, variáveis e funções que recebem recursos extras. Depois de criar essa classe, você precisa usá-la, para isso você cria uma variável(Objeto) que tira uma "cópia" da classe, representando-a. Esse processo chama-se instância.

Exemplo no contexto de programação orientada a objetos:
Uma classe de aula. Tem os seus alunos e professor e também suas matérias.

Uma classe de aula sem o seu professor é como se fosse uma classe vazia, sem nada. Por isso atribuímos um professor a ela, esse professor receberá o nome de objeto, e o processo de atribuir o professor a essa sala, chama-se instânciar(instância).

As matérias e alunos que esse processo vai lecionar/ensinar, receberam o nome de atributos(atributos1, atributos2 etc.). E o processo do professor ensinar essas matérias vai receber o nome de métodos.

Recapitulando: 

Classe de aula = Classe;

Professor = Objeto;

Alunos e matérias = Atributos, ou seja, todas as informações necessárias para se lecionar/ensinar/organizar dentro dessa sala de aula;

Ação de ensinar ou qualquer outra coisa dentro da sala = Método.