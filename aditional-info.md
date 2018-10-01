# curso-php
-- Boas práticas -- 
Tip: Utilizar um arquivo config.php para armanezar um cógido para ajudar nas suas páginas com uma gama de recursos muito úteis, deixando cada vez mais seu código inteligente
Tip: Organize suas interfaces e classes abstratas e comuns em diferentes pastas e organizar por assuntos das classes.
Tip: 

Precedência de Operador = Prioridade de execução dos tipos de operadores.

Interoperabilidade de sistemas = Faz que possa utilizar dados de um sistema, por exemplo, feito em PHP, com um outro sistema feito em JAVA. Utiliza-se o arquivo JSON para isso. JSON se torna mais leve que o      XML pois ele utiliza menos caracteres, e é utilizado em praticamente todas as linguagens. O JSON serializa as variáveis, por exemplo, um array bidimensional.

Variáveis locais e variáveis de sessão = As variáveis locais só funcionam na página onde são criadas ou se esse arquivo vier com inclusão de um outro arquivo (com o include ou require). Já as variáveis de            sessão se assemelham as variáveis super-globais, pois elas são enxergadas em todo o código enquanto o usuário estiver online. A partir do momento que o usuário acessa o site na internet, uma sessão é criada entre o usuário e o servidor (um arquivo). Amarra informações/dados do servidor com os dados locais (do navegador) do usuário. Normalmente duram em torno de 20 minutos essas sessões, mas pode variar, como em um app de online banking que pode em torno de 2 minutos de inatividade já encerrar sua sessão atual com o servidor.

ID de sessão = É uma identificação da sua sessão única no servidor, para poder identificar que é você, e ao abrir um nova aba, por exemplo, em uma navegação anônima, ele cria uma nova sessão. 

Session hijacking = Se o hacker conseguir o acesso ao ID da sessão do usuário, ele pode roubar os dados presentes naquela sessão. Uma forma de se progeter disso é com o HTTPS, que entre outras informações        importantes ele irá criptografar o ID da sessão. Uma boa prática é usar a session_regenerate_id em um arquivo, com o nome, por exemplo, de valida.php, mesmo ele já tendo um ID de sessão criado, ele vai       criar um outro ID.

Time Stamp = Uma marca temporal (ou estampa de tempo) é uma cadeia de caracteres denotando a hora ou data que certo evento ocorreu. A cadeia é geralmente apresentada num formato consistente, permitindo fácil comparação entre duas marcas temporais distintas. Elas são padronizadas pela Organização Internacional para Padronização (ISO) através da ISO 8601. Exemplo: 1970-01-01

SPL = Standard php library, um conjunto de funções padrões do php usadas para resolver lacunas presentes em seu código.