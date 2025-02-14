index.php

<?php
# LE VARIABILI, COSTANTI E TIPIZZAZIONE
   $a = 10;
   $_a = 11;
   $_3a = 12;

   echo $_3a; // 12

   $anniUtenteStandard = 18; // Camel case
   $anni_utente_standard = 18: // Snake case

   $a = 10; // Integer
   $A = 'Hello PHP'; // String
   $b = true; // Boolean
   $B = false;
   $c = [1, 10, 12]; // Array

   // Non è necessario tipizzare i dati, php è un linguaggio a tipizazzione dinamica    
   // Se riassegno una variabile quest'ultima sovrascrive la precedente
   
   $nome1 = 'Gianluca';
   $nome2 = $nome1; 

   //le variabili sono indipendenti 

   $nome1 = 'Simone'

   echo $nome2; // Quest'echo darà 'Gianluca'

   $nome1 = 'Gianluca';
   $nome2 = &$nome1; // Assegnamento per riferimento, le due variabili puntano ad una stessa posizione in memoria al quale è assegnato il valore

   $nome1 = 'Simone';

   echo $nome2; // Quest'echo darà 'Simone'

   $nome1 = 'Gianluca';
   $nome2 = &$nome1;
   $nome3 = &$nome2;

   $nome2 = 'Andrea';

   echo $nome1; // Quest'echo darà come risultato 'Gianluca'
   echo $nome2; // Quest'echo darà come risultato 'Gianluca'
   echo $nome3; // Quest'echo darà come risultato 'Andrea'

# LE COSTANTI

   define('APP_VERSION', 1); // Per convenzione quando utilizziamo una costante utilizziamo lettere MAIUSC, create in runtime
   const APP_VERSION = 1; // Altro modo per indicare una costante senza necessità di () e '', questa richiede = num, create in fase di compilazione
   $numero; // La variabile non richiede per forza l'assegnazione di un valore ma lo si può impostare successivamente nello script  

   // quando eseguiamo lo script vi è una fase di compilazione ed una fase di effettiva esecuzione del codice
   // non possiamo creare le constanti con 'const' all'interno delle strutture di controllo

   if(true) {
    define('APP_VERSION', 1); // Questa sintassi non genererà errore, se avessi utilizzato 'const' il codice avrebbe generato un 'parse error'
   }

   echo APP_VERSION; // Output 1 perchè abbiamo definito che la costante 'APP_VERSION' ha valore 1

   $user = 'USER_STANDARD';
   define('STATUS_'.$user, 4) // Sto concatenando la stringa 'STATUS_' alla stringa 'USER_STANDARD' con l'operatore '.'

   echo STATUS_USER_STANDARD; // Genererà il valore 4

   echo PHP_VERSION; // Restituirà la versione di php che sto utilizzando

# COSTANTI "MAGICHE"
   echo __FILE__; // Restituirà il percorso assoluto del file 
   echo __LINE__;  // Restituirà il valore della riga in cui è stata scritta, in questo caso '73'

   $a = 10;
   $a = 'Corso PHP'; // Quest'assegnamento andrà a sovrascrivere il precedente

# TIPIZZAZIONE (DINAMICA IN PHP)

   $stringa = 'Testo'; // Stringa
   $interi = 10; // Intero
   $decimale = 2.4; // Decimale
   $vero = true; // Booleano
   $false = false;

   echo $vero; // Il tipo booleano 'true' viene convertito in automatico da php in '1', 'false' viene convertito in stringa vuota

   $libri = ['Libro1', 'Libro2', 'Libro3']; // Array
   echo $libri; // Warning, non è possibile effettuare la conversione di un array in una stringa

   var_dump $libri; // Output: array(3) { [0]=> string(6) "Libro1" [1]=> string(6) "Libro2" [2]=> string(6) "Libro3" }

   $interi = null; // Per resettare il valore della variabile durante la compilazione

