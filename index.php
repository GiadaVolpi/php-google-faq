<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Google FAQs</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <?php
        $faqs = ["<h2>Come state attuando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) sul diritto all'oblio?</h2><br>" => "<br><p>La recente sentenza della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. Il tribunale ha riscontrato che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere i risultati per le query che includono il nome della persona. Per qualificarsi, i risultati mostrati dovrebbero essere inadeguati, irrilevanti, non più rilevanti o eccessivi.</p><br><p>Da quando questa sentenza è stata pubblicata il 13 maggio 2014, abbiamo lavorato 24 ore su 24 per conformarci. Questo è un processo complicato perché dobbiamo valutare ogni singola richiesta e bilanciare i diritti dell'individuo di controllare i suoi dati personali con il diritto del pubblico di conoscere e distribuire informazioni.</p><br><p>Se hai una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica a conferma che abbiamo ricevuto la tua richiesta. Valuteremo quindi il tuo caso: tieni presente che potrebbe richiedere del tempo perché abbiamo già ricevuto molte di tali richieste. Nel valutare la tua richiesta, esamineremo se i risultati includono informazioni obsolete sulla tua vita privata. Vedremo anche se esiste un interesse pubblico nelle informazioni rimanenti nei nostri risultati di ricerca, ad esempio se si tratta di truffe finanziarie, negligenza professionale, condanne penali o condotta pubblica come funzionario governativo (eletto o non selezionato). Questi sono giudizi difficili e, in quanto organizzazione privata, potremmo non essere in una buona posizione per decidere sul tuo caso. Se non sei d'accordo con la nostra decisione, puoi contattare il DPA locale.</p><br><p>Non vediamo l'ora di lavorare a stretto contatto con le autorità di protezione dei dati e altri nei prossimi mesi mentre perfezioniamo il nostro approccio. La sentenza della CGUE costituisce un cambiamento significativo per i motori di ricerca. Sebbene siamo preoccupati per il suo impatto, crediamo anche che sia importante rispettare la sentenza della Corte e stiamo lavorando duramente per escogitare un processo conforme alla legge.</p><br><p>Quando si cerca un nome, è possibile che venga visualizzato un avviso in cui si afferma che i risultati potrebbero essere stati modificati in conformità con la legge sulla protezione dei dati in Europa. Stiamo mostrando questo avviso in Europa quando un utente cerca la maggior parte dei nomi, non solo le pagine che sono state interessate da una rimozione.</p><br>",
        "<h2>In che modo Google protegge la mia privacy e protegge le mie informazioni?</h2><br>" => "<br><p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è prioritario fornire una sicurezza elevata e darti la sicurezza che le tue informazioni siano sicure e accessibili quando ne hai bisogno.</p><br><p>Lavoriamo costantemente per garantire una sicurezza elevata, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno in sicurezza e impieghiamo esperti di fama mondiale nella sicurezza dei dati per proteggere le tue informazioni. Abbiamo anche creato strumenti per la privacy e la sicurezza di facile utilizzo come Google Dashboard, verifica in due passaggi e Impostazioni annunci. Quindi, quando si tratta delle informazioni che condividi con Google, hai il controllo.</p><br><p>Puoi trovare ulteriori informazioni sulla sicurezza online, incluso come proteggere te stesso e la tua famiglia online, nel Centro sicurezza di Google .</p><br><p>Ulteriori informazioni su come manteniamo le tue informazioni personali private e sicure e ti garantiamo il controllo.</p><br>",
        "<h2>Come posso rimuovere le informazioni su di me dai risultati di ricerca di Google?</h2><br>" => "<br><p>I risultati di ricerca di Google riflettono i contenuti disponibili pubblicamente sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti Web, quindi la rimozione dei risultati di ricerca da Google non rimuoverà i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, contatta il webmaster del sito su cui è pubblicato il contenuto e chiedigli di apportare una modifica. Inoltre, se ai sensi della legge europea sulla protezione dei dati, desideri richiedere la rimozione di alcune informazioni su di te che compaiono nei risultati di ricerca di Google, fai clic qui . Una volta che il contenuto è stato rimosso e Google ha notato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. Se hai una richiesta di rimozione urgente, puoi anchevisita la nostra pagina di aiuto per ulteriori informazioni .</p>",
        "<h2>Le mie query di ricerca vengono inviate a siti Web quando faccio clic sui risultati di Ricerca Google?</h2><br>" => "<br><p>In alcuni casi, sì. Quando si fa clic su un risultato di ricerca in Ricerca Google, il browser Web può anche inviare l'indirizzo Internet o l'URL della pagina dei risultati della ricerca alla pagina Web di destinazione come URL di riferimento . L'URL della pagina dei risultati di ricerca può talvolta contenere la query di ricerca immessa. Se si utilizza Ricerca SSL (funzionalità di ricerca crittografata di Google), nella maggior parte dei casi, i termini di ricerca non verranno inviati come parte dell'URL nell'URL del referrer. Esistono alcune eccezioni a questo comportamento, ad esempio se si utilizzano browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL del referrer potrebbero essere disponibili tramite Google Analytics o un'interfaccia di programmazione dell'applicazione (API). Inoltre, gli inserzionisti possono ricevere informazioni relative alle parole chiave esatte che hanno attivato un clic sull'annuncio.</p>"];
        ?>
        <header>
            <strong></strong>
            <div class="header-logo">
                <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-sva-scholarship-20.png" alt="logo Google">
                <span>Termini e Condizioni</span>
            </div>
            <div class="header-menu">
                <ul>
                    <li>Panoramica</li>
                    <li>politica sulla riservatezza</li>
                    <li>Termini del servizio</li>
                    <li>tecnologie</li>
                    <li>FAQ</li>
                </ul>
                <span>Account Google</span>
            </div>
        </header>
        <main>
            <?php
            foreach ($faqs as $key => $answers) {
                echo ($key);
                echo ($answers);
                echo "<br>";
            }
            ?>
        </main>
    </body>
</html>
