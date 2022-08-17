<?php

include_once 'conf/conf.inc.php';

/**
 * Clase base para proyecto log-system
 * @since 1.0
 * @author Juan Pablo <juanp.mleiva@gmail.com>
 */
class LogSystem {

    //put your code here
    public string $nameLog;
    public string $path2Log;
    public string $idTrx;
    public string $dateLocal;

    function __construct() {
        ;;
        $this->setConfig();
    }

    function setConfig() {

        try {
            $this->setDate(date("d/m/Y_H:m:s:m"));
            $this->setPath2Log(PATH_TO_LOG . "/" . PATH_BASE_PROJECT . "/");
            $this->setId_trx($this->generateRandomString());
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    /**
     * Tipo de parametro y return para writeLog
     * @param string $message
     * @param string $nameClass
     */
    function writeLog($message, $nameClass) {
        (!isset($nameClass)) ? die("Falta nombre de clase para log.") : "";
        (!isset($message)) ? die("Falta mensaje para log.") : "";
        try {
            $nbLog = $nameClass . date("d_m_Y") . ".log";
            $this->setNbLog($nbLog);
            $pathTo = $this->getPath2Log() . "logs/" . $this->getNbLog();

            if (!file_exists($this->getPath2Log() . "logs/" . $nbLog)) {
                //echo $nbLog . "<br>";
                //die("Error: no existe la ruta para el log: " . $this->getPath2Log() . "/" . $nbLog);
                file_put_contents($pathTo, $this->getId_trx() . "_" . $this->getDate() . " : " . $message . PHP_EOL);
            } else {
                $flag = file_put_contents($pathTo, $this->getId_trx() . "_" . $this->getDate() . " : " . $message . PHP_EOL, FILE_APPEND);
                (!$flag) ? die("ERROR: Al ejecutar la escritura.") : "";
            }
        } catch (Exception $ex) {
            die("ERROR: " . $ex->getMessage());
        }
    }

    /**
     * Tipo de parametro y return para generateRandomString
     * @param int
     * @return string
     */
    function generateRandomString($length = 10) {
        $x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($x, ceil($length / strlen($x)))), 1, $length);
    }

    /**
     * Tipo de return para getNameLog
     * @return string
     */
    public function getNameLog(): string {
        return $this->$nameLog;
    }

    /**
     * Tipo de return para getDate
     * @return string
     */
    public function getDate(): string {
        return $this->date;
    }

    /**
     * Tipo de return para getPath2Log
     * @return string
     */
    public function getPath2Log(): string {
        return $this->path2Log;
    }
    
    /**
     * Tipo de parametro para setNameLog
     * @param string
     */
    public function setNameLog(string $nameLog): void {
        $this->$nameLog = $nameLog;
    }

     /**
     * Tipo de parametro para setDate
     * @param string
     */
    public function setDate(string $date): void {
        $this->date = $date;
    }

    /**
     * Tipo de parametro para setPath2Log
     * @param string
     */
    public function setPath2Log(string $path2Log): void {
        $this->path2Log = $path2Log;
    }

    /**
     * Tipo de return para setPath2Log
    * @return string
    */
    public function getIdTrx(): string {
        return $this->$idTrx;
    }

   /**
    * Tipo de parametro para setIdTrx
    * @param string
    */
    public function setIdTrx(string $idTrx): void {
        $this->id_trx = $idTrx;
    }
}
