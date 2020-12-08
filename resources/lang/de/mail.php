<?php
return [

/* 
|-------------------------------------------------------------------------- ,
| Emails Language Lines 
|-------------------------------------------------------------------------- ,
| 
| The following language lines are used by the Mail notifications. 
| 
*/ 

// built-in template
        'Whoops!' =>'Whoops!',
        'Hello!' =>'Hallo!',
        'Regards' =>'Grüße',
        "being_trouble_on_link" =>"Wenn Sie Probleme beim Klicken auf die Schaltfläche \":actionText\" haben, kopieren Sie die folgende URL und fügen Sie sie in Ihren Webbrowser ein:",
        'All rights reserved.' =>'Alle Rechte vorbehalten.',


        // Mail-Anrede ,
        'footer_salutation' =>'Grüße,:appName',


        // benutzerdefinierte mail_footer (nicht verwendet)
        'mail_footer_content' =>'Hejwow, Alle Rechte vorbehalten. ',


        // E-Mail-Verifizierung
        'email_verification_title' =>'Bitte überprüfen Sie Ihre E-Mail-Adresse.',
        'email_verification_action' =>'E-Mail-Adresse überprüfen',
        'email_verification_content_1' =>'Hi :userName !',
        'email_verification_content_2' =>'Klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu überprüfen.',
        'email_verification_content_3' =>'Sie erhalten diese E-Mail, weil Sie kürzlich ein neues :appName -Konto erstellt oder eine neue E-Mail-Adresse hinzugefügt haben. Wenn Sie es nicht waren, ignorieren Sie bitte diese E-Mail. ',


        // post_activated (neu)
        'post_activated_title' =>'Ihre Anzeige wurde aktiviert',
        'post_activated_content_1' =>'Hallo',
        'post_activated_content_2' =>'Ihre Anzeige <a href=":postUrl">:title</a> wurde aktiviert.',
        'post_activated_content_3' =>'Es wird bald von einem unserer Administratoren auf seine Online-Veröffentlichung geprüft.',
        'post_activated_content_4' =>'Sie erhalten diese E-Mail, weil Sie kürzlich eine neue Anzeige erstellt haben unter :appName . Wenn Sie es nicht waren, ignorieren Sie bitte diese E-Mail. ',


        // post_reviewed (neu) ,
        'post_reviewed_title' =>'Ihre Anzeige ist jetzt online',
        'post_reviewed_content_1' =>'Hallo',
        'post_reviewed_content_2' =>'Ihre Anzeige :title ist jetzt online.',
        'post_reviewed_content_3' =>'Sie erhalten diese E-Mail, weil Sie kürzlich eine neue Anzeige erstellt haben unter :appName . Wenn Sie es nicht waren, ignorieren Sie bitte diese E-Mail. ',


        // post_republished (neu) ,
        'post_republished_title' =>'Ihre Anzeige wurde erneut veröffentlicht',
        'post_republished_content_1' =>'Hallo',
        'post_republished_content_2' =>'Ihre Anzeige :title wurde erfolgreich erneut veröffentlicht.',
        'post_republished_content_3' =>'Sie erhalten diese E-Mail, weil Sie kürzlich eine neue Anzeige erstellt haben unter :appName . Wenn Sie es nicht waren, ignorieren Sie bitte diese E-Mail. ',


        // post_deleted ,
        'post_deleted_title' =>'Ihre Anzeige wurde gelöscht',
        'post_deleted_content_1' =>'Hallo',
        'post_deleted_content_2' =>'Ihre Anzeige " :title " wurde aus <a href=":appUrl">:appName</a> um :now gelöscht.',
        'post_deleted_content_3' =>'Vielen Dank für Ihr Vertrauen und bis bald',
        'post_deleted_content_4' =>'PS:Dies ist eine automatisierte E-Mail, bitte antworten Sie nicht.',


        // post_employer_contacted ,
        'post_employer_contacted_title' =>'Ihre Anzeige " :title " on :appName ',
        'post_employer_contacted_content_1' =>' Kontaktinformationen:,

        Name ::Name ,

        E-Mail-Adresse ::E-Mail ,

        Telefonnummer ::Telefon ',
        'post_employer_contacted_content_2' =>'Diese E-Mail wurde an Sie über die Anzeige " :title " gesendet, die Sie eingereicht haben unter :appName : <a href=":postUrl">:postUrl</a> ',
        'post_employer_contacted_content_3' =>'HINWEIS: Die Person, die Sie kontaktiert hat, kennt Ihre E-Mail nicht, da Sie nicht antworten werden.',
        'post_employer_contacted_content_4' =>'Denken Sie daran, immer die Details Ihrer Kontaktperson (Name, Adresse, ...) zu überprüfen, um sicherzustellen, dass Sie im Streitfall einen Kontakt haben. Wählen Sie im Allgemeinen die Lieferung des Artikels in der Hand.',
        'post_employer_contacted_content_5' =>'Vorsicht vor verlockenden Angeboten! Seien Sie vorsichtig mit Anfragen aus dem Ausland, wenn Sie nur eine Kontakt-E-Mail haben. Die vorgeschlagene Überweisung durch Western Union oder MoneyGram kann durchaus künstlich sein.',
        'post_employer_contacted_content_6' =>'Vielen Dank für Ihr Vertrauen und bis bald.',
        'post_employer_contacted_content_7' =>'PS: Dies ist eine automatisierte E-Mail, bitte nicht antworten.',


        // user_deleted ,
        'user_deleted_title' =>'Ihr Konto wurde gelöscht unter :appName ',
        'user_deleted_content_1' =>'Hallo',
        'user_deleted_content_2' =>'Ihr Konto wurde aus <a href=":appUrl">:appName</a> um :now gelöscht.',
        'user_deleted_content_3' =>'Vielen Dank für Ihr Vertrauen und bis bald.',
        'user_deleted_content_4' =>'PS: Dies ist eine automatisierte E-Mail, bitte antworten Sie nicht.',


        // user_activated (neu) ,
        'user_activated_title' =>'Willkommen bei :appName !',
        'user_activated_content_1' =>'Willkommen bei :appName :userName!',
        'user_activated_content_2' =>'Ihr Konto wurde aktiviert.',
        'user_activated_content_3' =>' Hinweis : Das :appName -Team empfiehlt Folgendes:,


        <br><br>1 - Senden Sie niemals Geld per Western Union oder einem anderen internationalen Mandat. ,

        <br><br>2 - Wenn Sie Zweifel an der Ernsthaftigkeit eines Werbetreibenden haben, setzen Sie sich bitte umgehend mit uns in Verbindung. Wir können dann so schnell wie möglich neutralisieren und verhindern, dass jemand, der weniger informiert ist, zum Opfer wird. ',
        'user_activated_content_4' =>'Sie erhalten diese E-Mail, weil Sie kürzlich ein neues :appName -Konto erstellt haben. Wenn Sie es nicht waren, ignorieren Sie bitte diese E-Mail. ',


        // Passwort zurücksetzen ,
        'reset_password_title' =>'Passwort zurücksetzen',
        'reset_password_action' =>'Passwort zurücksetzen',
        'reset_password_content_1' =>'Passwort vergessen?',
        'reset_password_content_2' =>'Lass uns dir ein neues besorgen.',
        'reset_password_content_3' =>'Wenn Sie kein Zurücksetzen des Passworts angefordert haben, ist keine weitere Aktion erforderlich.',


        // Kontakt Formular
        'contact_form_title' =>'Neue Nachricht von :appName ',


        // post_report_sent
        'post_report_sent_title' =>'Neuer Missbrauchsbericht',
        'Post URL' =>'Post URL',


        // Anzeige archiviert
        'post_archived_title' =>'Ihre Anzeige wurde archiviert',
        'post_archived_content_1' =>'Hallo',
        'post_archived_content_2' =>'Ihre Anzeige " :title " wurde archiviert von :appName at :now.',
        'post_archived_content_3' =>'Sie können es erneut veröffentlichen, indem Sie hier klicken: <a href=":repostUrl">:repostUrl</a> ',
        'post_archived_content_4' =>'Wenn Sie nichts tun, wird Ihre Anzeige dauerhaft gelöscht am :dateDel.',
        'post_archived_content_5' =>'Vielen Dank für Ihr Vertrauen und bis bald.',
        'post_archived_content_6' =>'PS:Dies ist eine automatisierte E-Mail, bitte antworten Sie nicht.',


        // post_will_be_deleted
        'post_will_be_deleted_title' =>'Ihre Anzeige wird gelöscht in :days Tage',
        'post_will_be_deleted_content_1' =>'Hallo',
        'post_will_be_deleted_content_2' =>'Ihre Anzeige " :title " wird gelöscht in :Tage Tage von :appName .',
        'post_will_be_deleted_content_3' =>'Sie können es erneut veröffentlichen, indem Sie hier klicken: :repostUrl ',
        'post_will_be_deleted_content_4' =>'Wenn Sie nichts tun, wird Ihre Anzeige dauerhaft gelöscht am :dateDel.',
        'post_will_be_deleted_content_5' =>'Vielen Dank für Ihr Vertrauen und bis bald.',
        'post_will_be_deleted_content_6' =>'PS: Dies ist eine automatisierte E-Mail, bitte antworten Sie nicht.',


        // post_sent_by_email 
        'post_sent_by_email_title' =>'Neuer Vorschlag - :appName / :countryCode',
        'post_sent_by_email_content_1' =>'Ein Benutzer hat Ihnen den Link eines Jobs mit der E-Mail-Adresse empfohlen :senderEmail',
        'post_sent_by_email_content_2' =>'Klicken Sie unten, um die Details des Stellenangebots anzuzeigen.',
        'Job URL' =>'Job URL',


        // post_notification 
        'post_notification_title' =>'Neuer Job wurde gebucht',
        'post_notification_content_1' =>'Hallo Admin,',
        'post_notification_content_2' =>'Der Benutzer:AdvertiserName hat gerade einen neuen Job gepostet.',
        'post_notification_content_3' =>'Der Anzeigentitel: <a href=":postUrl">:title</a><br> Gepostet am: :now at :time',


        // user_notification 
        'user_notification_title' =>'Registrierung neuer Benutzer',
        'user_notification_content_1' =>'Hallo Admin,',
        'user_notification_content_2' =>':Name wurde gerade registriert.',
        'user_notification_content_3' =>'Registriert am : :now um: Zeit<a href="mailto::email">:email</a>',


        // Bezahlung gesendet ,
        'payment_sent_title' =>'Danke für Ihre Zahlung!',
        'payment_sent_content_1' =>'Hallo',
        'payment_sent_content_2' =>'Wir haben Ihre Zahlung für die Stellenanzeige " <a href=":postUrl">:title</a> " erhalten.',
        'payment_sent_content_3' =>'Danke!',


        // Zahlungsbenachrichtigung ,
        'payment_notification_title' =>'Neue Zahlung wurde gesendet',
        'payment_notification_content_1' =>'Hallo Admin,',
        'payment_notification_content_2' =>'Die Nutzerin :AdvertiserName hat gerade ein Paket für ihre Stellenanzeige " <a href=":postUrl">:title</a> " bezahlt.',
        'payment_notification_content_3' =>'DIE ZAHLUNGSDETAILS

        <br><strong>Grund der Zahlung:</strong> Anzeigennummer :adId - :packageName

        <br><strong>Betrag: </strong>:amount :currency

        <br><strong>Zahlungsmethode:</strong> :paymentMethodName ',

        // zahlungsgenehmigt (neu) 
        'payment_approved_title' =>'Ihre Zahlung wurde genehmigt!',
        'payment_approved_content_1' =>'Hallo',
        'payment_approved_content_2' =>'Ihre Zahlung für die Anzeige " <a href=":postUrl">:title</a> " wurde genehmigt.',
        'payment_approved_content_3' =>'Danke!',
        'payment_approved_content_4' =>'DIE ZAHLUNGSDETAILS,

        <br><strong>Grund der Zahlung:</strong> Anzeigennummer :adId - :packageName

        <br><strong>Betrag: </strong>:amount :currency

        <br><strong>Zahlungsmethode:</strong> :paymentMethodName  ',


        // Antwortformular
        'reply_form_title' =>':subject',
        'reply_form_content_1' =>'Hallo',
        'reply_form_content_2' =>' Sie haben eine Antwort von : :senderName erhalten. Siehe die folgende Nachricht: ',


        // generiertes_Kennwort
        'generate_password_title' =>'Ihr Passwort',
        'generate_password_content_1' =>'Hallo :userName!',
        'generate_password_content_2' =>'Ihr Konto wurde erstellt.',
        'generate_password_verify_content_3' =>'Klicken Sie auf die Schaltfläche unten, um Ihre E-Mail-Adresse zu überprüfen.',
        'generate_password_verify_action' =>'E-Mail-Adresse überprüfen',
        'generate_password_content_4' =>'Ihr Passwort lautet: <strong>:randomPassword</strong> ',
        'generate_password_login_action' =>'Jetzt anmelden!',
        'generate_password_content_6' =>'Sie erhalten diese E-Mail, weil Sie kürzlich ein neues :appName -Konto erstellt oder eine neue E-Mail-Adresse hinzugefügt haben. Wenn Sie es nicht waren, ignorieren Sie bitte diese E-Mail. ',

];

?>