# ACCENNO ALLE FUNZIONI

 echo 1;
 echo 2;

 // Output prima il valore 1 e poi il valore 2, ma possiamo modificare il flusso delle istruzioniecho 1;

 function funzione1() {
    echo 'Esecuzione funzione...'; // Per restituire questo valore bisogna invocare la funzione, la funzione può essere invocata più volte
 }
 funzione1(); // Invocazione della funzione
 echo 2;

 funzione1();
 echo 1;
 echo 2; 

 // Restituirà Esecuzione funzione...12

 function funzione1($valore) { // $valore è un parametro
    echo $valore;
 }

 funzione1(0); // I valori passati in invocazione della funzione sono gli argomenti, mentre i parametri sono quelli elencati in definizione della funzione
 echo 1;
 echo 2;
 funzione1(3);

 // l'output sarà 0123

 function funzione1($valore) {
    return $valore + 1.2;
 }

 funzione1(0);
 echo 1;
 echo 2;
 funzione1(3); 

 // L'output sarà 12 perchè all'interno della funzione non facciamo nessun echo, per utilizzare il valore di ritorno dovrò impostare così:

 function funzione1($valore) {
    return $valore + 1.2;
 }

 $valore1 = funzione1(0);
 $valore2 = funzione1(3);

 echo $valore1;
 echo 1;
 echo 2;
 echo $valore2;

 // L'output sarà 1.2124.2 

 echo funzione1(0);
 echo 1;
 echo 2;
 echo funzione1(3);

 // L'output sarà il medesimo 1.2124.2



# FUNZIONE VAR_DUMP e ISSET

 $a = 2.5;

 var_dump($a); // Restituirà sul browser il tipo di valore e il valore

 $a = 2.5;
 $test = isset($a);

 var_dump($test); // Restituirà il valore booleano true

 $test = isset($b); 

 var_dump($test); // Restituirà false perchè la variabile $b non è stata impostata. Ugualmente se dichiaro la variabile e se gli assegno valore null

 // N.B. Se dichiaro la variabile come testo vuoto es. $b = '' il var_dump($test) restituirà true

# FUNZIONE GETTYPE 

 $a = '';
 echo gettype($a); // Restituirà il tipo di valore associato alla variabile (in questo caso 'string')

 var_dump(gettype($a)); // Verrà eseguito un var_dump della funzione di ritorno dell'invocazione della funzione 'gettype'

# STRUTTURE DI CONTROLLO (if)
 
 $meteoDomani = 'pioggia';

 if($meteoDomani == 'sole') { // Il == in questo caso equivale a fare 'pioggia' == 'sole'
    echo 'Esco a fare una passeggiata...';
 } else {
    echo 'Resto a casa.';
 } // Output Resto a casa.

# INTERI E FLOAT

 $numero = 1; // intero
 $numero = 1.25; // float

 $test = is_numeric($numero);

 var_dump($test); // output 'true'

 // assegnando una stringa alla variabile $numero = 'Stringa' l'output del var_dump($test) sarà 'false'

 // alternativamente se assegniamo alla variabile $numero = '5' quindi come stringa l'output del var_dump($test) sarà comunque 'true'

 $numero = 5; 

 $test = is_int($numero);

 var_dump($test); // l'output sarà true perchè 5 è intero 

 $test = is_float($numero);

 var_dump($test); // l'output sarà false perchè 5 è intero e non decimale,float

