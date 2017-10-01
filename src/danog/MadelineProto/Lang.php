<?php
/*
Copyright 2016-2017 Daniil Gentili
(https://daniil.it)
This file is part of MadelineProto.
MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU Affero General Public License for more details.
You should have received a copy of the GNU General Public License along with MadelineProto.
If not, see <http://www.gnu.org/licenses/>.
*/

namespace danog\MadelineProto;

class Lang
{
    public static $lang = array (
  'it' => 
  array (
    'phpseclib_fork' => 'Per favore installa questo fork di phpseclib: https://github.com/danog/phpseclib',
    'inst_dc' => 'Istanziamento dei DataCenter...',
    'load_rsa' => 'Caricamento delle chiavi RSA...',
    'TL_translation' => 'Translazione degli schemi TL...',
    'dh_prime_check_0' => 'Esecuzione dei check dh_prime (0/3)...',
    'nearest_dc' => 'Siamo in %s, il DC corrente è %d, il DC più vicino è %d.',
    'serialization_ofd' => 'La serializzazione non è aggiornata, reistanziamento dell\'oggetto in corso!',
    'getupdates_deserialization' => 'Ottenimento aggiornamenti dopo deserializzazione...',
    'shutdown_reader_pool' => 'Chiusura pool di lettura, %d thread rimasti',
    'threading_on' => 'IL THREADING È ABILITATO',
    'socket_reader' => 'Lettore socket su DC %s: ',
    'socket_status_1' => 'CREAZIONE',
    'socket_status_2' => 'INVIO',
    'socket_status_3' => 'ATTESA',
    'socket_status_4' => 'PRONTO',
    'socket_status_5' => 'AVVIATO',
    'api_not_set' => 'Devi specificare una chiave ed un ID API, ottienili su https://my.telegram.org',
    'session_corrupted' => 'La sessione si è corrotta!',
    'reset_session_seqno' => 'Resettando ID sessione e numero di sequenza sul DC %s...',
    'gen_perm_auth_key' => 'Generando chiave di autorizzazione permanente per il DC %s...',
    'gen_temp_auth_key' => 'Generando chiave di autorizzazione temporanea per il DC %s...',
    'copy_auth_dcs' => 'Copiando autorizzazione dal DC %s al DC %s...',
    'write_client_info' => 'Scrittura info sul client (eseguendo nel contempo il metodo %s)...',
    'config_updated' => 'La configurazione è stata aggiornata!',
    'length_not_4' => 'La lunghezza non è uguale a 4',
    'length_not_8' => 'La lunghezza non è uguale a 8',
    'value_bigger_than_2147483647' => 'Il valore fornito (%s) è maggiore di 2147483647',
    'value_smaller_than_2147483648' => 'Il valore fornito (%s) è minore di -2147483648',
    'value_bigger_than_9223372036854775807' => 'Il valore fornito (%s) è maggiore di 9223372036854775807',
    'value_smaller_than_9223372036854775808' => 'Il valore fornito (%s) è minore di -9223372036854775808',
    'value_bigger_than_4294967296' => 'Il valore fornito (%s) è maggiore di 4294967296',
    'value_smaller_than_0' => 'Il valore fornito (%s) è minore di 0',
    'encode_double_error' => 'Non sono riuscito a codificare il numero a virgola mobile fornito',
    'file_not_exist' => 'Il file specificato non esiste',
    'deserialization_error' => 'C\'è stato un errore durante la deserializzazione',
    'rsa_init' => 'Istanziamento di \\phpseclib\\Crypt\\RSA in corso...',
    'loading_key' => 'Caricamento della chiave in corso...',
    'computing_fingerprint' => 'Calcolo del fingerprint in corso...',
    'rsa_encrypting' => 'Criptando con chiave RSA...',
    'rpc_tg_error' => 'Telegram ha ritornato un errore RPC: %s (%s), causato da %s:%sTL trace:',
    'v_error' => '506572206661766f726520616767696f726e612071756573746120696e7374616c6c617a696f6e65206469204d6164656c696e6550726f746f20636f6e206769742070756c6c206520636f6d706f73657220757064617465',
    'v_tgerror' => '506572206661766f726520616767696f726e61207068702d6c69627467766f6970',
    'no_mode_specified' => 'Nessuna modalità di logging è stata specificata!',
    'constructor_function_uncalled' => 'Il metodo costruttore non è stato ancora chiamato! Per favore chiama il metodo costruttore prima di usare questo metodo.',
    'proxy_class_invalid' => 'È stata specificata una classe proxy errata!',
    'socket_con_error' => 'Connessione fallita.',
    'protocol_not_implemented' => 'Questo protocollo non è stato ancora implementato.',
    'protocol_invalid' => 'È stato fornito un protocollo non valido',
    'nothing_in_socket' => 'Non c\'è niente nel socket!',
    'wrong_length_read' => 'ATTENZIONE: Non sono stati letti abbastanza byte (dovevo leggere %s, ho letto %s)!',
    'no_data_in_socket' => 'Non ci sono dati nel socket!',
    'dc_con_start' => 'Connessione al DC %s in corso...',
    'dc_con_stop' => 'Disconnessione dal DC %s in corso...',
    'dc_con_test_start' => 'Connessione al DC %s (server %s, %s, %s)...',
    'script_not_exist' => 'Lo script fornito non esiste',
    'apifactory_start' => 'Sto avviando la fabbrica di API...',
    'madelineproto_ready' => 'MadelineProto è pronto!',
    'logout_error' => 'C\'è stato un errore durante il logout!',
    'logout_ok' => 'Il logout è stato eseguito correttamente!',
    'already_logged_in' => 'Questa istanza di MadelineProto è già loggata, prima faccio il logout...',
    'login_ok' => 'Il login è stato eseguito correttamente!',
    'login_user' => 'Sto eseguendo il login come utente normale...',
    'login_bot' => 'Sto eseguendo il login come bot...',
    'login_code_sending' => 'Sto inviando il codice...',
    'login_code_sent' => 'Il codice è stato inviato correttamente! Una volta ricevuto il codice dovrai usare la funzione complete_phone_login.',
    'login_code_uncalled' => 'Non sto aspettando il codice! Usa la funzione phone_login.',
    'login_2fa_enabled' => 'L\'autenticazione a due fattori è abilitata, dovrai chiamare il metodo complete_2fa_login...',
    'login_need_signup' => 'Questo numero non è registrato su telegram, dovrai chiamare la funzione complete_signup...',
    'login_auth_key' => 'Sto facendo il login con la chiave di autorizzazione...',
    'not_logged_in' => 'Non ho ancora fatto il login!',
    'signup_uncalled' => 'Chiama prima le funzioni phone_login e complete_phone_login.',
    'signing_up' => 'Mi sto registrando su telegram come utente normale...',
    'signup_ok' => 'Mi sono registrato su Telegram!',
    '2fa_uncalled' => 'Non sto aspettando la password, chiama prima le funzioni phone_login e complete_phone_login!',
    'getting_dialogs' => 'Sto ottenendo la lista delle chat...',
    'libtgvoip_required' => 'È necessario installare l\'estensione php-libtgvoip per accettare e gestire chiamate vocali, vistate https://docs.madelineproto.xyz per più info.',
    'peer_not_in_db' => 'Questo utente/gruppo/canale non è presente nel database interno MadelineProto',
    'calling_user' => 'Sto chiamando %s...',
    'generating_a' => 'Sto generando a...',
    'generating_g_a' => 'Sto generando g_a...',
    'call_error_1' => 'Impossibile trovare ed accettare la chiamata %s',
    'accepting_call' => 'Sto accettando una chiamata da %s...',
    'generating_b' => 'Sto generando b...',
    'call_already_accepted' => 'La chiamata %s è già stata accettata.',
    'call_already_declined' => 'La chiamata %s è già stata annullata.',
    'call_error_2' => 'Impossibile trovare e confermare la chiamata %s',
    'call_confirming' => 'Sto confermando una chiamata da %s',
    'call_error_3' => 'Impossibile trovare e completare la chiamata %s',
    'call_completing' => 'Sto completando una chiamata da %s...',
    'invalid_g_a' => 'g_a non valido!',
    'fingerprint_invalid' => 'fingerprint della chiave non valido!',
    'call_discarding' => 'Sto rifiutando la chiamata %s...',
    'call_set_rating' => 'Sto inviando la recensione della chiamata %s...',
    'call_debug_saving' => 'Sto inviando i dati di debug della chiamata %s...',
    'TL_loading' => 'Sto caricando gli schemi TL...',
    'file_parsing' => 'Leggendo %s...',
    'crc32_mismatch' => 'CRC32 non valido (%s diverso da %s) per %s',
    'src_file_invalid' => 'È stato fornito un file sorgente non valido: ',
    'translating_obj' => 'Traducendo gli oggetti...',
    'translating_methods' => 'Traducendo i metodi...',
    'bool_error' => 'Non sono riuscito ad estrarre un booleano',
    'not_numeric' => 'Il valore fornito non è numerico',
    'long_not_16' => 'Il valore fornito non è lungo 16 byte',
    'long_not_32' => 'Il valore fornito non è lungo 32 byte',
    'long_not_64' => 'Il valore fornito non è lungo 64 byte',
    'array_invalid' => 'Il valore fornito non è un array',
    'predicate_not_set' => 'Il predicato (valore sotto chiave _, esempio [\'_\' => \'inputPeer\']) non è impostato!',
    'type_extract_error' => 'Impossibile estrarre il tipo "%s"',
    'method_not_found' => 'Impossibile trovare il seguente metodo: ',
    'params_missing' => 'Non hai fornito un parametro obbligatorio, rileggi la documentazione API',
    'sec_peer_not_in_db' => 'La chat segreta non è presente nel database interno MadelineProto',
    'stream_handle_invalid' => 'Il valore fornito non è uno stream',
    'length_too_big' => 'Il valore fornito è troppo lungo',
    'deserialize_not_str' => 'Il valore generato non è una stringa',
    'type_extract_error_id' => 'Non sono riuscito ad estrarre il tipo %s con ID %s',
    'vector_invalid' => 'ID vettore non valido: ',
    'constructor_not_found' => 'Costruttore non trovato per tipo: ',
    'rand_bytes_too_small' => 'random_bytes è troppo corto!',
    'botapi_conversion_error' => 'NOn sono risucito a convertire %s in un oggetto bot API',
    'non_text_conversion' => 'Non posso ancora convertire messaggi media',
    'last_byte_invalid' => 'L\'ultimo byte non è valido',
    'file_type_invalid' => 'È stato fornito un tipo file errato',
    'recreate_temp_auth_key' => 'Sono stato costretto a rigenerare la chiave di autorizzazione temporanea',
    'resetting_auth_key' => 'ATTENZIONE: Sto resettando la chiave temporanea...',
    'shutting_down_reader_pool' => 'Chisura pool di lettura',
    'shutting_down_handler_pool' => 'Chiusura pool di gestione per DC %s, %d thread rimasti',
    'secret_chat_skipping' => 'Non ho la chat segreta %s nel database, ignorando messaggio',
    'fingerprint_mismatch' => 'Fingerprint della chiave non valido',
    'msg_data_length_too_big' => 'message_data_length è troppo grande',
    'length_not_divisible_16' => 'La lunghezza dei dati decifrati non è divisibile per 16',
    'msg_key_mismatch' => 'msg_key non valido',
    'rand_bytes_too_short' => 'random_bytes è troppo corto!',
    'resending_unsupported' => 'IL riinvio di messaggi non è ancora supportato',
    'unrecognized_dec_msg' => 'È stato ricevuto un messaggio decifrato sconosciuto: ',
    'serializing_madelineproto' => 'Sto serializzando MadelineProto...',
    'req_pq' => 'Sto richiedendo p_q...',
    'done' => 'Fatto!',
    'cdn_reupload' => 'Il file non è disponibile sul nostro CDN, richiedo la copia!',
    'stored_on_cdn' => 'Il file è scaricabile tramite CDN!',
  ),
  'en' => 
  array (
    'req_pq' => 'Requesting p_q...',
    'done' => 'Done!',
    'cdn_reupload' => 'File is not stored on CDN, requesting reupload!',
    'stored_on_cdn' => 'File is stored on CDN!',
    'serializing_madelineproto' => 'Serializing MadelineProto...',
    'phpseclib_fork' => 'Please install this fork of phpseclib: https://github.com/danog/phpseclib',
    'inst_dc' => 'Istantiating DataCenter...',
    'load_rsa' => 'Loading RSA keys...',
    'TL_translation' => 'Translating TL schemas...',
    'dh_prime_check_0' => 'Executing dh_prime checks (0/3)...',
    'nearest_dc' => 'We\'re in %s, current DC is %d, nearest DC is %d.',
    'serialization_ofd' => 'Serialization is out of date, reconstructing object!',
    'getupdates_deserialization' => 'Getting updates after deserialization...',
    'shutdown_reader_pool' => 'Shutting down reader pool, %d jobs left',
    'threading_on' => 'THREADING IS ENABLED',
    'socket_reader' => 'Socket reader on DC %s: ',
    'socket_status_1' => 'CREATING',
    'socket_status_2' => 'SUBMITTING',
    'socket_status_3' => 'WAITING',
    'socket_status_4' => 'READY',
    'socket_status_5' => 'WORKING',
    'api_not_set' => 'You must provide an api key and an api id, get your own @ my.telegram.org',
    'session_corrupted' => 'The session is corrupted!',
    'reset_session_seqno' => 'Resetting session id and seq_no in DC %s...',
    'gen_perm_auth_key' => 'Generating permanent authorization key for DC %s...',
    'gen_temp_auth_key' => 'Generating temporary authorization key for DC %s...',
    'copy_auth_dcs' => 'Copying authorization from DC %s to DC %s...',
    'write_client_info' => 'Writing client info (also executing %s)...',
    'config_updated' => 'Updated config!',
    'length_not_4' => 'Length is not equal to 4',
    'length_not_8' => 'Length is not equal to 8',
    'value_bigger_than_2147483647' => 'Provided value %s is bigger than 2147483647',
    'value_smaller_than_2147483648' => 'Provided value %s is smaller than -2147483648',
    'value_bigger_than_9223372036854775807' => 'Provided value %s is bigger than 9223372036854775807',
    'value_smaller_than_9223372036854775808' => 'Provided value %s is smaller than -9223372036854775808',
    'value_bigger_than_4294967296' => 'Provided value %s is bigger than 4294967296',
    'value_smaller_than_0' => 'Provided value %s is smaller than 0',
    'encode_double_error' => 'Could not properly encode double',
    'file_not_exist' => 'File does not exist',
    'deserialization_error' => 'An error occurred on deserialization',
    'rsa_init' => 'Istantiating \\phpseclib\\Crypt\\RSA...',
    'loading_key' => 'Loading key...',
    'computing_fingerprint' => 'Computing fingerprint...',
    'rsa_encrypting' => 'Encrypting with rsa key...',
    'rpc_tg_error' => 'Telegram returned an RPC error: %s (%s), caused by %s:%sTL trace:',
    'v_error' => '506c656173652075706461746520746f20746865206c61746573742076657273696f6e206f66204d6164656c696e6550726f746f2e',
    'v_tgerror' => '506c6561736520757064617465207068702d6c69627467766f6970',
    'no_mode_specified' => 'No mode was specified!',
    'constructor_function_uncalled' => 'The constructor function wasn\'t called! Please call the constructor function before using this method.',
    'proxy_class_invalid' => 'Invalid proxy class provided!',
    'socket_con_error' => 'Connection: couldn\'t connect to socket.',
    'protocol_not_implemented' => 'Connection: This protocol isn\'t implemented yet.',
    'protocol_invalid' => 'Connection: invalid protocol specified.',
    'nothing_in_socket' => 'Nothing in the socket!',
    'wrong_length_read' => 'WARNING: Wrong length was read (should\'ve read %s, read %s)!',
    'no_data_in_socket' => 'No data in the socket!',
    'dc_con_start' => 'Connecting to DC %s...',
    'dc_con_stop' => 'Disconnecting from DC %s...',
    'dc_con_test_start' => 'Connecting to DC %s (%s server, %s, %s)...',
    'script_not_exist' => 'Provided script does not exist',
    'apifactory_start' => 'Running APIFactory...',
    'madelineproto_ready' => 'MadelineProto is ready!',
    'logout_error' => 'An error occurred while logging out!',
    'logout_ok' => 'Logged out successfully!',
    'already_logged_in' => 'This instance of MadelineProto is already logged in. Logging out first...',
    'login_ok' => 'Logged in successfully!',
    'login_user' => 'Logging in as a normal user...',
    'login_bot' => 'Logging in as a bot...',
    'login_code_sending' => 'Sending code...',
    'login_code_sent' => 'Code sent successfully! Once you receive the code you should use the complete_phone_login function.',
    'login_code_uncalled' => 'I\'m not waiting for the code! Please call the phone_login method first',
    'login_2fa_enabled' => '2FA enabled, you will have to call the complete_2fa_login function...',
    'login_need_signup' => 'An account has not been created for this number, you will have to call the complete_signup function...',
    'login_auth_key' => 'Logging in using auth key...',
    'not_logged_in' => 'I\'m not logged in!',
    'signup_uncalled' => 'I\'m not waiting to signup! Please call the phone_login and the complete_phone_login methods first!',
    'signing_up' => 'Signing up as a normal user...',
    'signup_ok' => 'Signed up in successfully!',
    '2fa_uncalled' => 'I\'m not waiting for the password! Please call the phone_login and the complete_phone_login methods first!',
    'getting_dialogs' => 'Getting dialogs...',
    'libtgvoip_required' => 'The php-libtgvoip extension is required to accept and manage calls. See daniil.it/MadelineProto for more info.',
    'peer_not_in_db' => 'This peer is not present in the internal peer database',
    'calling_user' => 'Calling %s...',
    'generating_a' => 'Generating a...',
    'generating_g_a' => 'Generating g_a...',
    'call_error_1' => 'Could not find and accept call %s',
    'accepting_call' => 'Accepting call from %s...',
    'generating_b' => 'Generating b...',
    'call_already_accepted' => 'Call %s already accepted',
    'call_already_declined' => 'Call %s already declined',
    'call_error_2' => 'Could not find and confirm call %s',
    'call_confirming' => 'Confirming call from %s...',
    'call_error_3' => 'Could not find and complete call %s',
    'call_completing' => 'Completing call from %s...',
    'invalid_g_a' => 'Invalid g_a!',
    'fingerprint_invalid' => 'Invalid key fingerprint!',
    'call_discarding' => 'Discarding call %s...',
    'call_set_rating' => 'Setting rating for call %s...',
    'call_debug_saving' => 'Saving debug data for call %s...',
    'TL_loading' => 'Loading TL schemes...',
    'file_parsing' => 'Parsing %s...',
    'crc32_mismatch' => 'CRC32 mismatch (%s, %s) for %s',
    'src_file_invalid' => 'Invalid source file was provided: ',
    'translating_obj' => 'Translating objects...',
    'translating_methods' => 'Translating methods...',
    'bool_error' => 'Could not extract boolean',
    'not_numeric' => 'Given value isn\'t numeric',
    'long_not_16' => 'Given value is not 16 bytes long',
    'long_not_32' => 'Given value is not 32 bytes long',
    'long_not_64' => 'Given value is not 64 bytes long',
    'array_invalid' => 'You didn\'t provide a valid array',
    'predicate_not_set' => 'Predicate (value under _) was not set!',
    'type_extract_error' => 'Could not extract type "%s"',
    'method_not_found' => 'Could not find method: ',
    'params_missing' => 'Missing required parameter',
    'sec_peer_not_in_db' => 'This secret peer is not present in the internal peer database',
    'stream_handle_invalid' => 'An invalid stream handle was provided.',
    'length_too_big' => 'Length is too big',
    'deserialize_not_str' => 'Deserialize: Generated value isn\'t a string',
    'type_extract_error_id' => 'Could not extract type: %s with id %s',
    'vector_invalid' => 'Invalid vector constructor: ',
    'constructor_not_found' => 'Constructor not found for type: ',
    'rand_bytes_too_small' => 'random_bytes is too small!',
    'botapi_conversion_error' => 'Can\'t convert %s to a bot API object',
    'non_text_conversion' => 'Can\'t convert non text messages yet!',
    'last_byte_invalid' => 'Invalid last byte',
    'file_type_invalid' => 'Invalid file type detected (%s)',
    'recreate_temp_auth_key' => 'I had to recreate the temporary authorization key',
    'resetting_auth_key' => 'WARNING: Resetting auth key...',
    'shutting_down_reader_pool' => 'Shutting down reader pool ',
    'shutting_down_handler_pool' => 'Shutting down handler pool for dc %s, %d jobs left',
    'secret_chat_skipping' => 'I do not have the secret chat %s in the database, skipping message...',
    'fingerprint_mismatch' => 'Key fingerprint mismatch',
    'msg_data_length_too_big' => 'message_data_length is too big',
    'length_not_divisible_16' => 'Length of decrypted data is not divisible by 16',
    'msg_key_mismatch' => 'msg_key mismatch',
    'rand_bytes_too_short' => 'random_bytes is too short!',
    'resending_unsupported' => 'Resending of messages is not yet supported',
    'unrecognized_dec_msg' => 'Unrecognized decrypted message received: ',
  ),
);

