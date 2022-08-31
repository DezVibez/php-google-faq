<?php 

$start_link_tag = "<a href='#'> ";
$end_link_tag = "</a>";
$parte_lista = "<ol>
                    <li>
                        La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
                        <ol>
                            <li>
                                Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
                            </li>

                            <li>
                                Google LLC, con sede negli Stati Uniti, per il resto del mondo.
                            </li>
                        </ol>
                    </li>

                    <li>
                        La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.
                    </li>
                </ol>";

$sezioni = [
    [
        'domanda' => "<h2> Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio? <h2>",
        'risposte' => ["La recente $start_link_tag decisione della Corte di giustizia dell'Unione europea $end_link_tag ha profonde conseguenze per i motori di ricerca in Europa.
                         La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, 
                         irrilevanti o non più rilevanti, o eccessivi.",
                        "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta 
                        e effettuare un bilanciamento tra il diritto dell'individuo
                         a controllare i suoi dati personali ed il diritto di tutti 
                         di conoscere e distribuire le informazioni.",
                         "Per presentare una richiesta di rimozione, compila questo $start_link_tag modulo web $end_link_tag. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, 
                         ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e,
                          in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                          "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
                          "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."]
    ],
    [
        'domanda' => '<h2> Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro? <h2>',
        'risposte' => ["Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.", 
        "Siamo costantemente al lavoro per garantire un'elevata sicurezza, 
        proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. 
        Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama
         mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
        "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel $start_link_tag Centro Google per la sicurezza online $end_link_tag.",
        "$start_link_tag Scopri $end_link_tag quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."]
    ],
    [
        'domanda' => '<h2> Perché il mio account è associato a un paese? <h2>',
        'risposte' => ["Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:", 
        "$parte_lista","Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
        "<h3>Stabilire il paese associato al tuo account</h3>",
        "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.",
        "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",
        "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."]
    ],
    [
        'domanda' => '<h2> Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google? <h2>',
        'risposte' => ["I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi $start_link_tag contattare il webmaster $end_link_tag del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile $start_link_tag visitare la nostra pagina di assistenza per avere ulteriori informazioni $end_link_tag."]
    ],
    [
        'domanda' => '<h2> Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web? <h2>',
        'risposte' => ["In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di $start_link_tag URL referrer $end_link_tag. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili $start_link_tag qui $end_link_tag. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."]
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faqs</title>

    <!--importato fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header>

        <div class="d-flex space-between align-vert">

            <div class="d-flex">
                <img class="mx-2 logo-google" src="img/580b57fcd9996e24bc43c51f.png" alt="">
                <h2 class="mx-2" >Privacy e termini</h2>
            </div>

            <div class="d-flex">
                <i class=" mx-2 fa-solid fa-circle"></i>
                <i class=" mx-2 fa-brands fa-google-plus"></i>
            </div>

            </div>
            
            <div class="d-flex ">
                <span class="mx-2">Introduzione</span><span>Norme sulla Privacy</span><span class="mx-2" >Termini di Servizio</span><span>Tecnologie</span><span class="mx-2">Domande Frequenti</span>
            </div>

            

        </div>
        <hr>
    </header>


    <ul class="container">
        <?php foreach($sezioni as $sezione){?>
            <li> 
                <div> 
                    <?php echo $sezione['domanda'] ?>
                </div>  
                
                <?php foreach($sezione['risposte'] as $risposte) {?>
                    <div class="risposte"> <?php echo $risposte ?></div>
                <?php }?>
                
            </li>
            
        <?php }?>
    </ul>

    <footer>

        <hr>

        <div class="container d-flex space-between">
                <div>
                    <span>Google</span> <span>Tutto su Google</span> <span>Privacy</span> <span>Termini</span>
                </div>

                <div>
                    
                </div>
        </div>
        
    </footer>
    
</body>
</html>

<style>

    /* Utils */

    .container {
        margin: 0 auto;
        max-width: 70%;
    }

    .d-flex {
        display: flex;
    }

    .space-between {
        justify-content: space-between;
    }

    .align-vert{
        align-items: center:
    }

    .mx-2{
        margin: 0 20px;
    }

    /* Generics*/

    ul{
        list-style-type: none;
    }

    ol{
        margin: 30px 0;
    }

    ol li{
        margin: 10px 10px;
    }

    a{
        text-decoration: none;
    }

    h3 {
        margin-top: 50px;
    }

    .risposte{
        margin: 30px 0;
    }

    .logo-google {
        height: 40px;
    }

</style>