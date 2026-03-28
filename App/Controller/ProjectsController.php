<?php
namespace App\Controller;

class ProjectsController extends Router
{
    public function route($meta)
    {
        try {
            if (isset($_GET["action"])) {
                switch ($_GET["action"]) {

                    case 'allprojects':
                        $this->allprojetcs($meta);
                        break;

                    case 'ecoride':
                        $this->ecoride($meta);
                        break;

                    case 'weatherapp':
                        $this->weatherapp($meta);
                        break;

                    case 'bookeo':
                        $this->bookeo($meta);
                        break;

                    default:
                        throw new \Exception("Cette action n'existe pas : " . $_GET["action"]);
                }
            } else {
                throw new \Exception("Aucune action détectée");
            }
        } catch (\Exception $e) {
            $this->render("errors/default", ["error" => $e->getMessage()]);
        }
    }

    protected function allprojetcs($meta)
    {
        $this->render("projects/allprojetcs");
        // ,["meta" => $meta["home"]]
    }

    protected function ecoride($meta)
    {
        $this->render("projects/ecoride");
        // ,["meta" => $meta["home"]]
    }

    protected function weatherapp($meta)
    {
        $this->render(
            "projects/weatherapp",
            // ["meta" => $meta["legal"]]
        );
    }

    protected function bookeo($meta)
    {
        $this->render(
            "projects/bookeo",
            // ["meta" => $meta["contact"]]
        );
    }

}