# OPERAZIONI ARITMETICHE CON I NUMERI 
   
 echo 2 + 1.4; // 3.4

 echo 2 - 1.4; // 0.6

 echo 2 * 1.4; // 2.8

 echo 2 / 1.4; // 1.42857..

 var_dump(2 / 1.4); // otteniamo lo stesso valore su browser

 echo gettype(2 / 1.4); // otteniamo indicazione double

 echo 10 % 3; // 1 

 echo 9 % 3; // 0 

 echo 11 % 3; // 2

 // il modulo (%) è la parte rimanente di una divisione es. 10 % 3 avremo il valore 1 poichè 10/3=3 con resto di 1

 echo 2 ** 3; // 8, il ** eleva alla potenza 

 $x = '10';
 $y = 5; 

 echo $x + $y; // 15

 // php effettua automaticamente la conversione di tipizzazione per effettuare operazioni aritmetiche
 // le operazioni aritmetiche tra tipi diversi di dati potrebbe portare ad errori inaspettati e ad errori a runtime, ossia errori in esecuzione del codice quini non accorgerci subito dell'errore
 // dovremmo adottare per esempio il type casting 

 var_dump($x); // string '10' (length=2)

 // possiamo convertire utilizzando il type casting:

 $x = int('10'); 

 // avendo utilizzato il type casting 'int' effettuando il var_dump otterremo:

 var_dump($x); // int 10

# CONFRONTO TRA NUMERI FLOAT: 

 $x = 0.1 + 0.2; 
 $y = 0.3; 

 $test = $x == $y; // vogliamo confrontare questi due valori

 var_dump($test); // boolean false perchè il dispositivo ragiona in binario quindi 0.1 + 0.2 ha una rappresentazione binaria diversa da 0.3 (0.1+0.2=0.000..4, verificabile da console da browser con fn f12)

 // per confrontare in maniera sicura due valori float possiamo pensare di utilizzare un delta

 $delta = 0.0000001; // impostiamo un valore delta, quindi se i due valori differiscono di questo valore possiamo considerarli uguali
 $diff = abs($x-$y); // differenza in valore assoluto di $x - $y
 
 if($diff < $delta) {
   echo "Le variabili x e y sono uguali"; 
 } else {
   echo "Le variabili x e y non sono uguali"; 
 }

 // a questo punto eseguendo lo script avremo 'Le variabili x e y sono uguali' 

# FUNZIONI SUI NUMERI 

 // per arrotondare ad un intero superiore possiamo utilizzare la funzione ceil dall'inglese 'soffitto'
 // all'intero inferiore la funzione floor dall'inglese 'pavimento'
 // all'intero più vicino la funzione round

 echo ceil(2.1); // 3 arrotondando all'intero superiore

 echo floor(2.1); // 2 arrotondando all'intero inferiore

 echo round(2.6); // 3 arrotondando all'intero più vicino

 echo round(2.5); // 3 

 echo round(2.4); // 2

 $voti = [26, 24, 30, 21]; // array

 $minore = min($voti); // utilizziamo la funzione min per ottenere il valore più basso 

 echo $minore; // 21 

 $maggiore = max($voti); // utilizziamo la funzione max per ottenere il valore più alto

 echo $maggiore; // 30

 // una necessità che potremmo avere è quella di generare un numero casuale all'interno di un certo range

 $casuale = mt_rand(5,100); // utilizziamo la funzione mt_rand oppure rand

 echo $casuale; // 65 , riesieguiamo lo script 72,... sempre random estremi inclusi in questo caso 5 e 100

# LE STRINGHE

 // per racchiudere una stringa utilizziamo apici singoli o doppi ma è differente, nel primo caso non viene effettuato il parsing delle variabili ovvero:

   $nome = 'Gianluca'; 

   echo 'Ciao da $nome'; // eseguendo lo script otteniamo Ciao da $nome 

   echo "Ciao da $nome"; // eseguendo lo script con apici doppi avremo Ciao da Gianluca, nota che la variabile tra apici doppi assume la stessa colorazione

   // per utilizzare comunque gli apici singoli dobbiamo utilizzare la concatenazione tra stringhe

   echo 'Ciao da' .$nome; // eseguendo lo script avremo Ciao da Gianluca

   // se la stringa deve contenere un apostrofo dobbiamo utilizzare l'escape dell'apostrofo

   echo 'L\'altro giorno...'; // utilizzare un escape significa mettere un backslash prima dell'apostrofo   

   echo "L'altro giorno..."; // utilizzando gli apici doppi non dobbiamo utilizzare l'escape dell'apice, se però all'interno della stringa sono presenti doppi apici dovremmo eseguire l'escape dei doppi apici

   echo "L'altro \"giorno\"..."; // utilizziamo il backslash prima del doppio apice interno

   echo "Prima riga\nSeconda riga"; // abbiamo Prima riga poi a capo Seconda riga 
   
   echo 'Prima riga\nSeconda riga'; // utilizzando l'apice singolo non viene riconosciuto il carattere speciale dopo lo backslash, N.B. se utilizzamo windows per andare a capo bisognerà utilizzare \r
    
