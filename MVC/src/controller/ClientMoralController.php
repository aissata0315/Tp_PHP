include '../service/ClientMoralService.php';
//include '../../model/ClientMoral.php';
class ClientMoralController
{
    public __construct();

    public function add()
    {
        $service=new ClientMoralService();
        if(isset($_POST) && !empty($_POST))
        (
            $clientMoral=new ClientMoral();
//apres avoir renseigner les attributs de lobjet

            $val=$service->add($clientMoral);

            if($val){
                echo "ajouter";
            }

        )
    }
}