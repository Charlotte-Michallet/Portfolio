<?php
namespace App\Controller;

class Router
{
    protected $meta;
    public function router()
    {
        try {
            $this->meta = require_once ROOT_PATH . "/config/meta.php";
            $meta       = $this->meta;

            // routage for redirecting pages
            if (isset($_GET["controller"])) {

                switch ($_GET["controller"]) {

                    case 'pages':
                        $pageRouter = new PageController();
                        $pageRouter->route($meta);
                        break;

                    default:
                        $this->render("errors/default", ["error" => $e->getMessage()]);
                        break;
                }
            } else {
                // home page
                $pageRouter = new PageController();
                $pageRouter->home($meta);
            }
        } catch (\Exception $e) {
            $this->render("errors/default", ["error" => $e->getMessage()]);

            // if (isset($_GET["controller"]) && $_GET["controller"] === "api") {
            //     self::jsonResponse(["status" => "error", "message" => "Erreur interne du serveur API: " . $e->getMessage()], 500);

            // } else {
            //     $this->render("errors/default", ["error" => $e->getMessage()]);
            // }
        }
    }

    protected function render(string $path, array $params = [])
    {
        $header   = ROOT_PATH . "/Templates/header.php";
        $filePath = ROOT_PATH . "/Templates/" . $path . ".php";
        $footer   = ROOT_PATH . "/Templates/footer.php";

        try {
            if (! file_exists($filePath) || ! file_exists($header) || ! file_exists($footer)) {
                // generer erreure
                throw new \Exception(message: "Fichier non trouver :" . $filePath . $header . $footer);
            } else {
                // recuperer si fichier
                extract($params);

                require_once $header;
                require_once $filePath;
                require_once $footer;
            }
        } catch (\Exception $e) {
            $this->render("errors/default", ["error" => $e->getMessage()]);
        }
    }

    // public static function jsonResponse(array $data, int $statusCode = 200)
    // {
    //     http_response_code($statusCode);
    //     header("Content-Type: application/json");
    //     echo json_encode($data);
    //     exit();
    // }
}