# HEREDOC E NOWDOC 
   $numero = 100; 
   $stringaHeredoc = <<<STRINGA
   Mostra il numero $numero
   Seconda riga "
   Terza riga ' 
   STRINGA; 
   echo $stringaHeredoc; // mostrerà Mostra il numero 100, Seconda riga ", Terza riga ' con i relativi a capo

   $stringaNowdoc = <<<'STRINGA'
   Mostra il numero $numero
   Seconda riga "
   Terza riga '
   STRINGA; 
   echo $stringaNowdoc; // mostrerà Mostra il numero $numero, Seconda riga ", Terza riga ' con i relativi a capo, quindi non effettuerà il parsing di $numero, utilizzando nowdoc non dobbiamo preoccuparci di effettuare eventuali escape di apici doppi o singoli

# FUNZIONI SU STRINGHE

   // echo e print 

   echo 1; // al contrario di una funzione1() dove devo dichiarare le parentesi tonde con echo e print non devo farlo
   print 2; // con print non posso mandare print 2, 'stringa' ma che posso fare con echo

   echo 2, "Corso PHP", 3; 

   // explode e implode

   $user = 'Guido Rossi programmatore';
   $arr = explode(" ", $user); // ottengo un array delle parole contenute in $user, imposto dopo la parentesi uno spazio in questo modo php capirà che dovrà inserire l'elemento relativo come elemento dell'array 
   var_dump($arr); // output: array(3) di 3 elementi, { [0] => string(5) "Guido" [1] => string(5) "Rossi" [2] => string(13) "programmatore" } dove i valori tra parentesi sono il numero di caratteri di ogni parola

   echo implode(" ", $arr); // implode converte un array in stringa e possiamo utilizzare direttamente un echo poichè è una stringa

   echo implode (",",$arr); // mettendo una virgola come primo argomento di implode le parole della stringa saranno separate da virgola

   // addslashes 

   $user = "Guido D'Elia"; 
   echo addslashes($user); // in output avremo Guido D\'Elia , prima dell'apostrofo viene inserito un backslash, questa funzione viene solitamente utilizzata prima di inserire un valore all'interno di un database questo per evitare che il database subisca un'attacco di tipo SQL Injection.

   //str_contains (PHP 8)

   var_dump(str_contains("Corso PHP", "JavaScript")); // in questo modo sto controllando se all'interno della stringa "Corso PHP" è presente la sottostringa "JavaScript", in questo caso false, se avessi inserito "PHP" come secondo valore avrei ottenuto true e anche inserendo "o PHP" avremo true
   
   //str_starts_with (PHP 8)

   var_dump(str_starts_with("Corso PHP", "Corso")); // vogliamo sapere se la prima stringa inizia per "Corso" in questo caso avremo true, se fosse stati "Corsi" avremo avuto false

   //str_ends_with (PHP 8)

   var_dump(str_ends_with("Corso PHP", "PHP")); // vogliamo sapere se la prima stringa termina per "PHP" in questo caso true

   //trim,rtrim e ltrim

   $pat = '/user/'; // quello che vogliamo fare è rimuovere gli slash da questa stringa utilizzando trim
   echo trim($path, '/'); // eseguendo lo script rimuovere il secondo argomento, in questo caso gli slash 

   // con rtrim e ltrim lavoriamo solo dal lato "right" e dal lato "left" della stringa 

   //lcfirst, ucfirst e ucwords

   $str = "Questo è un corso PHP";
   echo lcfirst($str); // lcfirst mi mette la prima lettera di una stringa in minuscolo
   echo ucfirst($str); // ucfirst mi mette la prima lettera di una stringa in maiuscolo
   echo ucwords($str); // ucwords mi mette le prime lettere di ogni parola in maiuscolo

   //strtolower e strtoupper

   $str = "Questo è un corso PHP";
   echo strtolower($str); // strtolower mi converte tutta la stringa in minuscolo
   echo strtoupper($str); // strtoupper mi converte tutta la stringa in maiuscolo ad eccezione della è, se vogliamo anche la è in maiuscolo utilizziamo una variante, le funzioni MB che sta per MultiByte
   echo mb_strtoupper($str); // converte l'intera stringa in maiuscolo compreso la è, l'estensione mb deve essere attiva in php

