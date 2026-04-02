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
                        $this->allprojects($meta);
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

    protected function allprojects($meta)
    {
        $this->render("projects/allprojects", ["meta" => $meta["allprojects"]]);
    }

    protected function ecoride($meta)
    {
        $this->render("projects/ecoride", ["meta" => $meta["ecoride"]]);
    }

    protected function weatherapp($meta)
    {
        $this->render(
            "projects/weatherapp",
            ["meta" => $meta["weatherapp"]]
        );
    }

    protected function bookeo($meta)
    {
        $this->render(
            "projects/bookeo",
            ["meta" => $meta["bookeo"]]
        );
    }

}
