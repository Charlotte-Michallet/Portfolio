<?php
namespace App\Controller;

class PageController extends Router
{
    public function route($meta)
    {
        try {
            if (isset($_GET["action"])) {
                switch ($_GET["action"]) {
                    case 'home':
                        $this->home($meta);
                        break;

                    case 'contact':
                        $this->contact($meta);
                        break;

                    case 'legal':
                        $this->legal($meta);
                        break;

                    case 'aboutme':
                        $this->aboutme($meta);
                        break;

                    default:
                        throw new \Exception("Cette action n'existe pas : " . $_GET["action"]);
                }
            } else {
                throw new \Exception("Aucune action détectée");
            }
        } catch (\Exception $e) {
            $this->error($meta);
        }
    }

    protected function home($meta)
    {
        $this->render("pages/home", ["meta" => $meta["home"]]);
    }

    protected function legal($meta)
    {
        $this->render(
            "pages/legals",
            ["meta" => $meta["legal"]]
        );
    }

    protected function contact($meta)
    {
        $this->render(
            "pages/contact",
            ["meta" => $meta["contact"]]
        );
    }

    protected function aboutme($meta)
    {
        $this->render(
            "pages/about_me",
            ["meta" => $meta["about_me"]]
        );
    }
}
