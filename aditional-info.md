# curso-php
-- Boas práticas -- 
Tip: Utilizar um arquivo config.php para armanezar um cógido para ajudar nas suas páginas com uma gama de recursos muito úteis, deixando cada vez mais seu código inteligente
Tip: Organize suas interfaces e classes abstratas e comuns em diferentes pastas e organizar por assuntos das classes.

Precedência de Operador = Prioridade de execução dos tipos de operadores.

Interoperabilidade de sistemas = Faz que possa utilizar dados de um sistema, por exemplo, feito em PHP, com um outro sistema feito em JAVA. Utiliza-se o arquivo JSON para isso. JSON se torna mais leve que o XML pois ele utiliza menos caracteres, e é utilizado em praticamente todas as linguagens. O JSON serializa as variáveis, por exemplo, um array bidimensional.

Variáveis locais e variáveis de sessão = As variáveis locais só funcionam na página onde são criadas ou se esse arquivo vier com inclusão de um outro arquivo (com o include ou require). Já as variáveis de sessão se assemelham as variáveis super-globais, pois elas são enxergadas em todo o código enquanto o usuário estiver online.
A partir do momento que o usuário acessa o site na internet, uma sessão é criada entre o usuário e o servidor (um arquivo). Amarra informações/dados do servidor com os dados locais (do navegador) do usuário. Normalmente duram em torno de 20 minutos essas sessões, mas pode variar, como em um app de online banking que pode em torno de 2 minutos de inatividade já encerrar sua sessão atual com o servidor.

Tip: Utilizar um arquivo config.php para armanezar um cógido para ajudar nas suas páginas com uma gama de recursos muito úteis,deixando cada vez mais seu código inteligente

ID de sessão = É uma identificação da sua sessão única no servidor, para poder identificar que é você, e ao abrir um nova aba, por exemplo, em uma navegação anônima, ele cria uma nova sessão. 

Session hijacking = Se o hacker conseguir o acesso ao ID da sessão do usuário, ele pode roubar os dados presentes naquela sessão. Uma forma de se progeter disso é com o HTTPS, que entre outras informações importantes ele irá criptografar o ID da sessão. Uma boa prática é usar a session_regenerate_id em um arquivo, com o nome, por exemplo, de valida.php, mesmo ele já tendo um ID de sessão criado, ele vai criar um outro ID.

Time Stamp = Uma marca temporal (ou estampa de tempo) é uma cadeia de caracteres denotando a hora ou data que certo evento ocorreu. A cadeia é geralmente apresentada num formato consistente, permitindo fácil comparação entre duas marcas temporais distintas. Elas são padronizadas pela Organização Internacional para Padronização (ISO) através da ISO 8601. Exemplo: 1970-01-01

SPL = Standard php library, um conjunto de funções padrões do php usadas para resolver lacunas presentes em seu código.

PHP-FIG: Site da documentação de como funciona o composer, que é baseado no PSR, e sobre boas maneiras e "regras" para se escrever um código limpo e bem formatado.

Command Injection -> É um tipo de ataque que, o usuário mal intencionado, pode injetar comandos dentro de uma comunicação entre o usuário e o servidor.
  O usuário é o elo mais fraco de segurança numa aplicação.

  O hacker ou cracker pode utilizar uma ferramenta que pode escanear os pacotes que estão trafegando entre o usuário e o website que ele acessa. Utilizando essas funções abaixo para injetar comandos mal intencionados.
  WebScarab = Ferramenta que "pega" esses pacotes.

  Funções de sistema operacional, que podem ser sujeitas a ataques de command injection.

- Se no seu código possui a função system() do PHP, que executa um programa externo e a mostra a saída, você pode estar propício a receber um Command Injection.
- Função exec() faz a mesma coisa que a função system(), porém não mostra saída alguma.
- Função shell_exec().


SQL Injection -> É explorado por uma má prática do desenvolver.

  É recomendedo que você utilize apenas PDO a partir do PHP 7, utilizando o bindParam.

  SQL Injection é quando um usuário mal intencionado descobre que você está mandando dados para dentro do banco de dados, e injeta um comando de terceiro, junto com os comandos do sistema.

