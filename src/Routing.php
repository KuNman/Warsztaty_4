<?php

class Routing {

    public static function start(): void
    {

        $cuttedUri = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "index.php/") + 9);

//        echo $cuttedUri . '<br>';

        $parsedRequest = explode('/', $cuttedUri);

//        var_dump($parsedRequest);

        $className = ucfirst($parsedRequest['1']);

//        echo $className;

        self::loadClass($className);
        $object = self::createObject($className);

        if (!empty($_GET)) {

            $function = substr(
                    $parsedRequest['2'], 0, strrpos($parsedRequest['2'], '?')
            );

            $values = array_values($_GET);
            $object->$function(...$values);
        } else {
            $function = $parsedRequest['2'];
            $object->$function();
        }
    }

    private static function loadClass(string $className): void
    {

        include $className .
                DIRECTORY_SEPARATOR . $className . '.php';
    }

    private static function createObject(string $className) {
        return new $className;
    }

}
