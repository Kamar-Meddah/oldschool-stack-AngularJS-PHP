<?php
/**
 * Created by IntelliJ IDEA.
 * User: KamarMEDDAH
 * Date: 23/06/2019
 * Time: 22:33
 */

date_default_timezone_set("UTC");

echo json_encode(isset($_COOKIE['id']) && !is_null($_COOKIE['id']));
die();
