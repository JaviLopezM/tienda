<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 7/06/17
 * Time: 20:35
 */

return array(
    // set your paypal credential
    'client_id' => 'ARzxNHZNzLVTELrnBsbvYslRm42-HO0WCXjAs2imE9vfymHaOyj4pOKCESrTF7m8FTPT6r-xa_YaDgjt',
    'secret' => 'EBu-0pfj85iYlazSxnawrr_9c7qlb-1vedvX8v53kGueLDgyG5vICskEda1e5D8FTQfVOJbNnLlvCYj-',

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);