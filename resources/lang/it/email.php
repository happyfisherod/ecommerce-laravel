<?php
return [

/* ,
|-------------------------------------------------------------------------- ,
| Emails Language Lines ,
|-------------------------------------------------------------------------- ,
| ,
| The following language lines are used by the Mail notifications. ,
| ,
*/

// built-in template ,
'Whoops!' =>"Ops!",
'Hello!' =>'Ciao!',
'Regards' =>'Saluti',
"having_trouble_on_link" =>"Se hai problemi a fare clic sul pulsante \" :actionText \", copia e incolla l'URL sotto \ nnel tuo browser web:",
'All rights reserved.' =>'Tutti i diritti riservati.',


// mail salutation ,
'footer_salutation' =>"Cordiali saluti, :appName",


// custom mail_footer (unused) ,
'mail_footer_content' =>'Vendi e compra vicino a te. Semplice, veloce ed efficiente. ',


// email_verification ,
'email_verification_title' =>'Per cortesia verifichi il suo indirizzo email.',
'email_verification_action' =>'Verifica indirizzo e-mail',
'email_verification_content_1' =>'Ciao :userName!',
'email_verification_content_2' =>"Fai clic sul pulsante in basso per verificare il tuo indirizzo email.",
'email_verification_content_3' =>"Hai ricevuto questa email perché recentemente hai creato un nuovo account :appName o hai aggiunto un nuovo indirizzo email. Se non eri tu, ignora questa email. ",


// post_activated (new) ,
'post_activated_title' =>"Il tuo annuncio è stato attivato",
'post_activated_content_1' =>'Ciao,',
'post_activated_content_2' =>"Il tuo annuncio : titolo è stato attivato.",
'post_activated_content_3' =>"Sarà presto esaminato da uno dei nostri amministratori per la sua pubblicazione in linea.",
'post_activated_content_4' =>"Hai ricevuto questa email perché hai recentemente creato un nuovo annuncio su :appName. Se non eri tu, ignora questa email. ",


// post_reviewed (new) ,
'post_reviewed_title' =>"Il tuo annuncio è ora online",
'post_reviewed_content_1' =>'Ciao,',
'post_reviewed_content_2' =>"Il tuo annuncio : titolo è ora online.",
'post_reviewed_content_3' =>"Hai ricevuto questa email perché di recente hai creato un nuovo annuncio su :appName. Se non eri tu, ignora questa email. ",

// post_republished (new) ,
'post_republished_title' =>"Il tuo annuncio è stato ripubblicato",
'post_republished_content_1' =>'Ciao,',
'post_republished_content_2' =>"Il tuo annuncio <a href=\":postUrl\">:title</a> è stato ripubblicato correttamente.",
'post_republished_content_3' =>"Hai ricevuto questa email perché di recente hai creato un nuovo annuncio su :appName. Se non eri tu, ignora questa email. ",

// post_deleted ,
'post_deleted_title' =>"Il tuo annuncio è stato eliminato",
'post_deleted_content_1' =>'Ciao,',
'post_deleted_content_2' =>"Il tuo annuncio\" :title \"è stato eliminato da :appName all'indirizzo: now.",
'post_deleted_content_3' =>'Grazie per la tua fiducia ea presto.',
'post_deleted_content_4' =>'PS: questa è un\'e-mail automatica, per favore non rispondere.',


// post_seller_contacted ,
'post_seller_contacted_title' =>"Your ad\" :title \"on :appName",
'post_seller_contacted_content_1' =>" Informazioni di contatto: ,
<br />
Name: :name ,
<br />
Email address: :email ,
<br />
Phone number: :phone", 
'post_seller_contacted_content_2' =>"Questa email ti è stata inviata in merito all'annuncio\" :title \"che hai archiviato su :appName: <a href=\":postUrl\">:postUrl</a> ",
'post_seller_contacted_content_3' =>'NOTA: la persona che ti ha contattato non conosce la tua email perché non risponderai.',
'post_seller_contacted_content_4' =>'Ricordati di controllare sempre i dettagli della tua persona di contatto (nome, indirizzo, ...) per assicurarti di avere un contatto in caso di controversia. In generale, scegli la consegna dell\'articolo in mano. ',
'post_seller_contacted_content_5' =>'Attenzione alle offerte allettanti! Fai attenzione alle richieste dall\'estero quando hai solo un\'e-mail di contatto. Il bonifico bancario proposto da Western Union o MoneyGram potrebbe essere artificiale. ',
'post_seller_contacted_content_6' =>'Grazie per la tua fiducia ea presto.',
'post_seller_contacted_content_7' =>'PS: questa è un\'e-mail automatica, per favore non rispondere.',


// user_deleted ,
'user_deleted_title' =>"Il tuo account è stato eliminato su :appName",
'user_deleted_content_1' =>'Ciao,',
'user_deleted_content_2' =>"Il tuo account è stato eliminato da  <a href=\":appUrl\">:appName</a> all'indirizzo :now.",
'user_deleted_content_3' =>'Grazie per la tua fiducia ea presto.',
'user_deleted_content_4' =>'PS: questa è un\'e-mail automatica, per favore non rispondere.',


// user_activated (new) ,
'user_activated_title' =>"Benvenuto in :appName!",
'user_activated_content_1' =>"Benvenuto in :appName :userName!",
'user_activated_content_2' =>'Il tuo account è stato attivato.',
'user_activated_content_3' =>" Nota: il team di :appName ti consiglia di:
<br />
<br />
1 - Fai sempre attenzione agli inserzionisti che si rifiutano di farti vedere il bene offerto in vendita o in affitto,
<br />
2 - Non inviare mai denaro tramite Western Union o altro mandato internazionale.

<br />

In caso di dubbi sulla serietà di un inserzionista, contattaci immediatamente. Possiamo quindi neutralizzare il più rapidamente possibile ed evitare che qualcuno meno informato diventi la vittima.",
'user_activated_content_4' =>"Hai ricevuto questa email perché hai recentemente creato un nuovo account :appName. Se non eri tu, ignora questa email. ",


// reset_password ,
'reset_password_title' =>'Reimposta la tua password',
'reset_password_action' =>'Resetta la password',
'reset_password_content_1' =>'Hai dimenticato la password?',
'reset_password_content_2' =>"Te ne procuro uno nuovo.",
'reset_password_content_3' =>"Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.",


// contact_form ,
'contact_form_title' =>"Nuovo messaggio da :appName",

// post_report_sent ,
'post_report_sent_title' =>"Nuovo rapporto di abuso",
'Post URL' =>"URL post",

// post_archived ,
'post_archived_title' =>"Il tuo annuncio è stato archiviato",
'post_archived_content_1' =>'Ciao,',
'post_archived_content_2' =>"Il tuo annuncio\" :title \"è stato archiviato da :appName all'indirizzo: now.",
'post_archived_content_3' =>"Puoi ripubblicarlo facendo clic qui: <a href=\":repostUrl\">:repostUrl</a> ",
'post_archived_content_4' =>"Se non fai nulla, il tuo annuncio verrà eliminato definitivamente in data :dateDel.",
'post_archived_content_5' =>'Grazie per la tua fiducia ea presto.',
'post_archived_content_6' =>'PS: questa è un\'e-mail automatica, per favore non rispondere.',


// post_will_be_deleted ,
'post_will_be_deleted_title' =>"Il tuo annuncio verrà eliminato tra :days days",
'post_will_be_deleted_content_1' =>'Ciao,',
'post_will_be_deleted_content_2' =>"Il tuo annuncio\" :title \"verrà eliminato tra: days giorni da :appName.",
'post_will_be_deleted_content_3' =>"Puoi ripubblicarlo facendo clic qui: <a href=\":repostUrl\">:repostUrl</a> ",
'post_will_be_deleted_content_4' =>"Se non fai nulla, il tuo annuncio verrà eliminato definitivamente in data :dateDel.",
'post_will_be_deleted_content_5' =>'Grazie per la tua fiducia ea presto.',
'post_will_be_deleted_content_6' =>'PS: questa è un\'e-mail automatica, per favore non rispondere.',

// post_notification ,
'post_notification_title' =>"È stato pubblicato un nuovo annuncio",
'post_notification_content_1' =>"Gentile amministratore,",
'post_notification_content_2' =>"L'utente :advertiserName ha appena pubblicato un nuovo annuncio.",
'post_notification_content_3' =>"Il titolo dell'annuncio: <a href=\":postUrl\">:title</a>
Pubblicato il:: adesso alle: ora",

// user_notification
'user_notification_title' =>'Nuova registrazione utente',
'user_notification_content_1' =>"Gentile amministratore,",
'user_notification_content_2' =>':name si è appena registrato.',
'user_notification_content_3' =>"Registrato il: :now alle :time <br> Email: <a href=\"mailto::email\">:email </a>",

// payment_sent ,
'payment_sent_title' =>"Grazie per il pagamento!",
'payment_sent_content_1' =>'Ciao,',
'payment_sent_content_2' =>'Abbiamo ricevuto il pagamento per l\'annuncio"<a href=":postUrl">:title</a>".',
'payment_sent_content_3' =>'Grazie!',

// payment_notification ,
'payment_notification_title' =>"Il nuovo pagamento è stato inviato",
'payment_notification_content_1' =>"Gentile amministratore,",
'payment_notification_content_2' =>'L\'utente :advertiserName ha appena pagato un pacchetto per il suo annuncio"<a href=":postUrl">:title</a>".',
'payment_notification_content_3' =>'I DETTAGLI DI PAGAMENTO
<br> <strong> Motivo del pagamento: </strong> Ad #: adId -:packageName
<br> <strong> Importo: </strong>:amount :currency
<br> <strong> Metodo di pagamento: </strong>:paymentMethodName',

// payment_approved (new) ,
'payment_approved_title' =>"Il tuo pagamento è stato approvato!",
'payment_approved_content_1' =>'Ciao,',
'payment_approved_content_2' =>'Il pagamento per l\'annuncio"<a href=":postUrl">:title</a>"è stato approvato.',
'payment_approved_content_3' =>'Grazie!',
'payment_approved_content_4' =>'I DETTAGLI DI PAGAMENTO
<br> <strong> Motivo del pagamento: </strong> Ad #: adId -:packageName
<br> <strong> Importo: </strong>:amount :cxurrency
<br> <strong> Metodo di pagamento: </strong>:paymentMethodName',

// reply_form ,
'reply_form_title' =>':subject',
'reply_form_content_1' =>'Ciao,',
'reply_form_content_2' =>" Hai ricevuto una risposta da: :senderName. Vedere il messaggio di seguito: ",


// generated_password ,
'generated_password_title' =>'La tua password',
'generated_password_content_1' =>'Hello :userName!',
'generated_password_content_2' =>"Il tuo account è stato creato.",
'generated_password_verify_content_3' =>"Fai clic sul pulsante in basso per verificare il tuo indirizzo email.",
'generated_password_verify_action' =>'Verifica indirizzo e-mail',
'generated_password_content_4' =>"La tua password è: <strong>:randomPassword</strong>",
'generated_password_login_action' =>'Accedi ora!',
'generated_password_content_6' =>"Hai ricevuto questa email perché recentemente hai creato un nuovo account :appName o hai aggiunto un nuovo indirizzo email. Se non eri tu, ignora questa email. ",

];

?>