    // THIS WILL BE OVERWRITTEN BY $lang["en"]
    public static $current_lang = array (
  'req_pq' => 'Requesting p_q...',
  'done' => 'Done!',
  'cdn_reupload' => 'File is not stored on CDN, requesting reupload!',
  'stored_on_cdn' => 'File is stored on CDN!',
  'serializing_madelineproto' => 'Serializing MadelineProto...',
  'phpseclib_fork' => 'Please install this fork of phpseclib: https://github.com/danog/phpseclib',
  'inst_dc' => 'Istantiating DataCenter...',
  'load_rsa' => 'Loading RSA keys...',
  'TL_translation' => 'Translating TL schemas...',
  'dh_prime_check_0' => 'Executing dh_prime checks (0/3)...',
  'nearest_dc' => 'We\'re in %s, current DC is %d, nearest DC is %d.',
  'serialization_ofd' => 'Serialization is out of date, reconstructing object!',
  'getupdates_deserialization' => 'Getting updates after deserialization...',
  'shutdown_reader_pool' => 'Shutting down reader pool, %d jobs left',
  'threading_on' => 'THREADING IS ENABLED',
  'socket_reader' => 'Socket reader on DC %s: ',
  'socket_status_1' => 'CREATING',
  'socket_status_2' => 'SUBMITTING',
  'socket_status_3' => 'WAITING',
  'socket_status_4' => 'READY',
  'socket_status_5' => 'WORKING',
  'api_not_set' => 'You must provide an api key and an api id, get your own @ my.telegram.org',
  'session_corrupted' => 'The session is corrupted!',
  'reset_session_seqno' => 'Resetting session id and seq_no in DC %s...',
  'gen_perm_auth_key' => 'Generating permanent authorization key for DC %s...',
  'gen_temp_auth_key' => 'Generating temporary authorization key for DC %s...',
  'copy_auth_dcs' => 'Copying authorization from DC %s to DC %s...',
  'write_client_info' => 'Writing client info (also executing %s)...',
  'config_updated' => 'Updated config!',
  'length_not_4' => 'Length is not equal to 4',
  'length_not_8' => 'Length is not equal to 8',
  'value_bigger_than_2147483647' => 'Provided value %s is bigger than 2147483647',
  'value_smaller_than_2147483648' => 'Provided value %s is smaller than -2147483648',
  'value_bigger_than_9223372036854775807' => 'Provided value %s is bigger than 9223372036854775807',
  'value_smaller_than_9223372036854775808' => 'Provided value %s is smaller than -9223372036854775808',
  'value_bigger_than_4294967296' => 'Provided value %s is bigger than 4294967296',
  'value_smaller_than_0' => 'Provided value %s is smaller than 0',
  'encode_double_error' => 'Could not properly encode double',
  'file_not_exist' => 'File does not exist',
  'deserialization_error' => 'An error occurred on deserialization',
  'rsa_init' => 'Istantiating \\phpseclib\\Crypt\\RSA...',
  'loading_key' => 'Loading key...',
  'computing_fingerprint' => 'Computing fingerprint...',
  'rsa_encrypting' => 'Encrypting with rsa key...',
  'rpc_tg_error' => 'Telegram returned an RPC error: %s (%s), caused by %s:%sTL trace:',
  'v_error' => '506c656173652075706461746520746f20746865206c61746573742076657273696f6e206f66204d6164656c696e6550726f746f2e',
  'v_tgerror' => '506c6561736520757064617465207068702d6c69627467766f6970',
  'no_mode_specified' => 'No mode was specified!',
  'constructor_function_uncalled' => 'The constructor function wasn\'t called! Please call the constructor function before using this method.',
  'proxy_class_invalid' => 'Invalid proxy class provided!',
  'socket_con_error' => 'Connection: couldn\'t connect to socket.',
  'protocol_not_implemented' => 'Connection: This protocol isn\'t implemented yet.',
  'protocol_invalid' => 'Connection: invalid protocol specified.',
  'nothing_in_socket' => 'Nothing in the socket!',
  'wrong_length_read' => 'WARNING: Wrong length was read (should\'ve read %s, read %s)!',
  'no_data_in_socket' => 'No data in the socket!',
  'dc_con_start' => 'Connecting to DC %s...',
  'dc_con_stop' => 'Disconnecting from DC %s...',
  'dc_con_test_start' => 'Connecting to DC %s (%s server, %s, %s)...',
  'script_not_exist' => 'Provided script does not exist',
  'apifactory_start' => 'Running APIFactory...',
  'madelineproto_ready' => 'MadelineProto is ready!',
  'logout_error' => 'An error occurred while logging out!',
  'logout_ok' => 'Logged out successfully!',
  'already_logged_in' => 'This instance of MadelineProto is already logged in. Logging out first...',
  'login_ok' => 'Logged in successfully!',
  'login_user' => 'Logging in as a normal user...',
  'login_bot' => 'Logging in as a bot...',
  'login_code_sending' => 'Sending code...',
  'login_code_sent' => 'Code sent successfully! Once you receive the code you should use the complete_phone_login function.',
  'login_code_uncalled' => 'I\'m not waiting for the code! Please call the phone_login method first',
  'login_2fa_enabled' => '2FA enabled, you will have to call the complete_2fa_login function...',
  'login_need_signup' => 'An account has not been created for this number, you will have to call the complete_signup function...',
  'login_auth_key' => 'Logging in using auth key...',
  'not_logged_in' => 'I\'m not logged in!',
  'signup_uncalled' => 'I\'m not waiting to signup! Please call the phone_login and the complete_phone_login methods first!',
  'signing_up' => 'Signing up as a normal user...',
  'signup_ok' => 'Signed up in successfully!',
  '2fa_uncalled' => 'I\'m not waiting for the password! Please call the phone_login and the complete_phone_login methods first!',
  'getting_dialogs' => 'Getting dialogs...',
  'libtgvoip_required' => 'The php-libtgvoip extension is required to accept and manage calls. See daniil.it/MadelineProto for more info.',
  'peer_not_in_db' => 'This peer is not present in the internal peer database',
  'calling_user' => 'Calling %s...',
  'generating_a' => 'Generating a...',
  'generating_g_a' => 'Generating g_a...',
  'call_error_1' => 'Could not find and accept call %s',
  'accepting_call' => 'Accepting call from %s...',
  'generating_b' => 'Generating b...',
  'call_already_accepted' => 'Call %s already accepted',
  'call_already_declined' => 'Call %s already declined',
  'call_error_2' => 'Could not find and confirm call %s',
  'call_confirming' => 'Confirming call from %s...',
  'call_error_3' => 'Could not find and complete call %s',
  'call_completing' => 'Completing call from %s...',
  'invalid_g_a' => 'Invalid g_a!',
  'fingerprint_invalid' => 'Invalid key fingerprint!',
  'call_discarding' => 'Discarding call %s...',
  'call_set_rating' => 'Setting rating for call %s...',
  'call_debug_saving' => 'Saving debug data for call %s...',
  'TL_loading' => 'Loading TL schemes...',
  'file_parsing' => 'Parsing %s...',
  'crc32_mismatch' => 'CRC32 mismatch (%s, %s) for %s',
  'src_file_invalid' => 'Invalid source file was provided: ',
  'translating_obj' => 'Translating objects...',
  'translating_methods' => 'Translating methods...',
  'bool_error' => 'Could not extract boolean',
  'not_numeric' => 'Given value isn\'t numeric',
  'long_not_16' => 'Given value is not 16 bytes long',
  'long_not_32' => 'Given value is not 32 bytes long',
  'long_not_64' => 'Given value is not 64 bytes long',
  'array_invalid' => 'You didn\'t provide a valid array',
  'predicate_not_set' => 'Predicate (value under _) was not set!',
  'type_extract_error' => 'Could not extract type "%s"',
  'method_not_found' => 'Could not find method: ',
  'params_missing' => 'Missing required parameter',
  'sec_peer_not_in_db' => 'This secret peer is not present in the internal peer database',
  'stream_handle_invalid' => 'An invalid stream handle was provided.',
  'length_too_big' => 'Length is too big',
  'deserialize_not_str' => 'Deserialize: Generated value isn\'t a string',
  'type_extract_error_id' => 'Could not extract type: %s with id %s',
  'vector_invalid' => 'Invalid vector constructor: ',
  'constructor_not_found' => 'Constructor not found for type: ',
  'rand_bytes_too_small' => 'random_bytes is too small!',
  'botapi_conversion_error' => 'Can\'t convert %s to a bot API object',
  'non_text_conversion' => 'Can\'t convert non text messages yet!',
  'last_byte_invalid' => 'Invalid last byte',
  'file_type_invalid' => 'Invalid file type detected (%s)',
  'recreate_temp_auth_key' => 'I had to recreate the temporary authorization key',
  'resetting_auth_key' => 'WARNING: Resetting auth key...',
  'shutting_down_reader_pool' => 'Shutting down reader pool ',
  'shutting_down_handler_pool' => 'Shutting down handler pool for dc %s, %d jobs left',
  'secret_chat_skipping' => 'I do not have the secret chat %s in the database, skipping message...',
  'fingerprint_mismatch' => 'Key fingerprint mismatch',
  'msg_data_length_too_big' => 'message_data_length is too big',
  'length_not_divisible_16' => 'Length of decrypted data is not divisible by 16',
  'msg_key_mismatch' => 'msg_key mismatch',
  'rand_bytes_too_short' => 'random_bytes is too short!',
  'resending_unsupported' => 'Resending of messages is not yet supported',
  'unrecognized_dec_msg' => 'Unrecognized decrypted message received: ',
);
}