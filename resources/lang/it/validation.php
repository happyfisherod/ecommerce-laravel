<?php
return [

/* 
|-------------------------------------------------------------------------- ,
| Validation Language Lines ,
|-------------------------------------------------------------------------- ,
| 
| The following language lines contain the default error messages used by ,
| the validator class. Some of these rules have multiple versions such ,
| as the size rules. Feel free to tweak each of these messages here. ,
| 
*/ 

'accepted' =>"L :attribute deve essere accettato.",
'active_url' =>"L :attribute non è un URL valido.",
'after' =>"L :attribute deve essere una data successiva a :date.",
'after_or_equal' =>"L :attribute deve essere una data successiva o uguale a :date.",
'alpha' =>"L :attribute può contenere solo lettere.",
'alpha_dash' =>"L :attribute può contenere solo lettere, numeri, trattini e trattini bassi.",
'alpha_num' =>"L :attribute può contenere solo lettere e numeri.",
'array' =>"L :attribute deve essere un array.",
'before' =>"L :attribute deve essere una data precedente a :date.",
'before_or_equal' =>"L :attribute deve essere una data precedente o uguale a :date.",
'between' =>[
        'numeric' =>"L :attribute deve essere compreso tra :min e :max.",
        'file' =>"L :attribute deve essere compreso tra :min e :max kilobyte.",
        'string' =>"L :attribute deve essere compreso tra :min e :max caratteri.",
        'array' =>"L :attribute deve avere un valore compreso tra :min e :max elementi.",
],
'boolean' =>"Il campo :attribute deve essere vero o falso.",
'confirmed' =>"La conferma dell :attribute non corrisponde.",
'date' =>"L :attribute non è una data valida.",
'date_equals' =>"L :attribute deve essere una data uguale a :date.",
'date_format' =>"L :attribute non corrisponde al formato :format.",
'different' =>"L :attribute e :other devono essere diversi.",
'digits' =>"L :attribute deve essere :digits cifre.",
'digits_between' =>"L :attribute deve essere compreso tra :min e :max cifre.",
'dimensions' =>"L :attribute ha dimensioni dell'immagine non valide.",
'distinct' =>"Il campo :attribute ha un valore duplicato.",
'email' =>"L :attribute deve essere un indirizzo email valido.",
'exists' =>"L'attributo selezionato: non è valido.",
'file' =>"L :attribute deve essere un file.",
'filled' =>"Il campo :attribute deve avere un valore.",
'image' =>"L :attribute deve essere un'immagine.",
'in' =>"L'attributo selezionato: non è valido.",
'in_array' =>"Il campo :attribute non esiste in :other.",
'integer' =>"L :attribute deve essere un numero intero.",
'ip' =>"L :attribute deve essere un indirizzo IP valido.",
'ipv4' =>"L :attribute deve essere un indirizzo IPv4 valido.",
'ipv6' =>"L :attribute deve essere un indirizzo IPv6 valido.",
'json' =>"L :attribute deve essere una stringa JSON valida.",
'max' =>[
        'numeric' =>"L :attribute non può essere maggiore di :max.",
        'file' =>"L :attribute non può essere maggiore di: kilobyte max.",
        'string' =>"L :attribute non può essere maggiore di :max caratteri.",
        'array' =>"L :attribute non può contenere più di :max articoli.",
],
'mimes' =>"L :attribute deve essere un file di tipo: :value.",
'mimetypes' =>"L :attribute deve essere un file di tipo: :value.",
'min' =>[
        'numeric' =>"L :attribute deve essere almeno :min.",
        'file' =>"L :attribute deve essere almeno :min kilobyte.",
        'string' =>"L :attribute deve contenere almeno :min caratteri.",
        'array' =>"L :attribute deve contenere almeno :min elementi.",
],
'not_in' =>"L :attribute selezionato non è valido.",
'not_regex' =>"Il formato :attribute non è valido.",
'numeric' =>"L :attribute deve essere un numero.",
'present' =>"Il campo :attribute deve essere presente.",
'regex' =>"Il formato :attribute non è valido.",
'required' =>"Il campo :attribute è obbligatorio.",
'required_if' =>"Il campo :attribute è obbligatorio quando :other è :value.",
'required_unless' =>"Il campo :attribute è obbligatorio a meno che :other non sia in :value.",
'required_with' =>"Il campo :attribute è obbligatorio quando :value è presente.",
'required_with_all' =>"Il campo :attribute è obbligatorio quando  :value è presente.",
'required_without' =>"Il campo :attribute è obbligatorio quando :value non è presente.",
'required_without_all' =>"Il campo :attribute è obbligatorio quando nessuno di :value è presente.",
'same' =>"L :attribute e :other devono corrispondere.",
'size' =>[
        'numeric' =>"L :attribute deve essere :size.",
        'file' =>"L :attribute deve essere :size kilobyte.",
        'string' =>"L :attribute deve :size caratteri di dimensione.",
        'array' =>"L :attribute deve contenere :size di taglia.",
],
'starts_with' =>"L :attribute deve iniziare con uno dei seguenti: :value",
'string' =>"L :attribute deve essere una stringa.",
'timezone' =>"L :attribute deve essere una zona valida.",
'unique' =>'L\ :attribute è già stato preso.',
'uploaded' =>"Caricamento dell :attribute non riuscito.",
'url' =>"Il formato :attribute non è valido.",


// Packages Rules ,
'recaptcha' =>"Il campo :attribute non è corretto.",
'phone' =>"Il campo :attribute contiene un numero non valido.",
'dumbpwd' =>'Questa password è semplicemente troppo comune. Per favore, provane un altro! ',
'phone_number' =>"Il tuo numero di telefono non è valido.",


// Custom Rules ,
'required_package_id' =>"Devi selezionare un'opzione di annuncio premium per continuare.",
'required_payment_method_id' =>"Devi selezionare un metodo di pagamento per continuare.",
'blacklist_email_rule' =>"Questo indirizzo email è nella lista nera.",
'blacklist_domain_rule' =>"Il dominio del tuo indirizzo email è nella lista nera.",
'blacklist_ip_rule' =>"L :attribute deve essere un indirizzo IP valido.",
'blacklist_word_rule' =>"L :attribute contiene parole o frasi vietate.",
'blacklist_title_rule' =>"L :attribute contiene parole o frasi vietate.",
'between_rule' =>"L :attribute deve essere compreso tra :min e :max caratteri.",
'username_is_valid_rule' =>"Il campo :attribute deve essere una stringa alfanumerica.",
'username_is_allowed_rule' =>"L :attribute non è consentito.",
'locale_of_language_rule' =>"Il campo :attribute non è valido.",
'locale_of_country_rule' =>"Il campo :attribute non è valido.",
'currencies_codes_are_valid_rule' =>"Il campo :attribute non è valido.",
'custom_field_unique_rule' =>"Il :field_1 ha questo :field_2 già assegnato.",
'custom_field_unique_rule_field' =>"Il :field_1 è già assegnato a questo :field_2.",
'custom_field_unique_children_rule' =>"Un figlio :field_1 di :field_1 ha già questo :field_2 assegnato.",
'custom_field_unique_children_rule_field' =>"Il :field_1 è già assegnato a uno :field_2 di questo :field_2.",
'custom_field_unique_parent_rule' =>"Il genitore :field_1 di :field_1 ha questo :field_2 già assegnato.",
'custom_field_unique_parent_rule_field' =>"Il :field_1 è già assegnato al genitore :field_2 di questo :field_2.",
'mb_alphanumeric_rule' =>"Inserisci un contenuto valido nel campo :attribute.",
'date_is_valid_rule' =>"Il campo :attribute non contiene una data valida.",
'date_future_is_valid_rule' =>"La data di: campo attributo deve essere futura.",
'date_past_is_valid_rule' =>"La data di: campo attributo deve essere nel passato.",
'video_link_is_valid_rule' =>"Il campo :attribute non contiene un collegamento video valido (Youtube o Vimeo).",

/*
|-------------------------------------------------------------------------- ,
| Custom Validation Language Lines ,
|-------------------------------------------------------------------------- ,
| ,
| Here you may specify custom validation messages for attributes using the ,
| convention "attribute.rule" to name the lines. This makes it quick to ,
| specify a specific custom language line for a given attribute rule. ,
| ,
*/ 

'custom' =>[
        'database_connection' =>[
                'required' =>"Impossibile connettersi al server MySQL",
                ],
        'database_not_empty' =>[
                'required' =>"Il database non è vuoto",
                ],
        'promo_code_not_valid' =>[
                'required' =>"Il codice promozionale non è valido",
                ],
        'smtp_valid' =>[
                'required' =>"Impossibile connettersi al server SMTP",
                ],
        'yaml_parse_error' =>[
                'required' =>"Impossibile analizzare yaml. Si prega di controllare la sintassi ",
                ],        
        'file_not_found' =>[
                'required' =>'File non trovato.',
                ],
        'not_zip_archive' =>[
                'required' =>"Il file non è un pacchetto zip.",
                ],
        'zip_archive_unvalid' =>[
                'required' =>"Impossibile leggere il pacchetto.",
                ],
        'custom_criteria_empty' =>[
                'required' =>"I criteri personalizzati non possono essere vuoti",
                ],
        'php_bin_path_invalid' =>[
                'required' =>'Eseguibile PHP non valido. Si prega di ricontrollare. ',
                ],
        'can_not_empty_database' =>[
                'required' =>'Impossibile DROP alcune tabelle, si prega di pulire il database manualmente e riprovare.',
                ],
        'recaptcha_invalid' =>[
                'required' =>"Controllo reCAPTCHA non valido.",
                ],
        'payment_method_not_valid' =>[
                'required' =>"Qualcosa è andato storto con l'impostazione del metodo di pagamento. Si prega di ricontrollare. ",
        ],
],
/* ,
|-------------------------------------------------------------------------- ,
| Custom Validation Attributes ,
|-------------------------------------------------------------------------- ,
| ,
| The following language lines are used to swap attribute place-holders ,
| with something more reader friendly such as E-Mail Address instead ,
| of "email". This simply helps us make messages a little cleaner. ,
| ,
*/ 

'attributes' =>[

        'gender' =>'Genere',
        'gender_id' =>'Genere',
        'name' =>'nome',
        'first_name' =>'nome di battesimo',
        'last_name' =>'cognome',
        'user_type' =>'tipologia di utente',
        'user_type_id' =>'tipologia di utente',
        'country' =>'nazione',
        'country_code' =>'nazione',
        'phone' =>'Telefono',
        'address' =>'indirizzo',
        'mobile' =>'mobile',
        'sex' =>'sesso',
        'year' =>'anno',
        'month' =>'mese',
        'day' =>'giorno',
        'hour' =>'ora',
        'minute' =>'minuto',
        'second' =>'secondo',
        'username' =>'nome utente',
        'email' =>'indirizzo email',
        'password' =>'parola d\'ordine',
        'password_confirmation' =>'conferma password',
        'g-recaptcha-response' =>"captcha",
        'term' =>'termini',
        'category' =>'categoria',
        'category_id' =>'categoria',
        'post_type' =>"tipo di post",
        'post_type_id' =>"tipo di post",
        'title' =>'titolo',
        'body' =>'corpo',
        'description' =>'descrizione',
        'excerpt' =>'estratto',
        'date' =>'Data',
        'time' =>'tempo',
        'available' =>'a disposizione',
        'size' =>'taglia',
        'price' =>'prezzo',
        'salary' =>'stipendio',
        'contact_name' =>'nome',
        'location' =>'Posizione',
        'admin_code' =>'Posizione',
        'city' =>'città',
        'city_id' =>'città',
        'package' =>'pacchetto',
        'package_id' =>'pacchetto',
        'payment_method' =>'metodo di pagamento',
        'payment_method_id' =>'metodo di pagamento',
        'sender_name' =>'nome',
        'subject' =>'soggetto',
        'message' =>'Messaggio',
        'report_type' =>"tipo di rapporto",
        'report_type_id' =>"tipo di rapporto",
        'file' =>'file',
        'filename' =>'nome del file',
        'picture' =>'immagine',
        'resume' =>'curriculum vitae',
        'login' =>'accesso',
        'code' =>'codice',
        'token' =>'gettone',
        'comment' =>'commento',
        'rating' =>'valutazione',
        'locale' =>'locale',
        'currencies' =>'valute',
        'tags' =>"Tag",
        'from_name' =>'nome',
        'from_email' =>'e-mail',
        'from_phone' =>'Telefono',

        ],

];

?>