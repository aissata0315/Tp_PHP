class ClientMoral
{
    private $id;
    private $nom;
    private $ninea;
    private $registre;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id=$id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom=$nom;
    }

    public function getNinea()
    {
        return $this->ninea;
    }

    public function setNinea($ninea)
    {
        $this->ninea=$ninea;
    }

    public function getRegistre()
    {
        return $this->registre;
    }

    public function setRegistre($registre)
    {
        $this->registre=$registre;
    }

}