# I BOOLEANI 

   $booleano = true; // maiuscolo o minuscolo true o TRUE, false o FALSE
   $isAdmin = true; // un dato utente è impostato come Admin ed è quindi autorizzato a visualizzare un certo tipo di informazioni

   if($isAdmin === true) {

      echo "Sei autorizzato all'accesso...";
   } else {
      echo "Non sei autorizzato all'accesso...";
   } 
   // in questo caso otteniamo true

# GLI ARRAY

   $piani = 2; 
   $mq = 30;
   $indirizzo = "Via..."; // in php possiamo definire dei valori composti attraverso gli array, ma anche utilizzando la funzione array:

   $alunni = array('Michele', 'Miriam', 'Luisa');
   var_dump($alunni); // array(3) { [0] => string(7) "Michele", [1] => string(6) "Miriam", [2] => string(5) "Luisa"}
   echo $alunni[1]; // accediamo all'elemento dell'array con indice [1] in questo caso "Miriam" 

   // se non conosciamo di quanti elementi è composto un array: 

   $alunni = ['Michele', 'Miriam', 'Luisa'];
   $numeriElementi = count($alunni); 
   echo $numeriElementi; // output numero di elementi di un array che in questo caso sono 3
   echo $alunni[2]; // otteniamo l'ultimo elemento poichè in un array il primo elemento è indicizzato come [0]
   echo $alunni[$numeriElementi-1]; // perchè $numeriElementi = 3, quindi 3-1=2 che sarebbe l'indice [2] in questo caso "Luisa"

   $user = [
      'nome' => 'Gianluca'
   ]; // questo è un array associativo poichè abbiamo associato al singolo elemento 'Gianluca' la chiave 'nome' 

   // se vogliamo definire un'altro elemento inseriamo una virgola dopo 'Gianluca'

   $user = [
      'nome' => 'Gianluca',
      'professione' => 'Developer'
   ]; // in questo caso abbiamo due elementi al quale abbiamo associato la chiave 'nome' e la chiave 'professione', rispettivamente 'Gianluca' e 'Developer'
   var_dump($user); // output array(2) { 'nome' => string(8) "Gianluca", 'professione' => string(9) "Developer" }
   // quindi non abbiamo più un'indice numerico ma la sua chiave

   echo $user['nome']; //  Gianluca
   echo $user['nome']. " " . $user['professione'];
   echo "{$user['nome']} {$user['professione']}"; // utilizzando i doppi apici dovrò impostare in questo modo aggiungendo le parentesi graffe, l'output sarà Gianluca Developer

   // extract

   extract($user); // extract creerà due variabili $nome = 'Gianluca' e $professione = 'Developer'
   echo $nome, $professione; // Gianluca Developer

