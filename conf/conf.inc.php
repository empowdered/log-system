<?php
/**
 * Un comentario PHPDoc siempre empieza con 2 asteriscos. Comentarios adicionales tendrán 1 asterisco
 * @author Juan Pablo <juanp.mleiva@gmail.com>
 */

date_default_timezone_set("America/Santiago");
$PROJECT_NAME = "log-system";
define("PATH_TO_LOG",$_SERVER['DOCUMENT_ROOT']);
define("PATH_BASE_PROJECT",$PROJECT_NAME);
define("DEFAULT_TIME_ZONE", date_default_timezone_get());