Permissões de Pasta -> Regras de permissões do UNIX.

  As permissões vão de 0 a 7, 

  Número 0 = Nenhuma permissão.

  Número 1 = Permissão de execução.

  Número 2 = Permissão de gravação.

  Número 3 = Permissão de execução e gravação.

  Número 4 = Permissão de leitura.

  Número 5 = Permissão de leitura e execução.

  Número 6 = Permissão de leitura e gravação.

  Número 7 = Permissão total (leitura, gravação e execução). Cuidado!]

   Os mais comuns é o 7 e 5.

  O conjunto de permissões do UNIX segue uma regra de 3 números, por exemplo, "0765":
  O primeiro número, no caso o 7, se refere ao dono(owner) que criou aquele diretório.
  O segundo número, no caso o 6, se refere a grupos(groups).
  O terceiro número, no caso o 5, se refere aos outros(others), os guests, os visitantes, no caso os usuários que acessam o site.

  ReCaptcha -> Usado para prevenir ataques de robôs, no caso, códigos automatizados, preencham formulários, e usem para má intenções.

  Cross-Site_Scripting (XSS) -> Ataque hacker, similar a injeção de comando, ele coloca códigos html em campos de entrada de dados. Ou até mesmo códigos javascript.

   Existem dois tipos de XSS

  Temporário -> Momentâneo, dando o F5, ele some. Códigos HTML por exemplo.
  Permanente -> Quando ele coloca informações e comandos em querys que estão indo para os banco de dados. Conseguindo acesso a cookies/sessões de outros usuários.

  Defense in Depth -> Significado defesa em camadas, ou layers de segurança. Ela envolve várias camadas de segurança, para caso o usuário quebre uma, e exista outra para para-lo.

  Existem duas arquiteturas a se pensar:

  Arquitetura física -> Se refere ao servidor físico, por exemplo, quem tem acesso a esses dados/servidor, onde está localizado ou até mesmo se há pessoal de segurança nessas instalações. Caso for terceirizar esse serviço, é recomendável contratar empresas boas e confiáveis.
  Hoje em dia usa-se muito máquinas virtuais, ou seja, servidores na nuvem, exemplo: Amazon, microsoft azure, google clouds.

  Arquitetura de desenvolvimento -> Parte do desenvolvedor, jamais deve armazenar o usuário e a senha do usuário num arquivo de texto, por exemplo, para deixar o usuário logado sempre.
  Quanto mais camadas de segurança, melhor.
  NUNCA CONFIE EM APENAS UM SERVIÇO DE AUTORIZAÇÃO.

  Use criptografias, em senhas, e informações vitais do usuário.
  Usar SSL, usar o https.


  Session Hijacking -> Ataque realizado em sessões, acontece porque, quando você acessa um site, o servidor cria um arquivo de texto no servidor, contendo o ID de sessão. Juntamente ele cria esse mesmo arquivo na máquina do usuário, e então o site compara esses arquivos e caso esteja igual, ele compartilha os dados que estão sendo trafegadas na sessão tanto nesse arquivo de texto localizado na máquina do cliente, quanto no servidor.

  No, caso, esse ataque ocorre quando um usuário cracker/hacker, consegue acesso a esse ID de sessão, e posteriormente, ele manda uma requisição pro servidor, passando esse ID de sessão e caso esse ID exista, ele consegue acesso aos dados de um outro usuário.

  SSL (Security Socket Layer) -> Camada de segurança, que encripta as informações que estão em tráfego entre o usuário e o servidor, provendo uma certa segurança para sua aplicação Web.

  O SSL funciona como um documento, pois uma autoridade certificadora, cria um documento que possui todas as informações da empresa(local, função, dominio etc), e então eles verificam se essas informações são verdadeiras, e caso for, eles irão assinar esse documento, e então será gerado uma chave criptografada (arquivo de texto) para ser importado para o servidor web. Quem instala e configura esse certificado, é o pessoal da infraestrutura.

  Caso for uma máquina virtual, é necessário fazer o registro e a configuração desse certificado.

  Métodos para evitar o Session Hijacking: 

  Usar SSL
  Gerar um novo ID de sessão.

  