# ARRAY UNPACKING

    $a = [1,2,3];
    $b = [...$a,4,5] // i 3 puntini "..." significano spread quindi espandono l'array $a e lo aggiunge alla variabile $b
    
    var_dump($b) // output: array(5) { [0] => int(1) [1] => int(2) [2] => int(3) [3] => int(4)

    // posso anche cambiare l'indice direttamente all'interno della variabile $a

    $a = [1,'due' => 2,3]; // in questo modo abbiamo associato alla chiave stringa 'due' il valore 2 e lo abbiamo inserito nella posizione 1 dell'array $a

    phpinfo(); // questa funzione permette di visualizzare le informazioni di php su un determinato file o funzione

# ARRAY MULTIDIMENSIONALI

    $multidimensionale = [
       ['ISBN' => 1234,'titolo' => 'Libro 1'],
       ['ISBN' => 1234,'titolo' => 'Libro 2'],
       ['ISBN' => 1234,'titolo' => 'Libro 3']
    ]; // abbiamo un array multidimensionale dove ogni elemento è un'altra array che contiene le informazioni di un libro

    echo $multidimensionale; // output: Array ( [0] => Array ( [ISBN] => 1234 [titolo] => Libro 1 ) [1] => Array ( [ISBN] => 1234 [titolo] => Libro 2 ) [2] => Array ( [ISBN] => 1234 [titolo] => Libro 3

    // se vogliamo accedere all'ultimo elemento del libro 3 

    echo $multidimensionale[2]['titolo']; // output: Libro 3   
    $item = $multidimensionale[2]; // creo una variabile $item che contiene l'ultimo elemento del libro 3

    var_dump($item); // output: Array ( [ISBN] => 1234 [titolo] => Libro 3 )

    echo $item['titolo']; // output: Libro 3

    echo $multidimensionale[0]['ISBN']; // output: 1234

    // posso indicizzare anche l'array multidimensionale con un'array di indici

    $multidimensionale = [
       'primo' => ['ISBN' => 1234,'titolo' => 'Libro 1'],
       'secondo' => ['ISBN' => 1234,'titolo' => 'Libro 2'],
       'terzo' => ['ISBN' => 1234,'titolo' => 'Libro 3']
    ];

    $multidimensionale['secondo']['titolo']; // output: Libro 2

# TYPE CASTING

    // in php non dobbiamo dichiarare il tipo di dato prima di assegnarlo, ma php fa il cast automaticamente
    // in alcuni casi dobbiamo cambiare il tipo di dato usando la funzione (int), (float), (string), (bool) (object) ecc...

    $stringa = '22';
    $intero = (int)($stringa); // ora $intero contiene 22
    var_dump($intero); // output: int(22)

    $booleano = true;

    $intero = (int)($booleano); // ora $intero contiene 1 perchè true è equivalente a 1 in PHP viceversa false è equivalente a 0

    var_dump($intero); // output: int(1) 

    $intero = (float)($booleano); // ora $intero contiene 1.0 perchè true è equivalente a 1.0 in PHP viceversa false è equivalente a 0.0
   
    var_dump($intero); // output: float(1.0) perchè il tipo di dato è float

    $numero = 30;

    $array = (array)$numero; // ora $array contiene l'array [0 => 30] perchè il numero viene convertito in un array di un solo elemento
    var_dump($array); // output: array(1) { [0] => int(30) }

    $array  = [10, 'Corso PHP', true];

    $oggetto = (object)$array; // ora $oggetto contiene l'oggetto stdClass con proprietà '0' => 10, '1' => 'Corso PHP, '2' => bool(true) } 

    var_dump($oggetto); // output: object(stdClass)#1 (2) { ["0"]=> int(10) ["1"]=> string(9) "Corso PHP" ["2"] => bool(true) }

    $stringa = (string)$array; // abbiamo una warning perchè non è possibile convertire un array in una stringa, ma possiamo convertirlo in un oggetto stdClass e poi convertirlo in una stringa

    $stringa = (string)$oggetto; // ora $stringa contiene la stringa "Array ( [0] => 10 [1] => Corso PHP [2] => bool(true) )"

    $numero = 40; 

    echo $numero; // output 40   

# ARRAY SUPERGLOBALI 

    // gli array superglobali sono variabili predefinite che vengono disponibili in tutte le funzioni di PHP

    // $_SERVER: contiene le informazioni relative alla richiesta HTTP

    // $_GET: contiene i valori passati attraverso la query string

    // Scope (Ambito di visibilità delle variabili)

    $nome = 'Michele';
    $nome = 'Luisa'; // Il riassegnamento sovrascrive il precedente valore di $nome

    // se non vogliamo sovrascivere la variabile possiamo definire scope non globali 

    function informazioniCorso() { // quando creamo una funzione stiamo creando un'ambito separato rispetto a quello globale  
      $nome = 'Corso PHP';
    }

    echo $nome; // output: Luisa perchè stiamo utilizzando la variabile locale $nome = 'Corso PHP' dentro la funzione

    function informazioniCorso() { 
      $nome = 'Corso PHP';
      echo $nome; 
    }

    echo $nome;
    informazioniCorso(); //output GianlucaCorso PHP , le due variabili anche se hanno lo stesso nome sono in ambiti differenti quindi non vanno ad interferire tra di loro

    function informazioniCorso($valore) {
     echo $valore;
    }

    $valore = 1;
    informazioniCorso($valore); // output: 1 perchè stiamo passando un parametro alla funzione, abbiamo passato in input alla funzione da ambito globale ad ambito locale il valore '1'

    function incrementa($valore) {
      return $valore * 1.2;   
    }

    $valore = 1; 
    $risultato = informazioniCorso($valore); 
    echo $risultato; // output: 1.2 perchè stiamo invocando la funzione incrementa che restituisce il risultato moltiplicato per 1.2

    // $GLOBALS: contiene tutte le variabili predefinite che vengono disponibili in tutte le funzioni di PHP

    $corso = 'PHP';

    echo $GLOBALS['corso']; // output: PHP perchè stiamo utilizzando la variabile globale $corso 

    // se però definisco una funzione con lo stesso nome della variabile globale avremo problemi di ambiguità

    $corso = 'PHP';
    
    function test() {
      echo $corso;
    }
   test(); // avremo un'errore perchè la variabile $corso non è definita in questa funzione

   // però se riscriviamo la funzione in questo modo:

   function test() {
      echo $GLOBALS['corso'];
   }
   test(); // output: PHP perchè stiamo utilizzando la variabile globale $corso 

   // altra sintasssi: 

   function test() {
      global $corso;
      echo $corso;
   }
   test(); // output: PHP perchè stiamo utilizzando la variabile globale $corso

   // altra sintassi 

   function test($corso) {
      echo ($corso)
   }
   test($corso); // output: PHP perchè stiamo utilizzando

   // per fare riferimento alla stessa posizione di memoria utilizzziamo la e commerciale

   $corso = 'PHP';

   function test(&corsoParam) {
      $corsoParam = 'JavaScript';
   }
   test($corso); // output: JavaScript perchè stiamo utilizzando la variabile globale $corsoParam che è una referenza alla stessa variabile globale $corso

   // $_SERVER contiene le informazioni relative alla richiesta HTTP per esempio gli headers, l'URL, la porta, il protocollo, ecc...
   // avendo diversi ambienti web server non è detto che puntiamo allo stesso $_SERVER

   // $_GET contiene i valori passati attraverso la query string
   // esempio: http://localhost/script.php?nome=Michele&cognome=Bianchi
   // $_GET['nome'] => 'Michele'
   // $_GET['cognome'] => 'Bianchi'

   // $_POST contiene i valori passati attraverso il form inviati al web server attraverso il metodo POST
   // esempio: http://localhost/script.php
   // $_POST['nome'] => 'Michele'
   // $_POST['cognome'] => 'Bianchi'

   // $_FILES contiene le informazioni relative ai file caricati attraverso il form inviati al web server attraverso il metodo POST
   // esempio: http://localhost/script.php
   // $_FILES['file']['name'] => 'file.txt'
   // $_FILES['file']['type'] => 'text/plain'
   // $_FILES['file']['tmp_name'] => '/tmp/phpF2K7UJ'
   // $_FILES['file']['error'] => 0
   // $_FILES['file']['size'] => 256

   // $_COOKIE contiene le informazioni relative ai cookie inviati al web server attraverso il metodo GET
   // esempio: http://localhost/script.php?cookie=valore
   // $_COOKIE['cookie'] => 'valore'

   // $_SESSION contiene le informazioni relative alle sessioni inviati al web server attraverso il metodo GET
   // esempio: http://localhost/script.php?session=valore
   // $_SESSION['session'] => 'valore'

   // $_REQUEST contiene il contenuto combinato dell'array $_GET, $_POST e $_COOKIE 

   // $_ENV contiene le variabili ambientate predefinite che vengono disponibili in tutte le funzioni di PHP
   // esempio: http://localhost/script.php
   // $_ENV['HTTP_HOST'] => 'localhost'
   // $_ENV['REQUEST_URI'] => '/script.php'

# ARRAY SUPERGLOBALE $_GET 

   // entro in node da terminale (ctrl + J) e digitando http.METHODS per vedere i metodi HTTP supportati dal server esempio 'PUT' 'PATCH' 'DELETE' ecc... 
   // esco da node con process.exit(0);  

   // se vado sulla scheda browser ed apro lo strumento per sviluppatori con "f12" ho la console JavaScript ed andando sulla scheda 'rete' rifacciamo la richiesta aggiornando il browser stiamo effettuando una richiesta GET (se clicchiamo sulla cartella radice ci appare il metodo di richiesta) 

      var_dump $_GET; // output: array(0) { } perchè non ci sono valori passati attraverso la query string

      // però se su browser definiamo un parametro esempio: localhost/corsi/php/index.php?nome=Gianluca&corso=PHP facendo invio otteniamo un array con 2 elementi ['nome' => 'Gianluca', 'corso' => 'PHP'] 

      echo "Corso {$_GET['corso']} realizzato da {$_GET['NOME']}"; // output: Corso PHP realizzato da Gianluca

      // abbiamo recuperato le informazioni dalla query string

      extract($_GET); // estraiamo le variabili dall'array $_GET e le assegniamo alla variabile locale con lo stesso nome
      echo "Corso $corso realizzato da $nome"; // output: Corso PHP realizzato da Gianluca

      var_dump($_GET); // cancelliamo le variabili in input alla query string e riscriviamo localhost/corsi/php/ dopo aver impostato il file html di seguito

      //otteniamo quindi un array vuoto ['nome' => '', 'corso' => ''] ed un form con due input text per nome e corso che se riempiti ed inviati (submit) riempiranno l'array con gli elementi inviati 
   ?>
   
   <!DOCTYPE html>
   <html lang="it">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
   </head>
   <body>
      <form action="index.php" method="GET">
         <input type="text" name="nome" placeholder="Nome *">
         <input type="text" name="corso" placeholer="Corso *">
         <input type="submit" value="Invia">
      </form>
   </body>
   </html>

   <?php

# $_POST contiene i valori passati attraverso il form inviati al web server attraverso il metodo POST  
   
   // se utilizzo il metodo POST nel codice html quindi ..method="POST" i valori name non vengono passati nella query string come succede per GET  
   // se ispezioniamo il browser con f12 non ritroveremo i valori nella scheda rete ma nella scheda payload ed avremo intestazione di risposta ed intestazione di richiesta (comunicazione tra client e server)

   if(isset($_POST['nome'])){
      echo $_POST['nome'];
   }
   echo $_POST['nome']; // nel browser visualizzerò correttamente il form e compilando ed inviando nel camp 'nome' Gianluca vedrò Gianluca sulla pagina



   
?>